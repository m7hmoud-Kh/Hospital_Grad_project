<nav class="navbar navbar-expand-lg navbar-light text-right">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>Surgical-</span> <span>Oncology</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="project1.html">الصفحة الرئيسية </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#features">خدماتنا <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#doctors">الاطباء</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#Location">الموقع</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{ route('login') }}">تسجيل الدخول </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user fa-2xl" style="color: #0c1627;"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('all.follow')}}">المتابعات</a>
                            <a class="dropdown-item" href="{{route('change.password')}}">تغير كلمة المرور</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                تسجيل خروج
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
