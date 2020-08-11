@extends('layouts.Base_workpage')

@section('title','Make AI')

@section('other')
  <div id="loding_display"></div>
@endsection

@section('header')
  <h1>みんなで作る<span>AI</span></h1>
@endsection

@section('right_bar')
  <div class="small_title">
    <h3>登録済みのスレッド</h3>
  </div>

  <div class="right_bar_content" onmousedown="thread_onclick()" id="thread_id">
    @php
    $ii = 0;
    @endphp
    @foreach($items as $item)
      @if($ii != 0)
        <div class="thread_content" id="thread_{{$ii}}">
          <p>{{$item -> thread}} ({{$item -> number}})</p>
        </div>
      @endif
      @php
        $ii++;
      @endphp
    @endforeach

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

  <form action="/db_studypage/post_thread" method="post">
    @csrf
    <p style="margin-top: 30px; margin-bottom: 40px;"><input type="text" name="thread_name" value="" placeholder="スレッド名を入力"></p>
    <input type="submit" name="" value="作成" class="submit_btn">
  </form>
@endsection

@section('center')
  <h3 style="margin-left: 30px;" id="use_thread">投稿スレッド :</h3>

  <table style="margin-left: 30px;" id="table" onmousedown="on_click()" onmouseup="off_click()">
    @if($picture_judg_send == 1)
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
    @else
    <div class="btn_move" onclick="picture_on()"><p>書き始める</p></div>
    @endif
  </table>

  <div class="btn" style="text-align: center; width: 15%;" onclick="del()"><p>削除</p></div>
  <div class="btn" style="text-align: center; width: 20%;" onclick="post_picture()"><p>投稿</p></div>
@endsection

@section('sc')
  <script type="text/javascript">
    var clickElement = document.getElementById("table");
    var threadElement = document.getElementById("thread_id");
    var interval; var eventID;
    var clicked_thread = 1;

    clickElement.addEventListener("mouseover", function(event) {
      eventID = event.target.id;
      console.log("clicked = " + eventID);
    },false);

    //////////////////////////////////////////////////////////////////////////////////////

    window.onload = function() {
      console.log("javascript");

      document.getElementById("use_thread").innerHTML = "投稿スレッド : <span>{{$thread_select -> thread}}</span>";
      console.log("chenge");
    }

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
      location.href = "http://localhost:8000/base/studypage?thread_id=" + "{{$thread_id_send}}" + "&picture_on=0";
    }

    function post_picture()
    {
      console.log("post_picture");
      location.href = "http://localhost:8000/db_studypage/studypage?thread_id=" + "{{$thread_id_send}}" + "&picture_on={{$picture_judg_send}}";
    }

    //////////////////////////////////////////////////////////////////////////////////////

    function thread_onclick()
    {
      var click_eventID;
      console.log("click MAX({{$ii}})");

      threadElement.addEventListener("click", function(event) {
        click_eventID = event.target.id;
        console.log("clicked = " + click_eventID);

        for(var i = 0; i < {{$ii}}; i++) {
          if(click_eventID == "thread_" + i) {
            location.href = "http://localhost:8000/base/studypage?thread_id=" + (i+1) + "&picture_on={{$picture_judg_send}}";
          }
        }
      },false);

    }

    //////////////////////////////////////////////////////////////////////////////////////

    function picture_on()
    {
      console.log("picture_on");
      location.href = "http://localhost:8000/base/studypage?thread_id=" + "{{$thread_id_send}}" + "&picture_on=1";
    }
  </script>
@endsection
