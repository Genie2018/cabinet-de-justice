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
              <div class="form-group{{$errors->has('requerant')? 'has-error': ''}}">
                  {!! Form::label('requerant','Nom du requerant :') !!}
                  {!! Form::text('requerant',null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('requerant')}}</small>

             </div>
              <div class="form-group{{$errors->has('requis')? 'has-error': ''}}">
                  {!! Form::label('requis','Nom du requis :') !!}
                  {!! Form::text('requis',null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('requis ')}}</small>

             </div>
               <div class="form-group{{$errors->has('nature_id')? 'has-error': ''}}">
                  {!! Form::label('nature_id','Nature:') !!}
                  {!! Form::select('nature_id',$natures,null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('nature_id')}}</small>

             </div>

             <div class="form-group{{$errors->has('prix')? 'has-error': ''}}">
                  {!! Form::label('prix','Prix :') !!}
                  {!! Form::text('prix',null,['class'=>'form-control','required'=>'required']) !!}
                  <small class="text-danger">{{$errors->first('prix ')}}</small>

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
