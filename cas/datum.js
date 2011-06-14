function denVtydnu() {
  var datum=new Date(); // aktuální datum
  var dny=new Array("neděle","pondělí","úterý","středa","čtvrtek","pátek","sobota");
  document.write(dny[datum.getDay()]);
}
function datum() {
  var datum=new Date(); // aktuální datum
  document.write(datum.getDate()+"."+(datum.getMonth()+1)+"."+datum.getFullYear()); //měsíce jsou číslovány od nuly
}