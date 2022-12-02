<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COAHTECH</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="container">
    <div class="card">
      <h1 class="title">Todo List</h1>
      <div class="todo">
        @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <form action="/" method="post" class="add">
          @csrf
          <input type="text" name="content" class=add_todo>
          <input type="submit" value="追加" class=add_btn>
        </form>
        <form action="/" method="post" class="list"></form>
        <table>
          @csrf
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          <tr>
            <td>日付</td>
            <td>タスク</td>
            <td><button class="button-update">更新</button></td>
            <td><button class="button-delete">削除</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>
</html>