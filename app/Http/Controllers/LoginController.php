<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //print_r($request->session());
        //die();

        $data['message']= $request->session()->get('message');
        return view('viewlogin.screenlogin',$data);
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
            $res = UserModel::where('email',$request->email)->get()->first();
            //$res = $res[0];
            //print_r($res);
           
            $teste= strlen($res->email);
            //echo($teste);
            //die();
            if(isset($teste) ){
                if($res->senha==$request->senha){
                    $request->session()->put('user_id',  $res->id);
                    $request->session()->put('auth',  1);
                    return redirect()->to('dashboard');

                }else {
                   $request->session()->put('auth',  0);
                    $request->session()->flash('message', ' senha incorreta');
  
                   
                   return redirect()->to('logins');
                    

                }

            }else{
                $request->session()->put('auth',  0);
                $request->session()->flash('message', ' verificar email e senha ');
                
                return redirect()->to('logins');

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
