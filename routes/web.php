<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('adminpalen');
});




//admin route and store list

//about
route::get('pages/about/insert',[admincontroller::class,'about'])->name('about');
route::get('pages/about/list',[admincontroller::class,'aboutlist'])->name('aboutlist');


//blog
route::get('pages/blog/insert',[admincontroller::class,'blog'])->name('blog');
route::get('pages/blog/list',[admincontroller::class,'bloglist'])->name('bloglist');

//contact
route::get('pages/contact',[admincontroller::class,'contact'])->name('contact');
route::get('pages/contact/list',[admincontroller::class,'contactlist'])->name('contactlist');


//home
route::get('pages/home/insert',[admincontroller::class,'home'])->name('home');
route::get('pages/home/list',[admincontroller::class,'homelist'])->name('homelist');

//project
route::get('pages/project/insert',[admincontroller::class,'project'])->name('project');
route::get('pages/project/list/',[admincontroller::class,'projectlist'])->name('projectlist');

//resume
route::get('pages/resume/insert',[admincontroller::class,'resume'])->name('resume');
route::get('pages/resume/list',[admincontroller::class,'resumelist'])->name('resumelist');

//services

route::get('pages/service/insert',[admincontroller::class,'service'])->name('service');
route::get('pages/service/list',[admincontroller::class,'servicelist'])->name('servicelist');

//skill
route::get('pages/skill/insert',[admincontroller::class,'skill'])->name('skill');
route::get('pages/skill/list',[admincontroller::class,'skilllist'])->name('skilllist');

