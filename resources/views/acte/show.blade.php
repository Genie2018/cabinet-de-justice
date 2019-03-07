@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche acte N°{{$acte->id}}</div>
                <div class="card-body">
                    <div class="row">
                  <div class="col-md-10 col-md-offset-1">
             <table class="table table-striped">
                      <tr>
                        <td>Description</td>
                        <td>{{$acte->description}}</td>
                      </tr>
                      <tr>
                        <td>Nature</td>
                        <td>{{$acte->nature->nom}}</td>
                      </tr>
                      <tr>
                        <td>Requerant</td>
                        <td>{{$acte->requerant}}</td>
                      </tr>
                      <tr>
                        <td>Requis</td>
                        <td>{{$acte->requis}}</td>
                      </tr>
                      <tr>
                        <td>Prix</td>
                        <td>{{$acte->prix}}</td>
                      </tr>                      
                      
                      <tr>
                        <td>Utilisateur</td>
                        <td>{{$acte->user->name}}</td>
                      </tr>

                      <tr>
                        <td>Date de creation</td>
                        <td>{{$acte->created_at}}</td>
                      </tr>
                    </table>
                     @if(Auth::user()->role=='admin')
                    <a href="" class="btn btn-info">Imprimer</a>
                        @endif
                        </div>
                      </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
