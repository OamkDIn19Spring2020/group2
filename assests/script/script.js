function playSound () {
    document.getElementById('play').play();
    let mess = document.getElementById("mess_box");
    let button = document.getElementById('submit_button');
    button.remove();
    mess.remove();
    document.getElementById("sent_text").innerHTML = "Your message has been sent.";
}
