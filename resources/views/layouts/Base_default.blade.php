<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

    <style media="screen">
      body {
        margin: 0;
        text-align: center;
        font-family: "M PLUS 1p";
        font-size: 1.3em;
        width: 100vw;
        height: 100vh;
        background-color: #add8e6;
      }

      span {
        font-size: 1.2em;
        color: #dc143c;
      }

      .top {
        position: absolute;
        top:0;
        left: 0;
        width: 90%;
        height: 95%;
        padding-right: 5%;
        padding-left: 5%;
        padding-bottom: 5%;
        background-color: #add8e6;
      }

      .top h1 {
        margin-top: 10%;
        font-size: 2.5em;
      }

      .btn {
        display: inline-block;
        width: 30%;
        margin: 5%;
        margin-top: 18%;
        margin-bottom: 0;
        border: solid 2px black;
        background-color: #e0ffff;

        transition: all 0.4s;
      }

      .btn:hover {
        background-color: #6495ed;
        border: solid 2px blue;
      }

      .wf-mplus1p { font-family: "M PLUS 1p"; }
    </style>
  </head>
  <body>
    <section class="top">
      @yield('top_content')
    </section>

    @yield('sc');
  </body>
</html>
