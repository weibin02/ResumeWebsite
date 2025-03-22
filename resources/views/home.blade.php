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
                <a href="{{ asset('resume/weibin_resume_v2.pdf') }}" target="_blank" class="btn btn-custom btn-sm">View Resume</a>
            </div>
        </div>
        <!-- Hobbies and Interests -->
        <div class="mt-4 mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="fs-4"><i class="bi bi-controller"></i> Hobbies</h6>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-trophy me-2 text-primary"></i> Badminton</li>
                        <li><i class="bi bi-dribbble me-2 text-danger"></i> Basketball</li>
                        <li><i class="bi bi-emoji-smile me-2 text-warning"></i> Ping Pong</li>
                        <li><i class="bi bi-puzzle me-2 text-success"></i> Chess</li>
                        <li><i class="bi bi-compass me-2 text-info"></i> Adventure</li>
                    </ul>
                </div>

                <!-- Interests -->
                <div class="col-md-6">
                    <h6 class="fs-4"><i class="bi bi-lightbulb"></i> Interests</h6>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-code-slash me-2 text-primary"></i> Programming</li>
                        <li><i class="bi bi-cpu me-2 text-secondary"></i> Software</li>
                        <li><i class="bi bi-currency-dollar me-2 text-success"></i> Finance</li>
                        <li><i class="bi bi-globe-americas me-2 text-info"></i> Mystery of Universe and Nature</li>
                        <li><i class="bi bi-journal-bookmark me-2 text-danger"></i> History</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Language Proficiency Section -->
        <div class="mt-5">
            <h5 class="mb-3 fs-4">Language Proficiency</h5>
            <div class="row">
                <div class="col-md-6">
                    <h6><i class="bi bi-translate fs-4 me-2"></i> English</h6>
                    <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                        <div class="progress-bar" style="width: 80%; background: linear-gradient(135deg, #B5A7D5, #9C89B8);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            8/10
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h6><i class="bi bi-translate fs-4 me-2"></i> Mandarin</h6>
                    <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                        <div class="progress-bar" style="width: 90%; background: linear-gradient(135deg, #B5A7D5, #9C89B8);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            9/10
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <h6><i class="bi bi-translate fs-4 me-2"></i> Malay</h6>
                    <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                        <div class="progress-bar" style="width: 80%; background: linear-gradient(135deg, #B5A7D5, #9C89B8);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            8/10
                        </div>
                    </div>
                </div>
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
        <a href="{{ asset('resume/weibin_resume_v2.pdf') }}" class="btn btn-outline-primary" download>
            <i class="bi bi-download"></i> Download My Resume
        </a>
    </section>
@endsection
