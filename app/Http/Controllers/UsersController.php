<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tenants(){
        $page = array(
            'breadcrumbs' => [
                'dashboard' => [
                    'active' => false,
                    'url' => route('dashboard')
                ],
                'tenants' => [
                    'active' => true,
                    'url' => route('users.tenant')
                ]
            ],
            'title' => 'Tenants'
        );

        $tenants = User::where('role','tenants')->get();

        return view('contents.tenants')->with(compact(
            'page',
            'tenants'
        ));

    }

    public function landlords(){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        if($user){
            return response()->json(
                array(
                    'request_status' => 'ok', 
                    'request_details' => array(
                        'msg' => 'New user successfully created'
                    )
                )
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id)->first();
        
        if($user){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => $user
                )
            );
        }
            
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
        //
        $user = User::find($id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->address = $request->address;
        $user->save();

        if($user){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => array(
                        'msg' => 'User successfully updated'
                    )
                )
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();

        if($user){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => array(
                        'msg' => 'User successfully deleted'
                    )
                )
            );
        }
    }
}
