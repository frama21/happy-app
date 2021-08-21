<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Berat Badan Ideal</title>

	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="/css/icon.css">
	<link rel="icon" type="image/png" href="/favico.png">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<style>
		body {
			background: url("/img/bgD.png") repeat;
		}

		.strip-bottom {
			background-color: #4db151;
			height: 8px;
		}
	</style>
</head>

<body>

	@php
	$file_content = 'db/b-i.txt';
	$clickcount = explode("\n", file_get_contents($file_content));
	foreach($clickcount as $line){
	$tmp = explode('||', $line);
	@$count[trim($tmp[0])] = trim($tmp[1]);
	}

	if(isset($_POST['ok'])){
	$nama = $_POST["nama"];
	$jk = @$_POST["jk"];
	$tinggi = $_POST["tinggi"];
	$berat = $_POST["berat"];
	@endphp

	<div class="container p no">
		<div class="row">
			<div class="col s12 m12 center">
				<h3 style="font-family: 'Fredoka One', cursive;">Berat Badan Ideal</h3>
				<div class="divider" style="background-color:#00000085;"></div>
			</div>
		</div>

		<div class="row">
			<div class="container p">
				<div class="p">
					<div class="col s12 m12">
						<div class="card z-depth-5 card-p" style="border-radius: 10px;">
							<div class="load">
								<div class="card-content black-text">

									@php
									if(empty($nama or $jk or $tinggi or $berat)){
									echo strtoupper("<strong>
										<h4>Cek Kembali Formnya<h4>
									</strong>");
									}else{
									@endphp

									@php
									$handle = fopen("db/b-i.txt", "r");
									if(!$file_content){
									echo "could not open the file" ;
									}else{
									$counter = (int) fread ($handle,50);
									fclose ($handle);
									$counter = 1;
									$result = $count['click-001'] + $counter++;
									$n = "click-001||" . $result;

									$handle = fopen("db/b-i.txt", "w" );
									fwrite($handle, $n, 40);
									fclose ($handle);
									}
									@endphp

									<h3>
										Hai @php echo strtoupper($nama); @endphp
									</h3>

									<h5>
										Hitungan
										@php
										if($jk == "p"){
										$bbideal = ($tinggi-100)-(10/100*($tinggi-100));

										echo "Berat Badan Ideal anda adalah :";

										}else if($jk == "w"){
										$bbideal = ($tinggi-100)-(15/100*($tinggi-100));

										echo "Berat Badan Ideal anda Adalah : ";
										}
										@endphp
									</h5>

									<h5>
										@php
										if(empty($bbideal))
										{
										echo strtoupper("<strong>
											<h4>Cek Kembali Formnya<h4>
										</strong>");

										}else{
										echo "<br> Tinggi Badan : $tinggi CM <br>";
										echo "Berat Badan : $berat KG <br>";
										echo "Berat Badan Ideal anda : $bbideal KG <br>";

										if($berat < $bbideal) { echo "Anda Kurang Ideal" ; } else if($berat> $bbideal)
											{
											echo "Anda Idealnya Kelebihan";
											}
											else
											{
											echo "Berat Badan Anda Ideal";
											}
											}
											}
											@endphp
									</h5>

								</div>

								<div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
									<a href="/berat-ideal" style="border-radius: 20px;"
										class="btn green waves-effect waves-blue" onclick="backForm()">Back</a>
								</div>
								<div class="strip-bottom" style="border-radius: 0px 0px 20px 20px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--END TAMPIL DAN REPEAT KE HALAMAN INDEX-->
	@php } else { @endphp


	<div class="container p no">
		<div class="row">
			<div class="col s12 m12 center">
				<h3 style="font-family: 'Fredoka One', cursive;">Berat Badan Ideal</h3>
				<div class="divider" style="background-color:#00000085;"></div>
			</div>
		</div>

		<div class="row">
			<div class="container p">
				<div class="p">
					<div class="col s12 m12">
						<div class="card z-depth-5 card-p" style="border-radius: 10px;">
							<form method="post" id="myForm">

								<div class="progress"
									style="display:none; border-radius: 10px 10px 0px 0px; width: 100%;">
									<div class="indeterminate" style="background-color: #4db151;"></div>
								</div>

								<div class="">
									<div class="card-content black-text">

										<div class="row">
											<input type="hidden" name="id" value="1">

											<div class="input-field col s12 m6">
												<i class="material-icons prefix">account_circle</i>
												<input id="nama" type="text" name="nama" class="validate" required>
												<label for="nama">Nama</label>
											</div>
											<div class="input-field col s12 m6">
												<i class="material-icons prefix">wc</i>
												<select id="jk" class="icons" name="jk" required>
													<option value="" disabled selected>Jenis Kelamin</option>
													<option value="p" data-icon="/img/male.jpg">Pria</option>
													<option value="w" data-icon="/img/female.jpg">Wanita</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="input-field col s12 m6">
												<i class="material-icons prefix">accessibility</i>
												<input id="tinggi" type="text" type="text" name="tinggi"
													class="validate" required>
												<label for="tinggi">Tinggi Badan</label>
											</div>
											<div class="input-field col s12 m6">
												<i class="material-icons prefix">poll</i>
												<input id="berat" type="text" name="berat" class="validate" required>
												<label for="berat">Berat Badan</label>
											</div>
										</div>
									</div>
								</div>

								<div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
									<button style="display: none;"
										class="click-trigger pick btn-floating green waves-effect waves-light tooltipped"
										data-click-id="click-002" data-clipboard-targets="#quote,#author"
										data-position="right" data-tooltip="Copy to Clipboard" id="copy">
										<i class="material-icons">content_copy</i>
									</button>
									<div class="">
										<button style="border-radius: 20px;" id="sub-click"
											class="click-trigger btn green waves-effect waves-blue"
											data-click-id="click-001" name="ok" type="submit">Cekidot</button>
									</div>
								</div>
							</form>
							<div class="strip-bottom" style="border-radius: 0px 0px 20px 20px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	@php } @endphp

	<div class="row">
		<div class="col s12 m12">
			<div class="footer-copyright center">
				<div class="container">
					© Copyright 2018 <a href="https://www.instagram.com/frama21_" target="blank">Fajar Ramdani A</a><br>
					<b>Made with <del class="red-text">Love &#x2764;</del>, Keyboard &#x2328; !</b>
				</div>
			</div>
		</div>
	</div>

	<div class="row center">
		<div class="col s12 m12">
			<h4>Total di cek<br><a style="color: #4db151;" id="click-001" class="click-count">@php echo
					$count['click-001'];@endphp</a></h4>
		</div>
	</div>

	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
   			$('select').formSelect();
  		});
	</script>
</body>

</html>