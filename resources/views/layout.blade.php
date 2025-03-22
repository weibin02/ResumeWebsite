<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Wei Bin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar position-fixed">
        <div class="text-center mt-2">
            <img src="{{ asset('images/profile_photo.jpg') }}" class="img-fluid" style="width: 160px;" alt="Profile Photo">
            <h4 class="mt-3 fw-bold" style="font-size: 23px">YEOH WEI BIN</h4>
            <p>Software Engineer | Passionate Coder</p>
            <div class="social-links mt-3">
                <a href="https://linkedin.com/in/weibin02" target="_blank" class="text-dark mx-2"><i class="bi bi-linkedin" style="font-size: 26px"></i></a>
                <a href="https://github.com/weibin02" target="_blank" class="text-dark mx-2"><i class="bi bi-github" style="font-size: 26px"></i></a>
                <a href="https://www.instagram.com/yweibinn/" class="text-dark mx-2"><i class="bi bi-instagram" style="font-size: 26px"></i></a>
                <a href="https://facebook.com/yeoh.weibin.7" target="_blank" class="text-dark mx-2"><i class="bi bi-facebook" style="font-size: 26px"></i></a>
            </div>
        </div>
        <ul class="nav flex-column mt-3 list-unstyled text-center" id="sidebar-nav">
            <li><a href="#about" class="d-block py-2 active">About Me</a></li>
            <li><a href="#skills" class="d-block py-2">Skills</a></li>
            <li><a href="#experience" class="d-block py-2">Experience</a></li>
            <li><a href="#education" class="d-block py-2">Education</a></li>
            <li><a href="#projects" class="d-block py-2">Projects</a></li>
            <li><a href="#resume" class="d-block py-2">Resume</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <!-- Fixed Full-Width Footer -->
    <footer class="custom-footer text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} YEOH WEI BIN. All rights reserved.</p>
    </footer>




    

</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll("#sidebar-nav a");

    function removeActiveClass() {
        navLinks.forEach(link => link.classList.remove("active"));
    }

    function setActiveLink() {
        sections.forEach((section, index) => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 0 && rect.bottom >= 0) {
                removeActiveClass(); 
                navLinks[index].classList.add("active"); 
            }
        });
    }

    window.addEventListener("scroll", setActiveLink);

    setActiveLink();
});
</script>