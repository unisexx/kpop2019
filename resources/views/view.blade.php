@extends('layouts.front') @section('content')

<div class="fh5co-narrow-content">
    <div class="row">
        
        <h1>{{ $rs->title }}</h1>

        <div class="col-md-12 col-md-offset-2 animate-box KpopContent" data-animate-effect="fadeInLeft">
            
            {!! $rs->detail !!}

        </div>

    </div>

</div>

@endsection