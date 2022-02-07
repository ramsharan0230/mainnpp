@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | About Us'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class=""> Why Samata Shiksha Niketan ?</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>
                            <li><a href="index.html">Home</a></li>
                            <li style="color: #fff;">about</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="why-samata">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 about-samata">
                    <div class="school-content">
                        <h5 class="">Welcome to Samata Shiksha Niketan</h5>
                        <p class="">Samata Shiksha Niketan was established in 2001 and is dedicated to enabling world-class education
                            chances in Nepal. Samata Shiksha Niketan School is founded in the belief for “Promote Equity
                            through Education”, joy in education, a spirit of modesty, and the stability among seeking different
                            quality and large service to the public. These standards guide each part of Samata Shiksha Niketan
                            culture, education, and knowledge courses. We are dedicated to traditional Nepalese ethics and
                            philosophy for students to keep a link with their personality, but we also recognize the must for a
                            universal perception in life.</p>
                    </div>

                    <div class="histroy">
                        <h5 class="">Our history</h5>
                        <p class="">
                            Although its usual prettiness, religiousness and unlikely nation, Nepal is one of the most
                            economically poor nations in the world. In this busy capital, around one and half million people live,
                            which include thousand more residing in nearby townships and mountain villages, where life is
                            particularly tough. Samata Shiksha Niketan was established in 2001, also known as “Bamboo School”
                            Kathmandu Nepal. Constructed from bamboo and a dedicated promise to converting the Nepali
                            education scenery, the school has extended to all the regions of Nepal.
                        </p>
                        <p class="">
                            Samata Shiksha Niketan
                            School has always been at the lead of education in Nepal in terms of quality education with Equity.
                            since its start, we have been keen to providing excessive worth education that highlights not only
                            ahead knowledge but also focuses on the student’s complete growth. Uttam Sanjel established the
                            Samata Shiksha Niketan School (“Promote Equity through Education”) in 2001 to provide fairness in
                            schooling and decrease the break among the rich and the poor. In a nation where the civic
                            educational scheme is extremely flawed and private learning is luxurious, his pioneering school
                            offers high excellent schooling to 1,200 children for about $1 a month.
                        </p>
                        <p class="">
                            This fee never hikes since its formation. After established in 2001 Samata Shiksha Niketan
                            charges a fee of Rs 100 per month for all the classes, which include nursery to Class 10.
                            Now recent time after established Samata Shiksha Niketan expands its school into 11 different
                            locations within 19 districts of Nepal, which include Kathmandu, Bhaktapur, Lalitpur, Chitwan,
                            Kavre, Sindhu Palchowk, Palanchowk, Nawalparasi, and Makwanpur. Currently, there are
                            over 38,000 students who got “Education with Equity”. Although the school delivers a safe
                            and sweet situation for the children, circumstances are shady and restricted and the goal
                            is to advance the site as extra money becomes available. In count to a firmly rooted
                            academic record, Samata Shiksha Niketan has recognized an exceptional status for its
                            generous achievements with several students being nominated to signify Nepal at home
                            and foreign.

                        </p>

                    </div>

                    <div class="why-samata">
                        <h5 class="">Why Samata Shiksha Niketan?</h5>
                        <p class="">
                            Nepal, where private schooling is untouchable due to their expensive fee and public educational system is a flaw by most of the people. The Samata School, started 18 years ago by Uttam Sanjel, is Nepal’s one-dollar school. Samata Shiksha Niketan comes with the only objective in their mind provide “Education with Equity” education in an excellent learning atmosphere. Samata shiksha Niketan offers high-quality education to all, who can’t afford to go to higher fee school. We target refining the excellence of education through child-centered knowledge, where significance is given to the all-around progress of each specific child.

                        </p>
                    </div>

                    <div class="mission">
                        <h5>Our Mission:-</h5>
                        <p class="">Our mission is to cherish our students to understand their individual prospective and recognize and achieve their goals in an atmosphere of unlikely guidance, joyful and sweet culture while keeping alive the spirit of closeness and “Education with Equity”. Our aim is to bring forth liable peoples of the world who make a change and make the school and country pleased of their successes and stellar individual abilities.
                        </p>
                    </div>

                    <div class="objectives">
                        <h5 class="">Mission and Objectives:-</h5>
                        <p class="">
                            We offer high quality education of a worldwide standard to the students, focusing on their full potential of the body and mind. The school also pays special attention to the divine growth of its scholars, giving a complete schooling of Nepal, the country's needs, the prominence of goodness, harmony and kind for others, always upholding the motto of Samata Shiksha Niketan “Education with Equity”. We attempt to motivate and care for all students to accomplish their full probable for a positive and pleasant life as liable citizens with understanding and respect for others.

                        </p>
                        <div class="list">
                            <h6 class="">Education Outcomes</h6>
                            <p class="">At the end of school, students should be intelligent to:</p>
                            <ul>
                                <li>Decide right from wrong</li>
                                <li> Have educated to share and place others earliest</li>
                                <li>Be intelligent to form bonds with others</li>
                                <li>Have an energetic interest about things</li>
                                <li> Be clever to reflect for and express themselves</li>
                                <li>Take self-importance in their efforts</li>
                                <li>Have cultured healthy behaviour</li>
                                <li> love their country</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-values">
                        <h5 class="">Values:-</h5>


                        <div class="values-list mt-3">
                            <h6 class="">Honesty</h6>
                            <p class="">We trust in the honesty and solid work accepted with morality, purpose, and intellect of promise. We target to confirm that our students grow a confident approach, and make learned selections with affection to their individual and community tasks. </p>
                        </div>


                        <div class="values-list">
                            <h6 class="">Sympathy</h6>
                            <p class="">We show sympathy and gentleness to each other. We prompt appreciation for what we have and do whatsoever is inside our sizes to care for those who are less privileged or those who invention themselves in hard situations. </p>
                        </div>


                        <div class="values-list">
                            <h6 class="">Respect</h6>
                            <p class="">We admiration the public, the atmosphere, and ourselves. We admiration specific changes and accept all deprived of partiality. We take conceit in our school and civic. Our students know, gain and respect the variety and the reputation of numerous values, morals, civilizations, and viewpoints. </p>
                        </div>


                        <div class="values-list">
                            <h6 class="">Teamwork</h6>
                            <p class="">
                                We work organized in squads to accomplish common goals, and form relations built on joint respect and faith. We connect efficiently with each other and worth a response. Our students are able to talk and express their views and thought with clarity and contribute usefully in civilization in command to make confident assistance to the native and global community.
                            </p>
                        </div>

                        <div class="values-list">
                            <h6 class="">Vitality</h6>
                            <p class="">
                                We hold variation and endlessly adjust to an ever-evolving atmosphere. We trust in the influence of review originating from interest, which tops to all-time knowledge and adopts students to become a problem–solvers intensely promised and elaborate with the world around them. Our students are reinforced and continually dared to the extent their full probable.
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>


@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about-samata.css')}}" class="">
@endpush
