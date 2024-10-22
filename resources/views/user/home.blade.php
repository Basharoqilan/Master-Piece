@include('includes.userheader')

<style>

.ftco-social li a span {
    font-size: 24px;
    transition: transform 0.3s ease;
}
.staff:hover .text .position {
    color: white !important;
    transition: color 0.3s ease;
}
.staff:hover .text .faded {
    color: white !important;
    transition: color 0.3s ease;
}

</style>


<div class="hero-wrap js-fullheight">
    <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url('{{ asset('images/1.jpg') }}');">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-7 ftco-animate">
                  <div class="text w-100">
                      <h2 style="color: black">Welcome to Health Coach</h2>
                    <h1 class="mb-4">Get in shape faster, live your happy life</h1>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url('{{ asset('images/bg_2.jpg') }}');">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-7 ftco-animate">
                  <div class="text w-100">
                      <h2 style="color: white ; font-size : 20px">A Fresh approach to healthy life</h2>
                    <h1 class="mb-4 color-white">Unlock your potential with good nutrition</h1>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url('{{ asset('images/bg_3.jpg') }}');">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                  <div class="text w-100">
                      <h2  style="color: #1089ff">Welcome Health Coach</h2>
                    <h1 class="mb-4" style="color: #1089ff">You can transform health through habit change</h1>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>



<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
      <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block services-wrap text-center">
          <div class="img" style="background-image: url('{{ asset('images/2.jpg') }}');"></div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Exercise Program</h3>
            <p>Achieve your fitness goals with a customized workout plan. Our program caters to all fitness levels, helping you build strength and confidence with expert guidance.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block services-wrap text-center">
          <div class="img" style="background-image: url(images/3.jpg);"></div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Nutrition Plans</h3>
            <p>Nourish your body the right way with personalized meal plans designed to meet your goals. Our nutritionists create balanced, delicious options tailored to your needs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block services-wrap text-center">
          <div class="img" style="background-image: url('{{ asset('images/services-3.jpg') }}');"></div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Diet Program</h3>
            <p>A holistic diet approach focused on sustainable, enjoyable eating habits. Reach your health goals with personalized guidance and wholesome ingredients.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>




<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url('{{ asset('images/4.jpg') }}');">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
          <div class="heading-section mb-5">
              <div class="pl-md-5">
                  <span class="subheading mb-2">Welcome to Health and Wellness</span>
                <h2 class="mb-2">Discover the Natural Way to Improve Your Health and wellness.</h2>
            </div>
          </div>
          <div class="pl-md-5">
                        <p>At Health Coach, we believe in holistic health solutions that nurture both body and mind. Our approach combines natural methods and personalized care to help you achieve lasting wellness. Whether it's through nutrition, exercise, or mindful habits, we're here to guide you on your journey toward a healthier, happier life.</p>
                        <div class="founder d-flex align-items-center mt-5">
                            <div class="img" style="background-image: url('{{ asset('images/4.jpg') }}');"></div>
                            <div class="text pl-3">
                                <h3 class="mb-0">Cythia Hunter</h3>
                                <span class="position">Personal Nutritionist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading mb-3">Coach</span>
            <h2>Meet Our Coaches</h2>
          </div>
        </div>
        <div class="row">
            <!-- First Coach -->
           <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('{{ asset('images/staff-1.jpg') }}');"></div>
        </div>
        <div class="text pt-3 px-3 pb-4 text-center">
            <h3>Lloyd Wilson</h3>
            <span class="position mb-2" >Fitness Coach</span>
            <div class="faded">
                <p>I specialize in personal fitness training, helping clients achieve their fitness goals through tailored workout plans.</p>
                <!-- Add phone number here -->
                <p><strong>Phone:</strong> +123 456 7890</p>
                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Second Coach -->
<div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('{{ asset('images/staff-2.jpg') }}');"></div>
        </div>
        <div class="text pt-3 px-3 pb-4 text-center">
            <h3>Rachel Parker</h3>
            <span class="position mb-2">Life Coach</span>
            <div class="faded">
                <p>I help people find clarity and direction in their personal and professional lives through goal setting and motivation.</p>
                <!-- Add phone number here -->
                <p><strong>Phone:</strong> +123 456 7891</p>
                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Third Coach -->
