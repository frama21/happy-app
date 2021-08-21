$(document).ready(function () {
  var clicks = document.querySelectorAll(".click-trigger"); // IE8
  for (var i = 0; i < clicks.length; i++) {
    clicks[i].onclick = function () {
      var id = this.getAttribute("data-click-id");
      var post = "id=" + id; // post string
      var req = new XMLHttpRequest();
      req.open("POST", "/alay-gen/counter", true);
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
});
