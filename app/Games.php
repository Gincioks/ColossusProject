<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = ['user_id','game', 'game_play', 'balance', 'privileges'];

    protected $table = 'games';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
