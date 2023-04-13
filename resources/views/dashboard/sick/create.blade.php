@extends('layouts.master_dash')

@section('title')
{{__('dashboard.add_sick')}}
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{__('dashboard.add_sick')}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" class="default-color">
                        {{__('dashboard.title')}}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a class="default-color" href="#">{{__('dashboard.sicks')}}</a>
                    </li>
                    <li class="breadcrumb-item active">
                       <a href="#">{{__('dashboard.add_sick')}}</a>
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
                    <h5 class="card-title">{{__('dashboard.sicks')}}</h5>
                    <form action="{{route('sick.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{__('dashboard.name')}}</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                placeholder="{{__('dashboard.name')}}" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="national_id" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.national_id') }}
                            </label>

                             <input id="national_id" type="text" class="form-control @error('national_id') is-invalid
                                @enderror" name="national_id" value="{{ old('national_id') }}"  autofocus>
                        </div>

                        <div class="form-group">

                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.email') }}
                            </label>

                            <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" >
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.phone_number') }}
                            </label>

                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid
                                @enderror" name="phone_number" value="{{ old('phone_number') }}" >
                        </div>


                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.password') }}
                            </label>

                                <input id="password" type="password" class="form-control
                                @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">
                                {{ __('dashboard.password_confirmation') }}
                            </label>

                            <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation"  autocomplete="new-password">
                        </div>



                        <button type="submit" class="btn btn-primary">{{__('dashboard.submit_doctor')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
