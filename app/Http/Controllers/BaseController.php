<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //追加
use App\Http\Requests\BaseRequest; //追加
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
      $thread_id_send = $request -> thread_id;

      return view('display.study_page',['items' => $items,'thread_id_send' => $thread_id_send]);
    }

    public function up_file(BaseRequest $request)
    {
      $request -> photo -> store('public/photo_images'); //これでstorage/app/public/photo_imagesの中に保存される

      return redirect('/base/studypage?thread_id=0');
    }
}
