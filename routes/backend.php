<?php


// Admin auth
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[\App\Http\Controllers\Auth\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login',[\App\Http\Controllers\Auth\Admin\LoginController::class,'login'])->name('admin.login.submit');
    Route::post('/logout',[\App\Http\Controllers\Auth\Admin\LoginController::class,'logout'])->name('admin.logout');
});

Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){



    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

    //welcome section
    Route::get('welcome',[\App\Http\Controllers\AdminController::class,'welcome'])->name('welcome');
    Route::post('welcome',[\App\Http\Controllers\AdminController::class,'welcomeUpdate'])->name('welcome.update');

    // Principle Message
    Route::get('principle-message',[\App\Http\Controllers\AdminController::class,'principleMessage'])->name('principle.message');
    Route::post('principle-message',[\App\Http\Controllers\AdminController::class,'principleMessageUpdate'])->name('principle.message.update');

    // History
    Route::resource('/history', \App\Http\Controllers\HistoryController::class);
    Route::resource('/history-image', \App\Http\Controllers\HistoryGalleryController::class);

    // Chairman Message
    Route::get('chairman-message',[\App\Http\Controllers\AdminController::class,'chairmanMessage'])->name('chairman.message');
    Route::post('chairman-message',[\App\Http\Controllers\AdminController::class,'chairmanMessageUpdate'])->name('chairman.message.update');

    // Online Library
    Route::resource('online-libraries', \App\Http\Controllers\OnlineLibraryController::class);

  // Staff Section
    Route::resource('/staff',\App\Http\Controllers\StaffController::class);
    Route::post('staff_status',[\App\Http\Controllers\StaffController::class,'staffStatus'])->name('staff.status');


    //bio-well
    Route::get('bio_well',[\App\Http\Controllers\AdminController::class,'bioWell'])->name('biowell');
    Route::patch('bio-well',[\App\Http\Controllers\AdminController::class,'bioWellUpdate'])->name('bio-well.update');

    //brain-tape
    Route::get('brain-tape',[\App\Http\Controllers\AdminController::class,'brainTape'])->name('brain.tape');
    Route::patch('brain-tape',[\App\Http\Controllers\AdminController::class,'brainTapeUpdate'])->name('brain.tape.update');


    Route::post('testimonial-section/update',[\App\Http\Controllers\AdminController::class,'testimonialSectionUpdate'])->name('testimonial.section.update');

    //NewsEvent
    Route::resource('news',\App\Http\Controllers\NewsEventController::class);

    Route::resource('goal',\App\Http\Controllers\OurGoalController::class);
    Route::resource('rule',\App\Http\Controllers\RulesController::class);

    // Banner Section
    Route::resource('/banner',\App\Http\Controllers\BannerController::class);
    Route::post('banner_status',[\App\Http\Controllers\BannerController::class,'bannerStatus'])->name('banner.status');

    //Office Section
    Route::resource('/offices',\App\Http\Controllers\OfficeController::class);
    Route::post('office_status',[\App\Http\Controllers\OfficeController::class, 'officeStatus'])->name('office.status');

    //about section
    Route::get('about',[\App\Http\Controllers\AdminController::class,'about'])->name('about');
    Route::post('about-update',[\App\Http\Controllers\AdminController::class,'aboutUpdate'])->name('about.update');

    //why samata
    Route::get('why-samata',[\App\Http\Controllers\AdminController::class,'whySamata'])->name('why.samata.school');
    Route::post('why-samata-update',[\App\Http\Controllers\AdminController::class,'whySamataUpdate'])->name('why.samata.update');


    //admission section
    Route::get('admission-edit',[\App\Http\Controllers\AdminController::class,'admission'])->name('admission.edit');
    Route::post('admission-update',[\App\Http\Controllers\AdminController::class,'admissionUpdate'])->name('admission.update');

    Route::resource('/our_concern',\App\Http\Controllers\OurConcernController::class);

    Route::resource('/our_affilation',\App\Http\Controllers\OurAffilationController::class);

    Route::resource('/success-story',\App\Http\Controllers\SuccessStoryController::class);

    Route::resource('gallery',\App\Http\Controllers\GalleryController::class);
    Route::get('photo',[\App\Http\Controllers\GalleryController::class,'photo'])->name('photo.index');
    Route::get('video',[\App\Http\Controllers\GalleryController::class,'video'])->name('video.index');
    //medai Section
    Route::group(['prefix'=>'media', 'as'=>'media.'],function(){
        Route::get('/{slug}', [\App\Http\Controllers\MediaController::class, 'showGallery'])->name('show');
        Route::get('/{slug}/create', [\App\Http\Controllers\MediaController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\MediaController::class, 'store'])->name('store');
        Route::delete('/destroy', [\App\Http\Controllers\MediaController::class, 'destroy'])->name('destroy');
    });
    
    // Address Section
    Route::resource('/address',\App\Http\Controllers\AddressController::class);


    //Blog Section
    Route::resource('/blog-category',\App\Http\Controllers\BlogCategoryController::class);
    Route::post('blog_category_status',[\App\Http\Controllers\BlogCategoryController::class,'blogCategoryStatus'])->name('blog.category.status');

    Route::resource('/blog-tag',\App\Http\Controllers\BlogTagController::class);
    Route::post('blog_tag',[\App\Http\Controllers\BlogTagController::class,'blogTagStatus'])->name('blog.tag.status');


    Route::resource('/blog',\App\Http\Controllers\BlogController::class);
    Route::post('/blog_status',[\App\Http\Controllers\BlogController::class,'blogStatus'])->name('blogs.status');
    //Testimonial section

    Route::resource('/testimonial',\App\Http\Controllers\TestimonialController::class);
    Route::post('/testimonial_status',[\App\Http\Controllers\TestimonialController::class,'testimonialStatus'])->name('testimonial.status');

    Route::resource('/faq',\App\Http\Controllers\FaqController::class);

    // Settings
    Route::get('/settings',[\App\Http\Controllers\Frontend\SettingController::class,'settings'])->name('settings');
    Route::patch('/settings/{id}',[\App\Http\Controllers\Frontend\SettingController::class,'settingsUpdate'])->name('settings.update');

    //Contact message
    Route::get('contact-message',[\App\Http\Controllers\ContactMessageController::class,'contactList'])->name('contact.message');
    Route::get('contact-message/view/{id}',[\App\Http\Controllers\ContactMessageController::class,'contactView'])->name('contact.view');
    Route::delete('contact-message/delete/{id}',[\App\Http\Controllers\ContactMessageController::class,'contactDelete'])->name('contact.destroy');

    //vacancy manager
    Route::resource('/vacancy',\App\Http\Controllers\VacancyController::class);


    Route::get('all-applicants',[\App\Http\Controllers\VacancyController::class,'applicants'])->name('applicants.index');
    Route::delete('applicants-delete/{id}',[\App\Http\Controllers\VacancyController::class,'applicantsDelete'])->name('applicants.delete');

    Route::get('all-resumes',[\App\Http\Controllers\VacancyController::class,'resumes'])->name('resume.index');
    Route::delete('resume-delete/{id}',[\App\Http\Controllers\VacancyController::class,'resumeDelete'])->name('resume.delete');


    //Mail Settings
    Route::get('mail-setting',[\App\Http\Controllers\Frontend\SettingController::class,'smtpSetting'])->name('smtp.settings');
    Route::post('/env_key_update', [\App\Http\Controllers\Frontend\SettingController::class,'env_key_update'])->name('env_key_update.update');
    Route::get('donate-fund',[\App\Http\Controllers\Frontend\SettingController::class,'donateFund'])->name('donate.fund');

    Route::get('member/list',[\App\Http\Controllers\MemberController::class,'memberList'])->name('member.list');


});

Route::group(['prefix' => '/filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

