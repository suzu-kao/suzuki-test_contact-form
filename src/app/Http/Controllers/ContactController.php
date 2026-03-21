<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Laravel\Fortify\Actions\ConfirmPassword;

class ContactController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'address',
            'building',
            'category_id',
            'detail',
            ]);

        $contact['tel'] = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;


        Contact::create($contact);
        return redirect('/thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
