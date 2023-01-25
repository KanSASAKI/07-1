<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>おしゃれ着登録</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>登録するおしゃれ着</h2>
                <input type="text" name="post[title]" placeholder="ワンピース" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
           
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>