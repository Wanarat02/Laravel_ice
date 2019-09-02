<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\Photo;

class CategoryController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');  //เป็นสิทธิ์ของผู้ login เท่านั้น ผู้ที่ไม่ได้ login จะไม่เห็นข้อมูล
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = [];
        $data = Category::paginate(2);  //select*from category
        return view('category.home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required',

        ]);

        $input = $request->all();
        $input['photo_id'] = '0';
        if($file = $request->file('photo')){
            $name = time().$file->getClientOriginalName();
            $file->move('uploads', $name); 
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
          
        // return $request->all();
        // return $detail = $request->detail;
        
        // $input['name'] = $request->nameth;
        Category::create($input);
        return redirect('home/category')->with('status','บันทึกข้อมูลสำเร็จเรียบร้อยเเล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   if(Auth::user()->status==1){
            $cat=Category::find($id);
            return view('category.edit',['cat'=>$cat]);
        }else{
            return redirect('/home/category');
        }

    }
        
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required'

        ]);
        $input = request()->all();
        $cat=Category::find($id);
        $cat->update($input);
        return redirect('home/category')->with('status','แก้ไขข้อมูลสำเร็จ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Category::find($id);
        $cat->delete();
        return redirect('/home/category')->with('status','ลบข้อมูลสำเร็จ');
    }
}
