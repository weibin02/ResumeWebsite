<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Wei Bin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center mt-3">
            <img src="{{ asset('images/photo.jpg') }}" class="profile-img" alt="Profile Photo">
            <h4 class="mt-2">YEOH WEI BIN</h4>
            <p>Software Engineer | Passionate Coder</p>
            <div class="social-links">
                <a href="mailto:weibin5369@gmail.com"><i class="bi bi-envelope-fill"></i></a>
                <a href="https://linkedin.com/in/weibin02" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/weibin02" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://facebook.com/yeoh.weibin.7" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
        <ul class="nav flex-column mt-3">
            <li><a href="#about">About Me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#resume">Resume</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
