<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/paper-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/demo.css')}}" rel="stylesheet" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/custom-styles.css')}}" rel="stylesheet">
</head>
<body>

<!-- start page content -->
<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Simple Lists
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>My Lists</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-settings"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-pulse"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-layers-alt"></i>
									<p>Recent Lists</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Old List 1</a></li>
                                <li><a href="#">Old List 1</a></li>
                                <li><a href="#">Old List 1</a></li>
                                <li><a href="#">Old List 1</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-plus"></i>
								<p>Create List</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <i class="ti-door"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content"></div>

        <!-- start footer -->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://facebook.com">
                                <i class="ti-facebook"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="http://plus.google.com">
                                <i class="ti-google"></i> Google Plus
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <?= date('Y') ?>, made with <i class="fa fa-heart heart pulsate"></i> by <a href="http://www.creative-tim.com">Mybooking.lk</a>
                </div>
            </div>
        </footer><!-- End footer -->

    </div>
</div> <!-- End page content -->

</body>
    <script src="{{URL::asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap-checkbox-radio.js')}}"></script>
	<script src="{{URL::asset('js/chartist.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-notify.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="{{URL::asset('js/paper-dashboard.js')}}"></script>
	<script src="{{URL::asset('js/demo.js')}}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
        	demo.initChartist();
        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Laravel Application Template</b> - a beautiful Laravel based application template for your next project."
            },{
                type: 'success',
                timer: 4000
            });
    	});
	</script>
</html>
