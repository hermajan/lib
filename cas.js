function sklonuj(pocet, jeden, dva, vice) {
  if(pocet<1 || pocet>4) { return vice; }
  else if(pocet>1) { return dva; }
    else { return jeden; }
}

function cas(typ) {
  var datum = new Date;
  var hodiny = datum.getHours();
  var minuty = datum.getMinutes();
  var sekundy = datum.getSeconds();
  var vypis;
  Cas=document.getElementById("cas");
  
  switch(typ) {
    case 1:
      vypis=hodiny+' '+sklonuj(hodiny,'hodina','hodiny','hodin')+' ';
      vypis=vypis+minuty+' '+sklonuj(minuty,'minuta','minuty','minut')+' ';
      vypis=vypis+sekundy+' '+sklonuj(sekundy,'sekunda','sekundy','sekund');
    break;

    default:
      if(hodiny<10) { vypis="0"+hodiny; }
      else { vypis=hodiny; }

      vypis=vypis+":";

      if(minuty<10) { vypis=vypis+"0"+minuty; }
      else { vypis=vypis+minuty; }

      vypis=vypis+":";

      if(sekundy<10) { vypis=vypis+"0"+sekundy; }
      else { vypis=vypis+sekundy; }
  }
  
  Cas.innerText = vypis;
  setTimeout(function(){cas(typ)},1000);
}
