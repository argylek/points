function startTime() {
    var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();
    var mp = (m/60)*10;
    var mpr = Math.round(mp);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    document.getElementById('points').innerHTML =
    h + "." +  mpr;
    var t = setTimeout(startTime, 500);
    }
function checkTime(i) {
    if (i < 10) {i = "0" + i;
    }
    return i;
var timeControl = document.querySelector('input[type="time"]');
}