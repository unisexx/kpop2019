<style>
.fh5co-narrow-content img {
    width: 410px;
    height: 295px;
    object-fit: cover;
}
</style>

@extends('layouts.front') @section('content')

<div class="fh5co-narrow-content">
	<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft" style="color:#27cacc;">Kpop News</h2>
    <div class="row animate-box" data-animate-effect="fadeInLeft">

        @foreach($kpopnew as $row)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                <a href="news/{{ $row->id }}">
                    <img src="{{ url('uploads/'.$row->image) }}" onerror="this.onerror=null;this.src='{{ $row->image }}';" class="img-fluid" alt="{{ $row->title }}">
                    <h3 class="fh5co-work-title">{{ $row->title }}</h3>
                </a>
            </div>
        @endforeach
        
        <div class="clearfix visible-md-block"></div>
		{{ $kpopnew->appends(@$_GET)->render() }}
    </div>
</div>

@endsection