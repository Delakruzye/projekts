@extends('layout.main')

@section("content")

<h1>Actor</h1>
<table class="table table-striped table-primary">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Actor</th>
        <th scope="col">Actor ID</th>
        <th scope="col">Last Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($actors as $actor)
            <tr>
                <td>{{$actor->actor_id}}</td>
                <td>{{$actor->first_name}}</td>
                <td>{{$actor->last_name}}</td>
                <td>{{$actor->last_update}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection