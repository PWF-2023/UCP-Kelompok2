<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'category_id';
    // protected $guarded = ['user_id'];

    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
    ];

    public function todo()
    {
        return $this->hasMany(Todo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
