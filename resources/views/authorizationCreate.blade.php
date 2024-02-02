<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

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
<form action="{{route('authorization.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="w-25 p-3 mx-auto">
            <div class="mb-3">
                <label for="Login" class="form-label">Input Login</label>
                <input type="login" name="login" class="form-control" id="login" placeholder="login">
            </div>
            <div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Input Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>
            </div>

            <div class="mb-3">
                <label for="Name" class="form-label">Input Name</label>
                <input type="name" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div>
                <select class="form-select" name="class" aria-label="class">
                    <option selected>Choose class</option>
                    <option value="1">Warrior</option>
                    <option value="2">Wizard</option>
                    <option value="3">Archer</option>
                </select>
            </div>
            <div class="p-3">
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>

        </div>
    </div>
</form>
</body>
</html>


