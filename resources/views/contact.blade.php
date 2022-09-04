<div>

    <x-layout>

        <x-slot name='title'>
            All Courses
        </x-slot>

        <x-slot name='content'>

            <div class="container">


                @if(session()->has('success'))
                <div class="alert alert-success" id="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('success')}}
                </div>
                @endif


                <!-- Carosoul is started -->

                <div class="contact_pic">
                    <p><a href="{{route('home')}}" class="all_link">Home</a> > <span class="all_text">Contact Us</span></p>
                </div>

                <!-- Carosoul is ended -->




                <div class="contact">

                    <h3 class="text-center contact_head"><span class="all_text">Contact</span> <span class="common_heading_colour">& Find</span></h3>

                    <div class="contact_background">


                        <div class="row">

                            <div class="col-sm-6 col-md-6 col-lg-6 contact_info">
                                <h4>Contact Info</h4>
                                <p>
                                    You can reach us via following contact details. We will try to give you the best experience.
                                </p>
                                <p>
                                    Phone Number: +91-98320 35737 / +91-82505 85963
                                </p>
                                <p>
                                    Email: support@gmail.com / contact@gmail.com
                                </p>
                                <p>
                                    Website: technowebs.in
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.460849052524!2d88.4388199143608!3d26.69772057574084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e44181d20807bb%3A0x2ffd14440df166b9!2sTechnowebs!5e0!3m2!1sen!2sin!4v1643279704000!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>

                        </div>

                    </div>

                </div>



                <div class="send-message">

                    <h3 class="text-center contact_head"><span class="all_text">Send Us</span> <span class="common_heading_colour">A Message</span></h3>

                    <form action="{{route('send-message')}}" method="POST">
                        @csrf
                        <div class="row whole_margin_bottom_some">

                            <div class="col-sm-6 col-md-6 col-lg-6">

                                <div class="form-group">
                                    <input type="text" class="form-control form_box_height" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Your Name" name="name">

                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form_box_height" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" name="email">

                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form_box_height" id="exampleInputSubject1" aria-describedby="emailHelp" placeholder="Subject" name="subject">

                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">

                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message" name="msg"></textarea>


                                    <button type="submit" class="btn cont_btn float-right mt-1">Submit</button>


                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </x-slot>

    </x-layout>

</div>
