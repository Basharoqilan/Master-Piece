@include('includes.header')



<div class="container-fluid py-4">
    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">monetization_on</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Sale Of Product</p>
                        <h4 class="mb-0">{{$totalCostSum}}$</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">From the orders:<span class="text-success text-sm font-weight-bolder"> {{$totalOrder}} </span></p>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">monetization_on</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Subscription Sales</p>
                        <h4 class="mb-0">{{$totalplanSum}}$</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">From the Subscription:<span class="text-success text-sm font-weight-bolder"> {{$totalplan}} </span></p>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total users</p>
                        <h4 class="mb-0">{{$users}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Total Admin: <span class="text-success text-sm font-weight-bolder">{{ $admin }}</span></p>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Plans</p>
                        <h4 class="mb-0">{{$Price_Plan}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">price (min-max):<span class="text-success text-sm font-weight-bolder">{{$minPriceOfplan}}$ - {{$maxPriceOfplan}}$</span></p>
                </div>
            </div>
        </div>





    </div>




    <div class="row mt-4">


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">subscriptions</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Plan Details</p>
                        <h4 class="mb-0">{{$DailyTask}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Day (min-max): <span class="text-success text-sm font-weight-bolder">{{$minDays}} day - {{$MaxDays}} day<span></p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">shopping_cart</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Products</p>
                        <h4 class="mb-0">{{$product}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Price (min-max): <span class="text-success text-sm font-weight-bolder">{{$minPrice}}$ - {{$maxPrice}}$</span></p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total categories</p>
                        <h4 class="mb-0">{{ $countCategories }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Category Name:<span class="text-success text-sm font-weight-bolder">  @foreach($categories as $category)
                        {{ $category->category_name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">local_offer</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Discount</p>
                        <h4 class="mb-0">{{$discount}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Discount (min-max):<span class="text-success text-sm font-weight-bolder"> {{$minDiscount}}% - {{$maxDiscount}}%</span></p>
                </div>
            </div>
        </div>


    <div class="row mt-4">

        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1" style=" background-image: linear-gradient(195deg, #ffffff 0%, #ffffff 100%);">
                        <div class="chart">
                            <canvas id="paymentMethodChart" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Payment Method Distribution</h6>
                    <p class="text-sm">Orders grouped by payment methods</p>
                    <hr class="dark horizontal">
                </div>
            </div>
        </div>


    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1" style="background-image: linear-gradient(195deg, #ffffff 0%, #ffffff 100%);">
                    <div class="chart">
                        <canvas id="Subscriptions" class="chart-canvas" height="170"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0">Users</h6>
                <p class="text-sm">Subscriptions per user</p>
                <hr class="dark horizontal">
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1" style="background-image: linear-gradient(195deg, #ffffff 0%, #ffffff 100%);">
                    <div class="chart">
                        <canvas id="Subscription" class="chart-canvas" height="170"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0">Plans</h6>
                <p class="text-sm">Subscriptions per plan</p>
                <hr class="dark horizontal">
            </div>
        </div>
    </div>

        <!-- More charts... -->
    </div>

</div>

<!-- Core JS Files -->
<script src="{{asset('/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx = document.getElementById("paymentMethodChart").getContext("2d");
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_keys($paymentMethodData)) !!}, // Payment methods (cash, credit card, etc.)
            datasets: [{
                label: 'Number of Orders',
                data: {!! json_encode(array_values($paymentMethodData)) !!}, // Number of orders for each payment method
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Payment Method Distribution', // Chart Title
                    font: {
                        size: 18
                    }
                },
                tooltip: {
                    enabled: true,
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + ' orders';
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Payment Methods' // Label for x-axis
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Number of Orders' // Label for y-axis
                    },
                    beginAtZero: true
                }
            }
        }
    });



    var ctx = document.getElementById("Subscriptions").getContext("2d");
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_keys($subscriptionsData)) !!}, // User IDs
            datasets: [{
                label: 'Number of Subscriptions',
                data: {!! json_encode(array_values($subscriptionsData)) !!}, // Number of subscriptions
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
               borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Subscriptions by User', // Chart title
                    font: {
                        size: 18
                    }
                },
                tooltip: {
                    enabled: true,
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'User ' + tooltipItem.label + ': ' + tooltipItem.raw + ' subscriptions';
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'User IDs' // Label for the x-axis
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Number of Subscriptions' // Label for the y-axis
                    },
                    beginAtZero: true
                }
            }
        }
    });



    var ctx = document.getElementById("Subscription").getContext("2d");
    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: {!! json_encode(array_keys($subscriptionsDataByPlan_id)) !!},
        datasets: [{
            label: 'Number of Subscriptions',
            data: {!! json_encode(array_values($subscriptionsDataByPlan_id)) !!},
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Subscriptions by Plan', // Chart Title
                font: {
                    size: 18
                }
            },
            tooltip: {
                enabled: true,
                callbacks: {
                    label: function(tooltipItem) {
                        return 'Plan ' + tooltipItem.label + ': ' + tooltipItem.raw + ' subscriptions';
                    }
                }
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Plan ID' // Label for x-axis
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Number of Subscriptions' // Label for y-axis
                },
                beginAtZero: true
            }
        }
    }
});
</script>
</body>

</html>
