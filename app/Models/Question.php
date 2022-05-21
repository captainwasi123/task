<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Question extends Model
{
    use HasFactory;
    protected $table = 'tbl_question_info';

    public function options(){
        return $this->hasMany(Option::class, 'question_id', 'id');
    }
}
