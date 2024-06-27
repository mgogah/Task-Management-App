<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفصيل - إدارة المهام والtasks</title>
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
    direction: rtl;
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
    direction: rtl;
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
    direction: rtl;
}

.testimonial {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin: 20px;
    width: 250px;
    direction: rtl;
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
    direction: rtl;
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
    direction: rtl;
}
   </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-3">تفصيل</h1>
                    <p class="lead">إدارة المهام والtasks بسهولة ويسر مع تطبيق تفصيل</p>
                    <button class="btn btn-primary btn-lg">开始 استخدام تفصيل</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-list-ul fa-3x"></i>
                        <h3>إدارة المهام</h3>
                        <p>إدارة المهام والtasks بسهولة ويسر مع تفصيل</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-clock fa-3x"></i>
                        <h3>تتبع الوقت</h3>
                        <p>تتبع الوقت المستهلك في كل مهمة لتحسين الأداء</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-user fa-3x"></i>
                        <h3>تعاون الفريق</h3>
                        <p>تعاون الفريق والعمل الجماعي مع تفصيل</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>ما يقوله مستخدمونا</h2>
                    <p class="lead">لا تقلق، نحن لدينا شواهد من مستخدمينا السعداء</p>
                    <div class="testimonial-carousel">
                        <div class="testimonial">
                            <img src="https://via.placeholder.com/50x50" alt="User Avatar">
                            <p>"تفصيل změn حياتي! الآن أستطيع إدارة مهامي بسهولة ويسر."</p>
                            <h5>- أحمد محمد، مدير مشروع</h5>
                        </div>
                        <div class="testimonial">
                            <img src="https://via.placeholder.com/50x50" alt="User Avatar">
                            <p>"تفصيل هو الحل الأمثل لإدارة المهام والtasks. أصبحنا أكثر كفاءة معه."</p>
                            <h5>- فاطمة علي، مدير فريق</h5>
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
                    <h2>جرب تفصيل الآن!</h2>
                    <p class="lead">سجل الآن واكتشف كيف يمكن أن يغير تفصيل طريقة عملك</p>
                    <button class="btn btn-primary btn-lg">سجل الآن</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p>&copy; {{ now()->year }} تفصيل. جميع الحقوق محفوظة.</p>
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