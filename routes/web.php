<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\Portfolio\CategoryController;
use App\Http\Controllers\Admin\Portfolio\ProjectController;
use App\Http\Controllers\Admin\Portfolio\ProjectImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialIconController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/portfolio-details/{id}', [FrontendController::class, 'portfolio_details'])->name('portfolio.details');
Route::post('contact/store', [FrontendController::class, 'msg_store'])->name('contact.store');


Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    //User
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('user/index', [UserController::class,'index'])->name('user.index');
    Route::get('user/edit/{id}', [UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{id}', [UserController::class,'update'])->name('user.update');
    //About
    Route::get('about/index', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('about/update/{id}', [AboutController::class, 'update'])->name('about.update');
    //Facts
    Route::get('fact/index', [FactController::class, 'index'])->name('fact.index');
    Route::get('fact/create', [FactController::class, 'create'])->name('fact.create');
    Route::post('fact/create', [FactController::class, 'store'])->name('fact.store');
    Route::get('fact/edit/{id}', [FactController::class, 'edit'])->name('fact.edit');
    Route::post('fact/update/{id}', [FactController::class, 'update'])->name('fact.update');
    Route::get('fact/destroy/{id}', [FactController::class, 'destroy'])->name('fact.destroy');
    //Skill
    Route::get('skill/index', [SkillController::class, 'index'])->name('skill.index');
    Route::get('skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('skill/create', [SkillController::class, 'store'])->name('skill.store');
    Route::get('skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('skill/update/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::get('skill/destroy/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');
    //Education
    Route::get('education/index', [EducationController::class, 'index'])->name('education.index');
    Route::get('education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('education/create', [EducationController::class, 'store'])->name('education.store');
    Route::get('education/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
    Route::post('education/update/{id}', [EducationController::class, 'update'])->name('education.update');
    Route::get('education/destroy/{id}', [EducationController::class, 'destroy'])->name('education.destroy');
    //Experience
    Route::get('experience/index', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('experience/create', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('experience/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('experience/destroy/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
    //Service
    Route::get('service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/create', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    //Testimonial
    Route::get('testimonial/index', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('testimonial/create', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    //Contact
    Route::get('contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('contact/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    //Social Icon
    Route::get('social/index', [SocialIconController::class, 'index'])->name('social.index');
    Route::get('social/create', [SocialIconController::class, 'create'])->name('social.create');
    Route::post('social/create', [SocialIconController::class, 'store'])->name('social.store');
    Route::get('social/edit/{id}', [SocialIconController::class, 'edit'])->name('social.edit');
    Route::post('social/update/{id}', [SocialIconController::class, 'update'])->name('social.update');
    Route::get('social/destroy/{id}', [SocialIconController::class, 'destroy'])->name('social.destroy');
    //Portfolio Category
    Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    //Portfolio Project
    Route::get('project/index', [ProjectController::class, 'index'])->name('project.index');
    Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('project/create', [ProjectController::class, 'store'])->name('project.store');
    Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::get('project/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    //Portfolio Project Image
    Route::get('image/index', [ProjectImageController::class, 'index'])->name('image.index');
    Route::get('image/create', [ProjectImageController::class, 'create'])->name('image.create');
    Route::post('image/create', [ProjectImageController::class, 'store'])->name('image.store');
    Route::get('image/edit/{id}', [ProjectImageController::class, 'edit'])->name('image.edit');
    Route::post('image/update/{id}', [ProjectImageController::class, 'update'])->name('image.update');
    Route::get('image/destroy/{id}', [ProjectImageController::class, 'destroy'])->name('image.destroy');

    //Logout
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
});

