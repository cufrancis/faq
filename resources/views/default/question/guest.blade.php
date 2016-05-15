{{-- 当这个问题是登陆用户提出来的，则不显示回答问题框，只显示答案，并且有采纳按钮 --}}

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
这里显示被采纳答案 和其他答案
