<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow Details </title>
    <!--<link rel='stylesheet' href='css/bootstrap-rtl.css'/>-->
    <link rel='stylesheet' href="{{ asset('website/css/fontawesome.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/all.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/bootstrap.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/style4.css') }}" />
</head>

<body>
    <!--start upper bar-->
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <!--
            <div class="col-sm text-left">
                <i class="fa-solid fa-phone fa-bounce"></i><span class="get-quote">0882332016</span><hr>
                <i class="fa-solid fa-envelope fa-beat-fade"></i> <span class="get-quote"  > اسال اطبائنا </span>
            </div>-->
                <div class="col-sm text-left">
                    <!--<span>Surgical-</span><span class="get quote">oncology</span>  -->
                    <h4>There Is <span class="text-danger">Hopes</span></h4>
                </div>
            </div>
        </div>
    </div>
    <!--end upper dar-->


    <!--start navbar-->
    @include('includes.website.nav')
    <!--end navbar-->


    <!--start card-->
    <div class="card w-100  textr-right">
        <div class="card-body">
            <div class="get-quote text-right">
                <hr><br>
                <label> {{ $follow->doctor->name }}:اسم الدكتور </label>
                <hr><br>
                <label>{{ $follow->doctor->national_id }}:الرقم القومي</label>
                <hr><br>
                <label>{{ $follow->sick->name }}:اسم المريض</label>
                <hr><br>
                <label>{!! $follow->desc !!}:تفاصيل المتابعه</label>
                <hr><br>
                <label>{{ $follow->updated_at }}:تم التعديل عليه</label>
                <hr><br />
                <a href="{{ route('all.follow') }}" class="btn btn-info text-center m-3">المتابعات </a>
            </div>

        </div>
    </div>
    <!--end card-->

    <br>
    <hr>

    <div class="table-responsive-sm">
        <table class="table table-bordered table-dark text-right">
            <thead class="thead-dark ">
                <th>عمليات</th>
                <th>ميعاد العمليه</th>
                <th>حالة العملية </th>
                <th>اسم العمليه </th>
            </thead>
            <tbody>
                @forelse ($follow->surgery as $surgey)
                    <tr class="table-light">
                        <td>
                            @if ($surgey->operation_time > now() && $surgey->status == 0)
                            <form action="{{route('surgey.status',$surgey->id)}}" method="post">
                                @csrf
                                <input type="radio" name="status" id="agree" value="1">
                                <label for="agree" >اوافق</label>
                                <br>
                                <input type="radio" name="status" id="disagree" value="2">
                                <label for="disagree">لا اوافق</label>
                                <br>
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </form>
                            @else
                            ---
                            @endif
                        </td>
                        <td>{{ $surgey->operation_time }}</td>
                        <td>{!! $surgey->getStatus($surgey->status) !!}</td>
                        <td>{{ $surgey->name }}</td>
                    </tr>
                @empty
                    <tr class="table-light">
                        <td colspan="4" class="text-center">لا توجد عمليات</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="table-responsive-sm">
        <table class="table table-bordered table-dark  text-right">
            <thead class="thead-dark">
                <th>تم اضافته </th>
                <th>وصف المستند </th>
                <th>اسم المستند </th>
                <th>#</th>
            </thead>
            <tbody>
                @php
                    $increment = 0;
                @endphp
                @forelse ($follow->attachment as $attachment)
                    <tr class="table-light">
                        <td>{{ $attachment->created_at }}</td>
                        <td>{{ $attachment->description }}</td>
                        <td><a href="{{ asset('Attachment/' . $attachment->name) }}" class="btn btn-success"
                                download="download">
                                {{ __('dashboard.attachment_download') }}
                            </a>
                        </td>
                        <td>{{ ++$increment }}</td>
                    </tr>
                @empty
                    <tr class="table-light">
                        <td colspan="4" class="text-center">لا يوجد عمليات</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
</body>

</html>
