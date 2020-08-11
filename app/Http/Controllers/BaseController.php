<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //追加
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
      //ログインフォーム
      return view('display.index');
    }

    public function study_page(Request $request)
    {
      //学習ページ
      $items = DB::table('picture') -> get();
      $thread_select = DB::table('picture') -> where('id' , $request -> thread_id) -> first();
      $thread_id_send = $request -> thread_id;
      $picture_judg_send = $request -> picture_on;

      return view('display.study_page',['items' => $items, 'thread_select' => $thread_select, 'thread_id_send' => $thread_id_send, 'picture_judg_send' => $picture_judg_send]);
    }
}
