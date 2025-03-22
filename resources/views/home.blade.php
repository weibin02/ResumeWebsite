@extends('layout')

@section('title', 'Home')

@section('content')
    <section id="about" class="mb-5">
        <div class="card shadow-lg">
            <div class="card-header text-black" style="background-color: #E6E6FA;">
                <h5 class="card-title mb-0">Personal Information</h5>
                <p class="card-subtitle mb-0">Learn more about me</p>
            </div>
            <div class="card-body" style="padding: 2rem";>
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

        <!-- Language Proficiency Section -->
        <div class="mt-5">
            <h2 class="mb-3 text-center">Language Proficiency</h2>
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
        
        <!-- Hobbies and Interests -->
        <div class="mt-5 py-3">
            <div class="row">
                <div class="col-md-6">
                    <h2><i class="bi bi-controller"></i> Hobbies</h2>
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
                    <h2><i class="bi bi-lightbulb"></i> Interests</h2>
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

    </section>


    <div style="box-shadow: 6px 4px 6px 4px rgba(0, 0, 0, 0.1);
        width: 100vw;
        position: absolute;
        z-index: -1;
        left: 0;
   "></div>

    <!-- Skills Section -->
    <section id="skills" class="mb-5">
        <h2 class="mb-3 mt-3 text-center">Skills</h2>
        <div class="row g-5"> 
            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fab fa-java fs-4 me-2"></i>
                            <i class="fab fa-cuttlefish fs-4 me-2"></i>
                            <i class="fab fa-microsoft fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">Java | C++ | JUnit 4 | C#</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 55%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 40%; background: linear-gradient(90deg, #FF7043, #FF5722);;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>  
            
            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fab fa-html5 fs-4 me-2"></i>                       
                            <i class="fab fa-php fs-4 me-2"></i> 
                            <i class="fab fa-js-square fs-4 me-2"></i> 
                            <i class="fab fa-css3-alt fs-4 me-2"></i>                          
                        </div>
                        <div>
                            <h6 class="mt-2">HTML | PHP | JavaScript | CSS</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 55%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>    
            
            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fab fa-laravel fs-4 me-2"></i>                         
                            <i class="fab fa-react fs-4 me-2"></i> 
                            <i class="fab fa-bootstrap fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">Laravel | React Native | Bootstrap</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 65%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>    

            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                        <i class="fab fa-python fs-4 me-2"></i>                 
                        </div>
                        <div>
                            <h6 class="mt-2">Python | Flask</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 55%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 55%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>   

            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                        <i class="fab fa-github fs-4 me-2"></i>
                        <i class="fab fa-docker fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">Git | Docker</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-1" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar" style="width: 65%; background: linear-gradient(90deg, #FDD835, #FFB300);" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>   

            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fas fa-database fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">SQL</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>   

            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fas fa-sitemap fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">UML</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> 
            
            <div class="col-md-4 mb-3">
                <h6 class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div>
                            <i class="fas fa-cogs fs-4 me-2"></i>
                        </div>
                        <div>
                            <h6 class="mt-2">RESTful API</h6>
                        </div>
                    </div>
                </h6>
                <div class="progress" style="height: 20px; border-radius: 10px; background-color: #E9E9FF;">
                    <div class="progress-bar bg-primary" style="background: linear-gradient(90deg, #2563EB, #3B82F6, #60A5FA); width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </section>

    <div style="box-shadow: 6px 4px 6px 4px rgba(0, 0, 0, 0.1);
        width: 100vw;
        position: absolute;
        z-index: -1;
        left: 0;
   "></div>

    <!-- Timeline: Experience Section -->
    <section id="experience" class="mb-5">
        <h2 class="mb-3 mt-3 text-center">Experience</h2>
        <div class="timeline-exp">
            <div class="timeline-item-exp">
                <div class="timeline-point-exp"></div>
                <div class="timeline-content-exp row align-items-center">
                    <div class="col-md-6">
                        <div class="m-2">
                            <h6 class="mb-3 fs-5" style="color:rgb(207, 108, 252); font-weight: bold">Oct 2023 - Jan 2024</h6>
                            <h5>SIM IT SDN BHD</h5>
                            <p class="text-muted">Software Engineer Intern</p>
                            <ul class="experience-list">
                                <li>R&D team anc Client Support team</li>
                                <li>Handle customer change request</li>
                                <li>Data migration</li>
                                <li>Research</li>
                                <li>UI Frontend Screen Modification</li>
                                <li>Bug Fixing</li>
                            </ul>
                            <p class="text-muted"><strong>Software / Tools: </strong>Jaspersoft Studio | jrxml file | Dolphin Scheduler | n8n | Docker | Postman</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="m-2">
                            <img src="{{ asset('images/simit_logo.jpg') }}" alt="SIM IT Logo" class="img-fluid" style="width: 40%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="box-shadow: 6px 4px 6px 4px rgba(0, 0, 0, 0.1);
        width: 100vw;
        position: absolute;
        z-index: -1;
        left: 0;
   "></div>

    <!-- Timeline: Education Section -->
    <section id="education" class="mb-5">
        <h2 class="mb-3 mt-3 text-center">Education</h2>

        <div class="position-relative style="padding-left: 20px;>
        <div class="timeline-line-edu"></div> <!-- 🔧 This will be the vertical line -->
            <div class="timeline-edu">
                <div class="timeline-item-edu">
                    <div class="timeline-content-edu row align-items-center">
                        <div>
                            <div class="m-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-4 fs-5" style="color:rgb(207, 108, 252); font-weight: bold">2021 - 2024</h6>
                                    <div class="title" style="background-color: rgb(207, 108, 252);">
                                        <span class="text-white">Bachelor's Degree</span>
                                    </div>
                                </div>
                                <p class="mb-1"><strong class="fs-5">Universiti Tunku Abdul Rahman (UTAR)</strong></p>
                                <p class="text-muted mb-2">Selangor, Malaysia</p>
                                <p class="mb-0"><strong>Bachelor of Science (Honours) Software Engineering</strong></p>
                                <p><strong>CGPA: 3.7229</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="timeline-point-edu right"></div>
                </div>
            </div>

            <div class="timeline-edu">
                <div class="timeline-item-edu">
                    <div class="timeline-content-edu row align-items-center">
                        <div>
                            <div class="m-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-4 fs-5" style="color:rgb(207, 108, 252); font-weight: bold">2020 - 2021</h6>
                                    <div class="title" style="background-color: rgb(252, 108, 197);">
                                        <span class="text-white">Foundation</span>
                                    </div>
                                </div>
                                <p class="mb-1"><strong class="fs-5">Universiti Tunku Abdul Rahman (UTAR)</strong></p>
                                <p class="text-muted mb-2">Selangor, Malaysia</p>
                                <p class="mb-0"><strong>Foundation in Science</strong></p>
                                <p><strong>CGPA: 3.9068</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="timeline-point-edu right"></div>
                </div>
            </div>

            <div class="timeline-edu">
                <div class="timeline-item-edu">
                    <div class="timeline-content-edu row align-items-center">
                        <div>
                            <div class="m-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-4 fs-5" style="color:rgb(207, 108, 252); font-weight: bold">2015 - 2019</h6>
                                    <div class="title" style="background-color: rgb(108, 187, 252);">
                                        <span class="text-white">Secondary</span>
                                    </div>
                                </div>
                                <p class="mb-1"><strong class="fs-5">SMK Layang-Layang</strong></p>
                                <p class="text-muted mb-2">Kluang, Malaysia</p>
                                <p class="mb-0"><strong>SPM</strong></p>
                                <p><strong>Results: 9As + 1B</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="timeline-point-edu right"></div>
                </div>
            </div>

            <div class="timeline-edu">
                <div class="timeline-item-edu">
                    <div class="timeline-content-edu row align-items-center">
                        <div>
                            <div class="m-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-4 fs-5" style="color:rgb(207, 108, 252); font-weight: bold">2009 - 2014</h6>
                                    <div class="title" style="background-color: rgb(252, 146, 108);">
                                        <span class="text-white">Primary</span>
                                    </div>
                                </div>
                                <p class="mb-1"><strong class="fs-5">SJK (C) Layang-Layang</strong></p>
                                <p class="text-muted mb-2">Kluang, Malaysia</p>
                                <p class="mb-0"><strong>UPSR</strong></p>
                                <p><strong>Results: 5A + 2B</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="timeline-point-edu right"></div>
                </div>
            </div>
        </div>


    </section>

    <div style="box-shadow: 6px 4px 6px 4px rgba(0, 0, 0, 0.1);
        width: 100vw;
        position: absolute;
        z-index: -1;
        left: 0;
   "></div>

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
