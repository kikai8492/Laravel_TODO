<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if($errors->any())
    <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
      <ul>
        @foreach($errors->all() as $error)
          <li class="text-red-400">{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1>タスク編集</h1>

</body>
</html>