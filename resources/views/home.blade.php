@extends('layouts.app')

@section('content')
    <h1>Welcome to laravel</h1>
    <div class="container">
        <div class="row row-cols-4 g-3">
            @foreach ($trains as $train)
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$train->company}}</li>
                      <li class="list-group-item">{{$train->from}}</li>
                      <li class="list-group-item">{{$train->to}}</li>
                      <li class="list-group-item">{{$train->departure_time}}</li>
                      <li class="list-group-item">{{$train->arrivals_time}}</li>
                      <li class="list-group-item">{{$train->code_train}}</li>
                      
                    </ul>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
       
    
@endsection