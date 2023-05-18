<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--<link rel='stylesheet' href='css/bootstrap-rtl.css'/>''-->
    <link rel='stylesheet' href="{{ asset('website/css/fontawesome.min.css') }}"" />
    <link rel='stylesheet' href="{{ asset('website/css/all.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/bootstrap.css') }}" />
    <link rel='stylesheet' href="{{ asset('website/css/style1.css') }}" />
</head>

<body>
    <!--start upper bar-->
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm text-left">
                    <i class="fa-solid fa-phone fa-bounce"></i><span>08834526</span>
                    <i class="fa-solid fa-envelope fa-beat-fade"></i> اسال اطبائنا
                </div>
                <div class="col-sm text-right">
                    <h3> <span>There Is Hopes </span> </h3>
                </div>
            </div>
        </div>
    </div>
    <!--end upper dar-->


    <!--start navbar-->
    @include('includes.website.nav')
    <!--end navbar-->


    <!--start slider-->
    <section id="home">
        <div class="slider">
            <div id="PhotoHospital" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="overlay"></div>
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="{{ asset('website/images/istockphoto-1319031310-612x612.jpg') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <!--<p><span>cancerous tumors</span></p>-->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="{{ asset('website/images/istockphoto-1352553853-612x612.jpg') }}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5><span>cancerous tumors</span></h5> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website/images/9.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#PhotoHospital" data-slide-to="0" class="active"></li>
                    <li data-target="#PhotoHospital" data-slide-to="1"></li>
                    <li data-target="#PhotoHospital" data-slide-to="2"></li>
                </ol>

                <a class="carousel-control-prev" href="#PhotoHospital" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#PhotoHospital" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--end slider-->



    <!--start features-->
    <section id="features" class="features">
        <div class="features ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-lg-3 text-center">
                        <div class="card ">
                            <div class="card-body ">
                                <i class="fa-sharp fa-solid fa-heart-pulse fa-2xl rounded-circle"></i>
                                <!-- <i class="fa-solid fa-heart-pulse fa-2x "></i>  -->
                                <h5 class="card-title">جراحة الكبد</h5>
                                <p class="card-text text-right">اختبارات الدم :ان اختبارات الدم قد تكشف عن اختلالال في
                                    وظائف الكبد </p>
                                <p class="card-text text-right">اختبارات التصوير :قد ينصحك طبيبك باجراءاختبارات التصوير
                                    مثل التراوساند (تصوير فوق صوتي) والتصوير المقطعي المحوسب والتصوير بالرنين المغناطيسي
                                </p>

                                <a href="https://www.mayoclinic.org/ar/diseases-conditions/liver-cancer/diagnosis-treatment/drc-20353664"
                                    class="btn btn-primary">المزيد من المعلومات</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 text-center">
                        <div class="card ">
                            <div class="card-body ">
                                <i class="fa-solid fa-lungs fa-2xl"></i>
                                <!-- <i class="fa-solid fa-house-medical-flag  fa-2xl "></i>  -->
                                <h5 class="card-title">جراحة الرئة</h5>
                                <p class="card-text">تستخدم جراحة تقليل حجم الرئة لتحسين التنفس عند بعض الأشخاص الذي
                                    يعانون انتفاخ الرئة الشديد، </p>
                                <p class="card-text">في أثناء الجراحة، تتم إزالة أسافين صغيرة من أنسجة الرئة التالفة
                                    للسماح للأنسجة المتبقية بالعمل بشكل أفضل. بعد الجراحة، ينخفض ضيق التنفس عند الأشخاص
                                    وتتحسن جودة نوعية حياتهم ويتمكنون من التدريب بشكل أفضل</p>
                                <a href="https://www.mayoclinic.org/ar/diseases-conditions/lung-cancer/multimedia/lung-cancer-surgery/img-20006167"
                                    class="btn btn-primary">المزيد من المعلومات</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 text-center">
                        <div class="card ">
                            <div class="card-body">
                                <i class="fa-solid fa-virus-covid fa-2xl"></i>
                                <h5 class="card-title">جراحة سرطان الجلد</h5>
                                <p class="card-text">قد يتطلب علاج سرطان الجلد مثلة مثل اي شكل من الاشكال السرطان عملية
                                    جراحية لازالة النمو السرطاني</p>
                                <p class="card-text">يمكن لجراح التجميل الخاص بك ازالة افات الجلد السرطانية وغيرها من
                                    العمليات الجراحية باستخدام تقنيات متخصصه للحفاظ علي صحتك ومظهرك </p>
                                <a href="https://medicalparkinternational.com/ar-sa/areas-of-excellence/aprs/Pages/skin-cancer-surgery.aspx"
                                    class="btn btn-primary">المزيد من المعلومات</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-3 col-lg-3 text-center">
                        <div class="card ">
                            <div class="card-body ">
                                <i class="fa-solid fa-house-medical-flag fa-2xl rounded-circle"></i>
                                <!-- <i class="fa-solid fa-house-medical-flag  fa-2xl "></i>  -->
                                <h5 class="card-title">جراحة البنكرياس</h5>
                                <p class="card-text">جراحة البنكرياس هي هي منطقه خاصة من الجراحت العامة تتكيفمع الخصائص
                                    التي ينطوي عليها النهج الجراحي لاعتلال البنكرياس والقناة الصفراوية البعيدة ان جراحة
                                    البنكرياس عملية شديدة التعقيدة </p>
                                <a href="https://www.mayoclinic.org/ar/tests-procedures/whipple-procedure/about/pac-20385054"
                                    class="btn btn-primary">المزيد من المعلومات </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end features-->


    <!--start overview-->
    <div class="overview">
        <div class="container">
            <h2 class="h1 text-right">قسم الاورام الجراحية معهد جنوب مصر للاورام جامعة اسيوط</h2>
            <p class="p text-right">قسم الأورام الجراحية
                يقدم قسم الأورام الجراحية في SECI خدمة تشخيصية واستشارية للأفراد الذين يعانون من مشاكل تتعلق بجراحة
                الأورام. على وجه التحديد ، يقدم القسم الخبرة في رعاية المرضى الذين يعانون من أورام خبيثة في الثدي والجلد
                والأنسجة الرخوة والجهاز الهضمي والكبد والبنكرياس والطحال والغدد الليمفاوية والجهاز البولي وأنظمة أمراض
                النساء. القسم لديه تفاعل وثيق مع الأقسام الأخرى داخل معهد السرطان</p>
            <a href="https://www.aun.edu.eg/SECI/ar/node/208" class="btn btn-primary">المزيد من المعلومات</a>
        </div>
    </div>
    <!--end overview-->
    <br><br>
    <!-- section doctors -->
    <section id="doctors" class="doctors ">
        <div class="container">

            <div class="section-title">
                <h2 class="h1 text-right">الاطباء</h2>
                <p class="p text-right">لدينا نخبة من أمهر الأطباء الجراحين الاستشاريين والمتخصصين في قسم الأورام
                    الجراحية .</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img
                                src="images/confident-female-doctor-office-desk-sitting-smiling-camera-health-care-prevention-concept-56351853.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>romo</h4>
                            <span>surgeon </span>
                            <p>استشاري طب الأورام بمركز الأورام جامعة المنصورة
                            </p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100057620283305"><i
                                        class="fa-brands fa-facebook fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href=""> <i class="fa-brands fa-linkedin fa-2xl"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img
                                src="images/outdoor-portrait-male-doctor-wearing-white-lab-coat-smiling-to-camera-35801901.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>د.حازم</h4>
                            <span>طبيب جراح</span>
                            <p>إستشاري و مدرس طب الأورام و أورام الدم بكلية طب المنصورة
                            </p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href=""> <i class="fa-brands fa-linkedin fa-2xl"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img
                                src="images/outdoor-portrait-female-doctor-looking-to-camera-smiling-35801878.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>د.سما</h4>
                            <span>طبيبة جراحة</span>
                            <p>إستشاري و مدرس طب الأورام و أورام الكلي بكلية طب الاسكندرية</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href=""> <i class="fa-brands fa-linkedin fa-2xl"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img
                                src="images/male-cheerful-asian-doctor-smiling-looking-camera-showing-ok-hand-sign-modern-clinic-outdoor-background-portrait-male-229534697.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>د.مايكل</h4>
                            <span>طبيب جراح</span>
                            <p>إستشاري و مدرس طب الأورام و أورام الدم بكلية طب القاهرة</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                                <a href=""><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href=""> <i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end section doctors -->
    <br><br>
    <!--  Location Section  -->
    <section id="Location" class="Location">
        <div class="container">

            <div class="section-title">
                <h2 class="h2 text-right">الموقع</h2>
                <p class="p text-right">الخريطة تساعدك في الوصول الي موقع المشفي بسهولة</p>
            </div>
        </div>

        <!--google map-->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.1981292401847!2d31.174837475173813!3d27.18150897648799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450be46f820ec7%3A0xf0ca3108b4d2fd46!2sSouth%20Egypt%20Cancer%20Institute%20-%20Assiut%20University!5e0!3m2!1sen!2seg!4v1682220305254!5m2!1sen!2seg"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 363px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 363px;
                    }

                    .gmap_iframe {
                        height: 363px !important;
                    }
                </style>
            </div>
    </section>
    </main>
    <!-- end Location Section  -->
    <br><br>
    <!-- Footer  -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>معهد جنوب مصر للأورام <br>
                                <h4>جامعة أسيوط</h4>
                            </h3>
                            <p>
                                الشياخة السابعة، قسم أول أسيوط <br>
                                55JG+JX3, Al Methaq Street 71111<br><br>
                                <strong>Phone:</strong> 0882086026<br>
                                <strong>Email:</strong> seci_dean@aun.edu.eg<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/profile.php?id=100057620283305" class="facebook"><i
                                        class="fa-brands fa-facebook fa-2xl"></i></a>
                                <a href="#" class="instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href="#" class="twitter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href="#" class="linkedin"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-play fa-lg"></i> <a href="#home">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-play fa-lg"></i> <a href="#features">About</a></li>
                            <li><i class="fa-sharp fa-solid fa-play fa-lg"></i> <a href="#login">Login</a></li>
                            <li><i class="fa-sharp fa-solid fa-play fa-lg"></i> <a href="#doctors">Doctors</a></li>
                            <li><i class="fa-sharp fa-solid fa-play fa-lg"></i> <a href="#location">Location</a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Surgical-Oncology</span></strong>. All Rights Reserved
                        </div>
                    </div>

    </footer>
    <!--End footer-->
    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i
            class="fa-sharp fa-solid fa-caret-up fa-2xl"></i></a>








    <script src="{{ asset('website/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
</body>

</html>
