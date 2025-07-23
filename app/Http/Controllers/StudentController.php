<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\ContactCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use Illuminate\Broadcasting\Channel;

class StudentController extends Controller
{
    function home() {

        $showTime = true;
        return view('welcome', [
            "showTime" => $showTime,
            "users"=>['Prosper19','Repsorp39']
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            "email" => ['required', 'email'],
            "fullname" => ['required', 'max:50'],
            "phoneNumber" => ['required', 'starts_with:+229,+1,+228']
        ]);

        $contact = Contact::create([
            "email" => $validate['email'],
            "full_name" => $validate['fullname'],
            "phone_number" => $validate['phoneNumber']
        ]);

        Notification::route('mail',$contact->email)
            ->notify(new ContactCreated($contact));

        return redirect("contact");
    }

    
}
