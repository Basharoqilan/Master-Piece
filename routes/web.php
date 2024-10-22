<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\DiabetesAssessmentController;
use App\Http\Controllers\BmiController;
use App\Http\Controllers\BodyWeightPlannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\UserSubscriptionsController;
use App\Http\Controllers\SubscriptionDetailsController;
use App\Http\Controllers\Bmi_weight_diabets_tabelsController;
use App\Http\Controllers\PlanDetailsController;

Route::get('/about', function () {
    return view('user.about');
});

// my name is yousef jammal alsaidh



Route::get('/contact', function () {
    return view('user.contact');
});



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pricing', [PricingController::class, 'showPricing'])->name('pricing');

Route::get('/products', [ProductController::class, 'showProduct'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');

Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');

Route::post('/order/store', [OrderController::class, 'store'])->name('orders.store');






Route::get('/diabetes-assessment', [DiabetesAssessmentController::class, 'showForm'])->name('diabetes_assessment.show');
Route::post('/diabetes-assessment', [DiabetesAssessmentController::class, 'store'])->name('diabetes_assessment.store');

Route::get('/bmi-calculator', [BmiController::class, 'showForm'])->name('bmi.form');
Route::post('/bmi-calculate', [BmiController::class, 'calculateBmi'])->name('bmi.calculate');

Route::get('/body-weight-planner', [BodyWeightPlannerController::class, 'showForm'])->name('body_weight_planner.showForm');
Route::post('/body-weight-planner', [BodyWeightPlannerController::class, 'store'])->name('body_weight_planner.store');




Route::group(['middleware' => ['role']], function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/PurchaseHistory', [PurchaseHistoryController::class, 'index'])->name('PurchaseHistory.index');
    Route::get('/order_details/{order_id}', [DetailsController::class, 'show'])->name('order_details');
    Route::get('/Edit_Profile/edit/{user_id}', [EditProfileController::class, 'edit'])->name('Edit_Profile');
    Route::put('/Edit_Profile/update', [EditProfileController::class, 'update'])->name('Edit_Profile.update');
    Route::get('/userSubscriptions', [UserSubscriptionsController::class, 'index'])->name('userSubscriptions');
    Route::get('/subscriptions/{id}/details', [SubscriptionDetailsController::class, 'show'])->name('SubscriptionDetails');
    Route::get('/calculators/{user_id}', [Bmi_weight_diabets_tabelsController::class, 'show'])->name('calculators');
    Route::get('/profile/pdf', [Bmi_weight_diabets_tabelsController::class, 'downloadPDF'])->name('profile.pdf');

    Route::post('/credit-card/store', [CreditCardController::class, 'store'])->name('credit-card.store');
    Route::post('/subscription', [SubscriptionController::class, 'store'])->name('subscriptions.store');
    Route::get('/subscriptions/{plan_id}', [SubscriptionController::class, 'showForm'])->name('subscriptions');
    Route::get('/checkout/cash', [CheckoutController::class, 'cash'])->name('checkout.cash');
    Route::get('/credit', [CheckoutController::class, 'showCreditForm'])->name('checkout.credit');
});



Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);


Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/admin-profile/edit/{id}', [UserController::class, 'editAdmin'])->name('admin.edit');
    Route::put('/admin-profile/update', [UserController::class, 'updateProfile'])->name('AdminProfile.update');
    Route::get('/admin-profile', [UserController::class, 'showAdminProfile'])->name('AdminProfile');
    Route::post('/admin-profile/store', [UserController::class, 'storeAdmin'])->name('AdminProfile.store');

    Route::get('/price_plans', [PricingController::class, 'index'])->name('price_plans');
    Route::get('/price_plans/create', [PricingController::class, 'create'])->name('price_plans.create');
    Route::post('/price_plans/store', [PricingController::class, 'store'])->name('price_plans.store');
    Route::get('/price_plans/{id}/edit', [PricingController::class, 'edit'])->name('price_plans.edit');
    Route::put('/price_plans/{id}', [PricingController::class, 'update'])->name('price_plans.update');
    Route::delete('/price_plans/{id}', [PricingController::class, 'destroy'])->name('price_plans.destroy');
    Route::get('/price_plans/{id}', [PricingController::class, 'show'])->name('price_plans.show');


    Route::get('/PlanDetails', [PlanDetailsController::class, 'index'])->name('PlanDetails');
    Route::get('/PlanDetails/create', [PlanDetailsController::class, 'create'])->name('PlanDetails.create');
    Route::post('/PlanDetails/store', [PlanDetailsController::class, 'store'])->name('PlanDetails.store');
    Route::get('/PlanDetails/{id}/edit', [PlanDetailsController::class, 'edit'])->name('PlanDetails.edit');
    Route::put('/PlanDetails/{id}', [PlanDetailsController::class, 'update'])->name('PlanDetails.update');
    Route::delete('/PlanDetails/{id}', [PlanDetailsController::class, 'destroy'])->name('PlanDetails.destroy');
    Route::get('/PlanDetails/{id}', [PlanDetailsController::class, 'show'])->name('PlanDetails.show');

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/{id}', [ProductController::class, 'show2'])->name('product.show2');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/discount', [DiscountController::class, 'index'])->name('discount');
    Route::get('/discount/create', [DiscountController::class, 'create'])->name('discount.create');
    Route::post('/discount/store', [DiscountController::class, 'store'])->name('discount.store');
    Route::get('/discount/{id}/edit', [DiscountController::class, 'edit'])->name('discount.edit');
    Route::put('/discount/{id}', [DiscountController::class, 'update'])->name('discount.update');
    Route::delete('/discount/{id}', [DiscountController::class, 'destroy'])->name('discount.destroy');

    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription');
    Route::delete('/subscription/{id}', [SubscriptionController::class, 'destroy'])->name('subscription.destroy');

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');


});
