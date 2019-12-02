 <template>
<div class="container">
    <div class="card bg-light">
        <h5 class="card-header">Votre recherche</h5>
        <div class="card-body">
            <form id="formAd" method="POST" :action="url">
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select class="custom-select" name="service" id="service" @change="onServiceChange()" v-model="categorySelected">
                        <option value="0">Toutes</option>
                        <option v-for="service in services" :key="service.id" :value="service.id">
                            {{ service.nomService }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="region">Région</label>
                    <select class="custom-select" name="localisation" id="localisation" @change="onLocalisationChange()" v-model="regionSelected">
                        <option data-code="0" value="0">Toute la France</option>
                        <option v-for="localisation in localisations" :key="localisation.id" :value="localisation.id" :data-code="localisation.code">
                            {{ localisation.nom }}
                        </option>
                    </select>
                </div>
                <div v-if="regionSelected != 0" class="form-group">
                    <label for="departement">Département</label>
                    <select class="custom-select" name="departement" id="departement" @change="onDepartementChange()" v-model="departementSelected">
                        <option value="0">Tous</option>
                        <option v-for="departement in departements" :key="departement.code" :value="departement.code">
                            {{ departement.nom }}
                        </option>
                    </select>
                </div>
                <div v-if="departementSelected != 0" class="form-group" >
                    <label for="commune">Commune</label>
                    <select class="custom-select" name="commune" id="commune" @change="onCommuneChange()" v-model="communeSelected">
                        <option value="0">Toutes</option>
                        <option v-for="commune in communes" :key="commune.code" :value="commune.code">
                            {{ commune.nom }}
                        </option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <br>
    <span v-html="ads"></span>
</div>
</template>
<script>

    export default {
        props: [
            'url',
            'services',
            'localisations'
        ],
        data () {
            return {
                serviceSelected: 0,
                localisationSelected: 0,
                localisationIndex: 0,
                departements: [],
                departementSelected: 0,
                communes: [],
                communeSelected: 0,
                ads: ''
            }
        },
        methods: {
            onCategoryChange() {
                this.submit();
            },
            onRegionChange() {
                const index = event.target.selectedIndex;
                if (index) {
                    this.regionSlug = this.regions[index - 1]['slug'];
                    let code = event.target.options[index].attributes['data-code'].value;
                    this.fillDepartements(code);
                } else {
                    this.regionSelected = 0;
                }
                this.submit();
            },
            fillDepartements(code) {
                if(code) {
                    let that = this;
                    $.get('https://geo.api.gouv.fr/regions/' + code + '/departements', data => {
                        that.departements = data;
                    });
                }
                this.departementSelected = 0;
            },
            onDepartementChange() {
                const index = event.target.selectedIndex;
                if (index) {
                    this.fillCommunes(event.target.value);
                } else {
                    this.departementSelected = 0;
                }
                this.submit();
            },
            onCommuneChange() {
                this.communeId = event.target.selectedIndex;
                this.submit();
            },
            fillCommunes(code) {
                if(code) {
                    let that = this;
                    $.get('https://geo.api.gouv.fr/departements/' + code + '/communes', data  => {
                        that.communes = data;
                    });
                }
                this.communeSelected = 0;
            },
            submit(e, comp = '') {
                $.ajax({
                    method: 'post',
                    url: this.url + comp,
                    data: {
                        'category': this.categorySelected,
                        'region': this.regionSelected,
                        'departement': this.departementSelected,
                        'commune': this.communeSelected,
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                .done(data => {
                    this.ads = data;
                    let ref = '/annonces';
                    if(this.regionSelected) {
                        ref += '/' + this.regionSlug
                    }
                    if(this.departementSelected) {
                        ref += '/' + this.departementSelected
                    }
                    if(this.communeSelected) {
                        ref += '/' + this.communeSelected
                    }
                    if(comp) {
                        ref += comp;
                    }
                    history.pushState({}, 'Annonces', ref);
                })
            }
        },
        mounted(e) {
            this.regionSelected = $('#start').attr('data-id');
            if(this.regionSelected != 0) {
                this.regionSlug = $('#start').attr('data-slug');
                this.fillDepartements($('#start').attr('data-code'));
                const dep = $('#start').attr('data-departement');
                if(dep) {
                    this.departementSelected = dep;
                    this.fillCommunes(dep);
                }
                const com = $('#start').attr('data-commune');
                if(com) {
                    this.communeSelected = com;
                }
            }
            if($('#start').attr('data-page')) {
                this.submit(e, '?page=' + $('#start').attr('data-page'));
            } else {
                this.submit();
            }
        }
    }

    $('body').on('click', 'a.page-link', e => {
        e.preventDefault();
        app.__vue__.$refs.adComp.submit(e, '?' + ($(e.currentTarget).attr('href')).split('?')[1]);
    });


</script>