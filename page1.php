<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url("http://www.naessolutions.it/en/tmb/1852_assistenza-it-IT.aspx?width=800&ext=jpg");
   background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

.slidecontainer {
  width: 50%;
  position: absolute;
  left: 80px;
  right:100px
}

.slider {
  -webkit-appearance: none;
  width: 50%;
  height: 10px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 23px;
  height: 24px;
  border: 0;
  background: #00008B;
  cursor: pointer;
}
input[type=submit], input[type=submit] {
  background-color: #00008B;
  border: none;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  margin: 10px 18px;
  cursor: pointer;
  margin-left:115px;

}
</style>
</head>
<body>

<form action="DB_For_Task1.php"method="post">

<div class="slidecontainer">
<h1>Motor 1 
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor1" id="myRange1"<p> Value: <span id="demo1"></span></p></h1>

<h1>Motor 2 
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor2" id="myRange2"<p> Value: <span id="demo2"></span></p></h1>  

<h1>Motor 3 
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor3" id="myRange3"<p> Value: <span id="demo3"></span></p></h1>

<h1>Motor 4
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor4" id="myRange4"<p> Value: <span id="demo4"></span></p></h1>

<h1>Motor 5 
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor5" id="myRange5"<p> Value: <span id="demo5"></span></p></h1>  

<h1>Motor 6
  <input type="range" min="0" max="180" value="90" class="slider" name="Motor6" id="myRange6"<p> Value: <span id="demo6"></span></p></h1>
<input type="submit" name="SAVE" value="SAVE">
<input type="submit" name="RUN" value="RUN">
</div>
</form> 

<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

 slider1.oninput = function() {
  output1.innerHTML = this.value; 
}
 slider2.oninput = function() {
  output2.innerHTML = this.value; 
}
 slider3.oninput = function() {
  output3.innerHTML = this.value; 
}
 slider4.oninput = function() {
  output4.innerHTML = this.value;  
} 
slider5.oninput = function() {
  output5.innerHTML = this.value; 
}
 slider6.oninput = function() {
  output6.innerHTML = this.value; 
}
</script>
</body>
</html>
