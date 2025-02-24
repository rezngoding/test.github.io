<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller_Admin_Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>Propeller Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $app->config["site"]; ?>/public/images/favicon.png">

<!-- Google icon -->
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo $app->config["site"]; ?>/public/fonts/material-icons/material-icons.css">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/bootstrap.min.css">

<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller.min.css">

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/css/pmd-datetimepicker.css" />

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-admin.css">

<!-- Styles Ends --></head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">
			<!-- Notifications -->
            <div class="dropdown notification icons pmd-dropdown">
			
				<a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
					<div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
				</a>
			
				<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
					<!-- Card header -->
					<div class="pmd-card-title">
						<div class="media-body media-middle">
							<a href="notifications.html" class="pull-right">3 new notifications</a>
							<h3 class="pmd-card-title-text">Notifications</h3>
						</div>
					</div>
					
					<!-- Notifications list -->
					<ul class="list-group pmd-list-avatar pmd-card-list">
						<li class="list-group-item" style="display:none">
							<p class="notification-blank">
								<span class="dic dic-notifications-none"></span> 
								<span>You don´t have any notifications</span>
							</p>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-1.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Prathit</span> posted a new challanegs</span>
									<span class="list-group-item-text">5 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-2.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Keel</span> Cloned 2 challenges.</span>
									<span class="list-group-item-text">15 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-3.png" data-holder-rendered="true">
									</span>
								</div>
							
								<div class="media-body">
									<span class="list-group-item-heading"><span>John</span> posted new collection.</span>
									<span class="list-group-item-text">25 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-4.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Valerii</span> Shared 5 collection.</span>
									<span class="list-group-item-text">30 Minutes ago</span>
								</div>
							</a>
						</li>
					</ul><!-- End notifications list -->

				</div>
				
				
            </div> <!-- End notifications -->
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>	
		  <a href="index.html" class="navbar-brand">
		  	<svg version="1.1" x="0px" y="0px"
	 width="174.16px" height="48px" viewBox="0 0 174.16 48" enable-background="new 0 0 174.16 48" xml:space="preserve">
