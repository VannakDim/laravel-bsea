@extends('layouts.app')
@section('title','Contact page')
@section('heading')
<div class="container-fluit bg-primary hero-header">
        <div class="row g-3 align-items-center">
                <div class="col-lg-12 text-center">
                        <h1 class="text-white mb-4 animated zoomIn kh">ទំនាក់ទំនង</h1>
                        <p class="text-white"><i class="fa fa-phone-alt me-3"></i>+855 69 668 788</p>
                        <p class="text-white"><i class="fa fa-envelope me-3"></i>info@bseacambodia.org</p>
                </div>
        </div>
</div>
@stop

@section('content')

        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
                        <h1 class="kh">អាស័យដ្ឋានរបស់សមាគមន៍</h1>
                        <p>#84,#86,#88 st.Betong, Borey The Varina Sen Sok, Krang Thnong, Sen Sok, Phnom Penh, Cambodia</p>
                    <!-- <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7817.068309507269!2d104.835173!3d11.585216!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDM1JzA2LjgiTiAxMDTCsDUwJzE0LjUiRQ!5e0!3m2!1sen!2skh!4v1675541209980!5m2!1sen!2skh" width="100%" height="450" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- <h2 class="mb-5 mt-5">If You Have Any Query, Please Feel Free Contact Us</h2> -->

                <!-- <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Contact End -->
@stop