
var today = new Date();
var day = today.getDay();
var daylist = ["Sun","Mon","Tue","Wed ","Thur","Fri","Sat"];
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var dateDay = date+','+daylist[day];


document.getElementById("displayDate").innerHTML = dateDay;

  timer();

  function timer(){
  var currentTime = new Date()
  var hours = currentTime.getHours()
  var minutes = currentTime.getMinutes()
  var sec = currentTime.getSeconds()
  if (minutes < 10){
      minutes = "0" + minutes
  }
  if (sec < 10){
      sec = "0" + sec
  }
  var t_str = hours + ":" + minutes + ":" + sec + " ";
  if(hours > 11){
      t_str += "PM";
  } else {
  t_str += "AM";
  }
  document.getElementById('time_span').innerHTML = t_str;
  setTimeout(timer,1000);
  }

