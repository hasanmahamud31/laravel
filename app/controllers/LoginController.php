<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post/listing');
	}
        /**
	 * authenticate a user from database.
	 *
	 * @return Response
	 */
        public function authenticate()
        {
            
            //return View::make('post/listing')->with(array('email' => Input::get('email'), 'password' => Input::get('password')));
            //echo Input::get('password');
            if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
            {
                return Redirect::to('front_end/home');
                
            }else{
                return Redirect::back()->with('massage', 'Username or password is not correct!');
                //return Redirect::to('login')->with('massage', 'Login Failed');
            }
        }
        /*
         * 
         */
        public function changePasswordSubmit() {
            $email           = Input::get('email');
            $oldPassword     = Input::get('old_password');
            $newPassword     = Input::get('new_password');
            $confirmPassword = Input::get('confirm_password');
           
            //return View::make('post/single');
            if($email == Auth::user()->email && Hash::check($oldPassword, Auth::user()->password)){
                  if(trim($newPassword) == trim($confirmPassword))
                  {
                      DB::table('users')
                        ->where('id', Auth::user()->id)
                        ->update(['password' => Hash::make($newPassword)]);
                      return Redirect::back()->with('success', 'Your password changed successfully!');
                  }else{
                      return Redirect::back()->with('password', 'Your password does not match!');
                  }
            }else{
                return Redirect::back()->with('massage', 'Username or password is not correct!');
            }
        }
        /*
         * make a view or form for change password
         */
        public function changePassword(){
           
            return View::make('front_end/changePassword');
        }
        /*
         * user logout
         * 
         * @return response
         */
        public function logout(){
            if(Auth::check())
                Auth::logout();
            return Redirect::to('login');
        }

        /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
