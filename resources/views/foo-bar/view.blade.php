@extends('layouts.app')

@section('title')
Foo Bars
@endsection

@section('content')

<div class="container" ng-controller="FooBarController as vm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{ $fooBar->foo_bar_name }}</h3></div>

                <div class="panel-body">
                   	{{ $fooBar->updated_at }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection