@extends('layouts.master')

@section('content')

<!-- Dashboard -->
<div id="dashboard">

  @include('layouts.shared.side')


    <!-- Content
    ================================================== -->
    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hello, {{ Auth::user()->basic->name }}</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="dashboard.html#">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Notice -->
        <div class="row">
            <div class="col-md-12">
                <div class="notification success closeable margin-bottom-30">
                    <p>Your Video: <strong>Diamond Platnumz - Jeje</strong> is now live</p>
                    <a class="close" href="dashboard.html#"></a>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="row">

            <!-- Item -->
            <div class="col-lg-4 col-md-6">
                <div class="dashboard-stat color-1">
                    <div class="dashboard-stat-content"><h4>6</h4> <span>Uploaded Videos</span></div>
                    <div class="dashboard-stat-icon"><i class="fa fa-file-video-o"></i></div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-lg-4 col-md-6">
                <div class="dashboard-stat color-2">
                    <div class="dashboard-stat-content"><h4>2,680,000</h4> <span>Total Views</span></div>
                    <div class="dashboard-stat-icon"><i class="fa  fa-line-chart"></i></div>
                </div>
            </div>


            <!-- Item -->
            <div class="col-lg-4 col-md-6">
                <div class="dashboard-stat color-3">
                    <div class="dashboard-stat-content"><h4>290,000</h4> <span>Subscribers</span></div>
                    <div class="dashboard-stat-icon"><i class="fa fa-thumbs-o-up"></i></div>
                </div>
            </div>

        </div>


        <div class="row">

            <!-- Recent Activity -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box with-icons margin-top-20">

                    <h4>Summary</h4>
                    <ul>
                        <li>
                            <i class="list-box-icon sl  sl-icon-bell"></i> Your Video: <strong>Diamond Platnumz - Jeje</strong> has 200,000 Views.
                            <br/><span style="color: #999999;">Uploaded on: June 20, 2020</span><a href="dashboard.html#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2020 wiWo Now. All Rights Reserved.</div>
            </div>
        </div>

    </div>
    <!-- Content / End -->


</div>
<!-- Dashboard / End -->
@endsection
