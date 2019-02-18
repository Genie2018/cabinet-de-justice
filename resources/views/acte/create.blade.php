@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation de nouveau acte</div>
                  <div class="col-md-10 col-md-offset-1">
                            {!! Form::open(['method'=>'POST','url'=>'acte/enregistrer','class'=>'form-horizontal']) !!}

             <div class="form-group{{$errors->has('description')? 'has-error': ''}}">
                  {!! Form::label('description','Votre description :') !!}
                  {!! Form::textarea('description',null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('description')}}</small>

             </div>
               <div class="form-group{{$errors->has('nature_id')? 'has-error': ''}}">
                  {!! Form::label('nature_id','Nature:') !!}
                  {!! Form::select('nature_id',$natures,null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('nature_id')}}</small>

             </div>

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
@endsection
