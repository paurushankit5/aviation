<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact(Request $request){
        
        $data = array(
                    'name'      => $request->name,
                    'email'     => $request->email,
                    'mobile'    => $request->mobile,
                    'message'   => $request->message
                );
        // echo "<pre>";
        // print_r($data);
        // exit;
        Mail::send('mail', $_REQUEST, function($message) {
            $message->to('paurushankit5@gmail.com', 'Blue Hadal Aviation Dreams')
            ->subject('Query from Blue Hadal Aviation Dreams');
            $message->from(env('MAIL_USERNAME'),'Blue Hadal Aviation Dreams');
        });
      return redirect('/success');
    }
}
