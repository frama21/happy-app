$(document).ready(function () {
  var clicks = document.querySelectorAll(".click-trigger"); // IE8
  for (var i = 0; i < clicks.length; i++) {
    clicks[i].onclick = function () {
      var id = this.getAttribute("data-click-id");
      var post = "id=" + id; // post string
      var req = new XMLHttpRequest();
      req.open("POST", "/quotes-generator/counter", true);
      req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      req.onreadystatechange = function () {
        if (req.readyState != 4 || req.status != 200) return;
        document.getElementById(id).innerHTML = req.responseText;
      };
      req.send(post);
    };
  }

  $(".tooltipped").tooltip();

  $("#copy").on("click", function () {
    M.toast({ html: "Copied" });
  });

  new ClipboardJS(".pick", {
    text: function (trigger) {
      var targets = $(trigger).data("clipboard-targets");
      targets = targets.split(",");
      var copyString = "";
      var qtd = targets.length;
      for (var i = 0; i < qtd; i++) {
        copyString += " " + $(targets[i]).text();
      }
      return copyString;
    }
  });

  var quote;
  var author;

  function getNewQuote() {
    $.ajax({
      url: "https://api.forismatic.com/api/1.0/",
      jsonp: "jsonp",
      dataType: "jsonp",
      data: {
        method: "getQuote",
        lang: "en",
        format: "jsonp"
      },
      success: function (response) {
        $("#load").fadeOut(700);
        quote = response.quoteText;
        author = response.quoteAuthor;
        $("#quote").text(quote).fadeIn(1000);

        if (author) {
          $("#author")
            .text("- " + author)
            .fadeIn(3500);
        } else {
          $("#author").text("- unknown").fadeIn(3500);
        }

        M.toast({ html: "Quotes Generate" });
      }
    });
  }

  $(document).ajaxStart(function () {
    $(".progress").css("display", "block");
  });
  $(document).ajaxComplete(function () {
    $(".progress").css("display", "none");
  });

  getNewQuote();

  $("#quoteBtn").on("click", function () {
    getNewQuote();
    $("#quote, #author").fadeOut(100);
  });
});
