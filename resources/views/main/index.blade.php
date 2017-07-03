<!DOCTYPE html>
<html>
<head>
	<title></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UAB Inroma') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/project.css') }}" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
</head>
<body class="mainbackground">
<div class="container2">
	<div class="row mainpage">

		<a href="/abouttwo">
			<div class="col-md-4 xx1">
				<img id="mainheadinglogo" src="../storage/logo.png">
				<div id="vertical_text3">
	                <h2>Statybinės technikos nuoma!</h2>
	            </div>
	            <div id="vertical_text4">
	                <h2>Tel. +37065511401</h2>
	            </div>
			</div>
		</a>

		<a href="/about">

			<div class="col-md-4 xx2">
			
				<div id="vertical_text5">
	                <h2>Prekyba kietu kuru!</h2>
	            </div>
	            <div id="vertical_text6">
	                <h2>Tel. +37065511401</h2>
	            </div>
			</div>
		</a>

		<a href="/juice">
			<div class="col-md-4 xx3">
				<div id="vertical_text7">
	                <h2>Sulčių spaudimas!</h2>
	            </div>
	            <div id="vertical_text8">
	                <h2>Tel. +37062616515</h2>
	            </div>
			</div>
		</a>

		<a href="/bricketts">
			<div class="col-md-12 xx4">
				<div id="vertical_text9">
		            <h2>Trinkelių klojimas!</h2>
		        </div>
		        <div id="vertical_text10">
		            <h2>Tel. +37065500446
					</h2>
		        </div>
			</div>
		</a>
	</div>
</div>
<footer class="container">
            <div  id="text2">
            <h3> © 2017 „UAB Inroma" inroma30@gmail.com </h3> 
                <iframe  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuabinroma%2F&tabs=timeline&width=500&height=150&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="max" height="auto" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
            </div> 
       </footer>
 <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>






