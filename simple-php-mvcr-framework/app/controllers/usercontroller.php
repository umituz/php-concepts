<?php

class usercontroller extends maincontroller
{
    public function show()
    {
        $var = 123;
        return view("home",compact('var'));
    }

    public function not()
    {
        return view("not");
    }

    public function model()
    {
        $users = user::get();
        return view('model',compact('users'));
    }
}