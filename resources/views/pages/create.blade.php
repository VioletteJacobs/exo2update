@extends('template.main')
@section('content')
<form method="POST" action="/add-membre">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom : </label>
      <input type="texte" class="form-control" name="nom">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age : </label>
        <input type="number" class="form-control" name="age">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Genre : </label>
        <select name="genre" id="">
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection