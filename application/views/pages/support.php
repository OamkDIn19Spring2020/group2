<script>
function playSound () {
    document.getElementById('play').play();
    var mess = document.getElementById("mess_box");
    var button = document.getElementById('submit_button');
    var list = document.getElementById('suppfunc');
    list.remove();
    button.remove();
    mess.remove();
    document.getElementById("sent_text").innerHTML = "Your message has been sent.";
}

</script>
<div id="center">

<div id="supptext">
<div>

<h1>Customer Support</h1>
<p>Having Problems with your purchase? No Problem! <br>
You can leave us a message in the field below or call our <br>
Customer Support Toll-Free number: +91 45 6584 1937
<div id="suppfunc">

<p>Please select your issue below:</p>
<select>
<option>Invalid Key, You are scam!</option>
<option>Problem with installation</option>
<option>Trojan horse detected :(</option>
<option>Chunguscoin is not showing value.</option>

</select>
</div>
<div id="text_box">
<input id="mess_box" type="text" placeholder="Write your message here..." style="height:170px; width:400px;">
<audio id="play" src="../assests/sounds/Big chungus - original clip.mp3"></audio>
<input id ="submit_button" type="submit"  onclick="playSound()">
<p id="sent_text"></p>
</div>
</div>
<div id="pic_border">
    <img id="support_pic" src="../assests/imgs/2_ohMC30wCR_gMzmxiUxnDCQ.jpeg">
</div>
</div>
</div>
