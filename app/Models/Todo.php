<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // 테이블 이름 지정
    protected $table = 'todo';
    // primary 키 지정
    protected $primaryKey = 'no';
    
    use HasFactory;
}
