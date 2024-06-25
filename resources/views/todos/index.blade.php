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

  <a href="{{ route('todos.create') }}">タスク追加</a> 
  <table>
  @foreach($todos as $todo)
  <th>{{$todo->title}}</th>
  @endforeach
  </table>
</body>
</html>