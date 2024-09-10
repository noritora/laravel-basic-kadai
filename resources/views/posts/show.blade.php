<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="description" content="postのshow">
    <meta name="viewport" content="initial-scale=1.0">
    <title>postのshow</title>
</head>
<body>
    <h1>ID＝{{ $post->id }}の投稿</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>本文</th>
            <th>作成日時</th>
            <th>更新日時</th>
        </tr>
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
        </tr>
    </table>

</body>
</html>
