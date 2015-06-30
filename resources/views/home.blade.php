@extends('app')

@section('content')
  <ul class="list-group">
    @foreach($users as $user)
    <li class="list-group-item">{{ $user->id }} / {{ $user->email }}</li>
    @endforeach
  </ul>
@endsection