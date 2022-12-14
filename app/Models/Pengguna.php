<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "pengguna";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama','nim','role','status'] ;
    
    use HasFactory;
}