<g>
	<g>
		<path fill="#FFFFFF" d="M8.658,17.795c5.339,0,8.403,2.64,8.403,7.251c0,4.792-3.064,7.585-8.403,7.585H3.773v6.4h-3.58V17.795
			H8.658z M3.773,29.415h4.733c3.276,0,5.127-1.395,5.127-4.278c0-2.792-1.851-4.125-5.127-4.125H3.773V29.415z"/>
		<path fill="#FFFFFF" d="M29.167,32.601c-0.304,0.031-0.637,0.031-0.971,0.031H23.16v6.4h-3.58V17.795h8.616
			c5.431,0,8.556,2.64,8.556,7.251c0,3.398-1.578,5.794-4.399,6.886l4.763,7.1H33.05L29.167,32.601z M28.196,29.415
			c3.276,0,5.158-1.395,5.158-4.278c0-2.792-1.881-4.125-5.158-4.125H23.16v8.403H28.196z"/>
		<path fill="#FFFFFF" d="M77.622,17.795c5.339,0,8.403,2.64,8.403,7.251c0,4.792-3.064,7.585-8.403,7.585h-4.884v6.4h-3.58V17.795
			H77.622z M72.738,29.415h4.732c3.277,0,5.127-1.395,5.127-4.278c0-2.792-1.85-4.125-5.127-4.125h-4.732V29.415z"/>
		<path fill="#FFFFFF" d="M92.124,21.012v5.733h10.375v3.217H92.124v5.854h11.953v3.217H88.544V17.795h15.169v3.216H92.124z"/>
		<path fill="#FFFFFF" d="M120.188,35.786v3.246h-12.772V17.795h3.58v17.991H120.188z"/>
		<path fill="#FFFFFF" d="M135.356,35.786v3.246h-12.771V17.795h3.579v17.991H135.356z"/>
		<path fill="#FFFFFF" d="M141.333,21.012v5.733h10.376v3.217h-10.376v5.854h11.953v3.217h-15.533V17.795h15.17v3.216H141.333z"/>
		<path fill="#FFFFFF" d="M166.212,32.601c-0.304,0.031-0.638,0.031-0.971,0.031h-5.037v6.4h-3.578V17.795h8.615
			c5.43,0,8.555,2.64,8.555,7.251c0,3.398-1.577,5.794-4.399,6.886l4.764,7.1h-4.065L166.212,32.601z M165.241,29.415
			c3.275,0,5.156-1.395,5.156-4.278c0-2.792-1.881-4.125-5.156-4.125h-5.037v8.403H165.241z"/>
	</g>
	<path opacity="0.2" fill="#000001" d="M62.295,26.706c-0.529,4.162-1.91,7.709-3.951,10.195c-2.008,2.443-4.649,3.869-7.749,3.867
		c-3.078,0-5.549-1.311-7.413-3.635c-1.923-2.4-3.186-5.887-3.784-10.129l0.16-0.766l-0.035-0.928l5.57-1.038l5.709-0.359
		l4.412,0.115l6.468,1.056l0.701-0.109L62.295,26.706z"/>
	<path fill="#FDC672" d="M63.149,25.023c-0.557,4.405-2.009,8.157-4.156,10.788c-2.112,2.586-4.891,4.094-8.152,4.094
		c-3.237,0-5.836-1.387-7.797-3.846c-2.103-2.641-4.178-8.793-3.799-12.148c2.721-1.023,7.072-1.686,11.976-1.686
		c4.909,0,9.264,0.665,11.985,1.689L63.149,25.023z"/>
	<path opacity="0.2" fill="#2A100A" d="M61.876,31.167c-0.708,1.84-1.62,3.455-2.708,4.789c-1.093,1.338-2.363,2.391-3.785,3.105
		c-1.374,0.689-2.889,1.063-4.523,1.061c-1.624,0-3.09-0.342-4.401-0.99c-1.354-0.666-2.539-1.658-3.554-2.932
		c-1.026-1.287-1.84-2.873-2.476-4.703c-0.701-2.018-1.61-5.393-1.372-7.515v0.042c0.073-0.029,0.147-0.058,0.224-0.086
		c-0.377,3.349,1.694,9.493,3.794,12.127c1.941,2.436,4.511,3.816,7.706,3.84h0.078h0.08c3.221-0.023,5.968-1.525,8.06-4.086
		l0.048-0.061l0.015-0.018c0.065-0.08,0.129-0.162,0.192-0.246c2.455-3.191,3.748-7.563,3.951-11.554l-0.01-0.003
		c0.076,0.028,0.15,0.057,0.223,0.086C63.294,26.486,62.767,28.854,61.876,31.167L61.876,31.167z M62.993,23.863L62.993,23.863
		l0.069,0.024L62.993,23.863z"/>
	<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M62.383,23.631l0.001,1.388
		c-2.568-1.019-5.091-2.174-9.881-2.174c-4.79,0-10.729,1.473-13.297,2.492l-0.009-1.408c2.718-1.033,7.092-1.704,12.024-1.704
		C55.661,22.226,59.648,22.769,62.383,23.631z"/>
	
		<path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#2A100A" stroke-width="1.167" stroke-linecap="round" stroke-miterlimit="2.6131" d="
		M48.769,34.872c0,0,2.086,1.539,5.132,0.008"/>
	<g>
		<path fill="#2A100A" d="M50.51,37.077l0.119,0.465l-0.007,0.004l-0.007,0.006l-0.007,0.002l-0.007,0.004l-0.007,0.002
			l-0.008,0.002l-0.007,0.002h-0.007h-0.008l-0.007-0.002L50.55,37.56l-0.008-0.002l-0.006-0.002l-0.007-0.002l-0.007-0.004
			l-0.006-0.004l-0.007-0.006l-0.006-0.004l-0.006-0.006l-0.006-0.008l-0.006-0.006l-0.006-0.008l-0.005-0.006l-0.005-0.01
			l-0.005-0.008l-0.004-0.01l-0.005-0.01l-0.004-0.01l-0.004-0.01l-0.003-0.012l-0.003-0.012l-0.003-0.012l-0.003-0.012
			l-0.002-0.012l-0.002-0.014l-0.001-0.012l-0.001-0.012l-0.001-0.014l0-0.012v-0.012V37.3v-0.012l0.001-0.012l0.001-0.012
			l0.001-0.014l0.002-0.01l0.002-0.014l0.003-0.012l0.002-0.01l0.003-0.012l0.003-0.01l0.004-0.012l0.004-0.01l0.004-0.01
			l0.004-0.008l0.005-0.01l0.005-0.01l0.005-0.008l0.005-0.008l0.006-0.008l0.006-0.006l0.007-0.008l0.006-0.006L50.51,37.077
			L50.51,37.077z M52.214,37.462l-0.231-0.318l-0.008,0.293l0.046,0.072l0.009,0.008l-0.008-0.006l-0.017-0.006l-0.025-0.01
			l-0.03-0.01l-0.036-0.008l-0.04-0.012l-0.045-0.01l-0.047-0.008l-0.051-0.01l-0.054-0.008l-0.056-0.008l-0.059-0.006l-0.06-0.006
			l-0.061-0.006l-0.063-0.002l-0.063-0.004h-0.063l-0.063,0.002l-0.062,0.002l-0.061,0.006l-0.06,0.008l-0.058,0.008l-0.056,0.01
			l-0.053,0.014l-0.051,0.014l-0.046,0.018l-0.042,0.02l-0.038,0.021l-0.032,0.021l-0.119-0.465l0.052-0.035l0.054-0.029
			l0.057-0.025l0.059-0.021l0.061-0.018l0.062-0.016l0.064-0.012l0.065-0.012l0.066-0.006l0.067-0.006l0.067-0.002l0.067-0.002
			h0.068l0.067,0.002l0.065,0.004l0.066,0.004l0.063,0.006l0.062,0.008l0.06,0.008l0.057,0.01l0.055,0.01l0.052,0.01l0.048,0.01
			l0.044,0.012L52,36.987l0.037,0.012l0.034,0.012l0.031,0.012l0.029,0.016l0.033,0.027l0.06,0.088L52.214,37.462L52.214,37.462z
			 M51.983,37.144l0.231,0.318l-0.005,0.01l-0.005,0.008l-0.005,0.01l-0.006,0.01l-0.006,0.006l-0.006,0.008l-0.006,0.008
			l-0.006,0.006l-0.006,0.006l-0.006,0.004l-0.007,0.004l-0.006,0.004l-0.007,0.004l-0.007,0.004h-0.007l-0.008,0.002l-0.007,0.002
			h-0.007h-0.007l-0.007-0.002h-0.007l-0.007-0.002l-0.007-0.004l-0.007-0.002l-0.007-0.004l-0.007-0.004l-0.007-0.004l-0.006-0.006
			l-0.006-0.006l-0.006-0.008l-0.006-0.006l-0.006-0.01L52,37.491l-0.005-0.008l-0.005-0.01l-0.004-0.01l-0.005-0.01l-0.004-0.012
			l-0.004-0.01l-0.003-0.01l-0.003-0.012l-0.003-0.012l-0.002-0.012l-0.003-0.012l-0.001-0.01l-0.002-0.012l-0.001-0.014l0-0.012
			l0-0.012l0-0.012l0-0.012l0-0.014l0-0.012l0.001-0.012l0.001-0.012l0.002-0.012l0.001-0.014l0.002-0.01l0.003-0.012l0.003-0.012
			l0.003-0.012l0.004-0.01l0.004-0.012L51.983,37.144z"/>
	</g>
	<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M60.076,25.364
		c1.235,0.026,1.771,0.672,3.035,0.672c0.784-0.008,0.701,1.276,0.287,1.752c-0.565,0.553-0.752,0.773-0.83,1.471
		c-0.002,0.652-0.089,1.338-0.228,2.023c-1.384,5.896-9.588,3.791-10.522-1.795l-0.034-0.053c-0.152-0.424-0.432-0.709-0.753-0.709
		c-0.33,0-0.618,0.301-0.766,0.746c-0.921,5.598-9.139,7.713-10.525,1.811c-0.163-0.807-0.255-1.615-0.221-2.369
		c-0.009,0.121-0.013,0.234-0.015,0.346c-0.077-0.697-0.265-0.918-0.83-1.471c-0.414-0.476-0.497-1.76,0.288-1.752
		c1.539,0,3.899-1.017,6.289-1.017c2.371,0.141,3.624,0.491,4.296,1.06l-0.004-0.005c0.324,0.171,0.872,0.284,1.494,0.284
		c0.641,0,1.204-0.12,1.523-0.3c0.678-0.556,1.93-0.899,4.271-1.038C58.313,25.019,59.341,25.147,60.076,25.364z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M60.874,24.703c1.304,0.027,1.868,0.673,3.203,0.673
		c0.828-0.008,0.741,1.276,0.303,1.751c-0.596,0.553-0.794,0.774-0.876,1.471c-0.002,0.652-0.094,1.338-0.24,2.021
		c-1.461,5.9-10.118,3.793-11.104-1.793l-0.036-0.053c-0.16-0.424-0.456-0.709-0.794-0.709c-0.349,0-0.652,0.301-0.809,0.746
		c-0.973,5.598-9.644,7.713-11.106,1.809c-0.171-0.805-0.269-1.613-0.233-2.369c-0.009,0.121-0.013,0.238-0.015,0.348
		c-0.082-0.697-0.279-0.918-0.875-1.471c-0.437-0.475-0.525-1.759,0.303-1.751c1.625,0,4.115-1.017,6.636-1.017
		c2.502,0.141,3.825,0.491,4.533,1.06l-0.004-0.005c0.342,0.171,0.92,0.284,1.576,0.284c0.677,0,1.271-0.12,1.607-0.299
		c0.715-0.556,2.037-0.9,4.506-1.039C59.014,24.359,60.098,24.487,60.874,24.703z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M49.886,10.032c0.27-0.036,0.546-0.063,0.83-0.079L50.714,9.94
		c0-0.02,0-0.039,0-0.057c0-0.23,0.057-0.439,0.148-0.59v0l0,0c0.092-0.151,0.22-0.245,0.359-0.245c0.14,0,0.267,0.094,0.36,0.245
		l0,0c0.091,0.151,0.148,0.36,0.148,0.59c0,0.015,0,0.033-0.001,0.05L51.728,9.95c0.273,0.014,0.55,0.041,0.829,0.082
		c-0.101-0.965-0.572-1.719-1.162-1.844l0,0l-0.035-0.007l0,0l-0.031-0.004l-0.002-0.001h-0.001l-0.002,0l-0.031-0.003l-0.001,0l0,0
		h0L51.257,8.17h0l0,0h0l-0.035,0l-0.035,0l0,0l0,0h0l-0.034,0.002h0l0,0l-0.001,0L51.12,8.176l-0.002,0h-0.001l-0.003,0.001
		l-0.031,0.004h0l-0.034,0.007l0,0C50.458,8.313,49.986,9.067,49.886,10.032z"/>
	<g>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M42.527,7.231c-3.94,0-7.134,0.589-7.134,1.314
			c0,0.726,3.194,1.315,7.134,1.315s7.134-0.589,7.134-1.315C49.661,7.82,46.467,7.231,42.527,7.231z"/>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M59.916,7.231c3.939,0,7.134,0.589,7.134,1.315
			c0,0.726-3.194,1.314-7.134,1.314c-3.94,0-7.134-0.588-7.134-1.314C52.782,7.82,55.976,7.231,59.916,7.231z"/>
	</g>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFCE88" d="M45.161,25.369c4.019,0.226,4.213,1.133,4.277,2.776
		c-0.064,5.01-7.675,7.154-8.901,2.201c-0.274-1.285-0.309-2.578,0.268-3.511C41.3,26.036,41.976,25.369,45.161,25.369z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFCE88" d="M57.517,25.369c-4.02,0.226-4.213,1.133-4.277,2.776
		c0.064,5.01,7.674,7.154,8.901,2.201c0.273-1.285,0.308-2.578-0.268-3.511C61.377,26.036,60.702,25.369,57.517,25.369z"/>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="61.347,29.12 58.06,27.25 57.79,28.128 59.439,29.114 
		57.812,30.081 58.083,30.978 	"/>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="56.937,26.886 57.635,26.886 56.293,31.024 
		55.595,31.024 	"/>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="42.54,29.138 45.899,27.226 46.176,28.122 44.49,29.132 
		46.153,30.12 45.877,31.038 	"/>
	<g>
		<path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M44.813,25.968c-2.095,0-2.64,0.313-3.086,0.69
			c-0.52,0.438-0.693,1.046-0.707,1.651c0.015,0.58,0.356,0.953,0.873,1.15c-0.195-0.203-0.313-0.469-0.321-0.801
			c0.014-0.605,0.188-1.215,0.707-1.652c0.447-0.376,0.992-0.689,3.087-0.689c0.895,0.036,1.481,0.109,1.857,0.223
			C47.042,26.223,46.43,26.034,44.813,25.968z"/>
		<path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M57.637,25.968c-2.095,0-2.641,0.313-3.087,0.69
			c-0.521,0.438-0.693,1.046-0.708,1.651c0.015,0.58,0.356,0.953,0.874,1.15c-0.196-0.203-0.313-0.469-0.321-0.801
			c0.014-0.605,0.188-1.215,0.707-1.652c0.447-0.376,0.993-0.689,3.087-0.689c0.895,0.036,1.481,0.109,1.858,0.223
			C59.864,26.223,59.252,26.034,57.637,25.968z"/>
	</g>
	<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M62.417,24.581l7.641,3.064
		c0.143,0.068,0.096,0.254,0.085,0.346c-0.011,0.09-1.248,2.254-4.252,2.877c-3.005,0.625-5.205-2.182-5.205-2.182l-4.928-5.515
		l3.181,0.438L62.417,24.581z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#192866" d="M63.419,24.381l7.627,2.796c0.159,0.066,0.106,0.246,0.094,0.332
		c-0.012,0.086-1.38,2.164-4.705,2.766c-3.325,0.598-5.759-2.098-5.759-2.098l-5.79-5.634l6.488,0.9L63.419,24.381z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#5ABD88" d="M51.221,9.932c6.738,0,12.2,5.462,12.2,12.201l0.001,1.866
		c-2.703-1.072-7.16-1.772-12.201-1.772s-9.498,0.7-12.201,1.772v-1.866C39.021,15.394,44.483,9.932,51.221,9.932z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#192866" d="M60.089,23.044V22.47c0-6.094-3.009-11.184-7.021-12.399
		c5.861,0.891,10.352,5.952,10.352,12.062l0.001,1.866C62.5,23.632,61.374,23.31,60.089,23.044L60.089,23.044z M51.221,9.932
		L51.221,9.932c-2.272,0.001-4.118,5.559-4.156,12.459c1.319-0.107,2.714-0.165,4.156-0.165c1.442,0,2.836,0.058,4.156,0.165
		C55.339,15.49,53.493,9.932,51.221,9.932L51.221,9.932L51.221,9.932z M42.353,23.044c-1.284,0.266-2.41,0.588-3.332,0.954v-1.866
		c0-6.109,4.49-11.169,10.351-12.062c-4.01,1.217-7.019,6.305-7.019,12.399V23.044z"/>
	<path fill="#2A100A" d="M63.419,23.996l0,0.385c-3.474-1.376-8.462-1.827-12.199-1.827c-3.722,0-9.509,0.688-12.199,1.829l0-0.385
		c3.333-1.333,8.672-1.809,12.2-1.809C54.747,22.188,60.236,22.692,63.419,23.996z"/>
