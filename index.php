<html>
<head>
<title>Loz 'Bey v11 To v12</title>
<style>
body {
    background-color: #000000;
    background-image: url(https://i.resmim.net/5cFXR.gif);
}

    a {
     text-decoration: none;
     color: blue;
    font-family: fantasy;
    }
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {
  background-color: #008CBA; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #ffff56;} /* Sarı */ 
.button5 {background-color: #555555;} /* Black */

textarea#lozbey2 {
        width: 500px;
        height: 300px;
  border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
}
.baslik {
    position: absolute;
    left: 46%;
    top: 250px;
}
.lozsol {
    position: absolute;
    left: 53%;
    top: 340px;
}
.lozsag {
    position: absolute;
    right: 53%;
    top: 350px;
}
.p1 {
font-family: Garamond, serif;
}

.p2 {
  font-family: Arial, Helvetica, sans-serif;
}

.p3 {
  font-family: "Lucida Console", "Courier New", monospace;
}

pre.source-code {
    font-family: Andale Mono, Lucida Console, Monaco, fixed, monospace;
    color: #080c4f;
    font-size: 12px;
    line-height: 14px;

        width: 500px;
        height: 275px;
  border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
}

pre {
    -webkit-user-select: text;
    -khtml-user-select: text;
    -moz-user-select: text;
    -ms-user-select: text;
    user-select: text;
    white-space: pre;
    word-wrap: break-word;
    overflow: auto;
	
}
giaunselectable, blockquote, pre, code {
    -webkit-user-select: text;
    -khtml-user-select: text;
    -moz-user-select: text;
    -ms-user-select: text;
    user-select: text;
}
</style>

<div style="position: fixed; top: 75px; left: -225px; width: 600px; padding: 10px; font-size: 24px; text-align: center; color: rgb(255, 255, 255); font-family: 'trebuchet ms', verdana, arial, sans-serif;transform: rotate(-45deg);transform-origin: 50% 0px;-o-transform: rotate(-45deg); -o-transform-origin: 50% 0px;-moz-transform: rotate(-45deg); -moz-transform-origin: 50% 0px; -webkit-transform: rotate(-45deg); -webkit-transform-origin: 50% 0px; background-color: rgb(0, 0, 0); border: 1px solid rgb(170, 170, 170); z-index: 9999; opacity: 0.5;">
Developer <font color="red"> Loz 'Bey</font>
</div>
<center><br><br>
<img src="https://i.pinimg.com/originals/59/78/aa/5978aaab169f88d8a711a10cde2084d0.gif">
</center>
</head>

<body>
<div class="baslik">
<center><font color="white"><h1><p><h3>
	Merhaba <span id="word"></span>
</h3></p></h1></font></center>
</div>
<div class="lozsol">
<div id="div_1">
<pre class="source-code"><code><span id="lozbey" style="color: teal;"><?php if($_POST){echo $_POST["talep"];}?></span>
    </div>
</code></pre>
<center>
<button onclick="loz()" class="button2">Çevir</button>
<button onclick="kopyala()" class="button2"><a id="div_1" href="#" name="copy_pre">Kopyala</a></button>
</div>
</center>
<script>
function loz() {
  var str = document.getElementById("lozbey").innerHTML.split("channels.get").join("channels.cache.get").split("members.get").join("members.cache.get").split("createRole").join("roles.create").split("createChannel").join("channels.create").split("roles.get").join("roles.cache.get").split("users.get").join("users.cache.get").split("guilds.get").join("guilds.cache.get").split("addRole").join("roles.add").split("removeRole").join("roles.remove").split("users.exists").join("users.cache.some").split("channels.exists").join("channels.cache.some").split("roles.find").join("roles.cache.find").split("channels.find").join("channels.cache.find").split("users.find").join("users.cache.find").split("RichEmbed").join("MessageEmbed").split("fetchUser").join("users.fetch").split("fetchMember").join("users.members").split("fetchMessage").join("users.messages").split("fetchPinnedMessages").join("messages.fetchPinned").split("sendMessage").join("send").split("sendEmbed").join("send").split("sendCode").join("send").split("sendFile").join("send").split("sendFiles").join("send").split("setRoles").join("roles.set").split("colorRole").join("roles.color").split("highestRole").join("roles.highest").split("hoistRole").join("roles.hoist").split("avatarURL").join("avatarURL()").split("displayAvatarURL").join("displayAvatarURL()").split("iconURL").join("iconURL()").split("splashURL").join("splashURL()").split("playFile").join("play").split("playStream").join("play").split("playArbitraryInput").join("play").split("playBroadcast").join("play").split("playOpusStream").join("play").split("playConvertedStream").join("play").split("dispatcher.end()").join("dispatcher.destroy()").split("createVoiceBroadcast").join("voice.createBroadcast").split("broadcast.dispatchers").join("broadcast.subscribers").split("forEach").join("cache.forEach").split("client.ping").join("client.ws.ping").split("const avatarURL()").join("const avatarURL").split("let avatarURL()").join("let avatarURL").split("var avatarURL()").join("var avatarURL").split("var displayAvatarURL()").join("var displayAvatarURL").split("const displayAvatarURL()").join("const displayAvatarURL").split("let displayAvatarURL()").join("let displayAvatarURL").split("var iconURL()").join("var iconURL").split("const iconURL()").join("const iconURL").split("let iconURL()").join("let iconURL").split("var splashURL()").join("var splashURL").split("const splashURL()").join("const splashURL").split("let splashURL()").join("let splashURL");
  var res = str.replaceAll();
  document.getElementById("lozbey").innerHTML = '// LozBey Tarafından Çevrilmiştir. <br>' + res;
}
function aktar(e){
   document.getElementById('lozbey').innerHTML = e.onFilterTextInput
}
function kopyala() {
  var copyText = document.getElementById("lozbey");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script >
$(document).ready(function(){
	$("a[name=copy_pre]").click(function() {
		var id = $(this).attr('id');
		var el = document.getElementById(id);
		var range = document.createRange();
		range.selectNodeContents(el);
		var sel = window.getSelection();
		sel.removeAllRanges();
		sel.addRange(range);
		document.execCommand('copy');
		return false;
	});
});
</script>
    <center>
	<div class="lozsag">

	<form name="form1" action="" method="POST">
        <textarea id="lozbey2" name="talep" placeholder="Buraya v11 Kodlarınızı Yapıştırıp Aktara Basınız." required></textarea>
        <br><br>
        <input type="submit" name="gonder" class="button" value="Aktar">
        </form>
	</div>
		</center>
</body>
<footer>
<footer id="det" style="position:fixed; 

left:0px; right:0px; bottom:0px; background:#000000; text-align:center; border-top: 1px solid 

#FFFFFF ; border-bottom: 1px solid white "><font color="white">Copyright ©2000 - 2021 | Developer @Loz 'Bey &amp; @BAYRAq
</font><br></footer>
</html>
<script>
    const words = ['Discord', 'v12', 'Dönüştürücüye', 'Hoşgeldin'];
    let word = document.getElementById('word');
    let seconds = 1000;
    let i = 0;
    setInterval(() => {
        if (i == words.length) i = 0;
        word.innerHTML = words[i];
        i++;
    }, seconds);
</script>
