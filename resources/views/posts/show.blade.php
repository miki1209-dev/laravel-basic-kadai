<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>投稿詳細画面</title>
</head>

<body>
	<h1>投稿詳細画面ID{{ $post->id }}の画面</h1>
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
