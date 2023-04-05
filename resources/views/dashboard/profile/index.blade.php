@extends('layouts.master_dash')

@section('title')
    Profile
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 offset-xl-3 mb-30">
            @include('includes.dashboard.error-message')
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">{{ __('dashboard.personal_information') }}</h5>
                    <form method="POST" action="{{route('profile.update.personal')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('dashboard.name') }}</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $doctorInfo->name }}">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.phone_number') }}
                            </label>

                            <input id="phone_number" type="text"
                                class="form-control @error('phone_number') is-invalid
                                @enderror"
                                name="phone_number" value="{{ old('phone_number', $doctorInfo->phone_number) }}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('dashboard.email') }}</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $doctorInfo->email }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @role('doctor')
                            <div class="custom-file mb-10 mt-10 ">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">
                                    {{ __('dashboard.image') }}
                                </label>
                            </div>
                        @endrole

                        <button type="submit" class="btn btn-primary">{{ __('dashboard.Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-6 offset-xl-3 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">{{ __('dashboard.security_information') }}</h5>
                    <form method="POST" action="{{route('profile.update.security')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('dashboard.current_password') }}</label>
                            <input type="password" name="current_password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">{{ __('dashboard.new_password') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" name="password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword3">{{ __('dashboard.password_confirm') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword3"
                                name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('dashboard.Submit') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
