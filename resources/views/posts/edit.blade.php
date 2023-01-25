<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>おしゃれ着名</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            
            <input type="submit" value="保存">
            <p><a href="/">戻る</a></p>
        </form>
    </div>
</body>