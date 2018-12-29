<div id="server-status">
<center><h2>Crafters.ga</h2></center>
	Status: <strong id="server-online"><span id="red">Offline</span></strong><br>
	Gracze: <strong id="players">0</strong>/<strong>70</strong> <br>
	<div class="progress">
		<div class="progress-bar progress-bar-success progress-bar-striped active" id="players-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="25" style="width:0%"></div>
	</div>
</div>
<div>
	Głosy: <strong id="votes">Błąd!</strong>
	<a href="https://lsmc.pl/server/20"> 
		<center><h4>Zaglosuj już teraz!</h4></center>
	</a>
</div>

<script>
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("players").innerHTML = myObj.status.onlinePlayers;
		document.getElementById("server-online").innerHTML = myObj.status.type ? '<span id="green">Online</span>' : '<span id="red">Offline</span>';
		document.getElementById("players-bar").style.width = myObj.status.onlinePlayers * 4 + "%";
    }
};
xmlhttp.open("GET", "https://lsmc.pl/api/server/20", true);
xmlhttp.send();

</script>
<script>
var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj1 = JSON.parse(this.responseText);
        document.getElementById("votes").innerHTML = myObj1.votes;
    }
};
xmlhttp.open("GET", "https://lsmc.pl/api/server/20", true);
xmlhttp.send();
</script>