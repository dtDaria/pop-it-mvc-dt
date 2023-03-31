<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Курс',
        'Номер_группы',

    ];
    protected $table = 'groups';
}