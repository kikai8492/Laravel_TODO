<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action='{{route('blogs.store')}}' method='post'>
    @csrf
    <h1>タスク追加</h1>
    <h3>タスク名:<input type='text'></input><h3>
    <h4>タスク詳細:<input type='text'></input><h4>
    <h4>期限:<input type="datetime-local"></h4>
    <button type='submit'>追加</button>
  </form> 
</body>
</html>