@extends('layout.app')

@section('title','Contact Us')

@section('body')

    <section class="inner-page products-list">

        <section class="in-br">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Contact Us</h4>
                    </div>

                    <div class="col-md-8">
                        <p>BPS PETROLEUM PVT LTD. provides the most comprehensive range of total lubricant solutions.
                             "MOTOROL" brand of lubricants formulated, manufactured Under license of Motorol Lubricant UAE
                              confirms to National and International standards of quality and consistency.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="co-det">
                            <a href="mailto:info@bpspetroleum.com"><i class="far fa-envelope"></i> info@bpspetroleum.com</a>   
                            <a href="tel:+061-534107"><i class="fas fa-phone"></i> 061-534107</a>
                        </div>

                        <div class="co-off">
                            <h4>Head Office</h4>
                            <p>Naya bazar, Pokhara, Nepal  </p>

                            <p>P.O. Box: <span>170</span></p>
                            <p>Tel: <span>061-534107</span> <span>061-530107</span></p>
                            <p>Fax: <span>061-532466</span></p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="contact-form">
                            <h4>Get In Touch</h4>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cfs">
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="cfs">
                                        <input type="number" placeholder="Phone ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="cfs">
                                        <input type="email" placeholder="Email ">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="cfs">
                                        <textarea placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="cfs">
                                        <button>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="associates">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="asso-sing">
                            <img src="images/uae.png" alt="">
                            <h4>Maximus Lubricants LLC</h4>
                            <h6>Manufacturing</h6>

                            <p>
                                Warehouse No: A 03/04,
                                Al Jazeera Al Hamra, Opposite AIC,
                                Ras Al Khaimah, UAE
                            </p>

                            <p>Mob: <span>+971 50 189 7928</span></p>
                            <p>Tel: <span>+971 7 228 7506</span> </p>
                            <p>Email: <a href="mailto:sales@motorollubes.com">sales@motorollubes.com</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="asso-sing">
                            <img src="images/kenya.png" alt="">
                            <h4>Quantum Lubricants E.A. Ltd.</h4>
                            <h6>Manufacturing</h6>

                            <p>
                                Broadway Warehouse, Gate No. 2, GD/No. 20,
                                Opp. Nation Printing, Behind Med’s Centre.
                                Mombasa Road, P.O. Box 38981-00623, Nairobi, Kenya.
                            </p>

                            <p>Mob: <span>+254 725 714 084</span></p>
                            <p>Tel: <span>+254 732 200 400</span> / <span>+254 780 670 670</span> </p>
                            <p>Email: <a href="mailto:sales@motorollubes.com">sales@motorollubes.com</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="asso-sing">
                            <img src="images/india.png" alt="">
                            <h4>Quebec Petroleum Resources Ltd</h4>
                            <h6>Manufacturing</h6>

                            <p>
                                Plot No. 85/B 115,
                                At & Post: Karakhadi, Taluka: Padara,
                                Dist.: Baroda – 391450, Gujarat, INDIA
                            </p>

                            <p>Tel: <span>+ 91 2662 273373</span> / <span>+ 91 2662 273727</span> </p>
                            <p>Email: <a href="mailto:sales@quebecoils.com">sales@quebecoils.com</a></p>
                        </div>
                    </div>


                </div>
            </div>
        </section>


    </section>

@endsection