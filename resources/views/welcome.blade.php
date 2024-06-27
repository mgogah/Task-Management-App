@extends('layouts.app')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <h1>تفصيل التحكم في المهام</h1>
            <p>مديرة وتنظيم وادارة المهام الخاصة بك</p>
            <a href="#" class="btn btn-primary">ابدأ الاستخدام الآن</a>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2>مميزات تفصيل</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <h3>التنظيم</h3>
                        <p>تنظيم المهام الخاصة بك والتقليل من التأخيرات</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h3>التصنيف</h3>
                        <p>تصنيف المهام حسب الأهداف والمواقف الحالية</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3>التواريخ</h3>
                        <p>تحديد المهلة النهاية لكل مهمة والحصول على تنبيهات</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-sort-amount-up"></i>
                        </div>
                        <h3>الترتيب</h3>
                        <p>ترتيب المهام حسب الأهمية والأولوية</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3>التحكم في الوصول</h3>
                        <p>إدارة الوصول للمهام والمستخدمين</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3>التنبيهات</h3>
                        <p>تحديد التنبيهات عند تجاوز المهلة أو الإضافة للمهام</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="container">
            <h2>التسعير</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="header">
                            <h3>البسيط</h3>
                            <p>بداية ممتازة</p>
                        </div>
                        <div class="price">
                            <span>مجاني</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> 5 مهام</li>
                                <li><i class="fas fa-check"></i> 2 فئة</li>
                                <li><i class="fas fa-check"></i> 1 مستخدم</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-primary">اشترِ الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="header">
                            <h3>المتوسط</h3>
                            <p>حل كامل للمهام</p>
                        </div>
                        <div class="price">
                            <span>10 ريال شهريًا</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> 25 مهام</li>
                                <li><i class="fas fa-check"></i> 5 فئة</li>
                                <li><i class="fas fa-check"></i> 3 مستخدم</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-primary">اشترِ الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="header">
                            <h3>المتقدم</h3>
                            <p>تنظيم المهام بشكل تفصيلي</p>
                        </div>
                        <div class="price">
                            <span>20 ريال شهريًا</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> مهام غير محدودة</li>
                                <li><i class="fas fa-check"></i> 10 فئة</li>
                                <li><i class="fas fa-check"></i> مستخدمين غير محدودين</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-primary">اشترِ الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2>شهادات العملاء</h2>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial">
                                    <p>تفصيل هو التطبيق المثالي لتنظيم المهام الخاصة بي. يساعدني في التنظيم والتحكم في المهام بكل سهولة.</p>
                                    <div class="author">
                                        <img src="https://via.placeholder.com/50" alt="User">
                                        <span>محمد علي</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial">
                                    <p>لقد كان تجربتي مع تفصيل تجربة ممتازة. يتيح لي تحديد المهلة والترتيب للمهام بسهولة.</p>
                                    <div class="author">
                                        <img src="https://via.placeholder.com/50" alt="User">
                                        <span>عمرة عبدالله</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial">
                                    <p>تم تحسين ادائي بشكل كبير من خلال استخدام تفصيل. يساعدني في التنظيم والادارة للمهام بكل سهولة.</p>
                                    <div class="author">
                                        <img src="https://via.placeholder.com/50" alt="User">
                                        <span>أحمد علي</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">السابق</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">التالي</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2>اتصل بنا</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" placeholder="أدخل اسمك">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" placeholder="أدخل بريدك الإلكتروني">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">الرسالة</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسل</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>معلومات الاتصال</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> عنوان مكتبنا</li>
                            <li><i class="fas fa-phone"></i> رقم الهاتف: 123456789</li>
                            <li><i class="fas fa-envelope"></i> البريد الإلكتروني: info@tafseel.com</li>
                        </ul>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection