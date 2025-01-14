<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{

    use HasFactory , SoftDeletes ;

    protected $dates = ['deleted_at'];

    protected $fillable=[

        'image',
        'category_en',
        'category_ar',
        'title_en',
        'title_ar',
        'content_en',
        'content_ar',
        'image_size'
        ];


        public function images()
        {
            return $this->morphMany(Image::class, 'imageable');
        }

}
