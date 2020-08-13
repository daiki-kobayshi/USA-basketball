<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        //News::all()->sortByDesc('updated_at')投稿日時順に新しい方から並べることを意味
        $posts = News::all()->sortByDesc('updated_at');
        
        if (count($posts) > 0) {
            //shift()メソッドは、配列の最初のデータを削除し、その値を返すメソッド
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
    
    public function list(Request $request)
    {
        
    }
}
