{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
<!--テンプレート（viewファイル）の継承（読み込み）を行うメソッド。layouts/admin.blade.phpが置き換わるという認識。
-->

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成を埋め込む'　--}}
@section('title', 'ニュースの新規投稿')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>ニュース投稿画面</h2>
            <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
                
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                </div>
               <div class="form-group row">
                    <label class="col-md-2" for="category">分野</label>
                    <div class="col-md-10">
                        <p>
                         <label><input type="radio" class="form-control" name="category" value="NBA" >NBA</label>
                         <label><input type="radio" class="form-control" name="category" value="大学バスケ" >大学バスケ</label>
                         <label><input type="radio" class="form-control" name="category" value="高校バス" >高校バスケ</label>
                         <label><input type="radio" class="form-control" name="category" value="その他" >その他</label>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">本文</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="title">画像</label>
                    <div class="col-md-10">
                         <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="投稿">    
            </form>
        </div>
    </div>
</div>
@endsection