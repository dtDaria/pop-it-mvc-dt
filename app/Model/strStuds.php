<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class strStuds extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Группа',
        'Студент',
        'Дисциплина'
    ];
    protected $table = 'strStuds';
}
