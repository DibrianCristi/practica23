<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suruburi extends Model
{
    use HasFactory;
    protected $fillable = ['denumire', 'descriere', 'made_in', 'cantitate', 'pret'];
    public $timestamps = false;
}
