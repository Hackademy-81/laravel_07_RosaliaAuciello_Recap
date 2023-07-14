<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class PublicController extends Controller
{
    public function welcome() {
        $articles= Article::all()->sortDesc(); 
        return view('welcome', compact('articles'));
    }

    public function contact(){
        return view('email/contact'); 
    }

    public function submit(Request $request){
        $name= $request->input('name');
        $email= $request->input('email');
        $mess= $request->input('mess'); 

        try {
            Mail::to($email)->send(new ContactMail($name, $email, $mess)); 
            // return redirect(route('homePage'))->with('message', 'email inviata con successo'." ". $name);
            return redirect(route('contact.thank', ['nameRedirect'=>$name]))->with('message', 'email inviata con successo'." ". $name);
        } catch (\Throwable $th) {
            return redirect(route('homePage'))->with('message', 'invio non andato a buon fine'); 
        }         
    }

    public function thank($nameRedirect){
        $articles= Article::all(); 
        return view('email/thank', compact('nameRedirect'), compact('articles')); 
    }
}
