<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'state_code', 'img_location'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
