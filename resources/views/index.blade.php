@extends('layouts.master_login')

@section('title')
    Login
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 30px;  margin-bottom: 10px;">


        <div class="row">


            <div class="col-md-12 card-form">

                <div class="form-layout-init-left">

                    <div class="title-bank">

                        <spanp>BancABC</spanp>
                    </div>

                    <div class="img-body">

                        <img src="{{url('/img/abc.png')}}" class="img-bank">


                        <p style="text-align: center">  Welcome to wallet management system</p>

                        <p style="text-align: center;">@<?php  echo date('Y-m-d'); ?></p>
                    </div>

                </div>

                <div class="form-layout-init">

                    <div class="login-title-screen">

                        <table class="table">
                            <tbody>
                            <tr style="background-color: #FFFFFF;">
                                <td style="text-align: center;">

                                    <div style="border-bottom: 1px solid">
                                        <img src="{{url('/img/abc.png')}}" width="40" height="40">
                                        <span style="color: black; font-size: 18px;  ">Sign In</span>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">

                        @include('partials.error_message')

                        <form action="{{url('/login')}}" method="post">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required placeholder="Email">

                            </div>
                            <div class="form-group">

                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required placeholder="Password">

                            </div>


                            <div class="form-group">

                                <button class="btn btn-info" style="width: 100%;">Login</button>
                            </div>
                        </form>
                        <a href="{{url('/forgot-password')}}" style="width: 100%; ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            Forgot password</a>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
