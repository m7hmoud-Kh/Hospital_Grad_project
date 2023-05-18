<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Follower</title>

    <link rel='stylesheet' href="{{ asset('website/css/fontawesome.min.css
            ') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/all.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/bootstrap.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/style5.css') }}" />

</head>

<body>
    <!--start upper bar-->
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm text-left">
                    <h3> <span>There Is Hopes </span> </h3>
                </div>
            </div>
        </div>
    </div>
    <!--end upper dar-->


    <!--start navbar-->
    @include('includes.website.nav')
    <!--end navbar-->
    <hr><br>

    <!--start SEARCH-->
    <nav class="navbar navbar-light bg-light ">
        <form class="form-inline ">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
        </form>
    </nav>
    <!--end SEARCH-->

    <!--start table-->
    <div class="table-responsive-sm">
        <table class="table table-bordered text-right">
            <!--<table class="table table-hover">-->
            <!--<table class="table table-striped">-->
            <!--<table class="table table-dark"></table>-->
            <!--<table class="table table-borderless">-->
            <thead class="thead-light">
                <th>عمليات</th>
                <th>تفاصيل المتابعه</th>
                <th>اسم الدكتور</th>
                <th>#</th>
            </thead>
            <tbody>
                @php
                    $increment = 0;
                @endphp
                @forelse ($allFollow as $follow)
                <tr>
                    <td>
                        <a href="{{route('followdetailsSick',$follow->id)}}"
                            class="btn btn-info">
                            {{__("dashboard.detalis_follow")}}
                        </a>
                    </td>
                    <td>{!!$follow->desc!!}</td>
                    <td>{{$follow->doctor->name}}</td>
                    <td>{{ ++$increment }}</td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="4">لا يوجد متابعات</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

    <!--end table-->

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
