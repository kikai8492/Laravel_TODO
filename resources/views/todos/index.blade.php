<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>タスク一覧</h1>
  @if(session('succcess'))
	<div>
		{{ session('succcess') }}
	</div>
  @endif

  <a href="{{ route('todo.create') }}">タスク追加</a> 
  <table>
    <thead>
      <tr>
        <th scope="col">タスク名</th>
        <th scope="col">期限</th>
      </tr>
    </thead>
    @foreach($todos as $todo)
    <tr>
      <td>{{$todo->title}}</td>
      <td>{{$todo->limit}}</td>
    </tr>
    <tr>

  @endforeach
  </table>
</body>
</html>