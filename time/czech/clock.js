function sklonuj(pocet, jeden, dva, vice) {
  if(pocet<1 || pocet>4) { return vice; }
  else if(pocet>1) { return dva; }
    else { return jeden; }
}
function casSlovne() {
  var datum = new Date;
  var hodiny = datum.getHours();
  var minuty = datum.getMinutes();
  var sekundy = datum.getSeconds();
  var vypis;
  Cas=document.getElementById("cas");
  
  vypis=hodiny+' '+sklonuj(hodiny,'hodina','hodiny','hodin')+' ';
  vypis=vypis+minuty+' '+sklonuj(minuty,'minuta','minuty','minut')+' ';
  vypis=vypis+sekundy+' '+sklonuj(sekundy,'sekunda','sekundy','sekund');
  
  Cas.innerText = vypis;
  setTimeout(function(){casSlovne()},1000);
}

