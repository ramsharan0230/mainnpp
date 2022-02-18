<?php

//Frontend section


Route::get('/',[\App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');

Route::get('donate-us',[\App\Http\Controllers\Frontend\IndexController::class,'donateUs'])->name('donate.us');
Route::get('result',[\App\Http\Controllers\Frontend\IndexController::class,'result'])->name('result');
Route::get('career',[\App\Http\Controllers\Frontend\IndexController::class,'career'])->name('career');

//contact page
Route::get('contact-us',[\App\Http\Controllers\Frontend\IndexController::class,'contactUs'])->name('contact.us');

//about us
Route::get('about-us',[\App\Http\Controllers\Frontend\IndexController::class, 'aboutUs'])->name('about.us');
Route::get('history',[\App\Http\Controllers\Frontend\IndexController::class, 'history'])->name('history');
Route::get('/history-detail/{slug}', [\App\Http\Controllers\Frontend\IndexController::class, 'historyDetail'])->name('history-detail');

Route::get('office',[\App\Http\Controllers\Frontend\IndexController::class,'office'])->name('office');
Route::get('message-from-principal',[\App\Http\Controllers\Frontend\IndexController::class,'messagePrinciple'])->name('message.principle');
Route::get('message-from-chairman',[\App\Http\Controllers\Frontend\IndexController::class,'messageChairman'])->name('message.chairman');
Route::get('why-samata',[\App\Http\Controllers\Frontend\IndexController::class,'whySamata'])->name('why.samata');
Route::get('success-story',[\App\Http\Controllers\Frontend\IndexController::class,'successStory'])->name('success.story');
Route::get('success-story/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'successStoryDetail'])->name('success.story.detail');

//admission
Route::get('admission',[\App\Http\Controllers\Frontend\IndexController::class,'admission'])->name('admission');

Route::get('our-team',[\App\Http\Controllers\Frontend\IndexController::class,'ourTeam'])->name('our.team');



Route::get('press_release/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'press_release'])->name('press_release');
Route::get('rule-detail/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'ruleDetail'])->name('rule.detail');

//curriculum
Route::get('curriculum',[\App\Http\Controllers\Frontend\IndexController::class,'curriculum'])->name('curriculum');

Route::post('donate-submit',[\App\Http\Controllers\Frontend\IndexController::class,'donateSubmit'])->name('donate.submit');

//gallery
Route::get('photo-gallery',[\App\Http\Controllers\Frontend\IndexController::class,'photoGallery'])->name('photo.gallery');
Route::get('video-gallery',[\App\Http\Controllers\Frontend\IndexController::class,'videoGallery'])->name('video.gallery');
Route::get('photo-detail/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'photoDetail'])->name('photo.detail');

//membership
Route::get('join/membership',[\App\Http\Controllers\Frontend\IndexController::class,'joinMembership'])->name('join.membership');
Route::post('member/store',[\App\Http\Controllers\MemberController::class,'storeMember'])->name('member.store');

Route::get('district',[\App\Http\Controllers\Frontend\IndexController::class,'district'])->name('district');
Route::get('municipality',[\App\Http\Controllers\Frontend\IndexController::class,'municipality'])->name('municipality');
Route::get('province',[\App\Http\Controllers\Frontend\IndexController::class,'province'])->name('province');
Route::get('ward',[\App\Http\Controllers\Frontend\IndexController::class,'ward'])->name('ward');



//Blog section
Route::get('blogs',[\App\Http\Controllers\Frontend\IndexController::class,'blogs'])->name('blogs');
Route::get('blog-single/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'blogsDetail'])->name('blog.detail');

//News & Event detail
Route::get('news-event',[\App\Http\Controllers\Frontend\IndexController::class,'newsEvent'])->name('news.event');
Route::get('news-detail/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'newsDetail'])->name('news.detail');

//Rules detail
Route::get('rules',[\App\Http\Controllers\Frontend\IndexController::class,'Ruleslist'])->name('rules.list');
Route::get('rule-detail/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'ruleDetail'])->name('rules.detail');

//Online Library
Route::get('online-libraries',[\App\Http\Controllers\Frontend\IndexController::class,'onlineLibrary'])->name('online-libraries');
Route::get('online-libraries/{slug}',[\App\Http\Controllers\Frontend\IndexController::class,'onlineLibraryDetail'])->name('online-libraries.detail');

//Online colletion(sangrahalaya)
Route::get('online-collections',[\App\Http\Controllers\Frontend\IndexController::class,'onlineCollection'])->name('online-collections');

//press bigyapti
Route::get('press-release',[\App\Http\Controllers\Frontend\IndexController::class,'pressRelease'])->name('press.release');


//Blog By Category
Route::get('blogs-by-category/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'blogCategory'])->name('blog.category');
Route::get('blogs-by-tag/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'blogTag'])->name('blog.tag');

Route::get('search-blog',[\App\Http\Controllers\Frontend\IndexController::class,'blogSearch'])->name('blog.search');


//Testimonial
Route::get('testimonial',[\App\Http\Controllers\Frontend\IndexController::class,'testimonial'])->name('testimonial');


Route::post('contact-us',[\App\Http\Controllers\ContactMessageController::class,'contactMessage'])->name('contact.submit');
Route::post('get_location',[\App\Http\Controllers\Frontend\IndexController::class,'getLocation'])->name('get.location');

Route::get('faq',[\App\Http\Controllers\Frontend\IndexController::class,'faq'])->name('faq');

//Career
Route::get('vacancies',[\App\Http\Controllers\Frontend\IndexController::class,'career'])->name('career');

Route::post('vacancy-application',[\App\Http\Controllers\Frontend\IndexController::class,'vacancyApplication'])->name('vacancy.application');
//Endfrontend section
Route::post('upload-resume',[\App\Http\Controllers\Frontend\IndexController::class,'uploadResume'])->name('upload.resume');



//Endfrontend section


