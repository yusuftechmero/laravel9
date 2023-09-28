<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $casts = [
        'category_name' => 'array',
        'sort_desc' => 'array',
        'questions' => 'array',
        'prompt'    => 'array'
    ];

    protected $fillable = ['parent_id','category_type','category_name','sort_desc','icon','questions','prompt','status','prompt_role'];
}
