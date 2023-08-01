@extends('admin.layouts.website')

@section('content')
    @include('admin.pages.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href=""><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Table Start -->

        <div class="static-table-area mg-t-15">
            <div class="container-fluid">
                @foreach( $contacts as $contact)
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">

                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1 style="color: red !important;">Message {{ $contact->id }}</h1>
                                </div>
                            </div>

                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">

                                        <thead>
                                        <tr>
                                            <th style="color: red !important;">ID</th>
                                            <th style="color: red !important;">Name</th>
                                            <th style="color: red !important;">email</th>
                                            <th style="color: red !important;">subject</th>
                                            <th style="color: red !important;">message</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td style="color: black !important;">{{ $contact->id }}</td>
                                            <td style="color: black !important;">{{ $contact->name }}</td>
                                            <td style="color: black !important;">{{ $contact->email }}</td>
                                            <td style="color: black !important;">{{ $contact->subject }}</td>
                                            <td style="color: black !important;">{{ $contact->message }}</td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
