<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'absen';
    protected $primaryKey = 'id_absen';

    public $timestamps = false;

    protected $fillable = ['id_absen','id_pegawai','id_job','waktu'];
}
