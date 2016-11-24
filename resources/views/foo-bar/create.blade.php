@extends('layouts.app')

@section('title')
Create Foo Bar
@endsection

@section('content')
<div class="container" ng-controller="FooBarController as vm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Foo Bar</div>

                <div class="panel-body">
                   	<form ng-submit="vm.createFooBar()" name="fooBarForm">
                        <div ng-if="vm.message.length" data-ng-bind="vm.message" class="alert alert-info"></div>
                          <div class="form-group">
                            <label for="foo-bar-name">Foo Bar Name</label>
                            <input ng-model="vm.fooBarName" name="fooBarName" required type="text" class="form-control" id="foo-bar-name" placeholder="Foo Bar Name">
                            <div ng-messages="fooBarForm.fooBarName.$error" ng-show='fooBarForm.fooBarName.$touched' style="color:maroon" role="alert">
                                <div ng-message="required">You did not enter a Foo Bar Name</div>
                              </div>
                          </div>                      
                          <button type="submit" class="btn btn-default">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection