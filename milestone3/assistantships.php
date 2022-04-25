<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <style>
        .box{
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
            background: #0080ff;
        }
    </style>

    <script>
$(document).ready(function () {
    resetForms();
});
function resetForms() {
    document.forms['form'].reset();
}      
      function showBox(){
	  var options = document.querySelector(".options");
	  var gradBox = document.querySelector(".grad");
	  var ugradBox = document.querySelector(".ugrad");
	  
	  if(options.value == "grad"){
	      gradBox.style.display = "block";
	      ugradBox.style.display = "none";
	      //show gradbox
	  }
	  else if(options.value == "ugrad"){
	      ugradBox.style.display = "block";
	      gradBox.style.display = "none";
	  }
	  else{
	      
	  }
      }
      function calc(){
	  var target = document.querySelectorAll(".target");
	  var target2 = document.querySelectorAll(".target2");
	  var options = document.querySelector(".options");
	  var gradBox = document.querySelector(".grad");
	  var ugradBox = document.querySelector(".ugrad");
	  
	  if (ugradBox.style.display != "none"){
	      var sum = 0;
	      var i = 0;
	      for(i=0; i<target.length; i++){
		  sum = sum + Number(target[i].value);
	      }
	      avg = sum/target.length;
	      if (avg > 3.2){
		  alert("Congratulations you may now further apply");
          window.location.replace("application.php");
	      }
	      else{
		  alert("Sorry Better luck next time");
	      }
	  }
	  else if(gradBox.style.display != "none"){
	      var sum = 0;
	      var i = 0;
	      for(i=0; i<target2.length; i++){
		  sum = sum + Number(target2[i].value);
	      }
	      avg = sum/target2.length;   
	      if (avg > 3.7){
          alert("Congratulations you may now further apply");
          window.location.replace("application.php");
	      }
	      else{
		  alert("Sorry Better luck next time");
	      }
	 
	  }
	  else{
	      alert("Select student status");
	  }
	  
      }
    </script>
    <title>Assistantships</title>
</head>
<body>
  <h1 style="background-color:rgb(230, 222, 176);"><p style="font-family: Arial">Kennesaw Student Information Center</p></h1>
  <br>
<?php include 'includes/header.php'; ?>
    <br>
    <br>
</div>
<div class="spacer">
    &nbsp;
</div>

<h1>This Page presents available Student Assistantship postions open in upcoming Summer semester.Please Look below
    for the evaluation form</h1>
<br>
<br>
<h2>It is great to note that only students with a GPA of 3.2 and higher may be eligible for these positions.</h2>
<br>
<br>
<br>
<h1>Please follow instructions to find out your eligibility to become a student assistant</h1>
<h3>STEP 1:Please select the student status from drop down menu</h3>
<h3>STEP 2:Please select the grade obtained for each course from the drop down list</h3>
<h3>STEP 3:Click the evaluate button to see if you are eligible for the position</h3>
<div class="container">

<div>
      <div>
        
	<form id="form">
	  <label>Student status</label>
          <select id="options" class="options" onchange="showBox()">
              <option selected="" disabled="" hidden="">Please choose...</option>
              <option value="ugrad">Undergraduate</option>
              <option value="grad">Graduate</option>
          </select>
	</form>
      </div>


      <div class="ugrad box">

        <br>
        <h3>UNDERGRADUATE COURSES</h3>
        <br>
        <form id="form">
            <label>CSE 3203 Mobile System Overview</label>
            <select class="target">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 4213 Mobile Web Development</label>
            <select class="target">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 5413 Software Design and Development</label>
            <select class="target">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 5423 Computer Networks and System Administration</label>
            <select class="target">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

        <label>IT 5433 Databases: Design and Applications</label>
            <select class="target">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>
            <input type="button" value="submit" onclick="calc()">
        </form>
      </div>
      <div class="grad box">
        <br>
        <h3>GRADUATE COURSES</h3>
        <br>
        <form id="form">
            <label>IT 7113 Data Visualization</label>
            <select class="target2">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 6713 Business Intelligence</label>
            <select class="target2">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 6843 Ethical Hacking</label>
            <select class="target2">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <label>IT 6503 Foundations of HIT</label>
            <select class="target2">
                <option value="4.0">A</option>
                <option value="3.0">B</option>
                <option value="2.0">C</option>
                <option value="1.0">D</option>
            </select>
            <br>

            <input type="button" value="submit" onclick="calc()">
            </form>
      </div>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body></html>