@extends('master')
@section('content')
        <div class="content page-flexbox-wrapper">
            <br>
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a  class="active"  href="#test1">Sample Table</a></li>
                        <li class="tab col s3"><a href="#test2">Sample Forms</a></li>
                        <li class="tab col s3"><a href="#test3">Sample Collapsible</a></li>
                        <li class="tab col s3"><a href="#test4">Others</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <br>
                    @include('includes.table')
                </div>
                <div id="test2" class="col s12">
                    @include('includes.forms')
                </div>
                <div id="test3" class="col s12">
                    @include('includes.collapsible')
                </div>
                <div id="test4" class="col s12">
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>

                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>

                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
        </div>
@endsection