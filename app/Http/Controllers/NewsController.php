<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index(){
    $cat ='<i>ข่าวประชาสัมพันธ์</i>';
       $lists=['Education','Engineering'];  
       return view('test',[
           'cat' => $cat,
           'lists' => $lists
       ]);
       }
    public function show(Request $request , $name){
        $keyword = $request->q;
        if($keyword){
            $url="https://newsapi.org/v2/top-headlines?country=th&category=".$name."&apiKey=176154a5b5c64e50bf6692b24175b364";

        }else{
        //return view('news.view',['name' => $name]);
        $url="https://newsapi.org/v2/top-headlines?country=th&category=".$name."&apiKey=176154a5b5c64e50bf6692b24175b364";
        }
        $json = json_decode(file_get_contents($url), true);

        //return $json;
        return view('news.technology',['news'=>$json['articles'],'name'=>$name]);
    }
    public function technology(){
        $url="https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=176154a5b5c64e50bf6692b24175b364";
        $json = json_decode(file_get_contents($url), true);
        //return $json;
        return view('news.technology',['news'=>$json['articles']]);
    }

    
}
   

