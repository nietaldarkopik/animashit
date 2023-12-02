<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Models\homemodel;
use App\Models\PageModel;
use App\Models\ProfileModel;
use App\Models\GigModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = 'home')
    {
        $page = PageModel::where('slug','=', $page)->get()->first();
        $template = $page->template ?? 'home';
        return view('frontend.templates.'.$template,compact('page'));
    }

    public function artistDetail($id)
    {
        $artist = ProfileModel::where('id','=', $id)->get()->first();
        $template = 'gig-detail';
        return view('frontend.templates.'.$template);
    }

    public function thankContact()
    {
        $page = PageModel::where('slug','=', 'thanks-contact')->get()->first();
        return view('frontend.templates.contact-thanks',compact('page'));
    }

    public function sendContact(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'recaptcha',

        ]);

        $save = new ContactModel;

        $save->name = $request->name;
        $save->email = $request->email;
        $save->country = $request->country;
        $save->subject = $request->subject;
        $save->message = $request->message;

        $save->save();

        return redirect('thanks-contact')->with('status', 'Recaptcha has been validated form');

    }
}
