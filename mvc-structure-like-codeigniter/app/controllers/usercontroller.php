<?php

class usercontroller extends maincontroller
{
    public function show($param=null)
    {
        $variable = 123456;
        return view("home",compact('variable'));
    }

    public function get($param=false)
    {
        $users = user::get($param);
        return view('user',compact('users'));
    }

    public function redirect($redirect)
    {
        return $redirect;
    }
}