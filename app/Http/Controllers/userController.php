<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\GrupoModel;

class userController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->session()->get('auth')){      
        $userlist = UserModel::get();
        $data['listuser']= $userlist;


        //
        $str =  view('comum.header', $data);
        $str .=  view('user.index', $data);
        $str .=  view('comum.footer', $data);
        

        return $str;
    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

        return redirect()->to('logins');

    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

           
        // dd($request->all());
   
        
            $data= array();
            $gruplist = GrupoModel::get();
            $data['gruplist']= $gruplist;
            //
           //
           $str =  view('comum.header', $data);
           $str .=  view('user.create', $data);
           $str .=  view('comum.footer', $data);
           
   
           return $str;

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UserModel::create([
            'grupo_id' => $request->grupo_id,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'senha' => $request->senha,


    ]);
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('users');
        
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
        $gruplist = GrupoModel::get();
        $data['gruplist']= $gruplist;

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
        UserModel::findOrFail($id)->delete;

                $request->session()->flash('message', ' Excluido com sucesso');
                return redirect()->to('users');

    }
}
