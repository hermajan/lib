function schovej(idecko) {
	element=document.getElementById(idecko).style;
	element.display=(element.display == 'block')?'none':'block';
}

function smazat(kam,co) {
  otazka=confirm("Opravdu chcete smazat "+co+"?");
  if(otazka==true){
    window.location.href=kam;
  }
}
