<script>
function playSound () {
    document.getElementById('play').play();
}
</script>
<div>
<h1>Customer Support</h1>
<p>Having Problems with your purchase? No Problem! <br>
You can leave us a message in the field below or call our <br>
Customer Support Toll-Free number: +91 45 6584 1937
</div>
<p>Please select your issue below:</p>
<select>
<option>Invalid Key, You are scam!</option>
<option>Problem with installation</option>
<option>Trojan horse detected :(</option>
<option>Chunguscoin is not showing value.</option>
</select>
<div>
<input type="text" placeholder="Write your message here..." style="height:170px; width:400px;">
<audio id="play" src="../assests/sounds/Big chungus - original clip.mp3"></audio>
<input type="submit" onclick="playSound()">
</div>
<div id="pic_border">
<img id="support_pic" src="../assests/imgs/2_ohMC30wCR_gMzmxiUxnDCQ.jpeg">
</div>