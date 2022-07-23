function atualizaOdomVtr(str) {
  if (str == "") {
    document.getElementById("odomentr").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("odomentr").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getvtrkm.php?idvtr="+str,true);
    xmlhttp.send();
  }
}
