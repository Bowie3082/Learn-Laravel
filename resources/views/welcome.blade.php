@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ยินดีต้อนรับ</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <img src="{{ asset('images\IMG_6086.JPG') }}"  width="50px" height="50px" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
