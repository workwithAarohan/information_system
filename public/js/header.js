jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })
});


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