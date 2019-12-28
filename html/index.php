<html>
<head>
<title>Hacktor Space Agency</title>

<script src="/js/jquery-latest.js"></script>
<script src="/js/functions.js"></script>
</head>

<body bgcolor="white" text="black">

<h3>Welcome to HackTor Space Agency!</h3>
<!--
<a href="/cgi-bin/on.cgi">Click here to switch LED ON</a><br />
<a href="/cgi-bin/off.cgi">Click here to switch LED OFF</a><br />
-->

<table>
<tr><td style="font-weight:bold">External Sensors</td><td></td><td style="font-weight:bold">System Statistics</td></tr>
<tr><td style="vertical-align:top">
<div id="sensorresults">
    <table><tr><td>Temperature:</td><td align=right>N/A</td><td>Celsius</td></tr>
    <tr><td>Pressure:</td><td align=right>N/A</td><td>milliBar</td></tr>
    <tr><td>Altitude:</td><td align=right>N/A</td><td>Meter</td></tr></table>
</div>
<input type="button" value="Calibrate Altitude to zero" onclick="calibrate();" />
</td><td><img src=/img/spacepirat.png></td><td style="vertical-align:top">
<div id="memory">
    <table><tr><td>N/A total memory</td></tr>
    <tr><td>N/A used memory</td></tr>
    <tr><td>N/A free memory</td></tr>
    <tr><td></td></tr>
    <tr><tr><td>Load avg: N/A</td></tr>
    <tr><td>Uptime: N/A</td></tr></table>
</div>
</td></tr>
<tr><td></td><td><form action="/restricted/"></form></td><td></td></tr>
</table>

<table>
<tr>
	<td><input type="button" value="Set launch name" onclick="setlaunchname();" /></td>
	<td><input type=text name=launchname value="Hacktor-Test" id=launchname /></td>
<tr>
	<td><input type="button" value="Start recording sensor data " onclick="recordstart();" /></td>
	<td><input type=text name=seconds value=180 id=seconds /> seconds</td>
</tr>
<tr>
	<td><input type="button" value="Stop recording sensor data" onclick="recordstop();" /></td>
	<td><input type="button" value="Show graph (experimental)" onclick="showgraph();" /></td>
</tr>
<tr><td colspan=2><div id="recordonoff"></div></td></tr>
<tr><td colspan=2><div id="launchnameset"></div></td></tr>
</table>

<br />
Live from onboard camera
<br />
<img id='motion' src="/motion/" width=640 height=480 onError="this.onerror=null;this.src='img/landedrocket2.jpg';">
<br />
<div id="graph"></div>

</body>
</html>
