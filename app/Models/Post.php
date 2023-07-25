<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Mode\NotFoundExepection;
use Illuminate\Support\Facedes\File;

class Post {

    public $title;

    public $excerpt;

    public $body;

    public $date;

    public $slug;


    public function __construct($title ,$excerpt , $date ,$body ,$slug ){
        $this ->title =$title;
        $this ->excerpt =$excerpt;
        $this ->date =$date;
        $this ->body =$body;
        $this ->slug =$slug;
        

    }

    public static function all(){
        /*return collect(File::files(resource_path("posts")))
            return (function($files){
    
               return parseFile($files);
        })
            ->map(function($document){
        
            return new Post(
                $document ->title,
                $document ->excerpt,
                $document ->date,
                $document ->body(),
                $document ->slug
            );
    
    
        })*/
        return sortByDesc('date');
    }
    public static function find ($slug){
    return static::all()->fristWhere('slug' ,$slug);
   

}

public static function findorfail ($slug){
    $post=static::find($slug);
    if (! $post){
        /*throw new ModelNotFoundExpection() ;*/
    }

    return $post ;

}
}