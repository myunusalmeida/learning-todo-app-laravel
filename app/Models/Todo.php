<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'status', 'user_id'
    ];

    protected $hidden = [];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
