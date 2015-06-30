@extends('app')

@section('content')
  @if(count($users))
  <ul class="list-group">
    @foreach($users as $user)
      <li class="list-group-item">{{ $user->email }}</li>
    @endforeach
  </ul>
  @else
    <div class="panel-default">
      <div class="panel-header">None Found</div>
      <div class="panel-body">
        <p>No Users were found</p>
      </div>
    </div>
  @endif
@endsection