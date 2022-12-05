<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liders=Lider::get();
        return view('admin.pages.lidership.index',compact('liders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.lidership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liders=new Lider;
        $request->all();
        $data = $request->all();
        $validator = Validator::make($data, [
            'name'   => 'required',
            'desc'   => 'required',
            'short_desc' => 'required',
            'img'   => 'required|max:256|mimes:png,jpg,svg,webp',
        ],
        [
            'name.required'=>'enter the title',
            'desc.required'=>'desc the link',
            'short_desc.required'=>'enter the short description',
            'img.required'=>'enter the img',
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/lider/'.$fileName;
            $request->img->move('image/lider/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        

        Lider::create($data);

        toastr()->success('added leadership information.');
        return redirect()->route('leadership.index');    }

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
    {
        $lider=Lider::findOrFail($id);
        return view('admin.pages.lidership.edit',compact('lider'));
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
        $lider=Lider::findOrFail($id);
        $data = $request->all();

        if($request->has('img'))
        {
            if(File::exists($lider->img))
            {
                File::delete($lider->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/lider/'.$fileName;
            $request->img->move('image/lider/',$fileName);
            $lider->img=$fileNameWithUpload;

        }

        $lider->position=$request->position;
        $lider->desc=$request->desc;
        $lider->short_desc=$request->short_desc;
        $lider->name=$request->name;
        $lider->book_name=$request->book_name;
        $lider->save();

        toastr()->success('updated lider information.');
        return redirect()->route('leadership.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $lider=Lider::findOrFail($id);
            if(File::exists($lider->img))
            {
                File::delete($lider->img);
            }
        $lider->delete();
        return response()->json([
            'message' => 'Your lider have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
    
}
