<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLAMES game</title>
</head>
<body style="text-align:center;background:linear-gradient(to right,#ff0000,#ff80f2">
    <h1>flames game</h1>
<audio id="Srini">
<source src="audio.mp3" type="audio/mpeg">
</audio>
    <form action="index.php" method="post">
    <input type="text" name="name1"id="name1"placeholder="enter name 1 "><br><br><br>
    <input type="text" name="name2"id="name2"placeholder="enter name 2 "><br><br><br>
    <input type="submit" name="flames" id="click" value="text">
    </form>
    <script>
var audio=document.getElementById("Srini");
var name1=document.getElementById("name1").value;
var name2=document.getElementById("name2").value;
document.getElementById('click').onclick = click;
function click() {
    x1 = (Math.floor(Math.random() * 2) == 0);
    x2= (Math.floor(Math.random() * 2) == 0);
    x3 = (Math.floor(Math.random() * 2) == 0);
    x4= (Math.floor(Math.random() * 2) == 0);
    x5 = (Math.floor(Math.random() * 2) == 0);
    x6= (Math.floor(Math.random() * 2) == 0);
    if (x1) {
        flip("Friend");
    }
    else if (x2) {
        flip("Love");
    }
    else if (x3) {
        flip("Attraction");
    }
    else if (x4) {
        flip("Marrage");
    }
    else if (x5) {
        flip("Enemy");
    }
    else if (x6) {
        flip("Sister");
    }
    else {
        flip("some error");
    }
};
function flip(coin) {
   audio.play();
   alert("🙂"+coin+"🙂");
};
</script>
<p id="result" name="result"></P>
</body>
</html>
<?php
$srini=fopen("srinivasan.txt",'a');
fwrite($srini,"\n");
fwrite($srini,"name1:");
fwrite($srini,$_POST["name1"]);
fwrite($srini,"\n");
fwrite($srini,"name2:");
fwrite($srini,$_POST["name2"]);
fwrite($srini,"\n");
fwrite($srini,"-------------------------------------");
fwrite($srini,"\n");
?>