</g>
</svg>
		  </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="<?php echo $app->config["site"]; ?>/public/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle"><?php echo $_SESSION["pengguna"]->nama; ?></div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="login.html">Logout</a></li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="index.html">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body">Dashboard</span>
			</a> 
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="18.001px" viewBox="0 0 18 18.001" enable-background="new 0 0 18 18.001" xml:space="preserve">
<path fill="#C9C8C8" d="M6.188,0.001C5.232,0.001,4.5,0.732,4.5,1.688c0,0.394,0.166,0.739,0.334,1.02L5.45,3.71
	c0.113,0.113,0.176,0.341,0.176,0.51v0.281c0,0.619-0.506,1.125-1.125,1.125H0.282c-0.169,0-0.281,0.112-0.281,0.281V17.72
	c0,0.168,0.112,0.281,0.281,0.281h4.219c0.619,0,1.125-0.506,1.125-1.125v-0.281c0-0.168-0.063-0.397-0.176-0.509
	c0,0-0.615-0.946-0.615-1.002C4.666,14.802,4.5,14.457,4.5,14.063c0-0.956,0.731-1.688,1.688-1.688s1.688,0.731,1.688,1.688
	c0,0.394-0.166,0.739-0.334,1.02l-0.616,1.002c-0.056,0.112-0.176,0.341-0.176,0.509v0.281c0,0.619,0.506,1.125,1.125,1.125h4.219
	c0.168,0,0.281-0.113,0.281-0.281V13.5c0-0.619,0.506-1.125,1.125-1.125h0.281c0.169,0,0.396,0.063,0.51,0.176
	c0,0,0.945,0.616,1.002,0.616c0.337,0.168,0.626,0.334,1.02,0.334c0.956,0,1.687-0.731,1.687-1.687c0-0.957-0.731-1.688-1.687-1.688
	c-0.394,0-0.738,0.166-1.02,0.334l-1.002,0.616c-0.113,0.056-0.341,0.176-0.51,0.176H13.5c-0.619,0-1.125-0.506-1.125-1.125V5.908
	c0-0.168-0.113-0.281-0.281-0.281H7.875c-0.619,0-1.125-0.506-1.125-1.125V4.221c0-0.168,0.063-0.397,0.176-0.51
	c0,0,0.616-0.945,0.616-1.001c0.168-0.281,0.334-0.626,0.334-1.02C7.875,0.733,7.144,0.002,6.188,0.001L6.188,0.001z"/>
</svg></i> 
				<span class="media-body">UI Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="typography.html">Typography</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="shadow.html">Shadow</a></li>
				<li><a href="accordion.html">Accordion</a></li>
				<li><a href="alert.html">Alert</a></li>
				<li><a href="badge.html">Badge</a></li>
				<li><a href="button.html">Button</a></li>
				<li><a href="modal.html">Modal</a></li>
				<li><a href="dropdown.html">Dropdown</a></li>
				<li><a href="list.html">List</a></li>
				<li><a href="navbar.html">Navbar</a></li>
				<li><a href="popover.html">Popover</a></li>
				<li><a href="progressbar.html">Progressbar</a></li>
				<!--<li><a href="sidebar.html">Sidebar</a></li> -->
				<li><a href="tab.html">Tab</a></li>
				<li><a href="tooltip.html">Tooltip</a></li>
				<li><a href="card.html">Card</a></li>
				<li><a href="floating-button.html">Floating Action Button</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">swap_calls</i> 
				<span class="media-body">Third Party Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="custom-scroll.html">Custom Scrollbar</a></li>
				<li><a href="datetimepicker.html">Datetimepicker</a></li>
				<li><a href="range-slider.html">Range Slider</a></li>
				<li><a href="select2.html">Select2</a></li>
			</ul>
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="14.187px" height="18px" viewBox="0 0 14.187 18" enable-background="new 0 0 14.187 18" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v18h14.187V0H0z M3.121,3.293h2.023v4.767H3.121V3.293z M11.211,14.764H2.948v-2.022h8.263V14.764
	L11.211,14.764z M11.211,11.585H2.948V9.563h8.263V11.585L11.211,11.585z M11.211,8.407H7.455V6.385h3.756V8.407z M11.211,5.229
	H7.455V3.207h3.756V5.229z"/>
</svg></i>
				<span class="media-body">Form</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="form-element.html">Form Elements</a></li>
				<li><a href="form.html">Form Examples</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i> 
				<span class="media-body">Table</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="table.html">Normal Table</a></li>
				<li><a href="data-table.html">Data Table</a></li>
				<li><a href="table-with-expand-collapse.html">Table with Expand/Collapse</a></li>
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle">
				<svg x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18" xml:space="preserve">
					<title>022-layout view</title>
					<desc>Created with Sketch.</desc>
					<g>
						<g>
							<path fill="#C9C8C8" d="M298.765,353.285v-2.25h3.375v-3.375h2.25v5.625H298.765z M290.89,347.66h2.25v3.375h3.375v2.25h-5.625
								V347.66z M296.515,339.785v2.25h-3.375v3.375h-2.25v-5.625H296.515z M295.39,348.785h4.5v-4.5h-4.5V348.785z M304.39,345.41h-2.25
								v-3.375h-3.375v-2.25h5.625V345.41z M288.64,355.535h18v-18h-18V355.535z"/>
						</g>
					</g>
					<text transform="matrix(1 0 0 1 -0.0154 1202.2578)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">Created by Richard Wearn</text>
					<text transform="matrix(1 0 0 1 -0.0154 1388.2891)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">from the Noun Project</text>
				</svg></i> 
				<span class="media-body">Pages</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="404.html">404</a></li>
				<li><a href="blank.html">Blank</a></li>
				<li><a href="profile.html">Profile</a></li>
			</ul>
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="login.html">	
				<i class="media-left media-middle">
				<svg version="1.1" id="Layer_1" x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18" xml:space="preserve">
				<path fill="#C9C8C8" d="M295.39,337.535v2.25h9v13.5h-9v2.25h11.25v-18H295.39z M297.64,342.035v3.375h-9v2.25h9v3.375l3.375-3.375
					l1.125-1.125l-1.125-1.125L297.64,342.035z"/>
				</svg></i> 
				<span class="media-body">Login</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="inbox.html">	
				<i class="media-left media-middle">
				<svg version="1.1" x="0px" y="0px" width="18px" height="12.479px" viewBox="288.64 363.118 18 12.479" enable-background="new 288.64 363.118 18 12.479" xml:space="preserve">
					<g transform="translate(641.29613,1096.2351)">
						<path fill="#C9C8C8" d="M-352.656-726.466v-5.828l4.484,4.484c2.467,2.466,4.499,4.484,4.516,4.484s2.049-2.018,4.516-4.484
							l4.484-4.484v5.828v5.828h-9h-9V-726.466z M-347.854-728.929l-4.188-4.188h8.385h8.386l-4.188,4.188
							c-2.304,2.303-4.192,4.188-4.198,4.188S-345.551-726.626-347.854-728.929z"/>
					</g>
				</svg></i> 
				<span class="media-body">Inbox</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="<?php print $app->config["site"];?>/admin/pengguna/logout">	
			<i class="media-left media-middle">
				<i class="material-icons md-light pmd-sm" style="min-width: 0px;"> 
				exit_to_app</i>
			</i>
				<span class="media-body">Logout</span>
			</a> 
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->  
	
