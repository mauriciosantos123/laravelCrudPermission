<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoModel;

class grupoController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //o if simbolisa a autenticação do projeto para que  não seja acessado sem login 
        if ($request->session()->get('auth')){        
        //
        $gruplist = GrupoModel::get();
        $data['listgrup']= $gruplist;
        //
        $str =  view('comum.header', $data);
        $str .=  view('grupo.index', $data);
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
        if ($request->session()->get('auth')){                 
        $data= array();

        //
        $str =  view('comum.header', $data);
        $str .=  view('grupo.create', $data);
        $str .=  view('comum.footer', $data);
        

        return $str;
    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

        return redirect()->to('logins');

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
        //
        if ($request->session()->get('auth')){      
        GrupoModel::create([
            'nome' => $request->grupo,



    ]);
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('grupox');
    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

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
                //
                if ($request->session()->get('auth')){      
                $data = array();
                $data['id'] = $id;
                $reg = GrupoModel::findOrFail($id);
        
                $data ["grupos"] = $reg;
                $data ["grup"] = $reg;
        
        
                $str =  view('comum.header', $data);
                $str .=  view('grupo.edit', $data);
                $str .=  view('comum.footer', $data);

                return $str;
                
            }else{
                $request->session()->put('auth',  0);
                $request->session()->flash('message', 'Voce não tem permissão ');
    
                return redirect()->to('logins');
    
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

        if ($request->session()->get('auth')){      
        //
        $reg = GrupoModel::findOrFail($id);
        // dd($request->all());
        $reg->update
        ([
                'nome' => $request->nome,



        ]);


        $request->session()->flash('message', ' Editado com sucesso');
        return redirect()->to('grupox');
    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

        return redirect()->to('logins');

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
        if ($request->session()->get('auth')){      
                //
                GrupoModel::findOrFail($id)->delete;

                $request->session()->flash('message', ' Excluido com sucesso');
                return redirect()->to('grupox');

            }else{
                $request->session()->put('auth',  0);
                $request->session()->flash('message', 'Voce não tem permissão ');
    
                return redirect()->to('logins');
    
            }
    }
}
