<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
      //ログインフォーム
      return view('display.index');
    }

    public function study()
    {
      //学習ページ
      return view('display.study_page');
    }
}
