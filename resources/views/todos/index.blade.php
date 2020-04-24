@extends('layouts.app')
@section('content')
    <h1>Todos</h1>
    @include('inc.messages')
    @if(count($todos)>0)
    @foreach ($todos as $todo)
        {{-- <div class="well">
            <h3></h3>
            <h5></h5>
        </div>         --}}
        <div class="well" >
            {{-- <div class="card-body"> --}}
              <h3><a href="todo/{{$todo->id}}" class="badge badge-light">{{$todo->text}}</a></h3>
              <span class="badge badge-warning">Due: {{$todo->due}}</span>
              <hr>
              {{-- <p class="card-text">This is a sidebar</p> --}}
            {{-- </div> --}}
          </div>
    @endforeach
    @endif
@endsection 