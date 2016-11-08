@extends('frontend.layout') 
@extends('frontend.menu')
@extends('frontend.breadcrumb')
    
@section('content')
<div class="container" style="margin-top:50px;">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="section2">
        <div class="container">
            <div class="row">
<div class="col-md-10">
{!! $services->content !!}
</div>
            </div>
        </div>
    </section>
@stop  
@extends('frontend.footer_menu') 
@extends('frontend.footer') 