@extends('layout.app')

@section('title','Our Products')

@section('body')
    <section class="inner-page products-list">

        <section class="in-br">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Our</h4>
                        <h4>Products</h4>
                    </div>

                    <div class="col-md-8">
                        <p>BPS PETROLEUM PVT LTD. provides the most comprehensive range of total lubricant solutions.
                             "MOTOROL" brand of lubricants formulated, manufactured Under license of Motorol Lubricant UAE
                              confirms to National and International standards of quality and consistency.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="prd-lst ">
            <div class="container">
                <!-- <div class="anim-head">
                    <h5>BPS'S PRODUCTS</h5>
                </div> -->

                <div class="prd-wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="prd-sing">
                                <img src="images/automative.png" alt="">

                                <a href="{{ route('automativeLubricants') }}">
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
                                
                                <a href="{{ route('industrialLubricants') }}">
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
                                <a href="{{ route('metalWorkingAndSpecialityLubricants') }}">
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

    </section>
@endsection