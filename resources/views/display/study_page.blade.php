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
  <h3 style="margin-left: 30px;">投稿スレッド :</h3>

  <table style="margin-left: 30px;">
    @for($i = 0; $i < 30; $i++)
    <tr>
      @for($j = 0; $j < 30; $j++)
        <td></td>
      @endfor
    </tr>
    @endfor
  </table>

  <div class="btn" style="text-align: center; width: 15%;"><p>削除</p></div>
  <div class="btn" style="text-align: center; width: 20%;"><p>投稿</p></div>
@endsection
