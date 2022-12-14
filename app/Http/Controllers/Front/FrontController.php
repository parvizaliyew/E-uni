<?php

namespace App\Http\Controllers\Front;

use App\Models\Lider;
use App\Models\Alumni;
use App\Models\Slider;
use App\Models\Country;
use App\Models\Library;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Policie;
use App\Models\Donation;
use App\Models\NewsEvent;
use App\Models\DegreeFile;
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

    public function about()
    {
        $bachs=DegreeFile::where('type',1)->orderBy('id','DESC')->take(3)->get();
        $masts=DegreeFile::where('type',2)->orderBy('id','DESC')->take(3)->get();
        $phd=DegreeFile::where('type',3)->orderBy('id','DESC')->take(3)->get();
        return view('front.pages.about',compact('bachs','masts','phd'));
    }

    public function policies()
    {
        $general=Policie::where('type',1)->orderBy('id','DESC')->get();
        $financial=Policie::where('type',2)->orderBy('id','DESC')->get();
        $academic=Policie::where('type',3)->orderBy('id','DESC')->get();

        return view('front.pages.policies',compact('general','financial','academic'));
    }

    public function undergraduate()
    {
        return view('front.pages.undergraduate');
    }

    public function graduate()
    {
        return view('front.pages.graduate');
    }

    public function postgraduate()
    {
        return view('front.pages.postgraduate');
    }

    public function international()
    {
        return view('front.pages.international');
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
        $liders=Lider::where('type',1)->get();
        $teachers=Lider::where('type',3)->get();
        $staff=Lider::where('type',2)->get();
        return view('front.pages.leadership',compact('liders','teachers','staff'));
    }

    public function alumni()
    {
        $alumnis=Alumni::orderBy('id','DESC')->get();
        return view('front.pages.alumni',compact('alumnis'));
    }

    public function akra()
    {
        $lider=Lider::where('type',1)->first();
        $staff=Lider::where('type',2)->orderBy('id','DESC')->get();
        return view('front.pages.accreditation',compact('lider','staff'));
    }

    public function history()
    {
        $partners=Partner::orderBy('id','DESC')->get();
        return view('front.pages.history',compact('partners'));
    }

    public function library()
    {
        $libraries=Library::orderBy('id','DESC')->get();
        return view('front.pages.library',compact('libraries'));
    }

    public function bachelor()
    {
        $bachelors=ProgramDegre::where('type','1')->get();
        return view('front.pages.bachelor',compact('bachelors'));
    }
    public function phd()
    {
        $phd1=ProgramDegre::where('type','3')->get();
        $phd2=ProgramDegre::where('type','4')->get();
        return view('front.pages.phd',compact('phd1','phd2'));
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function contact_post(Request $request)
    {
        
        $data=$request->all();
        $validator=Validator::make($data,[
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'msj'=>'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

       Message::create($data);


        $email = "eliyevperviz466@gmail.com";
        $title= 'E-Uni saytindan mesaj var';

        $data = [
            'email'         =>        $request->email,
            'subject'       =>        $request->subject,
            'name'          =>        $request->name,
            'msj'           =>        $request->msj,
        ];
        Mail::send('mail.contactmail', $data, function($m) use ($title,$email) {
            $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        
            toastr()->success('Mesaj??n??z u??urla g??nd??rildi');
            return redirect()->back();
    }
    public function akademic_single($slug)
    {
        $akademic=ProgramDegre::whereJsonContains('slug->az',$slug)->orWhereJsonContains('slug->en',$slug)->orWhereJsonContains('slug->de',$slug)->first();
        return view('front.pages.degree_single',compact('akademic'));
    }


    public function master()
    {
        $masters=ProgramDegre::where('type','2')->get();
        return view('front.pages.master',compact('masters'));
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
        
            toastr()->success('Mesaj??n??z u??urla g??nd??rildi');
            return redirect()->back();
    }

    public function download($id)
    {
        $download=Lider::findOrFail($id);
        return response()->download($download->cv) ?? abort('404');
    }
    
}
