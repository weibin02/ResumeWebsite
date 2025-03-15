@extends('layout')

@section('title', 'Home')

@section('content')

<!-- About Section -->
<section id="about" class="section">
    <h2>About Me</h2>
    <p>
        Fresh graduate Software Engineer passionate about problem-solving and full-stack development.
        Experienced in Java, Python, and web frameworks like Laravel and React Native.
    </p>
</section>

<!-- Skills Section -->
<section id="skills" class="section">
    <h2>Skills</h2>
    <ul>
        <li>Java, C++, Python, PHP, JavaScript</li>
        <li>React Native, Laravel, Flask</li>
        <li>Git, Docker</li>
        <li>Problem Solving, Critical Thinking</li>
    </ul>
</section>

<!-- Experience Section -->
<section id="experience" class="section">
    <h2>Experience</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h4>Software Engineer Intern</h4>
            <p><strong>SIM IT SDN BHD</strong> (Oct 2023 - Jan 2024)</p>
            <p>Worked in R&D, UI improvements, bug fixing, and automation workflows.</p>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="section">
    <h2>Education</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h4>Bachelor of Science (Hons) Software Engineering</h4>
            <p>Universiti Tunku Abdul Rahman (2021 - 2024)</p>
            <p>CGPA: 3.7229</p>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section">
    <h2>Projects</h2>
    <div class="project-card">
        <h4>Steel Product Grading System</h4>
        <p>Developed AI-based steel grading system using React Native & Flask.</p>
    </div>
    <div class="project-card">
        <h4>Online Badminton Shop</h4>
        <p>E-commerce platform built with PHP, JavaScript, and SQL.</p>
    </div>
</section>

<!-- Resume Section -->
<section id="resume" class="section">
    <h2>Education</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h4>Bachelor of Science (Hons) Software Engineering</h4>
            <p>Universiti Tunku Abdul Rahman (2021 - 2024)</p>
            <p>CGPA: 3.7229</p>
        </div>
    </div>
</section>

@endsection
