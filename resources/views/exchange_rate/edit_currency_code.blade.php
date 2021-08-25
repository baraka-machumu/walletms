@extends('layouts.master')
@section('stylesheets')
    <style>

        .checkbox-custom {

            height: 15px;
            width: 60px;
            margin-left: 0;
        }

        .perm-role-span {
            height: 10px;
            width: 70px;
            margin-left: 0;
            margin-top: -2px;
        }
        .rol-perm-list{

            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        ul {
            list-style-type: none;
        }
        . .rol-perm-list li {

            list-style-type: none;
        }
    </style>
@stop


@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Currency Codes</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Codes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">


        <div class="row">

            <div class="col-md-12">
                <div class="card">


                    <form method="post" action="{{ url('update-currency-code/'.$currency_types->id) }}" >
                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="service_name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $currency_types->name }}" placeholder="Currency Name">

                                    </div>


                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="currency_code">Currency Code</label>
                                        <input type="text" class="form-control" name="currency_code" id="currency_code" value="{{ $currency_types->currency_code }}" placeholder="Currency Code">

                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">

                            <div class="col-md-6" style="float: left">
                                <a href="{{url('view-currency-code')}}" class="btn btn-info">Back</a>

                                <button type="submit" class="btn btn-success">Update</button>


                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@stop

