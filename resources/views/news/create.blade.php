@extends('admin.layout') 
@extends('admin.header') 
@extends('admin.left_nav') 

@section('content')
    <section class="content-header">
        <h1>
            News最新消息
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'news.store']) !!}

                        @include('news.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
   
@endsection
@extends('admin.footer') 
@extends('admin.sidebar') 
@extends('admin.script')