<?php

    namespace App\Http\Controllers;

    use App\Post;

    class PagesController extends Controller{

        public function getIndex(){

            $posts = Post::orderBy('created_at','desc')->limit(4)->get();
            return view('pages.welcome')->withPosts($posts);
        }

        public function getAbout(){
            $first = 'Pieja';
            $last = 'Hafiezal';

            $fullname = $first." ".$last;
            $email = 'Lostzadr97@gmail.com';

            return view('pages.about')->withFullname($fullname)->withEmail($email);
        }
    }