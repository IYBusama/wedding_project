@extends('layouts.main')
@section('content')
<style>
    .contact-header {
        text-align: center;
        padding: 80px 0 60px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/contact-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .contact-header h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .contact-content {
        padding: 60px 0;
    }

    .contact-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .contact-info {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .contact-info h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: var(--primary-color);
        position: relative;
        padding-bottom: 10px;
    }

    .contact-info h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary-color);
    }

    .info-item {
        display: flex;
        margin-bottom: 20px;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: var(--light-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: var(--primary-color);
        font-size: 20px;
    }

    .info-text h3 {
        margin-bottom: 5px;
    }

    .info-text p {
        color: #666;
    }

    .contact-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
    }

    .form-group textarea {
        height: 150px;
    }

    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .map-container {
        margin-top: 40px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        width: 100%;
        height: 400px;
        border: none;
    }
</style>

@include('components.navbar')
<!-- Contact Header -->
<section class="contact-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Get in touch with our team</p>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-content">
    <div class="container">

        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Information</h2>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Address</h3>
                        <p>123 Event Street, City, Country</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Phone</h3>
                        <p>+123 456 7890</p>
                        <p>+123 456 7891</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h3>Email</h3>
                        <p>info@eventsys.com</p>
                        <p>support@eventsys.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-text">
                        <h3>Working Hours</h3>
                        <p>Monday - Friday: 9:00 - 18:00</p>
                        <p>Saturday: 10:00 - 15:00</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215573036767!2d-73.9878449241643!3d40.74844097138986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@include('components.footer')

@endsection