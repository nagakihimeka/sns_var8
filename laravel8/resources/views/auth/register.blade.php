<!-- 新規登録 -->

@extends('layouts.logout')
@section('content')
<div class="register_title">新規ユーザー登録</div>
<form action="{{route('register.create')}}" class="register_form" id="register_form" method="POST">
  @csrf
  <div class="">
    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="" name="name">ユーザー名</label>
    <input class="input" type="text" id="name" name="name">
  </div>
  <div class="">
    <label for="" name="mail">メールアドレス</label>
    <input class="input" type="text" id="mail" name="mail">
  </div>
  <div class="">
    <label for="" name="pass">パスワード</label>
    <input class="input" type="text" id="pass" name = "pass">
  </div>
  <div class="">
    <label for="" name="pass_sub">パスワード確認</label>
    <input class="input" type="text" id="pass_sub">
  </div>
<input type="submit" form="register_form" value="新規登録">
</form>

@endsection
