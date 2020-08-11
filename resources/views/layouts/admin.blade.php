<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <!--↑大かっこの中身を文字列に置換し、HTMLの中に記載するということです。-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible"content="IE=edge">
            <!--↑windowsの基本ブラウザであるedgeに対応するという記載。-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--↑画面幅を小さくしたとき、例えばスマートフォンで見たときなどに文字や画像の大きさを調整してくれるタグ。-->
            
            <!-- CSRF Token -->
            {{-- 後の章で説明します --}}
            <meta name="csrf-token" content="{{ csrf_token()}}">
            {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
            <title>@yield('title')</title>
            <!--↑指定したセッションの内容を表示するために使用。titleというセッションの内容を表示。-->
            
            <!-- Scripts -->
            {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
            <script src="{{ secure_asset('js/app.js') }}" defer></script>
            <!--asset(‘ファイルパス’)は、publicディレクトリのパスを返す関数。要するに「/js/app.js」というパスを生成。-->
            
            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" 
rel="stylesheet" type="text/css">
            
            <!-- Styles -->
            {{-- Laravel標準で用意されているCSSを読み込みます --}}
            <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
            {{-- この章の後半で作成するCSSを読み込みます --}}
            <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">
                {{-- 画面上部に表示するナビゲーションバーです。 --}}
                <nav class="navbar navbar-expand-md navbar-dark navbar-larvel">
                    <!--↑navbarとはナビゲーションバーについてのこと-->
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <!--↑url(“パス”)はそのまんまURLを返すメソッド。-->
                            {{ config('app.name', 'Laravel') }}
                            <!--↑assetと似たような関数で、configフォルダのapp.phpの中にあるnameにアクセス。-->
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>    
                        </button>                        
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <!--- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto"></ul>
                        </div>
                    </div>
                </nav>
                {{-- ここまでナビゲーションバー --}}
                
                <main class="py-4">
                    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                     @yield('content')
                </main>
            </div>
        </body>
</html>