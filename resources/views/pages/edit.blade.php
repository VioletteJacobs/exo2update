@extends('template.main')
@section('content')
<form method="POST" action="/update-membre/{{$edit->id}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom : </label>
      <input type="texte" class="form-control" name="nom" value="{{$edit->nom}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age : </label>
        <input type="number" class="form-control" name="age" value="{{$edit->age}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Genre : </label>
        <select name="genre" id="">
            @if ($edit->genre == "homme")
            <option value="homme">Homme</option>
            <option value="femme">femme</option>      
            @else
            <option value="femme">femme</option>
            <option value="homme">Homme</option>
            @endif 
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
    
@endsection