@extends('layouts.app')

@section('title')
Foo Bars
@endsection

@section('content')
<div class="container" ng-controller="FooBarController as vm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Foo Bars</div>

                <div class="panel-body">

					<div class="form-group clearfix">
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-filter"></span></span>
									<span ng-click="vm.sortData('created_at')" class="input-group-addon">
										<span ng-class="vm.getClass('created_at')" class="glyphicon glyphicon-sort-by-attributes"></span>
									</span>
									<input type="text" class="form-control" placeholder="Start typing to filter" ng-model="vm.filter">
								</div>
							</div>
						</div>					
					</div>

					<div class="row">
						<div class="col-md-12">
							<ul class="list-group">
							  <li data-ng-repeat="fooBar in vm.fooBars  | filter : vm.filter | orderBy:vm.sorting:vm.reverse" class="list-group-item clearfix">
							  	<a ng-href="{{ url('/foo-bar') }}/<% fooBar.id %>">
							  		<span data-ng-bind="fooBar.foo_bar_name"></span>						  	
							  	</a>
							  	<span class="pull-right">
							  		<a href="" ng-click="vm.deleteFooBar(fooBar.id, $index)" class="btn btn-danger">Delete</a>
								  	<a href="{{ url('foo-bar/update') }}/<% fooBar.id %>" class="btn btn-primary" type="button">Update</a>
								</span>					  						
							  	<span class="badge pull-right" data-ng-bind="fooBar.created_at"></span>
							  </li>					  
							</ul>
						</div>
					</div>
                   	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection