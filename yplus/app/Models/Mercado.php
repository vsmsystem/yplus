<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    use HasFactory;

    protected $table = 'mercado';
    protected $fillable = ['nome', 'quantidade','marca','id_user', 'id_group','deleted_at'];
}
