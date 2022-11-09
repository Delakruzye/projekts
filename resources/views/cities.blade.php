
@extends('layout.main')

@section("content")
<h1>Cities</h1>
<div class="container">
<table class="table table-striped table-primary">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">City</th>
        <th scope="col">Country ID</th>
        <th scope="col">Last Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cities as $city)
            <tr>
                <th scope="row">{{$city->city_id}}</th>
                <td>{{$city->city}}</td>
                <td>{{$city->country_id}}</td>
                <td>{{$city->last_update}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
</div>