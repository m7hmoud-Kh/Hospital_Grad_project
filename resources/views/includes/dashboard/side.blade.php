<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
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
        </ul>
    </div>
</div>
