<div>

    <x-layout>

        <x-slot name='title'>
            All Courses
        </x-slot>

        <x-slot name='content'>

            <div class="web-design course_background">

                <div class="container">

                    <!-- <div class="row">
                        <div class="col-2 col_gap">
                            <img src="{{ asset('img/web-design.jpg') }}" class="img-fluid teacher_pro" width="50%">
                        </div>
                        <div class="col-10 col_gap">
                            <h5>Instructor</h5>
                            <p>Rajib Deb</p>
                        </div>
                    </div> -->



                        <div class="flex-item">
                            <img src="{{ asset('img/rajib-deb2-modified.png') }}" class="img-fluid instructor_margin" width="5%">
                            <div>
                                <ul class="teacher instructor_margin">
                                    <li>Instructor</li>
                                    <li class="course_train">Rajib Deb</li>
                                </ul>
                            </div>
                        </div>



                    <div class="details_course">
                        <h3 class="instructor_heading_margin course_train">Website Design</h3>


                        <p>
                            <i class="fas fa-clock course_icons instructor_icons_margin"></i>&nbsp;<span class="course_train mr-5">10 Weeks</span>
                            <i class="fas fa-signal course_icons instructor_icons_margin"></i>&nbsp;<span class="course_train mr-5">Beginner</span>
                            <i class="fas fa-copy course_icons instructor_icons_margin"></i>&nbsp;<span class="course_train">10 Lessons</span>
                        </p>

                    </div>






                </div>

            </div>

            <div class="container">


                <div class="row whole_margin_bottom_some whole_margin_top">

                    <div class="col-sm-9 col-md-9 col-lg-9">


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active course_heading course_details_box pt-3 pb-3" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link course_heading course_details_box pt-3 pb-3" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Curriculum</a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link course_heading course_details_box pt-3 pb-3" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Instructor</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <h3 class="teacher_margin_top mb-4">What you'll learn</h3>
                                <ul class="learn_content">
                                    <li>PHP</li>
                                    <li>SQL</li>
                                </ul>

                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card course_content_border mb-1">
                                    <h3 class="teacher_margin_top mb-4">Lessons</h3>
                                    <div class="card-body course_content_background">
                                        <i class="far fa-file course_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        Lesson 1: Fundamental PHP
                                    </div>
                                </div>

                                <div class="card course_content_border mb-1">
                                    <div class="card-body course_content_background">
                                        <i class="far fa-file course_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        Lesson 2: Fundamental on SQL
                                    </div>
                                </div>

                                <div class="card course_content_border mb-1">
                                    <div class="card-body course_content_background">
                                        <i class="far fa-file course_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        Lesson 3: Build APIs
                                    </div>
                                </div>

                                <!-- <div class="card course_content_border mb-1">
                                    <div class="card-body course_content_background">
                                        <i class="far fa-file course_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        Lesson 1: Website design and development
                                    </div>
                                </div>

                                <div class="card course_content_border mb-1">
                                    <div class="card-body course_content_background">
                                        <i class="far fa-file course_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        Lesson 1: Website design and development
                                    </div>
                                </div> -->

                            </div>

                            <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="flex-item">
                                    <img src="{{ asset('img/rajib-deb-circle.png') }}" class="img-fluid teacher_margin_top teacher_margin_bottom" width="13%">
                                    <div>
                                        <ul class="teacher teacher_margin_top teacher_margin_bottom">
                                            <li>Instructor</li>
                                            <li>Rajib Deb</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>
                                    Rajib Deb holds a Master's Degree in Computer Science along with Post Graduate Diploma in Computer Application and Information Technology and is currently working as a Solution Architect with Blue Copper Technologies. An entrepreneur by nature, along with 10+ years of experience with deep analytical skills and business layer understanding, Rajib earned several commendations from customers for his endeavors.

                                    Successful execution of multiple start-ups indicates his ability to understand business architecture and defining technology solutions for different domains. In addition, he has the ownership capability and mentoring development teams with improved and quality coding practices.
                                </p>


                            </div> -->

                        </div>

                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-3 price_box">

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/web-design.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center mt-4 course_card_price">Rs.100</h4>
                                <a href="{{route('contact')}}" class="btn float-right btn-outline-primary btn-lg btn-block btn_course_details" role="button">More Info</a>
                                <h6>This Courses Includes</h6>
                                <p>50 hours course/ 2hr per weekend</p>
                                <p>Article</p>
                                <p>Certificate</p>
                                <p>Live demonstration</p>
                            </div>
                        </div>

                    </div>

                </div>




            </div>

        </x-slot>

    </x-layout>

</div>
