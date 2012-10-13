function dayOfWeek() {
  var date=new Date();
  var days=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  document.write(days[date.getDay()]);
}