<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">
		 
		 <!-- Today's Site Activity -->
		 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth">      
				<div class="pmd-card-title">
					<div class="media-left"> 
						<span class="service-icon img-circle bg-fill-orange">
							<svg x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" enable-background="new 0 0 45 45" xml:space="preserve">
								<g>
									<g>
										<path fill="#FFFFFF" d="M41.097,22.499c0,4.377-1.516,8.396-4.045,11.573l2.777,2.778C43.059,32.955,45,27.954,45,22.499
											s-1.941-10.455-5.171-14.35l-2.777,2.777C39.581,14.104,41.097,18.123,41.097,22.499z"/>
										<path fill="#FFFFFF" d="M3.904,22.499c0-4.376,1.516-8.396,4.045-11.572L5.172,8.149C1.942,12.044,0,17.044,0,22.499
											s1.942,10.456,5.171,14.352l2.778-2.778C5.419,30.896,3.904,26.876,3.904,22.499z"/>
										<path fill="#FFFFFF" d="M34.073,37.051c-3.177,2.529-7.196,4.045-11.573,4.045c-4.376,0-8.396-1.516-11.573-4.045l-2.777,2.777
											C12.044,43.058,17.045,45,22.5,45s10.456-1.942,14.352-5.172L34.073,37.051z"/>
										<path fill="#FFFFFF" d="M10.928,7.948c3.176-2.529,7.196-4.045,11.572-4.045c4.377,0,8.396,1.516,11.573,4.046l2.778-2.778
											C32.956,1.941,27.955,0,22.5,0C17.046,0,12.045,1.941,8.149,5.171L10.928,7.948z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M34.452,19.893c-1.131,0-2.119,0.751-2.401,1.785h-2.352c-0.142-1.41-0.66-2.679-1.506-3.712l1.74-1.738
											c0.939,0.425,2.071,0.281,2.823-0.517c0.99-0.987,0.99-2.584,0-3.569c-0.988-0.987-2.588-0.987-3.576,0
											c-0.752,0.75-0.938,1.878-0.519,2.818l-1.222,1.41l-0.425,0.422c-0.988-0.8-2.211-1.315-3.574-1.456v-2.444
											c0.94-0.374,1.646-1.269,1.646-2.348c0-1.41-1.128-2.536-2.542-2.536c-1.411,0-2.54,1.126-2.54,2.536
											c0,1.079,0.706,2.02,1.647,2.348v2.444c-1.317,0.141-2.54,0.705-3.577,1.456l-1.74-1.738c0.142-0.33,0.235-0.658,0.235-1.034
											c0-1.407-1.129-2.535-2.541-2.535s-2.54,1.128-2.54,2.535c0,1.41,1.128,2.539,2.54,2.539c0.376,0,0.752-0.096,1.034-0.236
											l1.74,1.737c-0.799,1.032-1.362,2.3-1.505,3.712h-2.398c-0.376-0.938-1.271-1.643-2.354-1.643c-1.41,0-2.539,1.124-2.539,2.535
											c0,1.408,1.129,2.537,2.539,2.537c1.083,0,2.024-0.706,2.354-1.646h2.446c0.188,1.268,0.706,2.443,1.457,3.429l-1.74,1.739
											c-0.328-0.14-0.658-0.235-1.034-0.235c-1.412,0-2.54,1.129-2.54,2.536c0,1.409,1.128,2.538,2.54,2.538s2.541-1.129,2.541-2.538
											c0-0.374-0.094-0.75-0.235-1.033l1.74-1.739c0.987,0.801,2.211,1.317,3.577,1.46v0.655v1.739
											c-0.941,0.375-1.647,1.269-1.647,2.346c0,1.413,1.129,2.54,2.54,2.54c1.414,0,2.542-1.127,2.542-2.54
											c0-1.077-0.706-2.019-1.646-2.346v-1.739v-0.655c1.318-0.143,2.539-0.706,3.574-1.46l1.742,1.739
											c-0.141,0.33-0.236,0.659-0.236,1.033c0,1.409,1.13,2.538,2.542,2.538c1.318-0.14,2.446-1.268,2.446-2.633
											c0-1.408-1.128-2.535-2.541-2.535c-0.376,0-0.752,0.094-1.035,0.235l-1.74-1.738c0.752-0.985,1.271-2.162,1.458-3.429h2.493
											c0.377,0.892,1.271,1.502,2.308,1.502c1.41,0,2.541-1.127,2.541-2.536C36.993,21.021,35.862,19.893,34.452,19.893z M22.499,26.933
											c-2.452,0-4.44-1.984-4.44-4.433c0-0.474,0.076-0.926,0.214-1.354c0.558-1.793,2.235-3.082,4.188-3.082
											c0.151,0,0.3,0.005,0.447,0.021c2.262,0.208,4.033,2.105,4.033,4.415C26.941,24.948,24.951,26.933,22.499,26.933z"/>
									</g>
								</g>
							</svg>
						</span> 
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Recent Activities<span class="grow-up"><img src="<?php echo $app->config["site"]; ?>/public/images/grow-up-arrow.png" alt="grow-up"></span></h2>
					</div>
					<div class="media-right datetimepicker">
						<!--calendar start-->
						<div class="range-calendar" style=" height:40px;">
							<div class="form-group pmd-textfield">
								<div class="input-group">
									<input id="datepicker-default" type="text" class="form-control datepicker" placeholder="Choose date">
									<div class="input-group-addon hidden-xs">
										<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
											<g>
											<path fill="#010101" d="M-8.736-20.232c0,2.88-2.304,5.184-5.184,5.184s-5.184-2.304-5.184-5.184v-13.824
											c0-2.88,2.304-5.184,5.184-5.184s5.184,2.304,5.184,5.184V-20.232z M41.952-34.056c0-2.88-2.304-5.184-5.185-5.184
											c-2.879,0-5.184,2.304-5.184,5.184v13.824c0,2.88,2.305,5.184,5.184,5.184c2.881,0,5.185-2.304,5.185-5.184V-34.056z M63.84-20.923
											V58.68c0,3.111-2.534,5.645-5.76,5.645h-92.16c-3.226,0-5.76-2.533-5.76-5.645v-79.603c0-3.11,2.534-5.645,5.76-5.645h11.52v6.336
											c0,4.954,3.687,8.87,8.64,8.87s8.64-4.032,8.64-8.87v-6.336h33.408v6.336c0,4.954,3.687,8.87,8.64,8.87
											c4.954,0,8.641-4.032,8.641-8.87v-6.336h12.557C61.075-26.568,63.84-24.034,63.84-20.923z M54.624-5.192
											c0-1.152-1.036-2.189-2.304-2.189h-80.64c-1.268,0-2.304,0.921-2.304,2.189v58.227c0,1.152,1.037,2.189,2.304,2.189h80.64
											c1.268,0,2.304-0.922,2.304-2.189V-5.192z"/>
											</g>
											<g>
											<path fill="#A5A4A4" d="M7.2,4.414C7.2,5.08,6.667,5.613,6,5.613S4.8,5.08,4.8,4.414v-3.2c0-0.667,0.534-1.2,1.2-1.2
											s1.2,0.533,1.2,1.2V4.414z M18.934,1.214c0-0.667-0.533-1.2-1.2-1.2s-1.2,0.533-1.2,1.2v3.2c0,0.666,0.533,1.199,1.2,1.199
											s1.2-0.533,1.2-1.199V1.214z M24,4.254V22.68c0,0.721-0.587,1.307-1.333,1.307H1.333C0.586,23.986,0,23.4,0,22.68V4.254
											c0-0.721,0.586-1.307,1.333-1.307H4v1.467c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h7.733v1.467
											c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h2.906C23.36,2.947,24,3.533,24,4.254z M21.867,7.896
											c0-0.268-0.24-0.507-0.534-0.507H2.667c-0.293,0-0.533,0.213-0.533,0.507v13.478c0,0.268,0.24,0.507,0.533,0.507h18.667
											c0.294,0,0.534-0.213,0.534-0.507V7.896z"/>
											</g>
										</svg>
									</div>
								</div>
							</div>
							<span class="selected-date typo-fill-secondary"></span>
						</div><!-- calendar end-->
					</div>
				</div>
				<div class="pmd-card-body">
					<div class="total-sales">
						<!--circle chart-->
						<div class="chart circle-chart border-right pull-left">
							<div class="circle">
								<div id="circles-1"></div>
								<div class="source-semibold text-center chart-title">Users</div>
							</div>
							<div class="circle">
								<div id="circles-2"></div>
								<div class="source-semibold text-center chart-title">Pageviews</div>
							</div>
							<div class="circle">
								<div id="circles-3"></div>
								<div class="source-semibold text-center chart-title">Vistiors</div>
							</div>
						</div>
						<!--circle chart end-->
					  
						<!-- chart start-->
						<div class="chart total-revenue pull-left">
							<table align="center">
								<!-- progressbar-->
								<tr>
									<td class="media-left">Users</td>
									<td class="media-body">
										<div class="progress cash-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right">214</td>
								</tr>
								<tr>
									<td class="media-left">Pageviews</td>
									<td class="media-body">
										<div class="progress card-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right">756</td>
								</tr>
								<tr>
									<td class="media-left">Bounce Rates</td>
									<td class="media-body">
										<div class="progress wallet-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right">291</td>
								</tr>
								<tr>
									<td class="media-left">Visits</td>
									<td class="media-body">
										<div class="progress credit-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right">32,301</td>
								</tr>
								<tr>
									<td class="media-left">Pages</td>
									<td class="media-body">
										<div class="progress other-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right">132</td>
								</tr>
							</table>
						</div>
						<!--total cash chart end-->
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div> <!--end Today's Site Activity -->
		 
		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="pmd-card pmd-z-depth advertising-info">
				<div class="pmd-card-title">
					<h2 class="pmd-card-title-text typo-fill-secondary propeller-title">About Propeller</h2>
				</div>
				<div class="pmd-card-body">
					<p>Propeller is a front-end responsive framework based on Google's Material Design Standards & Bootstrap.</p>
					<p class="services-active">
						<span class="pmd-display2 media-middle activated-service">25</span>
						<span class="typo-fill-secondary source-semibold media-middle">Components Available</span>
					</p>
					<a href="http://propeller.in/docs/index.php" type="button" class="btn btn-primary pmd-ripple-effect btn-services" title="get-started">Get Started</a>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end Propeller Marketplace -->
		 
		 <!--Statistics-->
		 <div class="col-xs-12 col-sm-12 col-md-6">
			<div class="pmd-card pmd-z-depth statistics-content">      
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-green">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="26.25px" viewBox="279.765 332.782 36 26.25" enable-background="new 279.765 332.782 36 26.25" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M312.318,332.782c-1.928,0-3.485,1.558-3.485,3.485c0,0.89,0.334,1.706,0.89,2.336l-6.117,8.898
										c-0.371-0.112-0.742-0.186-1.148-0.186c-0.557,0-1.077,0.111-1.521,0.334l-4.82-4.932c0.296-0.519,0.445-1.075,0.445-1.706
										c0-1.927-1.557-3.485-3.485-3.485c-1.928,0-3.485,1.558-3.485,3.485c0,0.853,0.296,1.595,0.779,2.225l-6.155,8.972
										c-0.296-0.074-0.63-0.148-0.964-0.148c-1.928,0-3.485,1.558-3.485,3.486c0,1.927,1.557,3.485,3.485,3.485
										c1.928,0,3.485-1.558,3.485-3.485c0-0.89-0.333-1.706-0.889-2.336l6.118-8.935c0.333,0.111,0.742,0.185,1.112,0.185
										c0.593,0,1.187-0.148,1.669-0.445l4.782,4.931c-0.334,0.556-0.556,1.187-0.556,1.854c0,1.927,1.556,3.485,3.485,3.485
										c1.927,0,3.484-1.558,3.484-3.485c0-0.816-0.297-1.595-0.78-2.188l6.155-9.009c0.296,0.074,0.63,0.148,0.964,0.148
										c1.93,0,3.485-1.558,3.485-3.486C315.765,334.339,314.244,332.782,312.318,332.782z"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Statistics</h2>
					</div>
				</div>
				<div class="pmd-card-body statistics text-center">
					<ul class="list-group list-inline">
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="281.64 330.535 32 32" enable-background="new 281.64 330.535 32 32" xml:space="preserve">
									<g>
										<polygon fill="#40AC45" points="296.29,330.535 296.29,353.696 288.187,345.594 286.182,347.599 297.762,359.18 309.139,347.599 
											307.093,345.594 299.154,353.655 299.154,330.535 	"/>
										<polygon fill="#40AC45" points="313.64,354.72 310.776,354.72 310.776,359.589 284.504,359.589 284.504,354.72 281.64,354.72 
											281.64,362.454 313.64,362.454 	"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">+1100</div>
							<div class="source-semibold typo-fill-secondary">Downloads</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="17.711px" viewBox="280.699 426.316 34 17.711" enable-background="new 280.699 426.316 34 17.711" xml:space="preserve">
									<g>
										<path fill="#40AC45" d="M297.696,444.027c-9.155,0-16.394-7.752-16.698-8.085c-0.397-0.434-0.397-1.106,0-1.54
											c0.304-0.333,7.543-8.086,16.698-8.086c9.156,0,16.402,7.753,16.706,8.086c0.397,0.434,0.397,1.106,0,1.54
											C314.09,436.275,306.852,444.027,297.696,444.027z M283.449,435.169c2.018,1.887,7.702,6.588,14.247,6.588
											c6.559,0,12.236-4.693,14.247-6.581c-2.018-1.888-7.702-6.581-14.247-6.581C291.137,428.588,285.46,433.281,283.449,435.169z"/>
										<path fill="#40AC45" d="M297.696,440.368c-2.864,0-5.2-2.336-5.2-5.199c0-2.864,2.336-5.2,5.2-5.2c0.629,0,1.135,0.506,1.135,1.136
											c0,0.629-0.506,1.135-1.135,1.135c-1.613,0-2.929,1.316-2.929,2.93c0,1.612,1.316,2.929,2.929,2.929s2.929-1.31,2.929-2.929
											c0-0.63,0.506-1.136,1.135-1.136c0.63,0,1.136,0.506,1.136,1.136C302.896,438.039,300.56,440.368,297.696,440.368z"/>
										<circle fill="#40AC45" cx="297.696" cy="435.024" r="1.685"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">+930</div>
							<div class="source-semibold typo-fill-secondary">Visits</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="28.541px" viewBox="281.64 332.265 32 28.541" enable-background="new 281.64 332.265 32 28.541" xml:space="preserve">
									<g transform="translate(0,-952.36218)">
										<path fill="#40AC45" d="M297.64,1284.627c-4.044,0-7.352,3.307-7.352,7.351c0,4.045,3.307,7.352,7.352,7.352
											c4.045,0,7.352-3.307,7.352-7.352C304.991,1287.934,301.685,1284.627,297.64,1284.627z M297.64,1287.222
											c2.643,0,4.757,2.114,4.757,4.757s-2.114,4.757-4.757,4.757s-4.757-2.114-4.757-4.757S294.997,1287.222,297.64,1287.222z
											 M297.64,1300.195c-4.283,0-8.164,1.021-11.067,2.743s-4.933,4.255-4.933,7.203v1.73c0,0.716,0.581,1.297,1.297,1.297h29.406
											c0.716,0,1.297-0.581,1.297-1.297v-1.73c0-2.948-2.028-5.48-4.933-7.203C305.804,1301.215,301.923,1300.195,297.64,1300.195z
											 M297.64,1302.789c3.862,0,7.332,0.948,9.743,2.378c2.411,1.43,3.662,3.235,3.662,4.973v0.433h-26.811v-0.433
											c0-1.737,1.251-3.542,3.662-4.973C290.308,1303.737,293.778,1302.789,297.64,1302.789z"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">570</div>
							<div class="source-semibold typo-fill-secondary">New users</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="281.64 320.756 32 32" enable-background="new 281.64 320.756 32 32" xml:space="preserve">
									<g transform="matrix( 1, 0, 0, 1, 0,0) ">
										<g>
											<g id="a">
												<path fill="#40AC45" d="M308.947,348.063c3.129-3.117,4.693-6.886,4.693-11.307c0-4.433-1.564-8.208-4.693-11.325
													c-3.117-3.117-6.886-4.675-11.307-4.675c-4.433,0-8.208,1.559-11.324,4.675c-1.387,1.387-2.466,2.904-3.236,4.551
													c-0.307,0.655-0.567,1.331-0.782,2.027c-0.438,1.488-0.658,3.07-0.658,4.747c0,4.42,1.559,8.19,4.676,11.307
													c0.913,0.917,1.879,1.699,2.897,2.347c2.483,1.564,5.292,2.346,8.427,2.346c3.126,0,5.923-0.782,8.391-2.346
													C307.062,349.762,308.033,348.979,308.947,348.063 M297.64,323.103c3.769,0,6.98,1.333,9.636,4c2.666,2.655,4,5.873,4,9.653
													c0,3.769-1.334,6.98-4,9.636c-2.655,2.667-5.867,4-9.636,4c-3.781,0-6.999-1.333-9.653-4c-2.667-2.655-4-5.867-4-9.636
													c0-1.696,0.267-3.278,0.8-4.747c0.257-0.702,0.571-1.377,0.942-2.027c0.605-1.024,1.358-1.984,2.258-2.88
													C290.641,324.437,293.859,323.103,297.64,323.103 M288.698,338.996c0.273,2.868,1.713,5.174,4.32,6.916
													c1.529,0.936,3.069,1.387,4.622,1.351c1.553,0.036,3.088-0.415,4.604-1.351c2.643-1.766,4.089-4.071,4.338-6.916
													c0.023-0.486-0.332-0.64-1.066-0.462l-2.524,0.498c-1.624,0.45-3.408,0.675-5.352,0.675c-1.956,0-3.745-0.226-5.369-0.675
													l-2.507-0.498C289.041,338.356,288.686,338.51,288.698,338.996 M294.724,335.138l0.64,0.925c0.355,0.438,0.533,0.213,0.533-0.676
													c0.012-1.221-0.213-2.228-0.676-3.022c-0.533-0.83-1.114-1.239-1.742-1.227h-0.018c-0.64-0.012-1.227,0.397-1.76,1.227
													c-0.462,0.794-0.688,1.801-0.676,3.022c0,0.889,0.178,1.114,0.533,0.676l0.64-0.925c0.32-0.533,0.741-0.77,1.262-0.71h0.018
													C293.99,334.368,294.405,334.605,294.724,335.138 M300.058,332.365c-0.463,0.794-0.688,1.801-0.676,3.022
													c0,0.889,0.172,1.114,0.516,0.676l0.64-0.925c0.332-0.533,0.753-0.77,1.263-0.71h0.018c0.51-0.06,0.931,0.178,1.263,0.71
													l0.622,0.925c0.355,0.438,0.533,0.213,0.533-0.676c0.012-1.221-0.214-2.228-0.676-3.022c-0.521-0.83-1.103-1.239-1.742-1.227
													H301.8C301.159,331.126,300.579,331.536,300.058,332.365z"/>
											</g>
										</g>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">+900</div>
							<div class="source-semibold typo-fill-secondary">Happy users</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="28.196px" viewBox="281.64 306.578 32 28.196" enable-background="new 281.64 306.578 32 28.196" xml:space="preserve">
									<g>
										<path fill="#40AC45" d="M311.166,317.292c-1.711-0.186-3.422-0.297-5.059-0.409c-1.562-0.111-3.124-0.223-4.761-0.372l1.004-2.009
											l0.037-0.111c0.596-2.12,0.224-4.389-1.004-6.211l-0.483-0.744c-0.372-0.558-1.004-0.893-1.674-0.855
											c-0.669,0.037-1.265,0.409-1.599,1.041c-0.558,1.116-1.265,2.12-2.046,3.013c-0.707,0.818-1.302,1.339-2.008,1.897
											c-0.632,0.558-1.376,1.153-2.231,2.083c-1.004,1.079-1.897,2.306-2.678,3.57l-4.91,0.744c-1.153,0.186-2.008,1.19-2.008,2.343
											l0.111,8.741c0,1.264,1.079,2.306,2.343,2.306h6.844l11.679,2.455c0.446,0.111,0.93,0.148,1.376,0.148
											c2.642,0,5.096-1.525,6.212-4.017c0.595-1.302,1.153-2.715,1.674-4.166c0.706-1.971,1.302-4.017,1.711-6.1
											c0.148-0.781-0.037-1.6-0.483-2.232C312.691,317.776,311.948,317.367,311.166,317.292z M284.386,321.458l1.897-0.298l-0.297,8.555
											h-1.525L284.386,321.458z M309.492,325.847c-0.521,1.376-1.041,2.715-1.6,3.98c-0.78,1.785-2.752,2.79-4.649,2.38l-11.939-2.492
											h-2.678l0.297-8.926l1.414-0.224l0.297-0.558c0.707-1.302,1.6-2.529,2.604-3.645c0.744-0.818,1.339-1.302,2.009-1.86
											c0.707-0.595,1.45-1.19,2.269-2.194c0.67-0.781,1.302-1.637,1.822-2.529c0.67,1.116,0.855,2.455,0.559,3.72l-2.604,5.133
											l1.86,0.223c2.343,0.297,4.575,0.446,6.732,0.595c1.636,0.112,3.31,0.223,4.983,0.409c0.074,0,0.149,0.075,0.187,0.112
											s0.074,0.111,0.037,0.186C310.72,322.091,310.199,324.025,309.492,325.847z"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">10</div>
							<div class="source-semibold typo-fill-secondary">Improvements</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.083px" height="33.417px" viewBox="281.057 329.779 33.083 33.417" enable-background="new 281.057 329.779 33.083 33.417" xml:space="preserve">
									<g>
										<path fill="#40AC45" stroke="#40AC45" stroke-miterlimit="10" d="M297.411,362.596c-3.613,0-7.03-1.171-9.884-3.387
											c-2.978-2.313-5.058-5.622-5.859-9.318c-0.039-0.179-0.002-0.366,0.101-0.518c0.103-0.152,0.264-0.254,0.445-0.283l4.488-0.739
											c0.344-0.064,0.677,0.163,0.759,0.504c0.548,2.295,1.818,4.269,3.672,5.708c1.81,1.406,3.977,2.149,6.268,2.149
											c2.407,0,4.697-0.822,6.53-2.33l-2.996-2.325c-0.205-0.16-0.3-0.424-0.243-0.678c0.059-0.253,0.258-0.45,0.513-0.505l10.313-2.237
											c0.194-0.041,0.396,0.004,0.551,0.125c0.156,0.122,0.251,0.306,0.259,0.504l0.38,10.411c0.014,0.05,0.019,0.103,0.019,0.157
											c0,0.372-0.316,0.655-0.675,0.669c-0.139-0.002-0.296-0.046-0.418-0.141l-2.974-2.31
											C305.671,360.949,301.607,362.596,297.411,362.596z M283.141,350.292c0.831,3.113,2.662,5.884,5.206,7.86
											c2.617,2.032,5.751,3.106,9.064,3.106c4.035,0,7.938-1.66,10.706-4.557c0.237-0.247,0.623-0.275,0.894-0.066l2.312,1.795
											l-0.305-8.315l-8.132,1.765l2.5,1.94c0.152,0.12,0.247,0.3,0.258,0.494s-0.065,0.383-0.205,0.517
											c-2.168,2.076-5.023,3.22-8.04,3.22c-2.59,0-5.042-0.841-7.087-2.43c-1.904-1.479-3.305-3.539-3.992-5.852L283.141,350.292z"/>
										<path fill="#40AC45" stroke="#40AC45" stroke-miterlimit="10" d="M308.492,346.124c-0.146,0-0.287-0.047-0.404-0.136
											c-0.146-0.112-0.24-0.278-0.26-0.461c-0.303-2.805-1.687-5.295-3.896-7.01c-1.81-1.404-3.976-2.147-6.267-2.147
											c-2.407,0-4.698,0.822-6.53,2.329l2.995,2.326c0.205,0.16,0.3,0.423,0.242,0.677c-0.058,0.252-0.257,0.45-0.511,0.505
											l-10.313,2.237c-0.193,0.042-0.396-0.004-0.552-0.125c-0.156-0.122-0.25-0.306-0.258-0.504l-0.387-10.545
											c-0.009-0.26,0.132-0.501,0.363-0.62c0.231-0.119,0.51-0.093,0.715,0.067l2.975,2.31c2.988-2.893,7.053-4.54,11.247-4.54
											c3.613,0,7.03,1.171,9.885,3.387c3.409,2.647,5.579,6.47,6.109,10.763c0.044,0.356-0.201,0.683-0.555,0.742l-4.492,0.736
											C308.565,346.121,308.53,346.124,308.492,346.124z M297.666,335.031c2.59,0,5.041,0.839,7.087,2.428
											c2.313,1.797,3.827,4.341,4.31,7.224l3.165-0.519c-0.614-3.678-2.553-6.938-5.509-9.234c-2.618-2.031-5.752-3.105-9.065-3.105
											c-4.034,0-7.936,1.66-10.706,4.557c-0.237,0.247-0.624,0.275-0.894,0.065l-2.311-1.794l0.304,8.315l8.131-1.764l-2.499-1.941
											c-0.154-0.119-0.249-0.3-0.257-0.494c-0.01-0.194,0.064-0.383,0.205-0.518C291.795,336.174,294.65,335.031,297.666,335.031z"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2">2</div>
							<div class="source-semibold typo-fill-secondary">Update done</div>
						</li>
					</ul>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end statistics-->
		 
		  <!-- User details-->
		 <div class="col-xs-12 col-sm-12 col-md-6">
			<div class="pmd-card pmd-z-depth sms-details">
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="20.564px" viewBox="272.11 405.017 36 20.564" enable-background="new 272.11 405.017 36 20.564" xml:space="preserve">
								<g>
									<g>
										<g>
											<g>
												<path fill="#FFFFFF" d="M305.769,416.267c2.792,0.82,2.314,2.847,2.306,4.206h-6.967c-0.25-0.823-0.869-1.591-2.347-2.023
													l-0.467-0.139c-1.955-0.569-3.002-0.876-3.275-1.492c-0.067-0.222-0.047-0.469,0.605-0.705c2.095-0.61,3.157-0.929,3.408-1.714
													h0.132c-0.036-0.032-0.07-0.063-0.103-0.1c-1.036-0.998-1.826-2.946-1.826-4.519c0-2.225,1.702-3.687,3.314-3.687
													c1.609,0,3.231,1.579,3.231,3.806c0,1.574-0.881,3.46-1.963,4.424C302.042,415.232,303.256,415.529,305.769,416.267z"/>
											</g>
											<g>
												<g>
													<path fill="#FFFFFF" d="M300.958,425.581h-21.639c-0.013-0.216-0.027-0.432-0.053-0.688c-0.067-0.855-0.133-1.735,0.106-2.54
														c0.292-0.943,1.049-1.773,2.804-2.284l0.678-0.216c3.083-0.88,4.731-1.377,5.277-2.539l0.172-0.292l-0.013-0.37
														c-0.04-0.026-0.066-0.051-0.119-0.115c-0.187-0.191-0.373-0.382-0.546-0.611c-1.196-1.519-2.046-3.867-2.046-5.805
														c0-2.477,1.834-5.104,4.572-5.104c2.141,0,4.441,2.118,4.441,5.282c0,2.016-1.05,4.516-2.486,5.983
														c-0.093,0.104-0.199,0.191-0.293,0.281l-0.172,0.154l0.054,0.229c0.372,1.453,2.046,1.951,5.409,2.908l0.691,0.216
														c1.741,0.511,2.565,1.354,2.925,2.284h0.014c0.332,0.907,0.291,1.891,0.251,2.808
														C300.972,425.301,300.972,425.454,300.958,425.581z"/>
												</g>
											</g>
											<g>
												<path fill="#FFFFFF" d="M274.452,416.267c-2.795,0.82-2.313,2.847-2.306,4.206h6.964c0.252-0.823,0.869-1.591,2.349-2.023
													l0.466-0.139c1.957-0.569,3.004-0.876,3.276-1.492c-0.074-0.245,0.061-0.612-0.606-0.705c-2.094-0.61-3.156-0.929-3.406-1.714
													h-0.131c0.035-0.032,0.071-0.063,0.102-0.1c1.036-0.998,1.827-2.946,1.827-4.519c0-2.225-1.702-3.687-3.313-3.687
													c-1.612,0-3.231,1.579-3.231,3.806c0,1.574,0.876,3.46,1.957,4.424C278.177,415.232,276.961,415.529,274.452,416.267z"/>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Users Details</h2>
					</div>
				</div>
				<div class="pmd-card-body content-section">
					<div class="users-details-info">
						<h2 class="pmd-display2">66.5% more users</h2>
						<p class=" source-regular">The users are measured from the time that the redesign was fully implemented and after the first e-mailing.</p>
					</div>
					<!--chart start-->
					<div id="sms-chart" class="users-details-chart"></div><!--chart end-->
				 </div>
				 <span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end User Details-->
		 
		 <!--Todo Lists -->
		 <div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth todos">     
				<div class="pmd-card-title">
					<div class="media-left">
						<span class="service-icon img-circle bg-fill-feedback">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.999px" height="30.769px" viewBox="281.642 394.113 31.999 30.769" enable-background="new 281.642 394.113 31.999 30.769" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M290.526,394.574l-4.218,5.273l-2.753-1.835c-0.567-0.379-1.331-0.224-1.707,0.341
									s-0.224,1.331,0.341,1.707l3.692,2.461c0.209,0.139,0.447,0.207,0.683,0.207c0.362,0,0.72-0.16,0.961-0.462l4.923-6.154
									c0.425-0.53,0.338-1.306-0.192-1.729C291.726,393.958,290.951,394.044,290.526,394.574z"/>
									<path fill="#FFFFFF" d="M290.526,405.651l-4.218,5.272l-2.753-1.835c-0.566-0.379-1.331-0.225-1.707,0.341
									c-0.376,0.565-0.224,1.33,0.341,1.707l3.692,2.462c0.209,0.139,0.447,0.207,0.683,0.207c0.362,0,0.72-0.16,0.961-0.461l4.923-6.154
									c0.425-0.531,0.338-1.306-0.192-1.729C291.726,405.036,290.951,405.12,290.526,405.651z"/>
									<path fill="#FFFFFF" d="M290.526,416.729l-4.218,5.272l-2.753-1.835c-0.566-0.378-1.331-0.224-1.707,0.341
									c-0.376,0.566-0.224,1.329,0.341,1.707l3.692,2.462c0.209,0.139,0.447,0.206,0.683,0.206c0.362,0,0.72-0.159,0.961-0.461
									l4.923-6.154c0.425-0.531,0.338-1.306-0.192-1.73C291.726,416.113,290.951,416.198,290.526,416.729z"/>
									<rect x="296.41" y="419.959" fill="#FFFFFF" width="17.23" height="2.462"/>
									<rect x="296.41" y="408.882" fill="#FFFFFF" width="17.23" height="2.461"/>
									<rect x="296.41" y="397.805" fill="#FFFFFF" width="17.23" height="2.461"/>
								</g>
							</svg>
						</span> 
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Todo Lists</h2>
					</div>
				</div>
				<ul class="list-group pmd-card-list pmd-list todo-lists">
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="" checked>
							<span>Release Update</span>
						</label>
					</li>
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="">
							<span>Take a backup of the files</span>
						</label>
					</li>
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="">
							<span>Resolve Issues which have been listed down</span>
						</label>
					</li>
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="">
							<span>Be sure to add FAQs and Terms & Conditions page</span>
						</label>
					</li>
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="" checked>
							<span>Code enhancement of the HTML files</span>
						</label>
					</li>
					<li class="list-group-item">
						<label class="pmd-checkbox checkbox-pmd-ripple-effect">
							<input type="checkbox" value="">
							<span>Proper monitoring to plan the next marketing attempt</span>
						</label>
					</li>
				</ul>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!--end Todo Lists-->
		 
			 
		 
		 <!--Browser Usage card-->
		 <div class="col-lg-4 col-sm-6 col-xs-12 value-added-service-card">
			<div class="pmd-card pmd-z-depth">     
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-violet">
							<svg  x="0px" y="0px" width="32px" height="30px" viewBox="0 0 32 30" enable-background="new 0 0 32 30" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M16.413,3.584l2.832,6.83l0.594,1.431l1.546,0.105l7.196,0.491L23,17.036l-1.227,1.01l0.394,1.539
										l1.835,7.174l-6.187-3.846l-1.32-0.82l-1.32,0.82L8.99,26.758l1.834-7.173l0.394-1.539l-1.226-1.01l-5.579-4.595l7.194-0.491
										l1.583-0.108l0.577-1.477L16.413,3.584 M16.395-0.053c-0.708,0-1.416,0.404-1.72,1.213l-3.238,8.296l-8.902,0.607
										c-1.619,0.202-2.428,2.226-1.011,3.237l6.879,5.665l-2.225,8.701c-0.316,1.263,0.724,2.28,1.87,2.28
										c0.322,0,0.651-0.08,0.962-0.258l7.486-4.653l7.486,4.653c0.311,0.178,0.641,0.258,0.962,0.258c1.146,0,2.187-1.018,1.871-2.28
										l-2.226-8.701l6.88-5.665c1.416-1.012,0.606-3.036-1.012-3.237l-8.903-0.607l-3.439-8.296C17.811,0.352,17.103-0.053,16.395-0.053
										L16.395-0.053z"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Browser Usage</h2>
					</div>
				</div>
				<div class="pmd-card-body text-center value-added">
					<div class="row">
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Firefox</div>
							<div class="pmd-display2"><a href="javascript:void(0)">25%</a></div>
						</div>
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Google Chrome</div>
							<div class="pmd-display2"><a href="javascript:void(0)">32%</a></div>
						</div>
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Safari</div>
							<div class="pmd-display2"><a href="javascript:void(0)">13%</a></div>
						</div>
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Opera</div>
							<div class="pmd-display2"><a href="javascript:void(0)">7%</a></div>
						</div>
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Mobile & Tablet</div>
							<div class="pmd-display2"><a href="javascript:void(0)">4%</a></div>
						</div>
						<div class="col-xs-6 value-added-section">
							<div class="source-semibold typo-fill-secondary title">Others</div>
							<div class="pmd-display2"><a href="javascript:void(0)">2%</a></div>
						</div>
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!--end Browser Usage card-->
		 
		 
		 
		 <!--Recent Posts-->
		 <div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth recent-post">      
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Recent Posts</h2>
					</div>
				</div>
				<ul class="list-group pmd-card-list pmd-list-avatar">
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-1.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Christopher Columbus</h3>
								<span class="list-group-item-text">This theme is Awesome!!</span>
							</div>
							<div class="media-right post">
								<span class="post-time">5 mins ago</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-2.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Sandra Smith</h3>
            					<span class="list-group-item-text">Hey! I'm thankful to you.</span>
							</div>
							<div class="media-right post">
								<span class="post-time">6 hours ago</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-3.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Nick Doe</h3>
            					<span class="list-group-item-text">I've used your component.</span>
							</div>
							<div class="media-right post">
								<span class="post-time">13:40 PM</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-4.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Paul Andrew</h3>
            					<span class="list-group-item-text">Nice work!!</span>
							</div>
							<div class="media-right post">
								<span class="post-time">10:00 AM</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-2.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Sandra Smith</h3>
            					<span class="list-group-item-text">Hey! I'm thankful to you.</span>
							</div>
							<div class="media-right post">
								<span class="post-time">6 hours ago</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-3.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Nick Doe</h3>
            					<span class="list-group-item-text">I've used your component.</span>
							</div>
							<div class="media-right post">
								<span class="post-time">13:40 PM</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-4.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Paul Andrew</h3>
            					<span class="list-group-item-text">Nice work!!</span>
							</div>
							<div class="media-right post">
								<span class="post-time">10:00 AM</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media-left"> 
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
									<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $app->config["site"]; ?>/public/images/profile-2.png" data-holder-rendered="true"> 
								</a> 
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Sandra Smith</h3>
            					<span class="list-group-item-text">Hey! I'm thankful to you.</span>
							</div>
							<div class="media-right post">
								<span class="post-time">6 hours ago</span>
							</div>
						</li>
					</ul>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end Recent Posts-->	
		 
		 <!--project progress -->
	 	 <div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth project-progress">      
				 <div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-darkblue">
							<svg x="0px" y="0px" width="33px" height="30px" viewBox="0 0 33 30" enable-background="new 0 0 33 30" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M9.339,16.337L9.339,16.337L9.339,16.337z"/>
									<rect x="1.824" y="21.777" fill="#FFFFFF" width="4.62" height="8.223"/>
									<rect x="8.066" y="16.332" fill="#FFFFFF" width="4.62" height="13.668"/>
									<rect x="14.309" y="10.891" fill="#FFFFFF" width="4.62" height="19.109"/>
									<rect x="20.631" y="5.445" fill="#FFFFFF" width="4.62" height="24.555"/>
									<rect x="26.556" fill="#FFFFFF" width="4.62" height="30"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Project Progress</h2>
					</div>
				</div>
				<div class="content-section">
					<ul class="list-group pmd-card-list pmd-list todo-lists">
						<li class="list-group-item timeline project-info">Graphics changes. Need to change icons for few sections.
							<h5 class="typo-fill-secondary">Low Priority</h5>
						</li>
		
						<li class="list-group-item timeline project-notification">Clean html/css/js code. Remove commented code from all the files. Also, enhance the code.
							<h5 class="typo-fill-secondary">High Priority</h5>
						</li>
		
						<li class="list-group-item timeline  project-notification">Make website responsive. Need to check the website in devices like Mobile and Ipad.
							<h5 class="typo-fill-secondary">High Priority</h5>
						</li>
					</ul>
					<div class="blank-state-section hidden">	
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve">
							<g>
								<g>
									<g>
										<path fill="#CAC8C8" d="M61.364,73.637h-4.091H32.727h-4.091H6.982l9.381-9.381v-2.892V40.909
											c0-15.791,12.845-28.636,28.637-28.636c15.791,0,28.636,12.846,28.636,28.636v20.456v2.892l9.38,9.381H61.364z M45,85.909
											c-5.327,0-9.823-3.432-11.521-8.182h23.04C54.823,82.478,50.326,85.909,45,85.909L45,85.909z M89.404,74.234L77.729,62.563
											V40.909c0-16.613-12.551-30.408-28.638-32.441V4.09c0-2.258-1.832-4.091-4.09-4.091s-4.092,1.833-4.092,4.091v4.377
											C24.823,10.5,12.272,24.295,12.272,40.909v21.654L0.596,74.234c-0.581,0.589-0.757,1.465-0.442,2.229
											c0.315,0.767,1.064,1.265,1.89,1.265h27.168C31.041,84.772,37.382,90.001,45,90.001c7.618,0,13.958-5.229,15.788-12.273h27.168
											c0.825,0,1.575-0.498,1.89-1.265C90.161,75.699,89.985,74.823,89.404,74.234L89.404,74.234z"/>
									</g>
								</g>
								<line fill="#CAC8C8" stroke="#CAC8C8" stroke-width="3" stroke-miterlimit="10" x1="7.854" y1="7.834" x2="86.679" y2="86.659"/>
							</g>
						</svg>
						<h4>You Don't Have Any Notifications</h4>						
					</div>
				 </div>
				 <span class="btn-loader loader hidden">Loading...</span>
			</div>
	 	 </div><!-- end project progress -->	
	</div>
