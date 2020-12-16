@extends('layout.app')

@section('title','Home')

@section('body')
    
    <section class="banner">
        <div class="container">
            <div class="banner-text ">
                <div class="banner-line"></div>
                <p>BPS PETROLEUM PVT LTD</p>
                <h3>Introducing the widest range of world-class lubricants.</h3> 
               
            </div>
        </div> 
            

        <div class="left-img " ><div class="overlay "></div></div>

    </section>

    <section class="intro">
        <div class="container">
            <div class="intro-split">
                <div class="row">
                    <div class=" col-md-5 offset-md-1 ">
                        <div class="intro-img">
                            <img src="images/abt-back.png" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="intro-text">
                            <h3>Introducing the widest range of world-class lubricants.</h3>
                            <p>BPS PETROLEUM PVT LTD. provides the most comprehensive range of 
                                total lubricant solutions. "MOTOROL" brand of lubricants formulated, 
                                manufactured Under license of Motorol Lubricant UAE confirms to
                                National and International standards of quality and consistency. BPS 
                                provides customized Automotive, Industrial, Metal working and 
                                Speciality Oils and Lubricants from its ready range. MOTOROL 
                                products are developed with superior technology and processes
                                which enables the company to cater to a wide spectrum of 
                                Automotive and Industrial needs.</p>
                        
                            <a href="about.html" class="hover-btn">Our Story</a>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="prd-lst ">
        <div class="container">
            <div class="anim-head">
                <h5>BPS'S PRODUCTS</h5>
            </div>

            <div class="prd-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="prd-sing">
                            <img src="images/automative.png" alt="">

                            <a href="automative_lubricants.html">
                                <div class="ps-name">
                                    Automative <span>Lubricants</span>
                                </div>

                                <div class="ps-icon">
                                    <img src="images/icons/car.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="prd-sing">
                            <img src="images/industrial.png" alt="">
                            
                            <a href="industrial_lubricants.html">
                                <div class="ps-name">
                                    Industrial <span> Lubricants</span>
                                </div>

                                <div class="ps-icon">
                                    <img src="images/icons/factory.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="prd-sing">
                            <img src="images/metal.png" alt="">
                            <a href="metalandspeiality.html">
                                <div class="ps-name">
                                    Metal Working &<span> Speciality Lubricants</span>
                                </div>

                                <div class="ps-icon">
                                    <img src="images/icons/metal.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="product-slider  " >
        <div class="container">
            <div class="pb-slider owl-carousel">
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md-5" >
                            <div class="prs-big-img">
                                <img src="images/engine-oil.jpg">
                            </div>
                        </div>

                        <div class="col-md-2"  >
                            <div class="prs-small-img">
                                <img src="images/products/Ch4.png">
                            </div>
                        </div>

                        <div class="col-md-5" >
                            <div class="prs-desc">
                                <h4>GALLANT MULTIGRADE PREMIUM 15W-40 </h4>
                                <h6>Diesel Engine Oil</h6>
                                <p>MOTOROL EXCEL PLUS is a superior quality and ultra high performance multi grade gasoline engine oil developed for use in engines operating under severe conditions. It is formulated with premium quality mineral base stocks and ultra performance additives.</p>

                                <a class="hover-btn" href="">Read More  </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md-5" >
                            <div class="prs-big-img">
                                <img src="images/clutch-fluid.jpg">
                            </div>
                        </div>

                        <div class="col-md-2"  >
                            <div class="prs-small-img">
                                <img src="images/products/Grip-Brake.png">
                            </div>
                        </div>

                        <div class="col-md-5" >
                            <div class="prs-desc">
                                <h4>Motorol Grip Brake Fluid - Dot3/Dot4 </h4>
                                <h6>Petrol Engine Oil</h6>
                                <p>MOTOROL GRIP BRAKE FLUID is a high boiling synthetic brake fluid containing antioxidants and corrosion inhibitors, which provides excellent protection to the metallic components of the braking system. It is not a silicone based brake fluid.     </p>

                                <a href="" class="hover-btn">Read More   </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md-5" >
                            <div class="prs-big-img">
                                <img src="images/grip-brake.jpg">
                            </div>
                        </div>

                        <div class="col-md-2"  >
                            <div class="prs-small-img">
                                <img src="images/products/MAGIC-4t-Royal-.png">
                            </div>
                        </div>

                        <div class="col-md-5" >
                            <div class="prs-desc">
                                <h4>Motorol Magic 4T</h4>
                                <h6>Multigrade Diesel Engine Oil</h6>
                                <p>Motorol Magic 4T is a premium grade 4 stroke engine oil, blended with superior, high viscosity index, miner-al base oil, and high performance additive package. It is suitable for 4 stroke engines of modern, touring, seasoned, and classic motorcycles.     </p>

                                <a href="" class="hover-btn">Read More   </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="part-warp">
                <div class="row">
                    <div class="col-md-3">
                        <div class="part-head">
                            <h5>Partners</h5>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="partner-logo">
                            <di class="row">
                                <div class="col-md-3">
                                    <div class="part-img">
                                        <img src="images/partners/pacafic.png" alt="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="part-img">
                                        <img src="images/partners/quantum.png" alt="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="part-img">
                                        <img src="images/partners/qubec.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="choose-bps">
        <div class="container">
            <div class="anim-head">
                <h5>Why Choose BPS?</h5>
            </div>
            <ul>
                <li>
                    <h3>QUALITY & CONSISTENCY</h3>
                    <p>Under license of Motorol Lubricant UAE</p>
                </li>

                <li>
                    <h3>LUBRICANT SOLUTIONS</h3>
                    <p>of the Most Comprehensive Product Range</p>
                </li>

                <li>
                    <h3>PROVIDE CUSTOMIZED</h3>
                    <p>Oils and Lubricants from its ready range</p>
                </li>
            </ul>
        </div>
    </section>
@endsection


@section('js')
   
@endsection 