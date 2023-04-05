@extends('layouts.master_dash')

@section('title')
{{__('dashboard.doctor')}}
@endsection
@section('style')
    <link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <a class="btn btn-primary" href="{{route('doctor.create')}}">{{__('dashboard.add_doctor')}}</a> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                        <thead>
                            <tr>
                                <th scope="">#</th>
                                <th scope="">{{__('dashboard.name')}}</th>
                                <th scope="">{{__('dashboard.image')}}</th>
                                <th scope="">{{__('dashboard.national_id')}}</th>
                                <th scope="">{{__('dashboard.phone_number')}}</th>
                                <th scope="">{{__('dashboard.email')}}</th>
                                <th scope="">{{__('dashboard.more_action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $product_count = 0;
                            @endphp
                            @foreach ($data['doctors'] as $doctor)
                                <tr>
                                    <td>{{ ++$product_count }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td><img src="{{ asset('Doctor_image/' . $doctor->image) }}" width="100"
                                        height="100" alt="{{ $doctor->name }}"></td>
                                    <td>{{ $doctor->national_id }}</td>
                                    <td>{{ $doctor->phone_number }}</td>

                                    <td>{{ $doctor->email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-id="{{ $doctor->id }}" data-name="{{ $doctor->national_id }}"
                                            data-target="#exampleModalCenter"> Delete </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="">#</th>
                                <th scope="">{{__('dashboard.name')}}</th>
                                <th scope="">{{__('dashboard.image')}}</th>
                                <th scope="">{{__('dashboard.national_id')}}</th>
                                <th scope="">{{__('dashboard.phone_number')}}</th>
                                <th scope="">{{__('dashboard.email')}}</th>
                                <th scope="">{{__('dashboard.more_action')}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        {{__('dashboard.delete_doctor')}}
                    </div>
                </div>
                <form action="{{route('doctor.destory',1)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        {{__('dashboard.alert_delete_doctor')}}
                        <strong><span id="name"></span></strong>
                        <input type="hidden" name="id" id="doctor_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class='btn btn-danger'>
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('backend/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
        $("#exampleModalCenter").on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var modal = $(this);
            modal.find('.modal-body #name').html(name);
            modal.find('.modal-body #doctor_id').val(id);
        });
    </script>
@endsection
