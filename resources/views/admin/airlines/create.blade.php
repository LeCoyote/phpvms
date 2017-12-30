@extends('admin.app')
@section('title', 'Airlines')
@section('content')
    <section class="content-header">
        <h1>Airlines</h1>
    </section>
    <div class="content">
        @include('admin.flash.message')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.airlines.store']) !!}

                        @include('admin.airlines.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
