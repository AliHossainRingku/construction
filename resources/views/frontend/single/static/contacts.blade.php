@extends('frontend.home_layout')

@section('content')
        <!-- =======================* Section Start *======================= -->
        <section class="pagehead bg-1">
            <div class="container">
                <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title">Get In Touch</h2>
                        <form method="post" class="form-row mt-5" id="archtera-form">
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label for="name" class="d-none">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" id="name"
                                        required placeholder="Name">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label for="phone" class="d-none">Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg" name="phone" id="phone"
                                        required placeholder="Phone Number">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label for="email" class="d-none">E-mail</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        required placeholder="E-mail">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label for="subject" class="d-none">Subject</label>
                                    <input type="text" class="form-control form-control-lg" name="subject" id="subject"
                                        required placeholder="Subject">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label for="message" class="d-none">Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="5" required
                                        placeholder="Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 text-lg-right">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <ul class="contact-info">
                            <li class="contact-info-item phone">
                                <h3 class="contact-info-title text-uppercase">Phone</h3>
                                <p><a href="tel:518-420-4264">518-420-4264</a></p>
                                <p><a href="tel:518-698-1920">518-698-1920</a></p>
                            </li>
                            <li class="contact-info-item email">
                                <h3 class="contact-info-title text-uppercase">E-Mail</h3>
                                <p><a href="mailto:info@samplemail.com">info@samplemail.com</a></p>
                                <p><a href="mailto:support@samplemail.com">support@samplemail.com</a></p>
                            </li>
                            <li class="contact-info-item address">
                                <h3 class="contact-info-title text-uppercase">Address</h3>
                                <p>1268 Hardesty Street<br>
                                    Colonie, New York.<br>
                                    12205</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7780362837802!2d91.81968551438193!3d22.36200844630434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88f83cd223b%3A0xfb574b70944b1da0!2z4Ka44Ka-4Kao4Kau4Ka-4KawIOCmk-CmtuCmvuCmqCDgprjgpr_gpp_gpr8!5e0!3m2!1sbn!2sbd!4v1619434600691!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                
        </div>
        <!-- =======================* Section Start *===================== -->



@endsection