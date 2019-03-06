@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header">Edition de l'acte N°{{$acte->id}} crée par {{$acte->user->name}}, le {{$acte->created_at}} </div>

                 
                         
                     <div class="card-body">
                    <form action="{{route('acte.update',['id'=>$acte->id])}}" method="post">
                        {{csrf_field()}}

                           <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" id="description" value="{{$acte->description}}" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="requerant">requerant</label>
                            <input type="text" name="requerant" id="requerant" value="{{$acte->requerant}}" class="form-control">
                        </div>
                       
                         <div class="form-group">
                            <label for="requis">requis</label>
                            <input type="text" name="requis" id="requis" value="{{$acte->requis}}" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="prix">prix</label>
                            <input type="text" name="prix" id="prix" value="{{$acte->prix}}" class="form-control">
                        </div>
                         
                         
                         <div class="form-group">
                            <center>
                            <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                            </center>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    