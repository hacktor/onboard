function calibrate() {
  var request = $.ajax({
    url: "/dancer/calibrate",
    type: "GET",      
    dataType: "html"
  });
}

function refresh_sensors() {
  $('#sensorresults').load("/dancer/sensors");
}
 setInterval('refresh_sensors()', 2000); // refresh div after 2 secs

function refresh_memory() {
  $('#memory').load("/dancer/memory");
}
 setInterval('refresh_memory()', 5000); // refresh div after 5 secs

function showgraph() {
  launchname = document.getElementById('launchname').value;
  seconds = document.getElementById('seconds').value;
  $('#graph').load("/dancer/graph/" + launchname + "?seconds=" + seconds);
}

function setlaunchname() {
  launchname = document.getElementById('launchname').value;
  $('#launchnameset').load("/dancer/record/launchname?name=" + launchname);
}

function sensoroff() {
  document.getElementById("recordonoff").innerHTML = "Sensor recording OFF"
}

function recordstart() {
  seconds = document.getElementById('seconds').value;
  var request = $.ajax({
    url: "/dancer/record/start?seconds=" + seconds,
    datatype: "html"
  });
  document.getElementById("recordonoff").innerHTML = "Sensor recording ON";
  setTimeout(sensoroff, seconds * 1000)
}

function recordstop() {
  var request = $.ajax({
    url: "/dancer/record/stop",
    type: "GET",
    dataType: "html"
  });
  document.getElementById("recordonoff").innerHTML = "Sensor recording OFF";
  setTimeout(function(){ document.getElementById("motion").src="/motion/" + new Date().getTime(); },3000)
}
