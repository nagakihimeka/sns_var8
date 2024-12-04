<!-- 未ログインページの共通 -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SNS課題~laravel8~</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="css/logout.css">

</head>
<body>
  <div class="container">

    <div class="login">
      <div class="login_title">
        <div class="title_main">Atls<span>as</span>
        </div>
        <div class="title_sub">Social Network Service</div>
      </div>
      <div class="login_box">
        @yield('content')
      </div>
    </div>

  </div>
</body>
</html>
