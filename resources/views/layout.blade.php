<!DOCTYPE html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900'
          rel='stylesheet' type='text/css'>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script type="text/javascript" src="{{'/js/scripts.js'}}"></script>
    <link rel="stylesheet" href="{{ url('/css/modal.css') }}">

    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>

    <script type="text/javascript" src="{{'/js/firebase.js'}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <!-- programming language icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Information about my study choice and motivation.">
</head>
<html lang="en">

<body class="content">
    <nav class="sidebar sidebar-block animate-left collapse center" style="z-index:3; width:300px; font-weight:bold"
         id="sidebar"><br>
        <h3 class="p-4 center"><b>Daan van Hekken</b></h3>
        <a href="{{ url('/') }}" class="sidebar-item sidebar-button {{ Request::path() === '/' ? 'active' : '' }}">
            <i class="bi bi-house me-2"></i>
            Home
        </a>
        <a href="{{ url('/dashboard') }}" class="sidebar-item sidebar-button {{ Request::path() === 'dashboard' ? 'active' : '' }}">
            <i class="bi bi-window-sidebar me-2"></i>
            Dashboard
        </a>
        <a href="{{ url('/profile') }}" class="sidebar-item sidebar-button {{ Request::path() === 'profile' ? 'active' : '' }}">
            <i class="bi bi-person-square me-2"></i>
            Profile
        </a>
        <a href="{{ url('/blogs') }}" class="sidebar-item sidebar-button {{ Request::path() === 'blog' ? 'active' : '' }}">
            <i class="bi bi-newspaper me-2"></i>
            Blogs
        </a>
        <a href="{{ url('/faq') }}" class="sidebar-item sidebar-button {{ Request::path() === 'faq' ? 'active' : '' }}">
            <i class="bi bi-question-square me-2"></i>
            Faq
        </a>
        <a href="{{ url('/contact') }}" class="sidebar-item sidebar-button {{ Request::path() === '/contact' ? 'active' : '' }}">
            <i class="bi bi-envelope-open me-2"></i>
            Contact
        </a>
        <a href="https://hz.nl" target="_blank" class="sidebar-item sidebar-button">
            <svg class="me-1" width="33px" height="39px" viewBox="0 0 33 39" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="height: 24px; width: 24px;">
                <!-- Generated by Pixelmator Pro 2.1.3 -->
                <g id="group">
                    <path id="Path" d="M32.5 9.6 C32.5 -2.8 26 6.1 16.2 0 6.5 6.1 0 -2.8 0 9.6 0 21.9 6.5 32.8 16.2 38.9 26 32.7 32.5 21.9 32.5 9.6" fill-opacity="1" stroke="none" fill="#fff"/>
                    <path id="Path-1" d="M32.5 9.6 C32.5 -2.8 26 6.1 16.3 0 L16.3 38.8 C26 32.7 32.5 21.9 32.5 9.6" fill-opacity="1" stroke="none" fill="#fff"/>
                </g>
                <path id="Path-2" d="M12.5 11.8 L12.5 8 C12.5 7.4 12.8 7 13.4 7 L15.3 7 C15.9 7 16.3 7.3 16.3 8 L16.3 19 C16.3 19.6 16 20 15.3 20 L13.4 20 C12.8 20 12.5 19.7 12.5 19 L12.5 14.8 M8.5 14.9 L8.5 19 C8.5 19.6 8.2 20 7.6 20 L5.6 20 C5 20 4.7 19.7 4.7 19 L4.7 8 C4.7 7.4 5 7 5.6 7 L7.5 7 C8.1 7 8.4 7.3 8.4 8 L8.4 11.8 8.4 14.9 Z" fill-opacity="1" stroke="none" style="fill: var(--color-primary);"/>
                <path id="Path-3" d="M16.2 23.1 C16.2 22.6 16.4 22.2 16.6 21.8 18.2 19.7 20.9 16.2 21.7 14.6 L9.4 14.6 C8.8 14.6 8.4 14.3 8.4 13.7 L8.4 12.8 C8.4 12.2 8.7 11.8 9.4 11.8 L25.2 11.8 C25.8 11.8 26.1 12.1 26.1 12.8 L26.1 13.5 C26.1 14 26 14.4 25.8 14.8 24.6 16.8 22.1 20.2 20.8 21.9 L25.6 21.9 C26.2 21.9 26.6 22.2 26.6 22.9 L26.6 23.8 C26.6 24.4 26.3 24.8 25.6 24.8 L17.1 24.8 C16.5 24.8 16.2 24.5 16.2 23.8" fill-opacity="1" stroke="none" style="fill: var(--color-primary);"/>
            </svg>Hz.nl</a>
    </nav>

    <header class="topbar hide-large padding-16">
        <span class="float-left p-3">Daan van Hekken</span>
        <a href="javascript:void(0)" class="float-right sidebar-button" onclick="open_sidemenu()">
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </header>

    <div class="mobile-overlay hide-large" style="cursor:pointer" title="close side menu"
         id="mobile_overlay"></div>

    <div class="main-content" style="margin-left:300px">
        <div class="hide-large" style="margin-top:83px"></div>
        <div class="padding-32" id="about">
            @yield('content')
        </div>
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white footer-socials">
            <!-- Copyright -->
            <div class="text-center p-4">
                © {{ now() }} Copyright:
                <a class="text-reset fw-bold">DaanvanHekken.com</a>
            </div>
            <!-- Copyright -->
            <div class="socials">
                <a href="https://www.linkedin.com/in/daanvanhekken/" target="_blank" class="linkedin-link w-inline-block"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/daanvhekken" target="_blank" class="github-link w-inline-block"><i class="bi bi-github"></i></a>
            </div>
        </footer>
        <!-- Footer -->
    </div>
</body>
</html>
