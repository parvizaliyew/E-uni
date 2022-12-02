<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::get();
        return view('admin.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.slider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliders=new Slider;
        $data = $request->all();
        $validator = Validator::make($data, [
            'title'   => 'required',
            'link'   => 'required',
            'desc' => 'required',
            'img'   => 'required|max:256|mimes:png,jpg,svg,webp',
        ],
        [
            'title.required'=>'enter the title',
            'link.required'=>'enter the link',
            'desc.required'=>'enter the description',
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
            $fileNameWithUpload='image/slider/'.$fileName;
            $request->img->move('image/slider/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        

        Slider::create($data);

        toastr()->success('added slider information.');
        return redirect()->route('slider.index');
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
    {
        $slider=Slider::findOrFail($id);

        return view('admin.pages.slider.edit',compact('slider'));

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
        $slider=Slider::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($data, [
            'title'   => 'required',
            'desc'    => 'required',
            'link'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            if(File::exists($slider->img))
            {
                File::delete($slider->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/slider/'.$fileName;
            $request->img->move('image/slider/',$fileName);
            $slider->img=$fileNameWithUpload;

        }

        $slider->title=$request->title;
        $slider->desc=$request->desc;
        $slider->link=$request->link;
        $slider->save();

        toastr()->success('updated slider information.');
        return redirect()->route('slider.index');    
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
            $slider=Slider::findOrFail($id);
            if(File::exists($slider->img))
            {
                File::delete($slider->img);
            }
        $slider->delete();
        return response()->json([
            'message' => 'Your Slider have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