<div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('{{ asset('images/staff-3.jpg') }}');"></div>
        </div>
        <div class="text pt-3 px-3 pb-4 text-center">
            <h3>Ian Smith</h3>
            <span class="position mb-2">Nutrition Coach</span>
            <div class="faded">
                <p>I specialize in crafting personalized meal plans that help clients improve their health through proper nutrition.</p>
                <!-- Add phone number here -->
                <p><strong>Phone:</strong> +123 456 7892</p>
                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Fourth Coach -->
<div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('{{ asset('images/staff-4.jpg') }}');"></div>
        </div>
        <div class="text pt-3 px-3 pb-4 text-center">
            <h3>Alicia Henderson</h3>
            <span class="position mb-2">Health Coach</span>
            <div class="faded">
                <p>I focus on helping clients achieve a balanced and healthy lifestyle through customized wellness programs.</p>
                <!-- Add phone number here -->
                <p><strong>Phone:</strong> +123 456 7893</p>
                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
        </div>
        </div>
    </section>




<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading mb-3">Testimonies</span>
        <h2>Happy Clients &amp; Feedbacks</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
                        <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('{{ asset('images/person_1.jpg') }}')">
              </div>
              <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>My personalized exercise and nutrition plan helped me lose 20 pounds in just 3 months! I have never felt stronger and healthier, this is amazing</p>
                <p class="name">Racky Henderson</p>
                <span class="position">Father</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('{{ asset('images/person_2.jpg') }}')">
              </div>
              <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>The support I received from the health coach program was life-changing. I’ve learned how to balance my diet and stay active effortlessly.</p>
                <p class="name">Henry Dee</p>
                <span class="position">Businesswoman</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('{{ asset('images/person_3.jpg') }}')">
              </div>
              <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Thanks to the expert guidance, I’ve been able to maintain a healthy lifestyle while managing my busy work schedule. Highly recommend!</p>
                <p class="name">Mark Huff</p>
                <span class="position">Businesswoman</span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('{{ asset('images/person_4.jpg') }}')">
              </div>
              <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>The health coach team completely transformed my view on fitness. I now feel confident, energized, and ready to take on any challenge!</p>
                <p class="name">Rodel Golez</p>
                <span class="position">Businesswoman</span>
              </div>
            </div>
          </div>

         </div>
      </div>
    </div>
  </div>
</section>




<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading mb-3">Other Services</span>
        <h2>How it works?</h2>
      </div>
    </div>
        <div class="row">
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Follow the program</h3>
            <p>Start your journey with a personalized health plan designed to suit your lifestyle and fitness goals.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-workout"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Work for result</h3>
            <p>Stay committed to the process, track your progress, and make consistent efforts to achieve visible results.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet-1"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Eat healthy food</h3>
            <p>Incorporate nutritious, balanced meals into your diet, providing the fuel your body needs to thrive.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Enjoy your life</h3>
            <p>Feel the positive changes, boost your energy, and enjoy a healthier, happier lifestyle every day.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>





<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading mb-3">Price & Plans</span>
                <h2>Choose Your Perfect Plans</h2>
            </div>
        </div>
        <div class="row">
            @foreach($plans as $plan)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7" style="display: flex; flex-direction: column; height: 100%;">
                        <div class="text-left" style="flex-grow: 1;">
                            <h4 class="heading-2">{{ $plan->name }}</h4>
                            <span class="price"><span class="number"  style="font-size: 35px">${{ $plan->price }}</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{{ $plan->workouts }}</li>
                                <li><span class="fa fa-check mr-2"></span>{{ $plan->meal_plans }}</li>
                                <li><span class="fa fa-check mr-2"></span>{{ $plan->coaching }}</li>
                                <li><span class="fa fa-check mr-2"></span>{{ $plan->customer_support }}</li>
                                <li><span class="fa fa-check mr-2"></span>Duration: {{ $plan->duration }}</li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('subscriptions', ['plan_id' => $plan->id]) }}" class="btn btn-primary px-4 py-3" style="margin-top: auto;">Subscription</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('includes.userfooter')


