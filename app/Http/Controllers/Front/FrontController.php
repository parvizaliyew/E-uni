<?php

namespace App\Http\Controllers\Front;

use App\Models\Slider;
use App\Models\Country;
use App\Models\Donation;
use App\Models\NewsEvent;
use App\Models\InstaGalery;
use App\Models\ProgramDegre;
use Illuminate\Http\Request;
use App\Models\DonationMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $sliders=Slider::get();
        $b_programs=ProgramDegre::where('type',1)->get();
        $counter=Country::first(); 
        $galeries=InstaGalery::orderBy('created_at','DESC')->get();
        $event=NewsEvent::where('type',0)->Where('important','1')->first();
        $news=NewsEvent::where('type','1')->orderBy('date','DESC')->take(2)->get();
        $events=NewsEvent::where('type','0')->where('important',0)->orderBy('date','DESC')->take(2)->get();
        return view('front.pages.index',compact('sliders','b_programs','counter','galeries','event','news','events'));
    }

    public function news_event()
    {
        $news=NewsEvent::where('type','1')->orderBy('date','DESC')->get();
        $events=NewsEvent::where('type','0')->orderBy('date','DESC')->get();
        return view('front.pages.news-event',compact('news','events'));
    }

    public function news_single($slug)
    {
        $newsevent=NewsEvent::whereJsonContains('slug->az',$slug)->orWhereJsonContains('slug->en',$slug)->orWhereJsonContains('slug->de',$slug)->first();
        return view('front.pages.news-event-single',compact('newsevent'));
    }

    public function lid_heyet()
    {
        return view('front.pages.leadership');
    }

    public function donation()
    {
        $donations=Donation::get();
        return view('front.pages.donation',compact('donations'));
    }

    public function donation_post(Request $request)
    {
        $data=$request->all();
        $validator=Validator::make($data,[
            'name'=>'required',
            'company_name'=>'required',
            'email'=>'required',
            'msj'=>'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

       DonationMessage::create($data);


        $email = "eliyevperviz466@gmail.com";
        $title= 'E-Uni saytindan mesaj var';

        $data = [
            'email'         =>        $request->email,
            'company_name'  =>        $request->company_name,
            'name'          =>        $request->name,
            'msj'           =>        $request->msj,
        ];
        Mail::send('mail.sendmail', $data, function($m) use ($title,$email) {
            $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        
            toastr()->success('Mesajınız uğurla göndərildi');
            return redirect()->back();
    }

    
}
