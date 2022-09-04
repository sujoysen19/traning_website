<div>

    <x-layout>

        <x-slot name='title'>
            All Courses
        </x-slot>

        <x-slot name='content'>

            <!-- Carosoul is started -->

            <div class="about_pic">
                <p><a href="{{route('home')}}" class="all_link">Home</a> > <span class="all_text">About Us</span></p>
            </div>

            <!-- Carosoul is ended -->


            <!-- About section is started -->

            <div class="about_details">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-md-6 col-lg-6 top_bottom">
                            <video width="100%" controls>
                                <source src="{{url('video/demo.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 top_bottom">
                            <h3 class="mt-4 common_heading_colour">About The Training Institute</h3>
                            <p>
                                Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condimentum. Nullam dignissim id magna non tempus. Vivamus molestie nulla nec pharetra dignissim. Suspendisse auctor nisi et neque vehicula pulvinar. Quisque quis tempus magna. Quisque sed luctus nunc sapien.Wam cursus imperdiet elit. Fusce sollicitudin eget nulla in condimentum. Nullam dignissim id magna non tempus. Vivamus molestie nulla nec pharetra dignissim. Suspendisse auctor nisi et neque vehicula pulvinar. Quisque quis tempus magna. Quisque sed luctus nunc sapien.
                            </p>
                       
                        </div>

                    </div>


                </div>

            </div>

            <!-- About section is ended -->


            <!-- Our objectives is started -->

            <div class="container whole_margin_bottom_some">

            <h3 class="text-center whole_margin_top mb-5"><span class="all_text">Our</span> <span class="common_heading_colour">Objectives</span></h3>

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card about_object">
                            <div class="card-body text-center">
                                <i class="fas fa-laptop-code fa-3x social_icons pb-4"></i>
                                <h4>Officially The Best</h4>
                                <p>
                                    Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card about_object">
                            <div class="card-body text-center">
                                <i class="far fa-folder-open fa-3x social_icons pb-4"></i>
                                <h4>Officially The Best</h4>
                                <p>
                                    Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card about_object">
                            <div class="card-body text-center">
                                <i class="fas fa-chart-line fa-3x social_icons pb-4"></i>
                                <h4>Officially The Best</h4>
                                <p>
                                    Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Our objectives is ended -->




        </x-slot>

    </x-layout>

</div>