@extends('layouts.app')

@section('content')
  <div class="conatiner">
  @if($questions != NULL)
    <ul>
      @foreach($questions as $question)
        <li>
          <a href="{{ url("show/$question->id") }}">{{ $question->title }}</a>
          <em>{{ $question->created_at }}</em>
          <p>{{ $question->content }}</p>
        </li>
      @endforeach
    </ul>
  @else
    此分类下还没有问题哦
  @endif
</div>

{{-- <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>
</div> --}}
@endsection
