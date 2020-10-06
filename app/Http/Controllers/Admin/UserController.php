<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 

        //return "hi";

         // $user =User::all();
         $user= User::where('user_delete_status', 1)->get();
          return view('admin.user.register')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.user.create');
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

        //dd($request->all());


          $request->validate([

        'name'=>'required|max:300',
        'password'=>'required|max:15|min:5',
        'email'=>'required|max:300|email',
        'state'=>'required|max:300',
        'role'=>'required|max:300',
        'phone'=>'required|max:300',
    ]);



           $user =new User();


           $exist_user = User::where('email', '=', $request->email)
                         // ->where('user_status','=',1)
                         ->first();

           if($exist_user){
               // return "already added";

             return redirect()->route('user.create')->with('message','email already exist in table.');
           }
           else{
              //$request['name'] = $request->name;
               $user->name = $request->name; 
              


                
                $user->password= Hash::make($request->password); 

                
                 $user->email = $request->email;
                 $user->state = $request->state; 
                 $user->role = $request->role;
                 $user->phone = $request->phone; 

              // $create =  User::create($request->toArray());
                   $user->save();
                    return redirect()->route('user.index')->with('message','succesfully created your field');
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
        //

            $edit =User::find($id);
        return view('admin.user.edit')->with('edit',$edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $user=User::find($id);
        // $user->name =$request->name;
        // $user->email =$request->email;
        // $user->state =$request->state;
        // $user->role =$request->role;
        // $user->phone =$request->phone;
        // $user->update();
        // //return redirect()->back()->with('status','Role is Updated');
        //  return redirect()->route('user.index')->with('message','succesfully Updated your field');


          $user_update = $user->update($request->toArray());
        if ($user_update) {

            if (isset($request->user_delete_status) and $request->user_delete_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'User Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'User updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'User Not Updated');
        }

       
        
       
        return redirect()->route('user.index');




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
    }
}
