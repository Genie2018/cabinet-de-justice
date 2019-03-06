<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acte;
use App\Nature;

class EditionController extends Controller
{
         public function __construct()
    {
          $this->middleware('auth');
        $this->middleware('isadmin')->only('consulter');
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
    public function create($id)
    {
       // $acte=Acte::findOrFail($id);
        //return view('edition.new',compact('acte'));
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
         
       $acte=Acte::where('id',$id)->first();
       return view('edition.new',['acte'=>$acte,'natures'=>Nature::all()]);
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
         $data=$request->all();
        $this->validate($request,[
            'description'=>'required|min:10',
            'requerant'=>'required',
            'requis'=>'required',
            'prix'=>'required',
            'nature_id'=>'required',
        ]);
        $data=array_add($data,'user_id',Auth::user()->id);
        Acte::update($data);
        Session::flash('message','Votre Acte a été modifié avec succes');
        return redirect('/home');

        
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
