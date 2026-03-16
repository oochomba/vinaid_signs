<header id="header" class="header d-flex align-items-center sticked stikcy-menu">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('') }}" class="logo d-flex align-items-center">
            <img src="{{ url('assets/front/assets/images/logoblack.png') }}" alt="logo">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('') }}" class="">Home</a></li>
                <li><a href="{{ url('about') }}" class="">About Us</a></li>
                <li class="dropdown"><a href="{{ url('services') }}"><span>Services</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    @php
                        $rootCategories = App\Models\CategoryModel::getRootCategories();
                    @endphp
                    @if (!empty($rootCategories))
                        <ul>
                            @foreach ($rootCategories as $service)
                                <li><a href="{{ url($service->slug) }}">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif

                </li>
                <li><a href="{{ url('projects') }}"><span>Projects</span>
                    </a>
                </li>
                <li class="dropdown"><a href="javascript:;"><span>Blog</span> </a>
                </li>
            </ul>
        </nav>
        <a href="{{ url('contact') }}" class="d-none d-md-flex default-theme-btn-one">Contact Us <span></span></a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
