@extends('layout.app')

@php
    $automativeLubricantsCategory = \App\AutomativeLubricantsCategory::orderBy('order')->get();
    $automativeLubricants = \App\AutomativeLubricant::orderBy('order')->get();
@endphp

@section('title','About Us')

@section('body')
      <section class="inner-page products-list">
        <div class="container">
            <div class="bread-crumbs">
                <a href="index.html"><i class="fas fa-home" style="color: #008837;"></i></a> <span>/</span> <a href="products_list.html">Products</a> <span>/</span> <a href="automative_lubricants.html">Automative Lubricants</a>
            </div>

            <div class="prds-list-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="prd-filter-wrap">
                            <div class="prd-filter">
                                @foreach ($automativeLubricantsCategory as $item)
                                <input type="checkbox" name="automative-list" value="{{ $item->slug }}" id="{{ $item->slug }}" >
                                <label for="{{ $item->slug }}">{{ $item->title }}</label> 
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="pr-ls-wrap">
                            <div class="row">
                                @foreach ($automativeLubricants as $item)
                                <div class="col-md-4 checkshow"  data-id="g-multi" data-category="{{ $item->category->slug }}" >
                                    <div class="pr-ls-sing" >
                                            <div class="pr-img-box">
                                                <img src="{{ Voyager::image($item->image) }}">
                                            </div>

                                            <div class="prd-des-box">
                                                <p>{{ $item->category->title }} </p>
                                                <h4>{{ $item->title }} </h4>
                                                
                                                <div class='prd-btn'>
                                                    <a href="{{ route('automativeLubricantsDetail',$item->slug) }}" >Read More</a>
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