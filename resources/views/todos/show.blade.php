@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-secondary">Back</a>

    <div class="card">
        <div class="card-header">
            {{$todo->text}}
        </div>
        <div class="card-body">
          <h5 class="card-title"><span class="badge badge-warning">{{$todo->due}}</span></h5>
          <p class="card-text">{{$todo->body}}</p>
          <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
          

          {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-right']) !!}   
            {{ Form::hidden('_method','DELETE') }} 
            {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
          {!! Form::close() !!}

        </div>
      </div>

    
@endsection 