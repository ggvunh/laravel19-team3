@extends('layouts.master')
@section('content-index')
<!-- CONTACT -->
<section class="section-contact" style="padding-top: 30px;">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-6 col-lg-5">

                    <div class="text">
                        <h2>Contact</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        <ul>
                            <li><i class="icon lotus-icon-location"></i> 92 Quang Trung, Hai Chau, Da Nang, Viet Nam</li>
                            <li><i class="icon lotus-icon-phone"></i> 0916-790-052</li>
                            <li><i class="icon fa fa-envelope-o"></i> lotushotel@gmail.com</li>
                        </ul>
                    </div>

                    <div class="contact-location">
                        <a class="btn-collapse" data-toggle="collapse" href="#location">OTHER LOCATION <span class="fa fa-angle-down"></span></a>
                        <div class="collapse" id="location">
                            <div class="location-group">
                                <h6>Da Nang City</h6>
                                <span>92 Quang Trung, Hai Chau, Da Nang, Viet Nam</span>

                                <!-- ITEM -->
                                <div class="location-item" data-location="39.0926986,-94.5747324">
                                    <div class="img">
                                        <img src="images/contact/img-1.jpg" alt="">
                                        <i class="fa  fa-map-marker"></i>
                                    </div>
                                    <div class="text">
                                        <address> 92 Quang Trung, Hai Chau, Da Nang, Viet Nam</address>
                                        <p>
                                            Tel: 0916-790-052 <br>
                                            Fax: 0916-790-052
                                        </p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="location-item" data-location="39.0912284,-94.5743515">
                                    <div class="img">
                                        <img src="images/contact/img-2.jpg" alt="">
                                        <i class="fa  fa-map-marker"></i>
                                    </div>
                                 <div class="text">
                                        <address> 92 Quang Trung, Hai Chau, Da Nang, Viet Nam</address>
                                        <p>
                                            Tel: 0916-790-052 <br>
                                            Fax: 0916-790-052
                                        </p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-form">
                        <form id="send-contact-form" action="send_mail_contact.php" method="post"> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="field-text"  name="name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="email" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="field-text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="awe-btn awe-btn-13">SEND</button>
                                </div>
                            </div>
                            <div id="contact-content"></div>
                        </form>
                    </div>
                </div>

            </div>  
        </div>
    </div>
</section>
<!-- END / CONTACT -->
@stop