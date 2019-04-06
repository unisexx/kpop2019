@extends('layouts.front') @section('content')

<div class="fh5co-narrow-content">
    <div class="row">

        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
            <figure class="text-center">
                <img src="{{ $rs->image }}" alt="{{ $rs->title }}" class="img-responsive">
            </figure>
        </div>
        
        <div class="col-md-12 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
            
            {!! $rs->detail !!}

        </div>
    </div>

</div>

@endsection