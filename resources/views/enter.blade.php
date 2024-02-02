@extends('Enter.authorization')
@section('authorization')
    <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('authorization.check')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="Login" class="form-label">Input Login</label>
        <input type="login" name="login" class="form-control" id="login" placeholder="login">
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Input Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enter</button>
        <a  href="{{route('authorization')}}">
            <button type="button" class="btn btn-primary">Registration</button>
        </a>
    </div>

</form>
</body>
</html>
@endsection

