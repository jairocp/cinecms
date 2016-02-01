<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pelicula;

use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\reproductor;

use App\genero;
use DB;

class PeliculaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
    $this->middleware('auth');
    if (Auth::check()) {
     $this->middleware('admin');
}
  
  }
    public function index()
    {
        //
        $peliculas=pelicula::all();

        return view('peliculas.index',compact('peliculas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generos=genero::all();


        return view('peliculas.create',compact('generos'));
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

 $input=$request->input('generos');

        pelicula::create([
            'titulo' => $request['titulo'],
            'sinopsis' => $request['sinopsis'],
            'imgportada' =>$request['imgportada'],
            'genero_id'=>$input,
        ]);

        return "exitoso";


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
           
              $pelicula=pelicula::find($id);
             $reproductor=DB::table('reproductor')->where('id_pelicula',$id)->get();


        return view('peliculas.preview' , compact('pelicula','reproductor'));
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
