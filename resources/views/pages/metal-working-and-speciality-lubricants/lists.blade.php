@extends('layout.app')

@php
    $metalWorkingAndSpecialityLubricantsCategory = \App\MetalWorkingAndSpecialityLubricantsCategory::orderBy('order')->get();
    $metalWorkingAndSpecialityLubricants = \App\MetalWorkingAndSpecialityLubricant::orderBy('order')->get();
@endphp

@section('title','Metal Working & Speciality Lubricants')

@section('body')
    <section class="inner-page products-list">
        <div class="container">
            <div class="bread-crumbs">
                <a href="/"><i class="fas fa-home" style="color: #008837;"></i></a> <span>/</span> <a href="/products">Products</a> <span>/</span> <a href="{{ route('metalWorkingAndSpecialityLubricants') }}">Metal Working & Speciality Lubricants</a>
            </div>

            <div class="prds-list-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="prd-filter-wrap">
                            <div class="prd-filter">
                                <ul class="fil-nocat">
                                    <li><a href="{{ route('automativeLubricants') }}"><img src="images/icons/car-black.svg" alt=""> <span>Automative Lubricants</span></a></li>
                                    <li><a href="{{ route('industrialLubricants') }}"><img src="images/icons/factory-black.svg" alt=""> <span>Industrial Lubricants</span></a></li>
                                    <li><a href="{{ route('metalWorkingAndSpecialityLubricants') }}"><img src="images/icons/metal-black.svg" alt=""> <span>Metal Working & Speciality Lubricants</span></a></li>
                                </ul>
                                
                    
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="pr-ls-wrap">
                            <div class="row">
                                @foreach ($metalWorkingAndSpecialityLubricants as $item)
                                <div class="col-md-4" >
                                    <div class="pr-ls-sing" >
                                            <div class="pr-img-box">
                                                <img src="{{ Voyager::image($item->image) }}">
                                            </div>

                                            <div class="prd-des-box">
                                                <p>{{ $item->category->title }} </p>
                                                <h4>{{ $item->title }} </h4>
                                                
                                                <div class='prd-btn'>
                                                    <a href="{{ route('metalWorkingAndSpecialityLubricantsDetail',$item->slug) }}" >Read More</a>
                                                </div>
                                            </div>

                                        
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection