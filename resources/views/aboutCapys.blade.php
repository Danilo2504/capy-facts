@extends('layouts.app')
@section('title', 'About Capys')

@section('content')
<div>
  <h2>Scientific Name: {{$data->scientific_name}}</h2>
  <br />
  <p>{{$data->description}}</p>
  <br />
  <p>Weight: {{$data->weight}}</p>
  <br />
  <p>Heigth: {{$data->heigth}}</p>
  <br />
  <p>Length: {{$data->length}}</p>
</div>
@endsection