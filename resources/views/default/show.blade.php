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
                      {{ $question->content }}
                  </div>
              </div>

              @if($question->adoption == 0)
                <div class="panel panel-default">
                  <div class="panel-heading">
                    我来回答
                  </div>
                  <div class="panel-body">
                    @if(Auth::guest())
                      请先登陆
                    @else
                      <form action="{{ url("/answer/store/$question->id")}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" type="text/plain"></script>

                        <input type="submit" value="提交"/>
                      </form>
                    @endif
                  </div>
                </div>
              @else
                这里显示被采纳答案
              @endif

              <button class="btn btn-primary" onclick="history.go(-1)">
                << Back
          </div>
      </div>
  </div>
@endsection
