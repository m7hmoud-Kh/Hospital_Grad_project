<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            @role('head_of_hospital')
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                        <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{__('dashboard.doctor')}}</span></div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                        <li> <a href="{{route('doctor.index')}}">{{__('dashboard.all_doctor')}}</a> </li>
                        <li> <a href="{{route('doctor.create')}}">{{__('dashboard.add_doctor')}}</a> </li>
                    </ul>
                </li>
            @endrole

            @role('doctor')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                    <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{__('dashboard.sicks')}}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('sick.index')}}">{{__('dashboard.all_sick')}}</a> </li>
                    <li> <a href="{{route('sick.create')}}">{{__('dashboard.add_sick')}}</a> </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#followers">
                    <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{__('dashboard.followers')}}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="followers" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('follow.index')}}">{{__('dashboard.all_follower')}}</a> </li>
                </ul>
            </li>
        @endrole
        </ul>
    </div>
</div>
