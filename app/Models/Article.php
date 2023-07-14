<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['author', 'title', 'description', 'img']; 
    use HasFactory;

    public function getFormatData(){
        return $this->created_at->format('d/m/y -h:m'); 
    }

    public function getdescriptionSubstring(){
       if(strlen($this->description)>5){
         return substr($this->description, 0, 5). "..."; 
       }
    }
}
