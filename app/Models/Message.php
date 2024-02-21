<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['ucode', 'name', 'email', 'phone', 'message', 'is_replied'];

    public function getRouteKeyName(): string
    {
        return 'ucode';
    }
}
