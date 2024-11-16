@include('includes.userheader')

<style>
.ftco-section .container .row {
    margin-bottom: 30px;
}

.ftco-section .container .row:last-child {
    margin-bottom: 0;
}

.ftco-animate {
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .ftco-section .container .row {
        margin-bottom: 20px;
    }
}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{asset('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Pricing</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading mb-3">Plans</span>
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
