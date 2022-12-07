<?php

namespace App\Http\Controllers\Admin;

use App\Models\StudentMonth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class StudentMonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=StudentMonth::get();
        return view('admin.pages.student-month.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.student-month.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new StudentMonth;
        $data = $request->all();
        $validator = Validator::make($data, [
            'img'   => 'required|mimes:png,jpg,svg,webp',
        ],
        [
            'img.required'=>'Please enter the img',
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/student-month/'.$fileName;
            $request->img->move('image/student-month/',$fileName);
            $data['img']=$fileNameWithUpload;
        }

        StudentMonth::create($data);

        toastr()->success('added Student of the month information.');
        return redirect()->route('student-month.index');
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
        $student=StudentMonth::findOrFail($id);
        return view('admin.pages.student-month.edit',compact('student'));

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
        $student=StudentMonth::findOrFail($id);
        $data = $request->all();
      
        if($request->has('img'))
        {
            if(File::exists($student->img))
            {
                File::delete($student->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/student-month/'.$fileName;
            $request->img->move('image/student-month/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $student->update($data);
        toastr()->success('updated Student of the month  information.');
        return redirect()->route('student-month.index');    
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
            $student=StudentMonth::findOrFail($id);
            if(File::exists($student->img))
            {
                File::delete($student->img);
            }
           
        $student->delete();
        return response()->json([
            'message' => 'Your Student of the month have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
