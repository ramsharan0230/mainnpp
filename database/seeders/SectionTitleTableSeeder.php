<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectiontitles')->insert([

            'welcome_title'=>'Welcome to Samata School',
            'welcome_image'=>'frontend/assets/img/samataschool.png',
            'welcome_content'=>'Samata Shiksha Niketan School has always been at the lead of education in Nepal in terms of quality education with Equity. since its start, we have been keen to providing excessive worth education that highlights not only ahead knowledge but also focuses on the student’s complete growth. Uttam Sanjel established the Samata Shiksha Niketan School (“Promote Equity through Education”) in 2001 to provide fairness in schooling and decrease the break among the rich and the poor. In a nation where the civic educational scheme is extremely flawed and private learning is luxurious, his pioneering school offers high excellent schooling to 1,200 children for about $1 a month.',

            'principle_title'=>'Message From Principal',
            'principle_image'=>'frontend/assets/img/samataprinciple.jpg',
            'principle_content'=>'Dear prospective parents, As we celebrate 50th year, we feel we have even a higher responsibility to serve the community in school education sector. When I assess the school\'s developments in the past, we have certain reasons to be proud of. However, I have a strong sense that we need to adopt newer trends in the education sector.
                                Here at samta, we strive towards creating a welcoming and accepting learning environment for our children. We also make sure that our students reap full benefits from the personalized learning that gets carried out in each classroom. Our mission has always been to prepare our students to enter into the global world as caring, confident and responsible citizens.
                                We aim to provide quality education to our children within the parameters of sound values and a disciplined environment. We believe that each child is unique and is capable of bringing positive change to the world. Hence, we are constantly striving to ensure that our students get to realize the full extent of their potentials. I would like to thank all our parents for their continuous and unwavering support towards the school. I assure you that we will leave no stone unturned to make your child into better individual and find success in their lives.
                                Alisha Shrestha
                                Principle',

            'chairman_title'=>'Message From Chairman',
            'chairman_image'=>'frontend/assets/img/Uttam-Sanjel.jpg',
            'chairman_content'=>'Dear prospective parents, As we celebrate 50th year, we feel we have even a higher responsibility to serve the community in school education sector. When I assess the school\'s developments in the past, we have certain reasons to be proud of. However, I have a strong sense that we need to adopt newer trends in the education sector.
                                Here at samta, we strive towards creating a welcoming and accepting learning environment for our children. We also make sure that our students reap full benefits from the personalized learning that gets carried out in each classroom. Our mission has always been to prepare our students to enter into the global world as caring, confident and responsible citizens.
                                We aim to provide quality education to our children within the parameters of sound values and a disciplined environment. We believe that each child is unique and is capable of bringing positive change to the world. Hence, we are constantly striving to ensure that our students get to realize the full extent of their potentials. I would like to thank all our parents for their continuous and unwavering support towards the school. I assure you that we will leave no stone unturned to make your child into better individual and find success in their lives.
                                Uttam Sanjel
                                CEO',


            'about_us_content'=>'Samata Shiksha Niketan was established in 2001 and is dedicated to enabling world-class education chances in Nepal. Samata Shiksha Niketan School is founded in the belief for “Promote Equity through Education”, joy in education, a spirit of modesty, and the stability among seeking different quality and large service to the public. These standards guide each part of Samata Shiksha Niketan culture, education, and knowledge courses. We are dedicated to traditional Nepalese ethics and philosophy for students to keep a link with their personality, but we also recognize the must for a universal perception in life.

                                Although its usual prettiness, religiousness and unlikely nation, Nepal is one of the most economically poor nations in the world. In this busy capital, around one and half million people live, which include thousand more residing in nearby townships and mountain villages, where life is particularly tough. Samata Shiksha Niketan was established in 2001, also known as “Bamboo School” Kathmandu Nepal. Constructed from bamboo and a dedicated promise to converting the Nepali education scenery, the school has extended to all the regions of Nepal.

                                Samata Shiksha Niketan School has always been at the lead of education in Nepal in terms of quality education with Equity. since its start, we have been keen to providing excessive worth education that highlights not only ahead knowledge but also focuses on the student’s complete growth. Uttam Sanjel established the Samata Shiksha Niketan School (“Promote Equity through Education”) in 2001 to provide fairness in schooling and decrease the break among the rich and the poor. In a nation where the civic educational scheme is extremely flawed and private learning is luxurious, his pioneering school offers high excellent schooling to 1,200 children for about $1 a month.

                                This fee never hikes since its formation. After established in 2001 Samata Shiksha Niketan charges a fee of Rs 100 per month for all the classes, which include nursery to Class 10. Now recent time after established Samata Shiksha Niketan expands its school into 11 different locations within 19 districts of Nepal, which include Kathmandu, Bhaktapur, Lalitpur, Chitwan, Kavre, Sindhu Palchowk, Palanchowk, Nawalparasi, and Makwanpur. Currently, there are over 38,000 students who got “Education with Equity”. Although the school delivers a safe and sweet situation for the children, circumstances are shady and restricted and the goal is to advance the site as extra money becomes available. In count to a firmly rooted academic record, Samata Shiksha Niketan has recognized an exceptional status for its generous achievements with several students being nominated to signify Nepal at home and foreign.',

            'admission_content'=>'
                                   Samata School welcomes applications from students of all nationalities who desire to benefit from our educational programs and whose parents share the school’s vision and approach to learning.
To apply for admission at Samata School, you must fill in the application form which is offered at the school’s reception. The application form can be copied from our school website. A short-term assessment of the kid will be completed before admission. The date and other details of the assessment will be provided at the time of submission of the application form.
The admission policy of Our School
Parents wishing to apply to school should complete the following steps:
•    1.Visit the School and request a registration form
•    Submit the filled-in form along with documents as mentioned below and appear for Campion Entrance Test
•    If qualified in the entrance exam, the applicant along with parent/ guardian attend the face to face interview with the principal
•    If declared eligible, the applicant can get admission

Eligibility
•    Grade I onwards would have a preliminary entry-level paper to gauge the level of learning of the child
•    The age limit for class I is 5 years 6 months as of May 31st of the year of admission
•    Grade XI / A – Level admission requires a pass certificate in SEE/ O Level/ 10th standard or equivalent
Documents for submission
•    Two passport-size photos of the students on the admission form.
•    Parent’s passport size photos on the admission form-1 copy apiece.
•    Copy of Birth registration certification permitted by the government.
•    Photocopy of last year’s growth reports from the past school appeared.
•    Immunization record for Grade 1 students.
•    Transport Map-if transport is required.
Scholarship
•    Merit and need-based scholarships are given to worthy students.'

        ]);
    }
}
