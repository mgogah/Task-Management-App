<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster - Task Management Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .hero-section {
    background-image: linear-gradient(to bottom, #3498db, #2980b9);
    background-size: 100% 300px;
    background-position: 0% 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    color: #fff;
}

.hero-section h1 {
    font-weight: bold;
    margin-bottom: 20px;
}

.feature-box {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-bottom: 20px;
    text-align: center;
}

.feature-box i {
    font-size: 36px;
    margin-bottom: 10px;
    color: #3498db;
}

.testimonial-carousel {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.testimonial {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin: 20px;
    width: 250px;
}

.testimonial img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.cta-section {
    background-color: #3498db;
    padding: 40px;
    text-align: center;
    color: #fff;
}

.cta-section h2 {
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-section {
    background-color: #333;
    padding: 20px;
    text-align: center;
    color: #fff;
}
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-3">TaskMaster</h1>
                    <p class="lead">Streamline your tasks and boost productivity with our intuitive task management application.</p>
                    <button class="btn btn-primary btn-lg">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section bg-light mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-list-ul fa-3x"></i>
                        <h3>Task Organization</h3>
                        <p>Organize your tasks into categories and prioritize them with ease.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-clock fa-3x"></i>
                        <h3>Time Tracking</h3>
                        <p>Track the time spent on each task and optimize your workflow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-user fa-3x"></i>
                        <h3>Collaboration</h3>
                        <p>Invite team members and assign tasks to ensure seamless collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>What Our Users Say</h2>
                    <p class="lead">Don't just take our word for it. Hear from our satisfied users.</p>
                    <div class="testimonial-carousel">
                        <div class="testimonial">
                            <img src="https://via.placeholder.com/50x50" alt="User Avatar">
                            <p>"TaskMaster has revolutionized the way I manage my tasks. It's easy to use and has increased my productivity by 30%!"</p>
                            <h5>- John Doe, Entrepreneur</h5>
                        </div>
                        <div class="testimonial">
                            <img src="https://via.placeholder.com/50x50" alt="User Avatar">
                            <p>"I was skeptical at first, but TaskMaster has become an essential tool for my team. We've seen a significant decrease in project timelines."</p>
                            <h5>- Jane Smith, Project Manager</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Ready to Boost Your Productivity?</h2>
                    <p class="lead">Sign up for a free trial and experience the power of TaskMaster.</p>
                    <button class="btn btn-primary btn-lg">Sign Up for Free</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p>&copy; {{ now()->year }} TaskMaster. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>