@extends('layouts.Base_workpage')

@section('title','Make AI')

@section('header')
  <h1>みんなで作る<span>AI</span></h1>
@endsection

@section('right_bar')
  <div class="small_title">
    <h3>登録済みのスレッド</h3>
  </div>

  <div class="right_bar_content">
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
    <div class="thread_content">
      <p>画像名 (投稿数)</p>
    </div>
  </div>

  <div class="small_title">
    <h3>新しくスレッドを作成</h3>
  </div>

  <form action="" method="post">
    <p style="margin-top: 30px; margin-bottom: 40px;"><input type="text" name="" value="" placeholder="スレッド名を入力"></p>
    <input type="submit" name="" value="作成" class="submit_btn">
  </form>
@endsection

@section('center')
  <h3 style="margin-left: 30px;" id="test">投稿スレッド :</h3>

  <table style="margin-left: 30px;" id="table" onmousedown="on_click()" onmouseup="off_click()">
    @for($i = 0; $i < 128; $i++)
    <tr>
      @for($j = 0; $j < 128; $j++)
        @for($k = 0; $k < 128; $k++)
          @if($i == $k)
            <td id="cell_{{$j + (128*$k)}}"></td> <!-- cell_0 ～ cell_16383 -->
          @endif
        @endfor
      @endfor
    </tr>
    @endfor
  </table>

  <div class="btn" style="text-align: center; width: 15%;" onclick="del()"><p>削除</p></div>
  <div class="btn" style="text-align: center; width: 20%;"><p>投稿</p></div>
@endsection

@section('sc')
  <script type="text/javascript">
    console.log("javascript");
    var clickElement = document.getElementById("table");
    var interval; var eventID

    clickElement.addEventListener("mouseover", function(event) {
      eventID = event.target.id;
      console.log("clicked = " + eventID);
    },false);

    //////////////////////////////////////////////////////////////////////////////////////

    function paint()
    {
      console.log("paint : " + eventID);
      document.getElementById(eventID).style.backgroundColor = "black";
    }

    function on_click()
    {
      //クリックされたときに実行
      console.log("onclick");
      interval = setInterval(paint, 1);
    }

    function off_click()
    {
      //クリックが離れたときに実行
      console.log("offclick");
      clearInterval(interval);
    }

    function del()
    {
      console.log("del");
      location.reload();
    }
  </script>
@endsection
