@extends('layouts.ravenguard')

@section('meta')

@endsection

@section('title')
    Ravenguard.eu Portfolio
@endsection

@section('topcss')



@endsection

@section('topjs')

@endsection

@section('bottomcss')

@endsection

@section('bottomjs')

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Wat is er al uitgevoerd ?</h2>
            </div>
        </div>


        <div class="body mt-5">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Er zijn al meerdere projecten uitgevoerd.
                        <br>
                        Hieronder vindt u een overzicht.
                    </p>
                </div>
            </div>
        </div>

        <div class="line"></div>

        <div class="row">
            <div class="col-md-12">
                <h2>De projecten</h2>
            </div>
            <div class="line"></div>
        </div>

        <div class="row">
            <div class="col-md-6 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-fluid img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project One</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-6 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-fluid img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Two</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>


@endsection