function startTimer(duration, display) {
   var min= 15;
var time = setInterval(myTimer, 1000);

function myTimer() {
    document.getElementById('timer').innerHTML = sec + "sec left";
    min--;
    if (sec == -1) {
        clearInterval(time);
        alert("Time out!! ");
    }


       
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};