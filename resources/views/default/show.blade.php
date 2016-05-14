@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">{{ $question->title }} |<em> Type:@if($question->typeInfo != NULL)
                    {{ $question->typeInfo->name }}
                  @else
                    未分类
                  @endif
                </em></div>

                  <div class="panel-body">
                      {{ $question->content }}
                  </div>
              </div>
              <button class="btn btn-primary" onclick="history.go(-1)">
                << Back
          </div>
      </div>
  </div>
@endsection
