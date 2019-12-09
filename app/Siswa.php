<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswa';

    protected $fillable = ['nama', 'username', 'password', 'tgl_lahir', 'alamat', 'kecamatan', 'telpon', 'email', 'foto'];
}

