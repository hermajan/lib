function declension(count,one,more) {
  if(count==1) { return one; }
  else { return more; }
}

function timeWords() {
  var date = new Date;
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();
  var print;
  Time=document.getElementById("time");
  
  print=hours+' '+declension(hours,'hour','hours')+' ';
  print=print+minutes+' '+declension(minutes,'minute','minutes')+' ';
  print=print+seconds+' '+declension(seconds,'second','seconds');
  
  Time.innerText = print;
  setTimeout(function(){timeWords()},1000);
}