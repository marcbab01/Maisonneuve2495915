<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-success bg-success navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold text-white" href="#">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('article.index') }}">Articles</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('article.create') }}">Nouvel Article</a>
                            </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('user.index') }}">@lang('lang.user_list')</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="studentsDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Students</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('student.create') }}">@lang('lang.new_student')</a></li>
                                <li><a class="dropdown-item" href="{{ route('student.index') }}">@lang('lang.enrolled')</a></li>
                                <li><a class="dropdown-item" href="#">@lang('lang.graduated')</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        {{-- Language Switcher --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="langDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">@lang('lang.language')</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('lang', 'en') }}">@lang('lang.english')</a></li>
                                <li><a class="dropdown-item" href="{{ route('lang', 'fr') }}">@lang('lang.french')</a></li>
                            </ul>
                        </li>

                        {{-- Auth Links --}}
                        <li class="nav-item">
                            @guest
                                <a class="nav-link text-white" href="{{ route('login') }}">@lang('lang.login')</a>
                            @else
                                <a class="nav-link text-white" href="{{ route('logout') }}">@lang('lang.logout')</a>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Main Content --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container text-center text-success fw-semibold">
            &copy; {{ date('Y') }} {{ config('app.name') }} — All Rights Reserved.
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
</body>
</html>
