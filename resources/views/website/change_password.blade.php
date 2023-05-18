<!DOCTYPE html>
<html>


{{--
<body>
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm text-left">
                    <i class="fa-solid fa-phone fa-bounce"></i><span>08834526</span>
                    <i class="fa-solid fa-envelope fa-beat-fade"></i> اسال اطبائنا
                </div>
                <div class="col-sm text-right">
                    <h3> <span>There Is Hopes </span> </h3>
                </div>
            </div>
        </div>
    </div>

    <!--start navbar-->
    @include('includes.website.nav')
    <!--end navbar-->
    <hr>
    <div class="login-container d-flex align-items-center justify-content-center">
        @include('includes.dashboard.error-message')
        <from class="login-form" method="POST"
        action="{{route('password.sick')}}">
            @csrf --}}
{{-- <h1 class="mb-5 font-weight-light text-uppercase text-right">تغير كلمة المرور</h1>
            <div class="form-group">

                <input type="password" name="current_password"
                    class="form-control text-right rounded-pill" placeholder="كلمة المرور الحاليه"
                    >
            </div>
            <div class="form-group">

                <input type="password" class="form-control text-right rounded-pill"
                     name="password" placeholder=" كلمة المرور الجديده">
            </div>

            <div class="form-group">

                <input type="password" class="form-control text-right rounded-pill"
                     name="password_confirmation" placeholder="تاكيد كلمه المرور الجديده">
            </div> --}}

{{-- <button type="submit" class="btn mt-5 btn-primary btn-block rounded-pill btn-lg">
                {{ __('dashboard.Submit') }}
            </button> --}}
{{-- <input type="text" name="da" value="fdadf">
            <input type="submit" value="submit">
        </from>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change Password</title>
    <!--<link rel='stylesheet' href='css/bootstrap-rtl.css'/>''-->
    <link rel='stylesheet' href="{{ asset('website/css/fontawesome.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/all.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/bootstrap.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/style7.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm text-left">
                    <i class="fa-solid fa-phone fa-bounce"></i><span>08834526</span>
                    <i class="fa-solid fa-envelope fa-beat-fade"></i> اسال اطبائنا
                </div>
                <div class="col-sm text-right">
                    <h3> <span>There Is Hopes </span> </h3>
                </div>
            </div>
        </div>
    </div>
    <!--start navbar-->
    @include('includes.website.nav')
    <!--end navbar-->
    <hr>
    <div class="login-container d-flex align-items-center justify-content-center">
        <form class="login-form" action="{{ route('password.sick') }}" method="post">
            @csrf
            <h1 class="mb-5 font-weight-light text-uppercase text-right">تغير كلمة المرور</h1>
            @include('includes.dashboard.error-message')

            <div class="form-group">

                <input type="password" name="current_password" class="form-control text-right rounded-pill"
                    placeholder="كلمة المرور الحاليه">
            </div>
            <div class="form-group">

                <input type="password" class="form-control text-right rounded-pill" name="password"
                    placeholder=" كلمة المرور الجديده">
            </div>

            <div class="form-group">

                <input type="password" class="form-control text-right rounded-pill" name="password_confirmation"
                    placeholder="تاكيد كلمه المرور الجديده">
            </div>
            <button type="submit" class="btn mt-5 btn-primary btn-block rounded-pill btn-lg">
                {{ __('dashboard.Submit') }}
            </button>
            {{-- <input type="submit" value="submit"> --}}
        </form>
    </div>
</body>

</html>
