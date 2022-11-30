<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsEvent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\NewsEventRequest;
use Illuminate\Support\Facades\Validator;

class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n_e=NewsEvent::get();
        return view('admin.pages.event_news.index',compact('n_e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.event_news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_event=new NewsEvent;
        $data = $request->all();
        $validator = Validator::make($data, [
            'title'   => 'required',
            'type'    => 'required',
            'desc' => 'required',
            'date' => 'required',
            'img'   => 'required|max:256|mimes:png,jpg,svg,webp',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/event-news/'.$fileName;
            $request->img->move('image/event-news/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        
        $data['slug'] = [];
        foreach (json_decode($request->title) as $key => $title) {
            $data['slug'][$key] = Str::slug($title);
        }

        NewsEvent::create($data);

        toastr()->success('added news or event information.');
        return redirect()->route('news-event.index');

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
        $news_event=NewsEvent::findOrFail($id);
        return view('admin.pages.event_news.edit',compact('news_event'));
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
        $news_event=NewsEvent::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($data, [
            'title'   => 'required',
            'type'    => 'required',
            'desc'    => 'required',
            'date'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            if(File::exists($news_event->img))
            {
                File::delete($news_event->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/event-news/'.$fileName;
            $request->img->move('image/event-news/',$fileName);
            $news_event->img=$fileNameWithUpload;

        }

        $data['slug'] = $news_event->slug;
        foreach (json_decode($request->title) as $key => $title) 
        {
            $data['slug'][$key] = Str::slug($title);
        }

        $news_event->title=$request->title;
        $news_event->short_desc=$request->short_desc;
        $news_event->desc=$request->desc;
        $news_event->slug=$data['slug'];
        $news_event->date=$request->date;
        $news_event->type=$request->type;
        $news_event->save();



        toastr()->success('updated news or event information.');
        return redirect()->route('news-event.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'salal';
        try {
            $news_event=NewsEvent::findOrFail($id);
            if(File::exists($news_event->img))
            {
                File::delete($news_event->img);
            }
        $news_event->delete();
        return response()->json([
            'message' => 'Your News or Event have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
    
}
