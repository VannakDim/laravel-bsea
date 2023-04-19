@extends('layouts.app')
@section('title','BSEA Cambodia')
@section('heading')
        <div class="container-fluit bg-primary hero-header">
                <div class="row g-3 align-items-center">
                        <div class="col-lg-12 text-center">
                                <h1 class="text-white mb-4 animated zoomIn kh">សមាគមន៍កាបូប ស្បែកជើង និងអេឡិចត្រូនិចកម្ពុជា</h1>
                                <h1 class="text-white mb-4 animated zoomIn ch">柬 埔 寨 箱 包 、鞋 业 和 电 子 商 会</h1>
                                <h1 class="text-white mb-4 animated zoomIn en">Cambodia’s Bag, Shoe and Electronic Association</h1>
                        </div>
                </div>
        </div>
@stop

@section('content')
       <!-- About Start -->
       <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/about.png">
                    </div> -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <!-- <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div> -->
                        <h2 class="mb-4 h-about">អំពីសមាគមន៍</h2>
                        <p class="mb-4">សមាគមកាបូប ស្បែកជើង និងអេឡិចត្រូនិចកម្ពុជា (ស.ក.ស.អ) ជាអង្គការសមាជិកភាពដ៏លេចធ្លោមួយក្នុងព្រះរាជាណាចក្រកម្ពុជាក្នុងវិស័យដែលបានកំណត់។  
                            ស.ក.ស.អ ជាអង្គភាពមិនស្វែងរកប្រាក់ចំណេញ មិនមែនអង្គការសាសនា និងមិនមែនបម្រើនិន្នាការនយោបាយនៃបក្សនយោបាយណាមួយឡើយ។  ស.ក.ស.អ លើកកម្ពស់ឲ្យមានការចូលរួមរវាងដៃគូសន្ទនាសង្គមនានាដូចជារាជរដ្ឋាភិបាល និយោជក សហជីព និងដៃគូដទៃទៀតផងដែរ។ 
                            ស.ក.ស.អ ត្រូវបានចុះបញ្ជិកាជាមួយក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ តាមរយៈលិខិតទទួលស្គាល់លេខ ៣២២/២២ ក.ប./វ.ប.វ.ក ចុះថ្ងៃទី ១៩ ខែសីហា ឆ្នាំ២០២២។ បច្ចុប្បន្ននេះ BSEA មានសមាជិកពេញសិទ្ធិចំនួន១៥ សហគ្រាស/គ្រឹះស្ថាន ក្នុងវិស័យផលិតកាបូប ស្បែកជើង 
                            ឧបករណ៍អេឡិចត្រូនិច និងវិស័យប្រហាក់ប្រហែល ដែលគាំទ្រក្នុងសង្វាក់ផលិតកម្មផងដែរ ដែលមានកម្មករនិយោជិតកំពុងបម្រើការងារប្រមាណជា ១៥,០០០នាក់ ក្នុងនោះភាគច្រើនលើសលុបជាស្ត្រី ដែលអញ្ជើញមកពីបណ្តាខេត្ត ក្រុងនានានៅទូទាំងប្រទេសកម្ពុជា។ 
                            BSEA គ្រោងនឹងពង្រីកសមាជិករបស់ខ្លួនយ៉ាងហោចចំនួន១៥០ សហគ្រាសគ្រឹះស្ថាន ក្រុមហ៊ុនបន្ថែមទៀតនៅឆ្នាំ២០២៣ខាងមុខ។</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="/about">Read More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3 mb-4">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa-solid fa-landmark text-white"></i>
                                    </div>
                                    <h6 class="mb-0">1.	ផ្នែកប្រតិបត្តិការ និងហិរញ្ញវត្ថុ</h6>
                                </div>
                            </div>
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa-solid fa-handshake text-white"></i>
                                    </div>
                                    <h6 class="mb-0">2.	ផ្នែកសមាជិកភាព និងទំនាក់ទំនងសាធារណៈ</h6>
                                </div>
                            </div>
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-gavel text-white"></i>
                                    </div>
                                    <h6 class="mb-0">3.	ផ្នែកច្បាប់ និងទំនាក់ទំនងវិជ្ជាជីវៈ</h6>
                                </div>
                            </div>
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-chalkboard-teacher text-white"></i>
                                    </div>
                                    <h6 class="mb-0">4.	ផ្នែកបណ្តុះបណ្តាល និងអភិវឌ្ឍន៍</h6>
                                </div>
                            </div>
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">5.	ផ្នែកស្រាវជ្រាវ និងគោលនយោបាយ</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
@stop

@section('carousel')      
    <div class="col-lg">
        <!-- <div class="col-lg-12 text-center text-lg-art"> -->
        <!-- <img width="100%" class="img-fluid animated zoomIn" src="img/hero.png" alt=""> -->
        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/img/carousel/c01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c03.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c04.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c05.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </div>
@stop

@section('footer')
<!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i><a class="text-white" href="https://goo.gl/maps/TYmLWon48gfHAK9f9">#84,#86,#88 st.Betong, Borey The Varina Sen Sok, Krang Thnong, Sen Sok, Phnom Penh, Cambodia</a></p>
                        <p><i class="fa fa-phone-alt me-3"></i>+855 69 668 788</p>
                        <p><i class="fa fa-envelope me-3"></i>info@bseacambodia.org</p>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="/about">About Us</a>
                        <a class="btn btn-link" href="/contact">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="/team">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">BSEA</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="non-dec" href="https://facebook.com/ProgrammerKonKhmer">Vannak Dim</a>
                            <br>Distributed By: <a class="border-bottom non-dec" href="https://facebook.com/ProgrammerKonKhmer" target="_blank">Programmer Kon Khmer</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Footer End -->
@stop