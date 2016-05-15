@extends('layouts.app')

@section('content')


<div class="container">
  <a href="{{ url('/question/ask') }}">我要提问</a>
  <ul>
    @foreach($types as $type)
      <li><a href="{{ url("type/$type->id") }}">{{ $type->name }}</a></li>
    @endforeach
  </ul>

  <h1>Page {{ $questions->currentPage() }} of {{$questions->lastPage()}}</h1>
  <ul>
    @foreach ($questions as $question)
      <li>
        <a href="{{ url("show/$question->id") }}">{{ $question->title }}</a>
        <em>{{ $question->published_at }}</em>
        <p>
          {{ str_limit($question->content) }}
        </p>
      </li>
    @endforeach
  </ul>
  <hr />
  {!! $questions->render() !!}
</div>


@endsection
