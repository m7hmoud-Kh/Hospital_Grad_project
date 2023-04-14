@extends('layouts.master_dash')

@section('title')
{{__('dashboard.detalis_follow')}}
@endsection
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="ml-auto">
                <a href="{{route('follow.index')}}" class="btn btn-primary"> {{__('dashboard.followers')}} </a>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-8">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="">{{__('dashboard.doctor_name')}}</th>
                                <td>{{ $detailsFollow->doctor->name }}</td>
                            </tr>
                            <tr>
                                <th scope="">{{__('dashboard.sick_name')}}</th>
                                <td>{{ $detailsFollow->sick->name }}</td>
                            </tr>
                            <tr>
                                <th scope="">{{__('dashboard.sick_national_id')}}</th>
                                <td>{{ $detailsFollow->sick->national_id }}</td>
                            </tr>
                            <tr>
                                <th scope="">{{__('dashboard.follower_desc')}}</th>
                                <td>{!! $detailsFollow->desc !!}</td>
                            </tr>
                            <tr>
                                <th>{{__('dashboard.created_at')}}</th>
                                <td>{{ $detailsFollow->created_at }}</td>
                            </tr>
                            <tr>
                                <th>{{__('dashboard.updated_at')}}</th>
                                <td>{{ $detailsFollow->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{__('dashboard.surgery')}}
            </h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>{{__('dashboard.surgery_name')}}</th>
                        <th>{{__('dashboard.surgery_status')}}</th>
                        <th>{{__('dashboard.created_at')}}</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $product_count = 0;
                    @endphp
                    @forelse($surgeryByFollowId as $surgery)
                        <tr>
                            <td>{{ ++$product_count }}</td>
                            <td>
                                {{$surgery->name}}
                            </td>
                            <td>{!! $surgery->getStatus($surgery->status) !!}</td>
                            <td>{{ $surgery->created_at?->format('Y-m-d h:i a') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="4">{{__("dashboard.surgery_not_found")}}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{__('dashboard.attachments')}}
            </h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>{{__('dashboard.attachment_name')}}</th>
                        <th>{{__('dashboard.attachemnt_desc')}}</th>
                        <th>{{__('dashboard.created_at')}}</th>
                        <th>{{__('dashboard.more_action')}}</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $product_count = 0;
                    @endphp
                    @forelse($attachmentByFollowId as $attachment)
                        <tr>
                            <td>{{ ++$product_count }}</td>
                            <td>
                                <a href="{{asset('Attachment/'.$attachment->name)}}"
                                    target="_blank">                                {{$attachment->name}}
                                    </a>
                            </td>
                            <td>
                                {{$attachment->description}}
                            </td>
                            <td>{{ $attachment->created_at?->format('Y-m-d h:i a') }}</td>
                            <td>
                            <a href="{{asset('Attachment/'.$attachment->name)}}"
                                class="btn btn-success"
                                download="download">
                                {{__('dashboard.attachment_download')}}
                                </a>
                            </td>


                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="4">{{__("dashboard.attachment_not_found")}}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>

@endsection
