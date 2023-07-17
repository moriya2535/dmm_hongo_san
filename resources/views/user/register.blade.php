<!DOCTYPE html>
<html>
<head>
    <title>ユーザ登録</title>
</head>
<body>
    <h1>ユーザ登録</h1>

   @if ($errors->any())
    <div>
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>

@endif


    <form action="/user/register" method="post">
        @csrf

        <label for="name">名前:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" maxlength="128"><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" maxlength="254"><br>

        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" maxlength="72"><br>

        <input type="submit" value="登録する">
    </form>
</body>
</html>
