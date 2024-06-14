<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'patronymic'
    ];

    protected $table = 'client';

    public function requests()
    {
        return $this->hasMany(Order::class);
    }
}
