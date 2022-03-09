<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  body {
    margin: 0px;
    background-color: #1F2937;
  }

  .all {
    margin: 0px 0px;
  }

  .header {
    height: 60px;
  }

  .title {
    color: white;
    font-weight: bold;
    display: inline-block;
    margin-left: 30px;
    width: 75%;
  }

  .card {
    background-color: white;
    height: auto;
    margin-top: 0px;
    padding-bottom: 30px;
  }

  .footer-text {
    text-align: center;
    margin-top: 5px;
    color: white;
  }
</style>

<body>
  <div class="all">
    <div class=header>
      <h1 class=title>User inc.</h1>
      @yield('logout')
    </div>
    <div class="card">
      @yield('card')
    </div>
    <div>
      <p class=footer-text>User inc.</p>
    </div>
  </div>
</body>

</html>