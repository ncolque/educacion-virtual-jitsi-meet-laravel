var btn = document.getElementById("submit");

(window.onload = function () {
  window.addEventListener(
    "keypress",
    function (e) {
      if (e.keyCode == "13") {
        authorize();
      }
    },
    false
  );
}),
  function authorize() {
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
    usuario = usuario.toLowerCase();

    if (usuario.substr(0, 6) !== "admin:") {
      return deny();
    } else {
      usuario = usuario.substring(6);
      usuario = usuario.replace("", "");
      console.log(usuario);
      return authorized();
    }
  };

function deny() {
  console.log("Acceso Denegado");
}

function authorized() {
  location.assign("./panel.html");
}