</div>

</div><!--end content area-->

<!-- Footer Starts -->
<!--footer start-->
<footer class="admin-footer">
 <div class="container-fluid">
 	<ul class="list-unstyled list-inline">
	 	<li>
			<span class="pmd-card-subtitle-text">Propeller &copy; 2016. All Rights Reserved.</span>
			<h3 class="pmd-card-subtitle-text">Licensed under <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license.</a></h3>
        </li>
        <li class="pull-right download-now">
			<a onClick="downloadPMDadmintemplate()" href="archive/pmd-admin-template-1.0.0.zip">
           		 <div>
                  <svg x="0px" y="0px" width="38px" height="32px" viewBox="0 0 38 32" enable-background="new 0 0 38 32" xml:space="preserve">
<g>
	<path fill="#A5A4A4" d="M13.906,26.652l4.045,4.043c0.001,0,0.002,0.002,0.003,0.004l1.047,1.047l1.047-1.049
		c0.001,0,0.001,0,0.001,0l4.044-4.045c0.579-0.58,0.579-1.518,0-2.098c-0.579-0.578-1.519-0.578-2.096,0l-1.514,1.514V16.22
		c0-0.818-0.664-1.482-1.483-1.482c-0.818,0-1.482,0.664-1.482,1.482v9.85l-1.515-1.516c-0.29-0.289-0.669-0.434-1.048-0.434
		c-0.38,0-0.759,0.145-1.049,0.434C13.327,25.133,13.327,26.072,13.906,26.652z"/>
	<g>
		<g>
			<path fill="#A5A4A4" d="M8.453,26.363c-0.032,0-0.065,0-0.099-0.002C3.67,26.053,0,22.137,0,17.443
				c0-4.434,3.242-8.124,7.48-8.825c0.3-4.663,4.188-8.364,8.926-8.364c2.249,0,4.393,0.844,6.032,2.346
				c4.602-1.86,9.527-0.766,12.266,2.831c1.808,2.375,2.399,5.513,1.671,8.719C37.416,15.412,38,17.008,38,18.65
				c0,3.902-3.176,7.076-7.077,7.076c-1.221,0-2.428-0.32-3.492-0.926c-0.712-0.404-0.961-1.311-0.556-2.021
				c0.404-0.713,1.312-0.963,2.021-0.557c0.619,0.352,1.319,0.539,2.027,0.539c2.267,0,4.111-1.844,4.111-4.111
				c0-1.146-0.467-2.212-1.312-3.001l-0.673-0.627l0.264-0.881c0.769-2.574,0.416-5.094-0.969-6.913
				c-2.061-2.706-5.997-3.332-9.577-1.522l-1.045,0.528L20.966,5.34c-1.139-1.347-2.802-2.12-4.56-2.12
				c-3.297,0-5.979,2.683-5.979,5.979c0,0.21,0.01,0.416,0.033,0.619l0.186,1.648l-1.784-0.004
				c-3.215,0.003-5.896,2.685-5.896,5.983c0,3.135,2.453,5.752,5.584,5.957c0.817,0.055,1.436,0.76,1.382,1.576
				C9.88,25.762,9.228,26.363,8.453,26.363z"/>
		</g>
	</g>
