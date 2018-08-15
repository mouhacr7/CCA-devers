<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Danse;
use App\Musique;
use Mail;

class InscriptionController extends Controller
{
    //
    public function index()
    {
        $musique=Musique::get();
        $danse=Danse::get();
        return view('pages.inscription',compact('musique','danse'));
    }


    public function submit(Request $request){
        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'message'=>'required'
        ]);

        $user=new Users;

        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->email=$request->input('email');
        $user->mobile=$request->input('mobile');
        $user->message=$request->input('message');

        $user->save();

        $data=array('nom'=>$request->nom,
                    'prenom'=>$request->prenom,
                   'email'=>$request->email );
        
        Mail::send(['text'=>'pages.mail'],$data,function($message) use($data) {
            $message->to($data['email'],$data['nom'])->subject('Send Mail from laravel with basics');
           $message->from(env('MAIL_USERNAME'),'carrefourcultureart@gmail.com','Carrefour de Culture et de L\'Art ');

           
        });

        echo 'le mail a bien été transmis ';
        //return redirect('/');
    }


    /*public function sendingMail(){

        $data=['name'=>'Demba Diagana'];
        //$mail=$this->user->email;
        Mail::send(['text'=>'pages.mail'],$data,function($message){
            $message->to('demba94diagana@gmail.com','Demba Mamadou Diagana')->subject('Send Mail from laravel with basics');
           $message->from('carrefourcultureart@gmail.com','Carrefour de Culture et de L\'Art ');

           
        });
        echo 'l\'email est bien transmis';*
}*/
}
