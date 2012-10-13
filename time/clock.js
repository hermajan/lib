function time() {
  var date = new Date;
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();
  var print;
  Time=document.getElementById("time");
  
  if(hours<10) { print="0"+hours; }
  else { print=hours; }

  print=print+":";

  if(minutes<10) { print=print+"0"+minutes; }
  else { print=print+minutes; }

  print=print+":";

  if(seconds<10) { print=print+"0"+seconds; }
  else { print=print+seconds; }
  
  Time.innerText = print;
  setTimeout(function(){time()},1000);
}