</g>
</svg>
           		 </div>
            	 <div>
              	 	<span class="pmd-card-subtitle-text">Version- 1.0.0</span>
              	 	<h3 class="pmd-card-title-text">Download Now</h3>
            	</div>
			</a>
        </li>
        <li class="pull-right for-support">
			<a href="mailto:support@propeller.in">
          		<div>
					<svg x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38">
<g><path fill="#A5A4A4" d="M25.621,21.085c-0.642-0.682-1.483-0.682-2.165,0c-0.521,0.521-1.003,1.002-1.524,1.523
		c-0.16,0.16-0.24,0.16-0.44,0.08c-0.321-0.2-0.683-0.32-1.003-0.521c-1.483-0.922-2.726-2.125-3.809-3.488
		c-0.521-0.681-1.002-1.402-1.363-2.205c-0.04-0.16-0.04-0.24,0.08-0.4c0.521-0.481,1.002-1.003,1.524-1.483
		c0.721-0.722,0.721-1.524,0-2.246c-0.441-0.44-0.842-0.842-1.203-1.202c-0.441-0.441-0.842-0.842-1.243-1.243
		c-0.642-0.642-1.483-0.642-2.165,0c-0.521,0.521-1.002,1.002-1.524,1.523c-0.481,0.481-0.722,1.043-0.802,1.685
		c-0.08,1.042,0.16,2.085,0.521,3.047c0.762,2.085,1.925,3.849,3.328,5.532c1.884,2.286,4.17,4.05,6.815,5.333
		c1.203,0.562,2.406,1.002,3.729,1.123c0.922,0.04,1.724-0.201,2.365-0.923c0.441-0.521,0.923-0.922,1.403-1.403
		c0.682-0.722,0.682-1.563,0-2.245C27.265,22.729,26.423,21.927,25.621,21.085z"/>
	<path fill="#A5A4A4" d="M32.437,5.568C28.869,2,24.098-0.005,19.005-0.005S9.182,2,5.573,5.568C2.005,9.177,0,13.908,0,19
		s1.965,9.823,5.573,13.432c3.568,3.568,8.34,5.573,13.432,5.573s9.823-1.965,13.431-5.573
		C39.854,25.014,39.854,12.985,32.437,5.568z M30.299,30.294c-3.003,3.045-7.021,4.695-11.293,4.695
		c-4.272,0-8.291-1.65-11.294-4.695C4.666,27.29,3.016,23.271,3.016,19c0-4.272,1.649-8.291,4.695-11.294
		c3.003-3.003,7.022-4.695,11.294-4.695c4.272,0,8.291,1.649,11.293,4.695C36.56,13.924,36.56,24.075,30.299,30.294z"/>
