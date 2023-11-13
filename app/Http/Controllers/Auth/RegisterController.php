<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session,DB,View,Response;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

     public function enquiry(Request $request){
         

          $validatedData = $request->validate([
            'mobile' => 'required', 
            'name' => 'required', 
            'subject' => 'required', 
            'message' => 'required', 
          ]);
         if($validatedData){
            $notification =new Notification();
            $notification->name = $request->name;
            $notification->title = 'New Inquiry Added.';
            $notification->mobile = $request->email;
            $notification->subject = $request->subject;
            $notification->message = $request->message;
            $notification->url = '';
            $notification->created_at =now();
            $notification->updated_at =now();

            if($notification->save()){
            // $sendTo = Config::get("constant.emails");
            // $emailview = View::make('email_template/enquiry')->with('enquiry',$enquiry); 
            // $subject = "New Enquiry By ".ucfirst($enquiry->name).' - '.$enquiry->email;
            // $helper = new Helper();
            // $send = $helper->sendEmail($subject,$sendTo,$emailview,$attachment_array= array());
            //         return response()->json([
            //         'msg' => 'OK'
            //         ]);die;
            // die;
            Session::flash('success', 'Enquiry Successfully Sent.Admin Will Contact You Soon.');
            
            }else{
             Session::flash('info', 'Something went to wrong.Please try again');
             return redirect()->route('login');       
            }
        }else{
             Session::flash('info', 'Something went to wrong.Please try again');
             return redirect()->route('login');       
        }
     }
            public function updateNotification(Request $request)
            {
            $notification_id = $request->notification_id;
            
            if($request->ajax()){
            Notification::where('id',$notification_id)->update(['is_read'=>1]);
            }
            return true;
            }
}
