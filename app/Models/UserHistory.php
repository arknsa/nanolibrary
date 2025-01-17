<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected $fillable = ['user_id', 'nama', 'nim', 'program_studi', 'entry_time', 'exit_time'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}