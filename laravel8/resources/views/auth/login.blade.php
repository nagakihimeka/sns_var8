@extends('layouts.logout')
@section('content')
<div class="form-title">ログインする</div>
<form action="" method="POST" class="login_form">
   @csrf
   <div class="">
     <label for="" name="mail">メールアドレス</label>
     <input type="text" id="mail">
   </div>
   <div class="">
    <label for="" name="pass">パスワード</label>
    <input type="text" id="pass">
   </div>
    <button type="submit" class="login_button">ログイン</button>
</form>
<a href="{{route('register')}}" class="register_link">新規ユーザーの方はこちら</a>


@endsection
