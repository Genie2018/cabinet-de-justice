@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header">Edition de l'acte N°{{$acte->id}} crée par {{$acte->user->name}}, le {{$acte->created_at}} </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            {!! Form::open(['method'=>'POST','url'=>'acte/enregistrer','class'=>'form-horizontal']) !!}

            

                        <div class="btn-group pull-right">
                            {!! Form::reset("Annuler",['class'=>'btn btn-warning']) !!}
                            {!! Form::submit("Enregistrer",['class'=>'btn btn-success']) !!}


                        </div>
              {!! Form::close() !!}
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
