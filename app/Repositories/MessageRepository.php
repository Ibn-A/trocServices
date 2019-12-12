<?php

namespace App\Repositories;
use App\Message;
class MessageRepository
{
    public function create($data)
    {
        return Message::create($data);
    }
}