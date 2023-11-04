<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$title,$image, $imageName,$directory,$imageUrl;
    public static function newBlog($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/blog-images/';
        self::$image-> move(self::$directory, self::$imageName);
        self::$imageUrl= self::$directory.self::$imageName;

        self::$blog = new Blog();
        self::$blog->category_id         =$request->category_id;
        self::$blog->name         =$request->name;
        self::$blog->description  =$request->description;
        self::$blog->image        =self::$imageUrl;
        self::$blog->status       =$request->status;
        self::$blog->save();
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);

            }
            self::$image     = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'uploads/blog-images/';
            self::$image-> move(self::$directory, self::$imageName);
            self::$blog->image  = self::$directory.self::$imageName;

        }
        self::$blog->name         =$request->name;
        self::$blog->category_id         =$request->category_id;
        self::$blog->description  =$request->description;

        self::$blog->status       =$request->status;
        self::$blog->save();

    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
