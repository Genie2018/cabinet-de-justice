<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acte;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

          $statistiques['total']=Acte::All()->count();
          $statistiques['Location']=Acte::where('nature_id','1')->get()->count();
          $statistiques['mesactes']=Acte::where('user_id',Auth::user()->id)->get()->count();
          $statistiques['Assignation']=Acte::where('nature_id','2')->get()->count();
          $statistiques['pv de constat']=Acte::where('nature_id','3')->get()->count();
          $statistiques['signification']=Acte::where('nature_id','4')->get()->count();


        if(Auth::user()->role=='admin')
            {
 $actes=Acte::orderBy('created_at','desc')->paginate(10);
            }
            else{
 $actes=Acte::where('user_id',Auth::user()->id)->paginate(10);
            }

        return view('home',compact('actes','statistiques'));
    }
}
