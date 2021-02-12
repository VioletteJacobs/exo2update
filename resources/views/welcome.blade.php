@extends('template.main')
@section('content')
    <h1 class="text-center">Voici nos membres : </h1>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom : </th>
                <th scope="col">Genre :</th>
                <th scope="col">show</th>
              </tr>
            </thead>
            @foreach ($membre as $item)
            <tbody>
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->genre}}</td>
                <td><a href="/show-membre/{{$item->id}}" class="btn btn-success">Show</a></td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <button type="submit" class="btn btn-danger">Delete all</button>      
    </div>
@endsection