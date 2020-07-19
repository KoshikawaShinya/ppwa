<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

    <style media="screen">
      body {
        margin: 0;
        width: 98vw;
        height: 100vh;
        font-family: "M PLUS 1p";
        background-color: #add8e6;
        text-align: center;
      }

      header {
        text-align: left;
        height: 10%;
        padding-left: 30px;
        padding-top: 20px;
        margin: 0;
        margin-bottom: 5%;
      }

      header h1 {
        margin: 0;
      }

      table {
        border: solid 2px black;
        border-collapse: collapse;
        background-color: #f5fffa;
      }

      td {
         padding: 0.15em;
         background-color: #f5fffa;
      }

      span {
        font-size: 1.2em;
        color: #dc143c;
      }

      .btn {
        display: inline-block;
        width: 30%;
        margin: 5%;
        margin-top: 5%;
        margin-bottom: 0;
        border: solid 2px black;
        background-color: #e0ffff;

        transition: all 0.4s;
      }

      .btn:hover {
        background-color: #6495ed;
        border: solid 2px blue;
      }

      .submit_btn {
        width: 30%;
      }

      .center {
        position: absolute;
        left: 0;
        width: 70%;
        height: 60%;
        margin: 0;
        text-align: left;
      }

      /* ///////////////////////////////////////////////////////////// */

      .right_bar {
        position: absolute;
        right: 0;
        width: 30%;
        height: 85%;
        margin: 0;

        border-left: solid 2px black;
      }

      .right_bar h3 {
        margin: 0;
      }

      .right_bar_content {
        overflow-y: scroll;
        width: 100%;
        height: 60%;
      }

      /* ///////////////////////////////////////////////////////////// */

      .small_title {
        background-color: #3cb371;
        padding: 20px;
      }

      /* ///////////////////////////////////////////////////////////// */

      .thread_content {
        height: 10%;
        padding-top: 3%;
        border-bottom: dotted 2px black;
      }

      .thread_content::before {
        content: "";
      }

      .thread_content:hover::before {
        content: "このスレッドに投稿する";
      }

      .thread_content:hover {
        background-color: #6495ed;
        transition: all 0.4s;
      }

      .thread_content p {
        margin: 0;
      }

      /* ///////////////////////////////////////////////////////////// */

      .wf-mplus1p { font-family: "M PLUS 1p"; }
    </style>
  </head>
  <body>
    <header>
      @yield('header')
    </header>

    <section class="right_bar">
      @yield('right_bar')
    </section>

    <section class="center">
      @yield('center')
    </section>

    @yield('sc')
  </body>
</html>
