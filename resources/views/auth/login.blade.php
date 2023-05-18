<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="{{asset('website/icon/login_icon_176905.png')}}">
    <link rel="stylesheet" href="{{asset('website/css/login.css')}}">

</head>
<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf
    <img src="{{asset('website/images/')}}" alt="user">
    <h2>login</h2>
    <input  type="text" class="form-control @error('national_id') is-invalid
                @enderror" name="national_id" value="{{ old('national_id') }}" required autofocus placeholder="الرقم القومي">
    @error('national_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


    <input id="password" type="password" class="form-control
    @error('password') is-invalid @enderror"
    name="password" required
    autocomplete="current-password" placeholder="كلمة السر">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input  type="submit"  value="login">
    </form>
</body>
</html>

