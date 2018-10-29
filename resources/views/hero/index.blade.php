@extends('layouts.app')

@section('content')


<h1>The hero roster</h1>
@foreach ($hero as $item)
<p>{{$item->name}}</p>
@endforeach

@endsection