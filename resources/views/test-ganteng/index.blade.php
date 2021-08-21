<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test ganteng/Cantik</title>

  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/icon.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
  <style>
    .strip-bottom {
      background-color: #fa8e48;
      height: 8px;
    }

    body {
      background: url("/img/bgD.png") repeat;
    }
  </style>
</head>

<body>

  @php
  $file_content = 'db/t-g.txt';
  $clickcount = explode("\n", file_get_contents($file_content));
  foreach($clickcount as $line){
  $tmp = explode('||', $line);
  @$count[trim($tmp[0])] = trim($tmp[1]);
  }

  if(isset($_POST['ok'])){
  $a = rand(50,99);
  $nama = $_POST["nama"];
  $jk = @$_POST["jk"];
  @endphp

  <div class="container p no">
    <div class="row">
      <div class="col s12 m12 center">
        <h3 style="font-family: 'Baloo Tammudu', cursive; font-size: 50px; margin-top: 40px;">Test Ganteng/Cantik</h3>
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
                  if(empty($jk or $name)){
                  echo strtoupper("<strong>
                    <h4>Cek Kembali Formnya</h4>
                  </strong>");
                  }else{
                  @endphp

                  @php
                  $handle = fopen("db/t-g.txt", "r");
                  if(!$file_content){
                  echo "could not open the file" ;
                  }else{
                  $counter = (int) fread ($handle,50);
                  fclose ($handle);
                  $counter = 1;
                  $result = $count['click-001'] + $counter++;
                  $n = "click-001||" . $result;

                  $handle = fopen("db/t-g.txt", "w" );
                  fwrite($handle, $n, 40);
                  fclose ($handle);
                  }
                  @endphp

                  <h4>
                    Hai @php echo strtoupper($nama); @endphp
                  </h4>

                  <h5>
                    Hitungan
                    <!--SELECT JENIS KELAMIN-->
                    @php
                    if($jk == "l"){
                    echo "ketampanan anda adalah";

                    }else if($jk == "p"){
                    echo "kecantikan anda adalah";

                    }else if($jk =="g"){
                    echo "kamu itu...";
                    echo "<h4>Aku tidak tau, apa mungkin kamu makhluk asing? <br>
                      tapi aku bisa menilai kok.... kamu itu</h4>";
                    }
                    @endphp
                  </h5>

                  <h3>
                    <b>
                      @php echo $a; @endphp/100%
                    </b>
                  </h3>
                </div>
                <div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
                  <a href="/test-ganteng" style="border-radius: 20px; background-color: #fa8e48 !important;"
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
  @php
  }
  @endphp
  <!--END TAMPIL DAN REPEAT KE HALAMAN INDEX-->
  @php
  }else{
  @endphp

  <div class="container p no">
    <div class="row">
      <div class="col s12 m12 center">
        <h3 style="font-family: 'Baloo Tammudu', cursive; font-size: 50px; margin-top: 40px;">Test Ganteng/Cantik</h3>
        <div class="divider" style="background-color:#00000085;"></div>
      </div>
    </div>

    <div class="row">
      <div class="container p">
        <div class="p">
          <div class="col s12 m12">
            <div class="card z-depth-5 card-p" style="border-radius: 10px;">
              <form method="post" id="myForm">
                <div class="progress" style="display:none; border-radius: 10px 10px 0px 0px; width: 100%;">
                  <div class="indeterminate" style="background-color: #4db151;"></div>
                </div>
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
                        <option value="l" data-icon="/img/male.jpg">Pria</option>
                        <option value="p" data-icon="/img/female.jpg">Wanita</option>
                        <option value="g" data-icon="/img/unknown.jpg">Ganda</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
                  <button style="border-radius: 20px; background-color: #fa8e48 !important;" id="sub-click"
                    class="click-trigger btn waves-effect waves-blue" data-click-id="click-001" name="ok"
                    type="submit">Cekidot</button>
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
      <h4>Total di cek<br><a style="color: #fa8e48;" id="click-001" class="click-count">@php echo
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