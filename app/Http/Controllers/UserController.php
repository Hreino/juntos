<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SERTRACEN=User::where('company','SERTRACEN')->get();
        $DIARIOELMUNDO=User::where('company','DIARIO EL MUNDO')->get();
        $REDINTELFON=User::where('company','RED-INTELFON')->get();
        $JUGUETON=User::where('company','JUGUETON')->get();
        $ALSASA=User::where('company','ALSASA')->get();
        $GBORJA=User::where('company','GRUPO BORJA')->get();
        return View('user.index',['SERTRACEN'=>$SERTRACEN,
         'DIARIOELMUNDO'=>$DIARIOELMUNDO, 
         'REDINTELFON'=>$REDINTELFON, 'JUGUETON'=>$JUGUETON, 'ALSASA'=>$ALSASA, 'GBORJA'=>$GBORJA]);
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
        $user=User::find($id);

        return view('user.edit',['user'=>$user] );
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
        $this->validate($request,[ 
            'role' => ['required', 'integer']
        ]);

        User::find($id)->update($request->all());
        return redirect('users')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return  redirect('users')->with('success', 'El usuario ha sido eliminado');
        } catch (\Throwable $error) {
            //throw $;
            return  redirect('users')->with('success', 'No se puede eliminar usuario, pues tiene Presupuestos creados');
            }
    }
        
}
