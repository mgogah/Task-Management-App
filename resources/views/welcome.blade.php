@extends('layouts.app')

@section('content')
<main>
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">تفصيل التحكم في المهام</h1>
                    <p class="fs-4">مدير وتنظيم وادارة المهام الخاصة بك</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('register') }}">ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </header>

    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-12 col-xxl-4 mb-5">
                    <div class="card border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <h1 class="fs-4 fw-bold">مميزات تفصيل</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold">التنظيم</h2>
                            <p class="mb-0">تنظيم المهام الخاصة بك والتقليل من التأخيرات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-cloud-download"></i></div>
                            <h2 class="fs-4 fw-bold">التصنيف</h2>
                            <p class="mb-0">تصنيف المهام حسب الأهداف والمواقف الحالية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-card-heading"></i></div>
                            <h2 class="fs-4 fw-bold">التواريخ</h2>
                            <p class="mb-0">تحديد المهلة النهاية لكل مهمة والحصول على تنبيهات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-bootstrap"></i></div>
                            <h2 class="fs-4 fw-bold">الترتيب</h2>
                            <p class="mb-0">ترتيب المهام حسب الأهمية والأولوية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-code"></i></div>
                            <h2 class="fs-4 fw-bold">التحكم في الوصول</h2>
                            <p class="mb-0">إدارة الوصول للمهام والمستخدمين</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class=""><i class="bi bi-patch-check"></i></div>
                            <h2 class="fs-4 fw-bold">التنبيهات</h2>
                            <p class="mb-0">تحديد التنبيهات عند تجاوز المهلة أو الإضافة للمهام</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4" id="pricing">
        <div class="container px-lg-5">
            <div class="row gx-lg-5">
                <div class="col-lg-12 col-xxl-4 mb-5">
                    <div class="card border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <h1 class="fs-3 fw-bold">اشتراكاتنا</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-lg-5">
                <div class="col-md-4 bg-light mb-5 p-5">
                    <div class="pricing-card">
                        <div class="header">
                            <h3 class="text-warning">البسيط</h3>
                            <p>بداية ممتازة</p>
                        </div>
                        <div class="price">
                            <span class="text-warning">مجاني</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> 5 مهام</li>
                                <li><i class="fas fa-check"></i> 2 فئة</li>
                                <li><i class="fas fa-check"></i> 1 مستخدم</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('register') }}" class="btn btn-warning">اشترِ الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-light mb-5 p-5">
                    <div class="pricing-card">
                        <div class="header">
                            <h3 class="text-info">المتوسط</h3>
                            <p>حل كامل للمهام</p>
                        </div>
                        <div class="price">
                            <span class="text-info">10 ريال شهريًا</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> 25 مهام</li>
                                <li><i class="fas fa-check"></i> 5 فئة</li>
                                <li><i class="fas fa-check"></i> 3 مستخدم</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('register') }}" class="btn btn-info">اشترِ الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-light mb-5 p-5">
                    <div class="pricing-card">
                        <div class="header">
                            <h3 class="text-success">المتقدم</h3>
                            <p>تنظيم المهام بشكل تفصيلي</p>
                        </div>
                        <div class="price">
                            <span class="text-success">20 ريال شهريًا</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fas fa-check"></i> مهام غير محدودة</li>
                                <li><i class="fas fa-check"></i> 10 فئة</li>
                                <li><i class="fas fa-check"></i> مستخدمين غير محدودين</li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('register') }}" class="btn btn-success">اشترِ الآن</a>
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
<!-- All OK -->


@endsection