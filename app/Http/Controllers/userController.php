<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlist = UserModel::get();
        $data['listuser']= $userlist;
        //
        $str =  view('comum.header', $data);
        $str .=  view('user.index', $data);
        $str .=  view('comum.footer', $data);
        

        return $str;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->isMethod('post')){

        
           
        // dd($request->all());
        UserModel::create
        ([
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'senha' => $request->senha,


        ]);

            $request->session()->flash('message', ' cadastrado com sucesso');
        return redirect()->to('users');

        }else {
            $data= array();

           //
           $str =  view('comum.header', $data);
           $str .=  view('user.create', $data);
           $str .=  view('comum.footer', $data);
           
   
           return $str;

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    public function edit($id )
    {
        
        //
        $data = array();
        $data['id'] = $id;
        $reg = UserModel::findOrFail($id);

        $data ["usuario"] = $reg;
        $data ["user"] = $reg;


        $str =  view('comum.header', $data);
        $str .=  view('user.edit', $data);
        $str .=  view('comum.footer', $data);
        

        return $str;



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
        $reg = UserModel::findOrFail($id);
                // dd($request->all());
                $reg->update
                ([
                        'nome' => $request->nome,
                        'email' => $request->email,
                        'telefone' => $request->telefone,
                        'senha' => $request->senha,
        
        
                ]);


                $request->session()->flash('message', ' Editado com sucesso');
                return redirect()->to('users');
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
