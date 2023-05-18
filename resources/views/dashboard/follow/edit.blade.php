@extends('layouts.master_dash')

@section('title')
    Edit
@endsection

@section('content')

@include('includes.dashboard.error-message')

<div class="row">

    <div class="col-xl-12 mb-30">
        <div class="card card-statistics mb-30">
            <div class="card-body">
                <h5 class="card-title">{{__('dashboard.followers')}}</h5>
                <form action="{{route('follow.update',$follow->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('dashboard.name')}}</label>
                        <input type="text"  class="form-control" id="exampleInputPassword1" readonly
                        value="{{$follow->sick->name}}">
                    </div>

                    <div class="form-group">
                        <label for="national_id" class="col-md-4 col-form-label text-md-end">
                            {{ __('dashboard.national_id') }}
                        </label>

                        <input id="national_id" type="text" class="form-control"
                        value="{{$follow->sick->national_id}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="3" class="form-control" id="summernote">
                                        {!! old('description',$follow->desc) !!}
                        </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">{{__('dashboard.submit_follower')}}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-12  mb-30">
        <div class="card card-statistics mb-30">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.surgery') }}</h5>
                <form method="POST" action="{{route('surgery.store',$follow->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('dashboard.surgery_name') }}</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="operation_time">{{ __('dashboard.surgery_operation') }}</label>
                        <input type="date" name="operation_time" class="form-control" id="operation_time"
                            value="">

                        @error('operation_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('dashboard.Submit') }}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mb-30">
        <div class="card card-statistics mb-30">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.attachments') }}</h5>
                <form method="POST" action="{{route('attachment.store',$follow->id)}}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="desc">{{ __('dashboard.attachemnt_desc') }}</label>
                        <input type="text" name="desc" class="form-control" id="desc"
                            required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="custom-file mb-10 mt-10 ">
                        <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">
                            {{ __('dashboard.attachment_file') }}
                        </label>
                    </div>



                    <button type="submit" class="btn btn-primary">
                        {{ __('dashboard.attachment_file') }}
                    </button>
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
