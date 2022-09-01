<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = ['user_id', 'image_id', 'category_id', 'description', 'access'];
    protected $primaryKey = "id";

    public function category()  
{  
     
    return $this->belongsTo(Post_category::class, 'category_id', 'id'); 

} 

public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id'); 

}
public function image()
{
    return $this->belongsTo(Post_image::class, 'image_id', 'id'); 

}
}
