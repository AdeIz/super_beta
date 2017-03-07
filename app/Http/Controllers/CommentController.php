<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Photo;
use App\Models\News;
use App\Models\Video;
use Route;

class CommentController extends Controller
{


    public function storePhoto()
    {
        $comment = new Comment(['body'=>"this is first comment"]);

        $photo = Photo::find(2);

        $photo->comment()->save($comment);
        
        $photo = Photo::find(2);

        dd($photo);
        return view('home');
    }

    public function getPhoto()
    {

        $comment = Comment::find(3);

        dd($comment->commentable instanceof Video);

        $photo = Photo::with('comment')->find(2);

     
        dd($photo);
        return view('home');
    }

    public function storeVideo()
    {
        $comment = new Comment(['body'=>"this is first comment"]);

        $video = Video::find(1);

        $video->comment()->save($comment);
        
        $video = Video::find(1);

        dd($video);
        return view('home');
    }


    public function getVideo()
    {
        $video = Video::with('comment')->find(1);

     
        dd($video);
        return view('home');
    }

     public function storeNews()
    {
        $comment = new Comment(['body'=>"this is first comment"]);

        $news = News::find(1);

        $news->comment()->save($comment);
        
        $news = News::find(1);

        dd($news);
        return view('home');
    }


    public function getNews()
    {
        $news = News::with('comment')->find(1);

     
        dd($news);
        return view('home');
    }
}
