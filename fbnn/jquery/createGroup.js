function pop(div) {
document.getElementById(div).style.display = 'block';
document.getElementById("popDiv2").style.display = 'block';
}
function hide(div) {
document.getElementById(div).style.display = 'none';
document.getElementById("popDiv2").style.display = 'none';
}
//To detect escape button
document.onkeydown = function(evt) {
evt = evt || window.event;
if (evt.keyCode == 27) {
hide('popDiv1');
hide('popDiv2');
}
};