</g></svg>
            	</div>
            	<div>
				  <span class="pmd-card-subtitle-text">For Support</span>
				  <h3 class="pmd-card-title-text">support@propeller.in</h3>
				</div>
            </a>
        </li>
    </ul>
 </div>
</footer>
<!--footer end-->
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="<?php echo $app->config["site"]; ?>/public/js/jquery-1.12.2.min.js"></script>
<script src="<?php echo $app->config["site"]; ?>/public/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});
</script>
<script type="text/javascript">
(function() {
  "use strict";
  var toggles = document.querySelectorAll(".c-hamburger");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
</script>

<script src="<?php echo $app->config["site"]; ?>/public/js/propeller.min.js"></script> 

<!-- Javascript for revenue progressbar animation effect-->
<script>
	function progress(percent, $element) {
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	} 
	
	progress(50, $('.cash-progressbar'));
	progress(30, $('.card-progressbar'));
	progress(60, $('.wallet-progressbar'));
	progress(40, $('.credit-progressbar'));
	progress(10, $('.other-progressbar'));
</script>
<!-- Javascript for revenue progressbar animation effect-->	


<!--circle chart-->
<script src="<?php echo $app->config["site"]; ?>/public/js/circles.min.js"></script>
<script>
  <!-- javascript for total sales chart-->
		var colors = [
			['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
		], circles = [];

		for (var i = 1; i <= 5; i++) {
			var child = document.getElementById('circles-' + i),
				percentage = 10 + (i * 8);

			circles.push(Circles.create({
				id:         'circles-' + i,
				value:		percentage,
				radius:     50,
				width:      7,
				colors:     colors[i - 1],
 				textClass:           'circles-text',
  				styleText:           true
			}));
		}
  <!-- javascript for total sales chart-->
	</script>

<!--staked column chart for payment-->
<script src="<?php echo $app->config["site"]; ?>/public/js/highcharts.js"></script>
<script src="<?php echo $app->config["site"]; ?>/public/js/highcharts-more.js"></script>

<!-- Payment chart js-->
<script>
$(function paymentChart(){
    $('#payment-chart').highcharts({
        chart: {
            type: 'column'
        },
		colors: "#00719d,#2ab7ee".split(","),
        title: {
            text: 'Last 10 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: {
            categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7', '18-7']
        },
        yAxis: {
            min: 0,
			
			title: {
					text: "Amount"
			},
			stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
					}
				}
			},
        legend: {
            enabled: !0,
            align: "right",
            layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}',
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
		 credits: {
            enabled: false,
        },
        series: [{
            name: 'Card',
            data: [25000, 50000, 75000, 75000, 60000, 70000, 10000, 2500, 5000, 25000]
        }, {
            name: 'Wallet',
            data: [75000, 50000, 25000, 25000, 30000, 30000, 90000, 25000, 3000, 50000]
        }]
		
    });
});
</script>

<!--staked column chart for sms details-->
<script>
$( function smsChart() { 
    $('#sms-chart').highcharts({
        chart: {
            zoomType: 'none'
        },
		colors: "#e75c5c,#9159b8".split(","),
         title: {
            text: 'Last 7 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: [{
            categories: ['3-7', '4-7', '5-7', '6-7', '7-7', '8-7', '9-7']
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'User Count',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Total Days',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
		legend: {
            enabled: !0,
            align: "right",
			layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute",
                width: "12px",
                height: "12px"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },

        tooltip: {
            shared: true,
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
		 credits: {
            enabled: false,
        },

        series: [{
            name: 'Total Days',
            type: 'spline',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: '
            }
        }, {
            name: 'Total Days error',
            type: 'errorbar',
            yAxis: 1,
            data: [[48, 51], [68, 73], [92, 110], [128, 136], [140, 150], [171, 179], [135, 143]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }, {
            name: 'User Count',
            type: 'column',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}</b> '
            }
        }, {
            name: 'User Count error',
            type: 'errorbar',
            data: [[6, 8], [5.9, 7.6], [9.4, 10.4], [14.1, 15.9], [18.0, 20.1], [21.0, 24.0], [23.2, 25.3]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }]
    });
});
</script>
<!-- Scripts Ends -->
<!-- Javascript for Datepicker -->
<script type="text/javascript" language="javascript" src="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script>
	// Linked date and time picker 
	// start date date and time picker 
	$('#datepicker-default').datetimepicker();
</script>

</body>
</html>