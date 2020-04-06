<!--<script>
function playSound () {
    document.getElementById('play').play();
   /* var mess = document.getElementById("mess_box");
    var button = document.getElementById('submit_button');
    var list = document.getElementById('suppfunc');
    list.remove();
    button.remove();
    mess.remove();*/
    var form = document.getElementById('form');
    form.remove();
    document.getElementById("sent_text").innerHTML = "Your message has been sent.";
}

</script>!-->
<div id="center">

<div id="supptext">
<div>

<h1>Customer Support</h1>
<p>Having Problems with your purchase? No Problem! <br>
You can leave us a message in the field below or call our <br>
Customer Support Toll-Free number: +91 45 6584 1937
<div id="suppfunc">

<p>Please select your issue below:</p>
<form id ="form" action="<?php echo site_url("Support_c/content") ?>" method="post">
<select name="options">
<option>Invalid Key, You are scam!</option>
<option>Problem with installation</option>
<option>Trojan horse detected :(</option>
<option>Chunguscoin is not showing value.</option>
<option>Other...</option>
</select>
</div>
<div id="text_box">
<?php $this->load->helper('form'); ?>

<?php echo form_error('message')?>
<input id="mess_box" type="text" name="message" placeholder="Write your message here..." style="height:170px; width:400px;">
<audio id="play" src="../assests/sounds/Big chungus - original clip.mp3"></audio>
<input id ="submit_button" type="submit"  onclick="playSound()">
<p id="sent_text"></p>
</div>
</form>
</div>
<div id="pic_border">
    <img id="support_pic" src="../assests/imgs/2_ohMC30wCR_gMzmxiUxnDCQ.jpeg">
</div>
</div>
</div>
