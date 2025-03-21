@extends('layout')

@section('title', 'Home')

@section('content')
    <section id="about" class="mb-5">
        <div class="card shadow-lg">
            <div class="card-header text-black" style="background-color: #E6E6FA;">
                <h5 class="card-title mb-0">Personal Information</h5>
                <p class="card-subtitle mb-0">Learn more about me</p>
            </div>
            <div class="card-body" style="padding: 2rem";
">
                <div class="row">
                <div class="col-md-4">
                    <p><i class="bi bi-person-circle"></i> <strong>Age:</strong> 23</p>
                    <p><i class="bi bi-flag"></i> <strong>Nationality:</strong> Malaysian</p>
                    <p><i class="bi bi-envelope"></i> <strong>Email:</strong> weibin5369@gmail.com</p>
                    <p><i class="bi bi-telephone"></i> <strong>Phone:</strong> +6016-7015855</p>
                </div>
                
                <div class="col-md-4">
                    <p><i class="bi bi-chat-dots"></i> <strong>Language:</strong> English | Mandarin | Malay</p>
                </div>
                
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/card_photo.jpg') }}" class="img-fluid shadow" style="width: 40%;" alt="Profile Photo">
                </div>
                
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="mailto:weibin5369@gmail.com" class="btn btn-custom btn-sm">Contact Me</a>
                <a href="#resume" class="btn btn-custom btn-sm">View Resume</a>
            </div>
        </div>
    </section>




    <!-- Skills Section -->
    <section id="skills" class="mb-5">
        <h2 class="mb-3">Skills</h2>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Java, C++, Python, PHP</li>
                    <li>JavaScript, HTML, CSS, SQL</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>React Native, Laravel, Flask</li>
                    <li>JUnit, Docker, Git, UML</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="mb-5">
        <h2 class="mb-3">Experience</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">SIM IT SDN BHD - Internship</h5>
                <p class="card-text"><strong>Role:</strong> R&D & Customer Support</p>
                <p class="card-text">
                    Worked on data migration, frontend UI changes, bug fixes, and tools like Jaspersoft Studio,
                    Dolphin Scheduler, n8n, and Docker.
                </p>
                <p class="card-text"><small class="text-muted">June 2023 - September 2023</small></p>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="mb-5">
        <h2 class="mb-3">Education</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Universiti Tunku Abdul Rahman (UTAR)</h5>
                <p class="card-text">
                    Bachelor of Science (Hons) in Software Engineering<br>
                    <strong>Graduated:</strong> May 2024 | <strong>CGPA:</strong> 3.7229
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="mb-5">
        <h2 class="mb-3">Projects</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Steel Product Grading System (SteelGrade App)</h5>
                <p class="card-text">
                    A React Native app integrated with AI algorithms for automatic steel grading for CSC Steel Holdings Berhad.
                </p>
            </div>
        </div>
    </section>

    <!-- Resume Section -->
    <section id="resume" class="mb-5">
        <h2 class="mb-3">Resume</h2>
        <a href="{{ asset('resume/YeohWeiBin_Resume.pdf') }}" class="btn btn-outline-primary" target="_blank">
            <i class="bi bi-download"></i> Download My Resume
        </a>
    </section>
@endsection
