<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Hash;
use Redirect;
use Validator;
use Session;
use Cookie;
use Mail;
use Artisan;
class UserController extends Controller
{
    function home(){
//$exitCode = Artisan::call('cache:clear');


       return view('home');
      
    }

    function signup() {
       
        return view('register');
    }

    // function f2() {
    //     $name = "Armine";
    //     $user = ["Simonyan", "23"];
    //     $person = [
    //         ["user2"=>"Ani Simonyan","age"=>23],
    //         ["user2"=>"Anna Karapetyan","age"=>25],
    //         ["user2"=>"Gevorg Kostanyan","age"=>29],
    //         ["user2"=>"Merjuan Hovsepyan","age"=>19]
    //     ];
    //     return view('home')->with("anun",$name)->with("details",$user)->with("user2",$person);
    // }

    function addUser(Request $r){
          
        $validator = Validator::make($r->all(), [
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email',
            'password' => ['required', 'regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/'],
            'confirmPassword' => 'required',
        ]);

        if ($validator->fails()) {
     
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }else{

        $u = new Users();
        $u->name = $r->name;
        $u->surname = $r->surname;
        $u->age = $r->age;
        $u->email = $r->email;
        $u->created_at=date('Y-m-d h:i:s');
        $u->updated_at=date('Y-m-d h:i:s');
        $u->password = Hash::make($r->password);
  
        $u->save();
        // return view("register");



//            *****sending mail
        $data = array(
            'id'=>$u->id,
            'name'=>$r->name,
            'surname'=>$r->surname,
            'hash'=>md5($u->id.$r->email),
        );

        // Mail::send('mail', $data, function($message) use($r) {
        //     $message->to( $r->email, 'Shop admin')->subject
        //     ('Email Verification');
        //     $message->from('xyz@gmail.com','Shop Admin');
        // });
        //dd($r->email);
       return Redirect::to("/");
        }
    }

    function activateUser($id, $hash){
      
        $user = Users::where('id',$id)->first();

        if($user){
            if($hash == md5($id.$user->email)){
                $user->active = 1;
                $user->save();
                return Redirect::to('login');
            }
        }
    }

    function forgotPassword(){
        return view('forgotPasswordStep1');
    }

    function checkMail(Request $r){
        $user = Users::where('email', $r->email)->first();
//        TODO::(grel validator)

        $data = array(
            'id' => $user->id,
            'hash' => rand(),
        );
        //activateUser

        $user->link = $data['hash'];
        $user->save();

        Mail::send('mail', $data, function($message) use($r) {
            $message->to( $r->email, 'Shop admin')->subject
            ('Forgot Password!');
            $message->from('xyz@gmail.com','Shop Admin');
        });

        return view('emailSent');
    }
    function forgotPasswordCheckMail(Request $r){
        $user = Users::where('email',$r->email)->first();

        $validator = Validator::make($r->all(), [
            'email' => 'required|email',
        ]);
         
        $validator->after(function ($validator) use($user,$r) {
            if (!$user) {
                $validator->errors()->add('email', 'User is not registered!');
            }
        });

        if ($validator->fails()) {
            return redirect('/forgotpassword')
                ->withErrors($validator)
                ->withInput();
        }else{

            
            //Sending e-mail for changing password
            // $data = array(
            //     'id'=>$user->id,
            //     'hash'=>rand(),
            // );

            // $user->link = $data['hash'];
            //             $user->save();
             

            // Mail::send('forgotPasswordStep3', $data, function($message) use($r) {
            //     $message->to( $r->email, 'Shop admin')->subject
            //     ('Forgot Passowrd');
            //     $message->from('xyz@gmail.com','Shop Admin');
            // });
            // end of *Sending e-mail for changing password*

            return redirect("/forgotpassword/$user->id");      

            //return view('forgotPasswordStep2');
        }
    }

    public function forgotPasswordUpdatePass($id){
        $user = Users::where('id',$id)->first();
        if($user){
            Session::put('updatepass_id',$id);
           // Session::put('updatepass_hash',$hash);
            return view("forgotPasswordStep4");
        }
    }

    public function forgotPasswordSetPass(Request $r){
        $user = Users::where('id',Session::get('updatepass_id'))->first();
          //validator after
          //            $validator  TODO::validate, read documentation. Should check hash, should check if they are equal, change password in database and redirect to profile.


        $validator = Validator::make($r->all(), [
            'new_pass' => ['required','regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/'],
            'confirm_pass'=>'required'

        ]);
        $validator->after(function ($validator) use($user,$r) {
            if ($r->new_pass!=$r->confirm_pass) {
                $validator->errors()->add('new_pass', 'Passwords not matching!');
            }
        });

        if ($validator->fails()) {
            return redirect("/forgotpassword/$user->id ")
                ->withErrors($validator)
                ->withInput();
        }
        
        $user->password=Hash::make($r->new_pass);
        $user->updated_at=date('Y-m-d h:i:s');
        $user->save();
        return Redirect::to('login'); 
        // if($user->link == Session::get('updatepass_hash')){



       
       

    }

    function login(){
             
            if(Cookie::has('user_id')){
               Session::put("user_id", Cookie::get('user_id'));
               Session::put("user_email",Cookie::get('user_email'));
               return redirect('/');
            }


            return view("login");
    }

    function loginuser(Request $r){
   //echo Hash::make($r->password);

        $validator = Validator::make($r->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = Users::where('email', $r->email)->first(); //stugum enq databasayum ka te chka

   

        $validator->after(function ($validator) use($user,$r) {
            if (!$user) {
                $validator->errors()->add('email', 'User is not registered!');
            }elseif(!Hash::check($r->password, $user->password)) {
                $validator->errors()->add('password', 'Password is not correct!');
            }
            // elseif($user->active == 0){
            //     $validator->errors()->add('email', 'Your account is not active! Please check your e-mail!');
            // }
        });

        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            Session::put("user_id", $user->id);
            Session::put("user_email", $user->email);
            Cookie::forever("user_id", $user->id);
            Cookie::forever("user_email", $user->email);
            if($user->role == "user"){
                return Redirect::to('/profile');
            }elseif($user->role == "admin"){
                return Redirect::to('/admin');
            }
        }
    }

    function profile(){
        $user = Users::where('id',Session::get("user_id"))->first();
      
        return view('profile')->with("user",$user);
    }

    function logout(){
        Session::flush();
        Cookie::forget("user_id");
        Cookie::forget("user_email");
        return Redirect::to('/login');
    }

    function updatePass(){
        return view('updatePass');
    }

    function updatePassUser(Request $r){
        $validator = Validator::make($r->all(),[
            'oldPass' => 'required',
            'newPass' => 'required',
            'reNewPass' => 'required',
        ]);

        $user = Users::where('id',Session::get("user_id"))->first();

        $validator->after(function ($validator) use($r,$user) {
            if (!Hash::check($r->oldPass, $user->password)) {
                $validator->errors()->add('oldPass', 'Old password is wrong!');
            }
        });

        if ($validator->fails()) {
            return redirect('/updatePass')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            Users::where('id',Session::get("user_id"))->update(['password'=>Hash::make($r->newPass)]);
            return Redirect::to('/profile');
        }
    }
}
