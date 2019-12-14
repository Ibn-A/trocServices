<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageOffre;
use App\Repositories\OffreRepository;
use App\Repositories\MessageRepository;


class UserController extends Controller
{
    protected $offreRepository;
    protected $messageRepository;

    public function __construct(OffreRepository $offreRepository, MessageRepository $messageRepository)
    {
        $this->offreRepository = $offreRepository;
        $this->messageRepository = $messageRepository;
    }

    public function message(MessageOffre $request)
    {
        $offreService = $this->offreRepository->getById($request->id);
        if(auth()->check()) {
            $offreService->notify(new OffreServiceMessage($offreService, $request->message, auth()->user()->email));
            return response()->json(['info' => 'Votre message va être rapidement transmis.']);
        }
        $this->messageRepository->create([
            'texte' => $request->message,
            'email' => $request->email,
            'offreService_id' => $offreService->id,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offreServices = $this->offreRepository->getByUser($request->user());
        $offreServiceAttenteCount = $this->offreRepository->activeCount($offreServices);
        $offreServiceActivesCount = $this->offreRepository->activeCount($offreServices);
        $offreServicePerimesCount = $this->offreRepository->obsoleteCount($offreServices);

        return view('user.index', compact('offreServiceActivesCount','offreServicePerimesCount','offreServiceAttenteCount'));
    }
    // 
    public function actives(Request $request)
    {
    $offreServices = $this->offreRepository->active($request->user(), 5);
    return view('user.actives', compact('offreServices'));
    }
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
