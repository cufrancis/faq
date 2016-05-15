@extends('layouts.app')

@section('content')
  <!-- 实例化编辑器 -->
  <script type="text/javascript">
      var ue = UE.getEditor('container');
          ue.ready(function() {
          ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
      });
  </script>

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
                      {!! $question->content !!}
                  </div>
              </div>
              @if($question->adoption == 0 && $question->uid != Auth::user()->id)
                @include(config('web.theme').'question/guest')
              @else
                @include(config('web.theme').'question/author')
              @endif

              {{-- 显示答案 --}}
              {{-- {{ dd($question->adoption) }} --}}
              @foreach($answers as $answer)
                <div class="panel panel-default">
                  <div class="panel-heading"><a href='{{ url('/user', ['id' =>  $answer->hasOneUser->id]) }}'>{{ $answer->hasOneUser->name }}</a>
                    @if($question->uid == Auth::user()->id)
                      @if( $question->adoption == 0)
                        <em>|<a href="{{ url('/question/adoption', ['qid' => $question->id, 'aid'  =>  $answer->id]) }}">采纳为最佳答案</a></em>
                      @else
                        @if($question->adoption == $answer->id)
                        <h1>最佳答案</h1>
                        @endif
                      @endif
                    @endif
                  </div>
                  <div class="panel-body">{!! $answer->content !!}</div>

                </div>
              @endforeach


              <button class="btn btn-primary" onclick="history.go(-1)">
                << Back
          </div>
      </div>
  </div>
@endsection
