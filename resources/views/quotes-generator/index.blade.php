<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Quotes for your Everyday Brighter and Motivational">
	<meta name="keywords" content="Quotes, Quotes Generator, Clipboard Quotes, Quotes Maker, Famous Quotes">
	<meta name="author" content="Fajar Ramdani A">
	<meta name="application-name" content="Quotes Generator">

	<link rel="manifest" href="manifest.json">
	<link rel="icon" type="image/png" href="/favico.png">
	<meta name="theme-color" content="#29b6f6" />

	<title>Quotes Generator</title>

	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="/css/icon.css">
	<link rel="stylesheet" href="/css/quotes-gen/my.css">

	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96577269-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-96577269-2');
	</script>
</head>

<body>

	@php
	$file_content = 'db/q-g.txt';
	$clickcount = explode("\n", file_get_contents($file_content));
	foreach($clickcount as $line){
	$tmp = explode('||', $line);
	@$count[trim($tmp[0])] = trim($tmp[1]);
	}
	@endphp

	<div class="container p no">
		<div class="row">
			<div class="col s12 m12 center">
				<h3 style="font-family: 'Fugaz One', cursive;">Quotes Generator</h3>
				<div class="divider" style="background-color:#00000085;"></div>
			</div>
		</div>

		<div class="row">
			<div class="container p">
				<div class="container p">
					<div class="col s12 m12">
						<div class="card z-depth-5 card-p" style="border-radius: 10px;">
							<div class="progress"
								style="border-radius: 10px 10px 0px 0px; width: 98%; margin-left: 4px;">
								<div class="indeterminate" style="background-color: #2295f4;"></div>
							</div>

							<div class="load">
								<div class="card-content black-text">
									<blockquote id="quote" style="border-radius: 5px;"></blockquote>
									<p id="author"></p>
								</div>
							</div>

							<div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
								<button
									class="click-trigger pick btn-floating green waves-effect waves-light tooltipped"
									data-click-id="click-002" data-clipboard-targets="#quote,#author"
									data-position="right" data-tooltip="Copy to Clipboard" id="copy">
									<i class="material-icons">content_copy</i>
								</button>
								<div class="right">
									<button style="border-radius: 20px;"
										class="click-trigger btn blue waves-effect waves-blue" data-click-id="click-001"
										type="button" id="quoteBtn" onClick="onClick()">Generate</button>
								</div>
							</div>
							<div class="strip-bottom" style="border-radius: 0px 0px 20px 20px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col s12 m12">
				<div class="footer-copyright center">
					<div class="container">
						© Copyright 2018 <a href="https://www.instagram.com/frama21_" target="blank">Fajar Ramdani
							A</a><br>
						<b>Made with <del class="red-text">Love &#x2764;</del>, Keyboard &#x2328; !</b>
					</div>
				</div>
			</div>
		</div>

		<div class="row center">
			<div class="col s6 m6">
				<h4>Quotes Generate<br><a id="click-001" class="click-count">@php echo $count['click-001'];@endphp</a>
				</h4>
			</div>
			<div class="col s6 m6">
				<h4>Quotes Copied<br><a id="click-002" class="click-count">@php echo $count['click-002'];@endphp</a>
				</h4>
			</div>
		</div>
	</div>

	<script src="/js/materialize.min.js"></script>
	<script src="/js/quotes-gen/my.js"></script>
	<script>
		if ('serviceWorker' in navigator) {
    	navigator.serviceWorker
       	.register('service-worker.js')
        .then(function() { console.log('Service Worker Registered'); });
  	}
	</script>
</body>

</html>