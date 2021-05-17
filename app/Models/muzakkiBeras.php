<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class muzakkiBeras extends Model
{
    use SoftDeletes;
    
    //OFF autoincrement
    public $incrementing = true;
    //Timestamps
    public $timestamps = true;
    //SoftDelete
    protected $dates = ['deleted_at'];
    // fillable
    protected $fillable = [
        'nama', 'alamat', 'rt', 'jumlahBeras', 'keterangan'
    ];
}
