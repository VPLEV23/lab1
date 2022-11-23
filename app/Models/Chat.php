<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model

{

    public function chatParticipant()

    {

        return $this->hasMany(ChatParticipant::class);

    }

}