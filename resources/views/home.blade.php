<div>

    <x-layout>

        <x-slot name='title'>
            Home Page
        </x-slot>

        <x-slot name='content'>


            @if(session()->has('success'))
            <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('success')}}
            </div>
            @endif

            <!-- Carosoul is started -->

            <div class="home_pic">
                <p class="pl-5 pr-5" data-aos="fade-left">We always try to find passionate peoples</p>
                <a href="{{route('courses')}}" class="btn home_btn btn-lg mt-5" role="button">See More</a>
            </div>

            <!-- Carosoul is ended -->

            <!-- Form is stated -->

            <div class="enroll">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-5">

                            <div class="form_box p-4 form_box">
                                <h3 class="text-center pb-2 text-white">Enroll Now</h3>
                                <form action="{{route('send-subject-mail')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form_box_height" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form_box_height" id="exampleInputPassword1" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form_box_height" id="exampleInputPassword1" placeholder="Mobile Number" name="phone">
                                    </div>
                                    <div>
                                        <select class="form-control form_box_height" id="exampleFormControlSelect1" name="course">
                                            <option disabled selected>Please select the course type</option>
                                            <option>Laravel</option>
                                            <option>Quasar</option>
                                            <option>React Js</option>
                                            <option>Flutter</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn_enroll btn-lg btn-block mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-5">
                            <img src="{{ asset('img/enroll2.jpg') }}" class="img-fluid form_side_image" />
                        </div>
                    </div>

                </div>

            </div>
            <!-- Form is ended -->

            <!-- Our objectives is started -->

            <div class="our_objectives ">

                <div class="container">












                </div>

            </div>

            <!-- Our objectives is ended -->


            <!-- Our trainers is started -->

            <div class="trainner">

                <div class="container">

                    <h3 class="text-center train_head"><span class="choose_heading">Our</span> <span class="common_heading_colour">Trainers</span></h3>

                    <!-- <div class="row train_card_margin">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4 col-4 col-4">
                                        <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-8 col-8 col-8">
                                        <h4 class="pt-3">Rajib Deb</h4>
                                        <h5>Solution</h5>
                                        <p class="pb-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card">
                            <div class="row">
                                    <div class="col-4 col-4 col-4">
                                        <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-8 col-8 col-8">
                                        <h4 class="pt-3">Rajib Deb</h4>
                                        <h5>Solution</h5>
                                        <p class="pb-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row train_card_margin">

                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="card m-3">
                                <img src="{{ asset('img/rajib-deb.jpg') }}" class="card-img-top img-fluid">
                                <!-- <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%"> -->
                                <div class="card-body">
                                    <h5 class="card-title text-center">Rajib Deb</h5>
                                    <p class="card-text text-center">Solution Architech <br>
                                        M.Sc. (CS), PGDCA, PGDIT</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="card m-3">
                                <img src="{{ asset('img/female2.jpg') }}" class="card-img-top img-fluid">
                                <!-- <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%"> -->
                                <div class="card-body">
                                    <h5 class="card-title text-center">Uma Deb Chaki</h5>
                                    <p class="card-text text-center">Technology Consultant <br>
                                    MCA, PGDCA, PGDIT</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="card m-3">
                                <img src="{{ asset('img/pankaj.jpg') }}" class="card-img-top img-fluid">
                                <!-- <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%"> -->
                                <div class="card-body">
                                    <h5 class="card-title text-center">Pankaj Prasad Gupta</h5>
                                    <p class="card-text text-center">Project Manager <br>
                                    BCA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="card m-3">
                                <img src="{{ asset('img/sujoy.jpg') }}" class="card-img-top img-fluid">
                                <!-- <img src="{{ asset('img/rajib-deb.jpg') }}" class="img-fluid" width="100%"> -->
                                <div class="card-body">
                                    <h5 class="card-title text-center">Sujoy Sen</h5>
                                    <p class="card-text text-center">Software Developer <br>
                                    MCA, B.Sc. (CS)</p>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>

            </div>

            <!-- Our trainers is ended -->




            <!-- Why choose us is started -->

            <div class="choose_us">

                <div class="container">
                    <br><br><br>
                    <h3 class="text-center text-white mb-4"><b class="choose_heading">Why You</b> <b>Choose Us</b></h3>

                    <div class="row">

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="choose_us_box m-4 text-center">
                                <h1 class="counter text-white mt-4">2600</h1>
                                <h3 class="text-white mb-3">Students Successive</h3>
                                <p class="text-white mb-4">Throughout these year we have done amazing work with 250 students..</p>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="choose_us_box m-4 text-center">
                                <h1 class="counter text-white mt-4">2600</h1>
                                <h3 class="text-white mb-3">Students Successive</h3>
                                <p class="text-white mb-4">Throughout these year we have done amazing work with 250 students..</p>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="choose_us_box m-4 text-center">
                                <h1 class="counter text-white mt-4">2600</h1>
                                <h3 class="text-white mb-3">Students Successive</h3>
                                <p class="text-white mb-4">Throughout these year we have done amazing work with 250 students..</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Why choose us is ended -->




            <!-- Our Courses is started -->

            <div class="courses">

                <div class="container">
                    <br><br><br>
                    <h3 class="text-center our_course_head"><span class="choose_heading">Our</span> <span class="common_heading_colour">Courses</span></h3>

                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="card course whole_margin_bottom">
                                <h3 class="text-center mt-4 course_price">Laravel</h3>
                                <h5 class="text-center course_price_tag">Rs.100</h5>
                                <hr class="mr-3 ml-3 hr_col">
                                <p class="text-center">One Day Trial</p>
                                <p class="text-center">Limited Courses</p>
                                <p class="text-center">Free 3 Lessons</p>
                                <p class="text-center">No Supporter</p>
                                <p class="text-center">No Ebook</p>
                                <p class="text-center">No Tutorial</p>
                                <p class="text-center">Limited Registered User</p>
                                <hr class="mr-3 ml-3 hr_col">
                                <div class="pl-4 pr-4 pb-5 pt-3 text-center">
                                    <button type="button" class="btn btn-outline-primary button_card">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">

                            <div class="card course whole_margin_bottom">
                                <h3 class="text-center mt-4 course_price">Laravel</h3>
                                <h5 class="text-center course_price_tag">Rs.100</h5>
                                <hr class="mr-3 ml-3 hr_col">
                                <p class="text-center">One Day Trial</p>
                                <p class="text-center">Limited Courses</p>
                                <p class="text-center">Free 3 Lessons</p>
                                <p class="text-center">No Supporter</p>
                                <p class="text-center">No Ebook</p>
                                <p class="text-center">No Tutorial</p>
                                <p class="text-center">Limited Registered User</p>
                                <hr class="mr-3 ml-3 hr_col">
                                <div class="pl-4 pr-4 pb-5 pt-3 text-center">
                                    <button type="button" class="btn btn-outline-primary button_card">Read More</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">

                            <div class="card course whole_margin_bottom">
                                <h3 class="text-center mt-4 course_price">Laravel</h3>
                                <h5 class="text-center course_price_tag">Rs.100</h5>
                                <hr class="mr-3 ml-3 hr_col">
                                <p class="text-center">One Day Trial</p>
                                <p class="text-center">Limited Courses</p>
                                <p class="text-center">Free 3 Lessons</p>
                                <p class="text-center">No Supporter</p>
                                <p class="text-center">No Ebook</p>
                                <p class="text-center">No Tutorial</p>
                                <p class="text-center">Limited Registered User</p>
                                <hr class="mr-3 ml-3 hr_col">
                                <div class="pl-4 pr-4 pb-5 pt-3 text-center">
                                    <button type="button" class="btn btn-outline-primary button_card">Read More</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Our Courses is ended -->








            <!-- Script for counter is started -->

            <script>
                $(document).ready(function() {
                    $('.counter').counterUp({
                        // delay: 10,
                        // time: 3000
                    });
                });
            </script>

            <!-- Script for counter is ended -->


            <!-- AOS animation is started -->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init({
                    offset: 150,
                    duration: 2000
                });
            </script>
            <!-- AOS animation is ended -->





        </x-slot>

    </x-layout>

</div>
