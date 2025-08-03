@extends('layouts.main')
@section('content')
<style>
    .about-header {
        text-align: center;
        padding: 80px 0 60px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/about-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .about-header h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .about-content {
        padding: 60px 0;
    }

    .about-section {
        margin-bottom: 50px;
    }

    .about-section h2 {
        font-size: 28px;
        margin-bottom: 20px;
        color: var(--primary-color);
        position: relative;
        padding-bottom: 10px;
    }

    .about-section h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary-color);
    }

    .about-section p {
        margin-bottom: 15px;
        line-height: 1.8;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .team-member {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
    }

    .team-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 5px solid var(--light-color);
    }

    .team-member h3 {
        margin-bottom: 5px;
    }

    .team-member p.position {
        color: var(--primary-color);
        font-weight: 500;
        margin-bottom: 15px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-links a {
        color: var(--dark-color);
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .social-links a:hover {
        color: var(--primary-color);
    }

    .stats {
        background: var(--light-color);
        padding: 60px 0;
        text-align: center;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
    }

    .stat-item h3 {
        font-size: 42px;
        color: var(--primary-color);
        margin-bottom: 10px;
    }

    .stat-item p {
        font-size: 18px;
        color: var(--dark-color);
    }
</style>



<!-- About Header -->
<section class="about-header">
    <div class="container">
        <h1>About EventSys</h1>
        <p>Your trusted partner for memorable events</p>
    </div>
</section>

<!-- About Content -->
<section class="about-content">
    <div class="container">
        <div class="about-section">
            <h2>Our Story</h2>
            <p>Founded in 2023, EventSys began with a simple mission: to make event planning seamless and stress-free for everyone. What started as a small team of passionate event planners has grown into a comprehensive platform serving thousands of clients annually.</p>
            <p>We understand that every event is unique, whether it's a joyous wedding celebration, a solemn funeral service, or an informative workshop. Our team is dedicated to providing personalized service that meets your specific needs.</p>
        </div>

        <div class="about-section">
            <h2>Our Mission</h2>
            <p>At EventSys, we believe that successful events are built on attention to detail, creativity, and flawless execution. Our mission is to:</p>
            <ul style="margin-left: 20px; margin-bottom: 20px;">
                <li>Provide exceptional event management services for all occasions</li>
                <li>Simplify the planning process with our intuitive platform</li>
                <li>Deliver memorable experiences that exceed expectations</li>
                <li>Support our clients through every step of their event journey</li>
            </ul>
        </div>

        <div class="about-section">
            <h2>Our Team</h2>
            <p>Meet the dedicated professionals who make EventSys possible:</p>

            <div class="team-grid">
                <div class="team-member">
                    <img src="assets/images/team1.jpg" alt="John Doe">
                    <h3>John Doe</h3>
                    <p class="position">Founder & CEO</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="team-member">
                    <img src="assets/images/team2.jpg" alt="Jane Smith">
                    <h3>Jane Smith</h3>
                    <p class="position">Event Director</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="team-member">
                    <img src="assets/images/team3.jpg" alt="Mike Johnson">
                    <h3>Mike Johnson</h3>
                    <p class="position">Technical Lead</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="team-member">
                    <img src="assets/images/team4.jpg" alt="Sarah Williams">
                    <h3>Sarah Williams</h3>
                    <p class="position">Customer Support</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Events Managed</p>
            </div>
            <div class="stat-item">
                <h3>200+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stat-item">
                <h3>10+</h3>
                <p>Awards Won</p>
            </div>
        </div>
    </div>
</section>



@endsection