<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nature;
use DB;
use App\Acte; 
use Auth;
use Session;  

class ActeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $natures=DB::table('natures')->pluck('nom','id');
        return view('acte.create',compact('natures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $this->validate($request,[
            'description'=>'required|min:10',
            'nature_id'=>'required',
        ]);
        $data=array_add($data,'user_id',Auth::user()->id);
        Acte::create($data);
        Session::flash('message','Votre Acte a été crée avec succes');
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
      public function consulter($id)
    {
        $acte=Acte::findOrFail($id);
        $acte->save();
         return view('acte.show',compact('acte'));
    }

}
