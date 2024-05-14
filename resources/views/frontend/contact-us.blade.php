@extends('layouts.front_page')

@section('content')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{asset('assets/frontend/assets/img/pages/contact_banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Contact</span>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a><span>|</span></li>
                        <li>Contact</li>
                    </ul>
                    <h1>Reach Out to us</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Contact Details Start -->
<div class="contact__four section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
                <div class="contact__four-info">
                    <div class="contact__four-info-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/locationss.png')}}" alt="">
                    </div>
                    <h4>Head Office</h4>
                    <span> Plot # D-643/7, PAEC-ECHS, Islamabad, Pakistan</span>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
                <div class="contact__four-info">
                    <div class="contact__four-info-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/locationss.png')}}" alt="">
                    </div>
                    <h4>Regional Office</h4>
                    <span>Office # 701, Axis 6, Dubai Silicon Oasis, Dubai</span>
                </div>
            </div>
            <!-- <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 wow fadeInUp" data-wow-delay=".8s">
                <div class="contact__four-info">
                    <div class="contact__four-info-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/phone-call.png')}}" alt="">
                    </div>
                    <h4>Tell With US</h4>
                    <span>Keeping you always better connected.</span>
                    <p><a href="tel:+125(895)658568">+125 (895) 658 568</a></p>
                    <p><a href="tel:+125(874)452645">+125 (874) 452 645</a></p>
                </div>
            </div> -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                <div class="contact__four-info">
                    <div class="contact__four-info-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/emails.png')}}" alt="">
                    </div>
                    <h4>Email</h4>
                    <!-- <span>Please reach us</span> -->
                    <p><a href="mailto:info@maetech.co">info@maetech.co</a></p>
                    <!-- <p><a href="mailto:ceo@maetech.co">ceo@maetech.co</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Details End -->
<!-- Contact Form Start -->
<div class="contact__four">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__four-form t-center">
                    <div class="contact__four-form-title">	
                        <span class="subtitle-one">Get in Touch</span>
                        <h5>Please submit your query we will revert back to you with best possible solution with in 24 hours.</h5>
                    </div>
                    <form id="contactForm" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="fal fa-user"></span>
                                    <input type="text" id="name" name="name" placeholder="Full Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 md-mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="far fa-envelope-open"></span>
                                    <input type="email" id="email" name="email" placeholder="Email Address" required="required">											
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="fal fa-book"></span>
                                    <input type="text" id="subject" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="far fa-comments"></span>
                                    <textarea id="message" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <style>
                                #loader {
                                    display: none;
                                    /* Add your loader styles here */
                                }

                                /* Optional: Style the button when the loader is visible */
                                #saveContactForm[disabled] {
                                    opacity: 0.5;
                                    cursor: not-allowed;
                                }
                            </style>

                            <div class="col-md-12" id="validation-errors"></div>


                            <div class="col-md-12">
                                <div class="contact__two-right-form-item">
                                    <button class="btn-five custom-button " id="saveContactForm" type="submit">Submit Query <i class="far fa-chevron-double-right"></i></button>
                                    <button class="btn-five custom-button " style="display: none;" id="loader" type="submit" disabled>Loading...<i class="far fa-chevron-double-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form End -->
<!-- Map Area Start -->
<div class="contact__two-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.6558120536283!2d73.2026960752011!3d33.48431074750608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dff1753b44aa93%3A0xd94298b220248d1b!2sPAEC%20Employees%20Cooperative%20Housing%20Society!5e0!3m2!1sen!2s!4v1715583028914!5m2!1sen!2s" loading="lazy"></iframe>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894606!2d-74.11976383964463!3d40.69766374865767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1652012644726!5m2!1sen!2sbd" loading="lazy"></iframe> -->
</div> 
<!-- Map Area End -->

@endsection

@section('jsfile')

<script>

    $(document).ready(function() {
        
        $('#contactForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            $('#saveContactForm').hide();
            $('#loader').show();

            // Serialize form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: '{{ route('saveContact') }}', // Replace 'contact.submit' with your actual route
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success, e.g., show a success message
                    console.log(response);
                },
                error: function(xhr) {
                    // Handle error, e.g., show an error message
                    console.error(xhr.responseText);

                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            // Assuming you have a div with id="validation-errors" to display errors
                            $('#validation-errors').append('<p>' + value[0] + '</p>');
                        });
                    }
                },
                complete: function() {
                    // $('#subscribeBtn').prop('disabled', false);

                    $('#loader').hide();
                    $('#saveContactForm').show();
                }
            });
        });
    });

</script>

@endsection