@extends('layout.app')

@section('title',$detail->title)

@section('body')
    <section class="inner-page products-list">
        <div class="container">
            <div class="bread-crumbs">
                <a href="/"><i class="fas fa-home" style="color: #008837;"></i></a> <span>/</span> <a href="/products">Products</a> <span>/</span><a href="#">{{ $detail->category->title }}<span>/</span>{{ $detail->title }}</a>
            </div>

            <div class="product-detail">
                <div class="row">
                    <div class="col-md-4">
                        <div class="det-img">
                            <img src="{{ Voyager::image($detail->image) }}">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="det-des">
                            <div class="det-ge det-des-head">
                                <span>{{ $detail->category->title }}</span>
                                <h4>{{ $detail->title }}</h4>
                                {!! $detail->description !!}
                            </div>

                            

                            <div class="det-ge des-ap">
                                <h6>Applications</h6>
                                {!! $detail->applications !!}
                            </div>

                            <div class="det-ge des-avi">
                                <h6>Available in</h6>

                                <div class="prd-avail">

                                    @foreach (json_decode($detail->volumes) as $item)
                                        @php
                                            $volume = \App\Volume::where('id',$item)->first();
                                        @endphp
                                        @if($volume)
                                        <div class="avail-sing">
                                            <img src="/storage/{{ json_decode($volume->image)[0]->download_link }}">
                                            <label>{{ $volume->quantity }}</label>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="det-ge download" >
                                <h6>Download Brochures</h6>

                                <div class="download-btn">
                                    @php
                                        $brochureLocation = json_decode($detail->brochure)[0]->download_link ?? '#';
                                        $brochureLink = $brochureLocation == '#' ? '#' : '/storage/'.$brochureLocation;
                                        
                                    @endphp
                                    <a href="{{ $brochureLink }}" target="{{ $brochureLocation == '#' ? '_self' : '_blank'  }}">
                                        <i class="fas fa-download"></i>{{ $detail->title }}
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


@endsection