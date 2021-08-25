

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
                <h4 class="page-title">Exchange Rates</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rates</li>
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


                    <form method="post" action="{{url('update-exchange-rate',$exchange_rate->id)}}" >
                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <select name="currency_code_code" class="form-control" required>
                                            <option value="">Select Currency Code</option>
                                            @foreach($currency_code as $currency)
                                                <option value="{{$currency->currency_code}}" @if($currency->currency_code == $exchange_rate->currency_code_code) selected @endif>{{ucfirst($currency->currency_code)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <select name="exchange_currency_code" class="form-control" required>
                                            <option value="">Select Exchange Currency Code</option>
                                            @foreach($currency_code as $currency)
                                                <option value="{{$currency->currency_code}}" @if($currency->currency_code == $exchange_rate->exchange_currency_code) selected @endif>{{ucfirst($currency->currency_code)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="exchange_rate">Exchange Rate</label>
                                        <input type="text" class="form-control" name="exchange_rate" value="{{ $exchange_rate->exchange_rate }}" id="exchange_rate" placeholder="Exchange Rate">

                                    </div>


                                </div>

                            </div>
                        </div>


                        <div class="col-md-12">

                            <div class="col-md-6" style="float: left">
                                <a href="{{url('view-exchange-rate')}}" class="btn btn-info">Back</a>

                                <button type="submit" class="btn btn-success">Update</button>


                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@stop

