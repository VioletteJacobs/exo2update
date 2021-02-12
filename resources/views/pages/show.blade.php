@extends('template.main')
@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->nom}}</h5>
          <p class="card-text">{{$show->age}}</p>
          <p class="card-text">{{$show->genre}}</p>
            <form action="/delete-membre/{{$show->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/edit-membre/{{$show->id}}" class="btn btn-primary">Edit</a>
        </div>
      </div>

</div>
    
@endsection