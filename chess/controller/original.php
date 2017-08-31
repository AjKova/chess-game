<?php
/**
 * Created by Chris on 9/29/2014 3:53 PM.
 */

require_once '../app_start/init.php';

if (Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'name' => array(
                'name' => 'Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'username' => array(
                'name' => 'Username',
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'password' => array(
                'name' => 'Password',
                'required' => true,
                'min' => 6
            ),
            'category' => array(
                'name' => 'Category',
                'required' => true
            ),
            'email' => array(
                'name' => 'Email',
                'required' => true,
                'unique' => 'users'
            ),
            'elo_rating' => array(
                'name' => 'Elo_rating',
                'min' => 4,
                'max' => 4
            ),
            'phone' => array(
                'name' => 'Phone'
            ),

        ));

        if ($validate->passed()) {
            $user = new User();
            $salt = Hash::salt(32);

            try {
                $user->create(array(
                    'name' => Input::get('name'),
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'category' => Input::get('category'),
                    'email' => Input::get('email'),
                    'phone' => Input::get('phone'),
                    'elo_ranking' => Input::get('elo_rating'),
                    'salt' => $salt,
                    'joined' => date('Y-m-d H:i:s'),
                    'group' => 1
                ));

                // Session::flash('home', 'Welcome ' . Input::get('username') . '! Your account has been registered. You may now log in.');
                //Redirect::to('index.php');

                echo 'success';

            } catch(Exception $e) {
                echo $error, '<br>';

            }
            echo 'success';
        } else {
            foreach ($validate->errors() as $error) {
                echo $error . "<br>";
            }
        }
    }
    else{
        echo 'failed';
    }
}
