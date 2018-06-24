<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome() {
        return view('pages.welcome');
    }
    function index() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function contact() {
        return view('pages.contact');
    }
    function storecontact(Request $request) {
        $name = $request->name;
        return redirect()->route('thanks',['name' => $name]);
    }
    function thanks($name, Request $request) {
        return view('pages.thankyou')->with(compact('name'));
    }
    function signin() {
        return view('pages.signin');
    }
    function signup() {
        return view('pages.signup');
    }
    function logout() {
        return view('pages.logout');
    }
    function messagelist() {
        return view('pages.message-list');
    }
    function message1() {
        return view('pages.message-1');
    }
    function message2() {
        return view('pages.message-2');
    }
    function message3() {
        return view('pages.message-3');
    }
}
