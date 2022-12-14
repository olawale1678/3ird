<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>3ird</title>
</head>

<body class="bg-info">


<center>
    <form method="post" action="/sell/login" class="p-4 m-3">
        @csrf
        <h3 class="text-decoration-underline fw-bold text-secondary mb-3">Login</h3>
        <div class="mb-3">
            <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control w-25" id="exampleDropdownFormEmail1" placeholder="3ird@example.com" value="{{old('username')}}">
        </div>
        @error('username')
        <p class="alert alert-danger w-25 p-1">{{$message}}</p>
        @enderror
        @if(session('username'))
            <p class="alert alert-danger w-25 p-1">{{session('username')}}</p>
        @endif
            <div class="mb-3">
            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control w-25" id="exampleDropdownFormPassword1" placeholder="****" value="{{ old('password') }}">
        </div>
        @error('password')
        <p class="alert alert-danger w-25 p-1">{{$message}}</p>
        @enderror
        @if(session('password'))
            <p class="alert alert-danger w-25 p-1">{{session('password')}}</p>
        @endif


        <button type="submit" class="btn btn-primary mt-3">Sign in</button>



    </form>
    <div class="dropdown-divider w-50"></div>
    <a class="text-decoration-none w-25 text-dark" href="/sell/create">New around here? Sign up</a><br>
    <a class="text-decoration-none w-50 text-dark" href="/forgot-password">Forgot password?</a>
</center>

</body>
</html>