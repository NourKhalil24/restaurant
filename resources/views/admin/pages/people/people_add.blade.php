@extends('admin.layouts.website')

@section('content')
    @include('admin.pages.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Table Start -->
        <div class="static-table-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1 style="color: red">Add People</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">

                                    <form action="{{route('admin.people')}}" method="POST">
                                        @csrf
                                        <label style="color: red;">Add the people </label>
                                        <input style="height: 40px; width: 100% ; border-radius: 5px" name="number_of_people" type="text" placeholder="Enter what you want">

                                        <br>
                                        <br>
                                        <button style=" border-radius: 5px" type="submit"> Press To Add</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>
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
