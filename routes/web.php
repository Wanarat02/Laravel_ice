<?php
//use Session;

// Route::get('/version',function(){
//     return response()->json();
// });

// Route::get('/news/{name}',function($name){
//    return view('news.view',['name' => $name]);
// });
Route::resource('home/category','CategoryController');

Route::get('/version',function(){
    return response()->json([
        'name' => 'TOT Academy',
        'version' => '1.0.1'
    ]);
});
Route::get('/news/{name}','NewsController@show');
Route::get('/news','NewsController@index');
Route::get('/news/technology','NewsController@technology');


// Route::get('/news',function(){
//    $cat ='<i>ข่าวประชาสัมพันธ์</i>';
//    $lists=[];
//     //    'Education',
//     //    'Engineering',
//     //    'Computer',
//     //    'Science'
   
//    return view('test',[
//        'cat' => $cat,
//        'lists' => $lists
//    ]);
// });
Route::get('lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
}); 

Route::get('show/{id}/{name}',function($id,$name){
   return 'SHOW ID:'.$id.'Name:'.$name;
});
Route::get('/home',function(){
    return 'This is Homepage';
});

Route::get('/', function () {
   return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
