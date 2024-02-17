<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';
    protected $primaryKey = 'id_job';

    public $timestamps = false;

    protected $fillable = ['id_job','nama_job','deskripsi'];
}
