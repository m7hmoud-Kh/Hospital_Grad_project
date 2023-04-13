@extends('layouts.master_dash')

@section('title')
{{__('dashboard.add_follow')}}
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{__('dashboard.add_follow')}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" class="default-color">
                        {{__('dashboard.title')}}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a class="default-color" href="#">{{__('dashboard.followers')}}</a>
                    </li>
                    <li class="breadcrumb-item active">
                       <a href="#">{{__('dashboard.add_follow')}}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>


    @include('includes.dashboard.error-message')

    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">{{__('dashboard.followers')}}</h5>
                    <form action="{{route('follow.store',$sickInfo->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{__('dashboard.name')}}</label>
                            <input type="text"  class="form-control" id="exampleInputPassword1" readonly
                            value="{{$sickInfo->name}}">
                        </div>

                        <div class="form-group">
                            <label for="national_id" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.national_id') }}
                            </label>

                            <input id="national_id" type="text" class="form-control"
                            value="{{$sickInfo->national_id}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control" id="summernote">
                                            {!! old('description') !!}
                            </textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">{{__('dashboard.submit_follower')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"> </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
