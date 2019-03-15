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

    public function search(Request $request)
    {
        $search=$request->get('search');
        $actes=DB::table('actes')->where('description','like','%'.$search.'%')->paginate(5);
        return view('home',['actes'=>$actes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $natures=DB::table('natures')->pluck('nom','id'); //pluck permet de recuperer le nom et l'id au niveau de la table nature et de le stocker dans la variable $natures
        return view('acte.create',compact('natures')); //Creation du  formulaire dans le dossier acte.create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all(); //Recupere les données qui seront stockés dans notre objet request
        $this->validate($request,[
            'description'=>'required|min:10',
            'requerant'=>'required',
            'requis'=>'required',
            'prix'=>'required',
            'nature_id'=>'required',
        ]);
        $data=array_add($data,'user_id',Auth::user()->id); //associe les données sauvegardées à l'utilisateur connecté
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
         $acte=Acte::where('id',$id)->first();
       return view('acte_edit',['acte'=>$acte,'natures'=>Nature::all()]);
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
           $acte= Acte::findOrFail($id);
           $acte->description=$request->input('description');
           $acte->requerant=$request->input('requerant');
           $acte->requis=$request->input('requis');
           $acte->prix=$request->input('prix');
           //$acte->nature_id=$request->input('nature_id');
           $acte->save();
            return redirect()->back();
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Recherche par rapport à l'id et suppression
        Acte::find($id)->delete();
        //Creation d'une variable de session
        Session::flash('success','Acte supprimé');
        return redirect()->back();
    }
      public function consulter($id)
    {
        $acte=Acte::findOrFail($id); //Recuperer l'objet qui nous permet d'acceder aux données 
        $acte->save();
         return view('acte.show',compact('acte'));
    }

}
