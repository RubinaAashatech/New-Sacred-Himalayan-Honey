@extends('frontend.layouts.master')

@section('content')
    <!----------------------------------contact page start section ----------->

    <!-- hero section -->


    <section class="container">
        <div class="herosection row">
          <div class="herosection_image-container col-md-12">
            <img src="../image/about/contacthero.png" alt="" srcset="" />
          </div>
          <span class="section-overlay d-flex flex-column align-items-center">
            <h2>What are you searching for ?</h2>
            <span class="col-8">Pará is a state of Brazil, located in northern Brazil and traversed
                by the lower Amazon River. It borders the Brazilian states of Amap Brazilian states of Amap Brazilian states of Amapá,northwest
            </span>
          </span>
        </div>
      </section>






    <!-- hero contact form -->
    <section class="container">
        <div class="d-flex flex-column justify-content-center my-5 row">
            <span class="d-flex flex-column justify-content-center align-items-center containertitle">
                <h2 class="d-flex justify-content-center">Connect with Us</h2>
                <img src="../image/banner.png" alt="Banner Image" />
            </span>
            <div class="d-flex flex-column justify-content-center customconnectwithus row">
                <p class="my-4">
                    Are you ready to embark on a journey of self-discovery, inner peace,
                    and holistic well-being? Join our Yoga and Meditation class, and
                    connect with us to explore the transformative power of mindfulness
                    and movement.
                </p>
                <div class="customconnectwithus-innersection d-flex justify-content-between">
                    <div class="customconnectwithus-innersection-left col-md-5 col-md-5">
                        <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column py-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                            <label for="contact">Contact Number</label>
                            <input type="text" name="contact" id="contact" />
                        </div>
                        <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                            <label for="contact">Email</label>
                            <input type="text" name="contact" id="contact" />
                        </div>
                        <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="2" class="my-1"></textarea>
                        </div>
                        <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column my-1">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="customconnectwithus-innersection-right p-4 col-md-6">
                        <span>Feel free to connect with us through the contact details
                            provided below for any type of inquiry or to establish a
                            connection. We are here to assist you in a positive and helpful
                            manner.</span>
                        <div class="customconnectwithus-innersection-right-ourdetail my-4 p-4">
                            <h6>Contact</h6>
                            <div class="py-2">
                                <i class="fa-solid fa-phone"></i><span class="px-2">9800000000</span>
                            </div>
                            <div class="py-2">
                                <i class="fa-solid fa-envelope"></i><span class="px-2">acredhoney@gmail.com</span>
                            </div>
                        </div>
                        <div class="customconnectwithus-innersection-right-ourdetail my-3 p-4">
                            <h6>Contact</h6>
                            <div class="py-2">
                                <i class="fa-solid fa-location-dot"></i><span class="px-2">Kathmandu, Nepal</span>
                            </div>
                            <div class="py-2">
                                <i class="fa-solid fa-envelope"></i><span class="px-2">acredhoney@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection