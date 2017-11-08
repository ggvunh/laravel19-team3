<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }
    public function index()
    {
    	$users = User::all();
    	return view('admins.user_management.index', compact('users'));
    }

     public function create()
    {
        return view('admins.user_management.create');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function save(UserRequest $request)
    {   
      $data = $request->all();
      $data['password'] = bcrypt($data['password']);
      $data['deposit'] = 0;
      $user = User::create($data);
      return redirect('admins/user_management/index');
    }

    public function show($id)
    {
        $user = User::find($id);
        $role = $user->role;
        if($role==1){
        	$rolename = "admin";
        }
        else{
        	$rolename = "user";
        }
        
        echo $rolename;
       
        return view('admins.user_management.show', compact(['user', 'rolename']));
    }

    public function delete($id)
    {
      // $promotion = Promotion::find($id)->toArray();
      $user = User::find($id);
      if($user)
      {

      	$user->delete();
      }
      return redirect('admins/user_management/index');
    }

     public function edit($id)
    {
    	$user = User::find($id);
    	return view('admins.user_management.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user->update($data);
        return redirect('admins/user_management/index');
    }

    public function getprofile($id)
    {
        $user = User::find($id);    
        return view('admins.user_management.profile', compact('user'));
    }

      public function editProfile($id)
    {
      $user = User::find($id);
      return view('admins.user_management.editprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(User $id, UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['role']=0;
        $data['deposit']=0;
        $id->update($data);
         $userupdate = User::find($id);
         foreach ($userupdate as $value) {
           $id = $value->id;
         }
        return view('admins.user_management.profile', compact('userupdate', 'id'));
    }
}
