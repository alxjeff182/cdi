<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return User::latest()->paginate(10); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->profilePicture){ 
            $name = time().'.' . explode('/', explode(':', substr($request->profilePicture, 0, strpos($request->profilePicture, ';')))[1])[1];
            \Image::make($request->profilePicture)->save(public_path('img/profile/').$name);
            $request->merge(['profilePicture' => $name]);   
        } 
             return User::create([ 
            'userNo' =>$request['userNo'],
            'name' =>$request['name'],
            'dateOfBirth' =>$request['dateOfBirth'],
            'phoneNumber' =>$request['phoneNumber'],
            'address' =>$request['address'],
            'noKtp' =>$request['noKtp'],
            'gender' =>$request['gender'],
            'email' =>$request['email'],
            'password' =>Hash::make($request['password']),
            'role' =>$request['role'],
            'profilePicture'=> @$name 
        ]); 
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
               $user = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:6'
        ]);
        $user->update($request->all());
        return ['message' => 'Updated the user info'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::findOrFail($id);
        // delete the user
        $user->delete();
        return ['message' => 'User Deleted'];
    }
    public function search(){
        if ($search = \Request::get('q')) {
            $users = User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                        ->orWhere('email','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $users = User::latest()->paginate(5);
        }
        return $users;
    }
}
