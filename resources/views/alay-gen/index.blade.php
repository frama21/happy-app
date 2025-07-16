<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alay Generator</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/icon.css">
    <link rel="stylesheet" href="/css/alay-gen/my.css">
    <link rel="icon" type="image/png" href="/favico.png">
  </head>

  <body>
    @php
      $file_content = 'db/a-g.txt';
      $clickcount = explode("\n", file_get_contents($file_content));
      foreach ($clickcount as $line) {
          $tmp = explode('||', $line);
          @$count[trim($tmp[0])] = trim($tmp[1]);
      }
    @endphp

    <div class="container p no">
      <div class="row">
        <div class="col s12 m12 center">
          <h3 style="font-family: 'Fugaz One', cursive;">AL4y G3nerat0r</h3>
          <div class="divider" style="background-color:#00000085;"></div>
        </div>
      </div>

      <div class="row">
        <div class="container p">
          <div class="p">
            <div class="col s12 m12">
              <div class="card z-depth-5 card-p" style="border-radius: 10px;">
                <form method="post">
                  <div class="load">
                    <div class="card-content black-text">
                      <div class="container" style="padding-top: 20px">
                        <div class="row">
                          <div class="col s12 m12">
                            <div class="input-field">
                              <i class="material-icons prefix">mode_edit</i>
                              <textarea id="icon_prefix2" class="materialize-textarea" name="text"></textarea>
                              <label for="icon_prefix2">Kata Kata</label>
                            </div>
                          </div>
                        </div>
                        @php
                          if (isset($_POST['submit'])) {
                              $asli = [
                                  'a',
                                  'b',
                                  'c',
                                  'd',
                                  'e',
                                  'f',
                                  'g',
                                  'h',
                                  'i',
                                  'j',
                                  'k',
                                  'l',
                                  'm',
                                  'n',
                                  'o',
                                  'p',
                                  'q',
                                  'r',
                                  's',
                                  't',
                                  'u',
                                  'v',
                                  'w',
                                  'x',
                                  'y',
                                  'z',
                              ];
                              $alay = [
                                  '4',
                                  '3',
                                  'C',
                                  'd)',
                                  '3',
                                  'F',
                                  '9',
                                  '(-)',
                                  '!',
                                  'J',
                                  'I<',
                                  'I_',
                                  '111',
                                  '11',
                                  '()',
                                  'P',
                                  'Q',
                                  '12',
                                  '5',
                                  '7',
                                  '(_)',
                                  '\/',
                                  'UU',
                                  'X',
                                  'Y',
                                  'Z',
                              ];
                              $text = $_POST['text'];
                              $kecil = strtolower($text);
                              $hasil = str_replace($asli, $alay, $kecil);
                        } @endphp <div class="row">
                          <div class="col s12 m12">
                            <div class="input-field">
                              <i class="material-icons prefix">chevron_right</i>
                              <textarea style="color:black !important;" class="materialize-textarea" id="hasil" disabled>@php echo @$hasil; @endphp</textarea>
                              <label for="icon_prefix2">Translate</label>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="card-action black-text" style="border-radius: 0px 0px 10px 10px;">
                    <a class="click-trigger pick btn-floating green waves-effect waves-light tooltipped"
                      data-click-id="click-002" data-clipboard-targets="#hasil" data-position="right"
                      data-tooltip="Copy to Clipboard" id="copy">
                      <i class="material-icons">content_copy</i>
                    </a>
                    <div class="right">
                      <button style="border-radius: 20px; background-color: #f7d108 !important;"
                        class="click-trigger btn waves-effect waves-teal" data-click-id="click-001" name="submit"
                        type="submit" id="quoteBtn" onClick="onClick()">Translate</button>
                    </div>
                  </div>
                </form>
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
              © Copyright 2018 <a href="https://www.instagram.com/frama21_" target="blank">Fajar Ramdani A</a><br>
              <b>Made with <del class="red-text">Love &#x2764;</del>, Keyboard &#x2328; !</b>
            </div>
          </div>
        </div>
      </div>

      <div class="row center">
        <div class="col s6 m6">
          <h4>Translate<br><a id="click-001" style="color: #FFD600;" class="click-count">@php echo $count['click-001']; @endphp</a></h4>
        </div>

        <div class="col s6 m6">
          <h4>Copied<br><a id="click-001" style="color: #FFD600;" class="click-count">@php echo $count['click-002']; @endphp</a></h4>
        </div>
      </div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/alay-gen/my.js"></script>
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker
          .register('service-worker.js')
          .then(function() {
            console.log('Service Worker Registered');
          });
      }
    </script>
  </body>

</html>
