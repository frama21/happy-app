<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Demo</title>
	{{-- <link rel="stylesheet" href="/css/fullpage.min.css"> --}}
	<link rel="stylesheet" href="/css/icon.css">
	<link rel="stylesheet" href="/css/materialize.min.css">

	<script src="/js/jquery-3.2.1.min.js"></script>

	<style>
		.bg-black{
			background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898; 
 background-blend-mode: multiply,multiply;
		}
	</style>
</head>
<body class="bg-black">

	<div class="container intro">
			<div class="row" style="margin-top: -30px;">
				<div class="center white-text">
					<h1>My Web Apps</h1>
				</div>
			</div>
				
			<div class="row">
				<div class="col s12 m6">
					<a href="/quotes-generator">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/qg.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>Aplikasi yang bisa membuat hari mu berarti dan bersemangat berkat quotes quotes yang populer dan membangun hari mu !
					        </div>
	      				</div>
      				</a>
				</div>
				<div class="col s12 m6">
					<a href="/berat-ideal">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/bi.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>Aplikasi ini cocok buat kamu kamu yang belum tau berat ideal kamu dan cocok buat orang yang suka bulak balik ke timbangan</p>
					        </div>
	      				</div>
      				</a>
				</div>
			</div>

			<div class="row" style="margin-top: -20px;">
				<div class="col s12 m6">
					<a href="/alay-gen">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/ag.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>Aplikasi konversi dari kata biasa ke kata kata yang alay, cocok buat kamu yang lagi deketin gebetan tapi pingin nge kode tarik gak paruguh</p>
					        </div>
	      				</div>
      				</a>
				</div>
				<div class="col s12 m6">
					<a href="/test-ganteng">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/tg.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>Aplikasi ini cocok buat kamu kamu yang agak kepedean hidupnya dan kurang percaya diri sama kegantengan dan cantiknya</p>
					        </div>
	      				</div>
      				</a>
				</div>
			</div>
		</div>
	
{{-- <div id="fullpage">
	<div class="section bg-black">
		
		<div class="container intro">
			<div class="row" style="margin-top: -30px;">
				<div class="center white-text">
					<h1>My Web Apps</h1>
				</div>
			</div>
				
			<div class="row">
				<div class="col s12 m6">
					<a href="/quotes-generator">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/qg.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>I am a very simple card. I am good at containing small bits of information.
					          I am convenient because I require little markup to use effectively.</p>
					        </div>
	      				</div>
      				</a>
				</div>
				<div class="col s12 m6">
					<a href="/berat-ideal">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/bi.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>I am a very simple card. I am good at containing small bits of information.
					          I am convenient because I require little markup to use effectively.</p>
					        </div>
	      				</div>
      				</a>
				</div>
			</div>

			<div class="row" style="margin-top: -20px;">
				<div class="col s12 m6">
					<a href="/alay-gen">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/ag.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>I am a very simple card. I am good at containing small bits of information.
					          I am convenient because I require little markup to use effectively.</p>
					        </div>
	      				</div>
      				</a>
				</div>
				<div class="col s12 m6">
					<a href="/test-ganteng">
						<div class="card hoverable" style="border-radius: 10px;">
					        <div class="card-image">
					          <img src="/img/tg.jpg" style="border-radius: 10px 10px 0px 0px;">
					        </div>
					        <div class="card-content black-text">
					          <p>I am a very simple card. I am good at containing small bits of information.
					          I am convenient because I require little markup to use effectively.</p>
					        </div>
	      				</div>
      				</a>
				</div>
			</div>
		</div>
		
	</div>


	<div class="section">Some section</div>
	<div class="section">Some section</div>
	<div class="section">Some section</div>
</div> --}}

<script src="/js/materialize.min.js"></script>
{{-- <script src="/js/fullpage.min.js"></script>
<script src="/js/scrolloverflow.min.js"></script> --}}

{{-- <script>
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['Home', 'asd', '3rdPage', '4thPage'],
        // sectionsColor: ['#4A6FB1', '#939FAA', '#323539'],
        scrollOverflow: true,

        navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['firstSlide', 'secondSlide'],
    });
</script> --}}
</body>
</html>