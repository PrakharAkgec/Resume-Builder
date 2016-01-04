<!DOCTYPE html>
<html>
	<head>
		<title>Resume Builder</title>
		<link rel="stylesheet" type="text/css" href="index_stylesheet.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			var flag;
			var project="project1";
			var achievement="achievement1";
			var skill="skill1";
			var interest="interest1";
			
			$(document).ready(function() {
				$("fieldset:not('#div1')").hide();
				$("#back").hide();
				flag="div1";
				//changeColor();
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='none';
			});
			
			
			function show(division){
				$(document).ready(function(){
					flag=division;
					$("fieldset:not(#"+division+")").hide();
					$("#"+division).show();
					showButton();
					//changeColor();
				});
							
			}
			function showButton(){
				$(document).ready(function(){
					if(flag!='div1')
				{
					$("#back").show();
				}
				
				else
				{
					$("#back").hide();
				}
				
				if(flag=='div9')
				{
					$("#next").hide();
				}
				
				else
				{
					$("#next").show();
				}
				});
							
			}
		
		
		function nextPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i++;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		function backPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i--;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		/*function changeColor()
		{
			document.getElementById("#"+flag).style.backgroundColor="#D93600";
		}*/
		function generateTextbox(box) {
    var form = document.getElementById(flag);
    var input = document.createElement("input");
    input.type = "text";
					if(project.slice(0,7)==box)
					{
						input.id=project;
						input.name=project;
						var start=project.slice(0,7);
						var stop=project.slice(7);
						var i=parseInt(stop);
						i++;
						project=start+i;
					}
					else if(achievement.slice(0,11)==box)
					{
						input.id=achievement;
						input.name=achievement;
						var start=achievement.slice(0,11);
						var stop=achievement.slice(11);
						var i=parseInt(stop);
						i++;
						achievement=start+i;
					}
					else if(skill.slice(0,5)==box)
					{
						input.id=skill;
						input.name=skill;
						
						var start=skill.slice(0,5);
						var stop=skill.slice(5);
						var i=parseInt(stop);
						i++;
						skill=start+i;
					}
					else if(interest.slice(0,8)==box)
					{
						input.id=interest;
						input.name=interest;
						var start=interest.slice(0,8);
						var stop=achievement.slice(8);
						var i=parseInt(stop);
						i++;
						interest=start+i;
					}
    var br = document.createElement("br");
    form.appendChild(br);
    form.appendChild(input);
	
	}

	//$(document).ready(function() {	
	function showDiploma(course)
	{
		if(course==1)
		{
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='block';
		}
		else if(course==0)
		{
				document.getElementById('optional_12').style.display='block';
				document.getElementById('optional_diploma').style.display='none';
		}
		//else
		//{
				
		//}
	}
	//});
		</script>
		
		
	</head>
	<body>
		<div id="main">
			<div id="header">
				<span id="resume_builder">RESUME BUILDER</span>
			</div>
		<div id="select_option">	
		<div id="select_toggle">	
			<a href="#">
			<div class="toggle1" onclick="show('div1')"><br>
				<span class="option" class="single">Basic</span>
			</div>
			<a href="#">
			<div class="toggle2" onclick="show('div2')"><br>
				<span class="option">Educational Details</span>
			</div>
			<a href="#">
			<div class="toggle1" onclick="show('div3')"><br>
				<span class="option">Summer <br>Training</span>
			</div>
			<a href="#">
			<div class="toggle2" onclick="show('div4')"><br>
				<span class="option">Projects Undertaken</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div5')"><br>
				<span class="option" class="single">Achievements</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle2" onclick="show('div6')"><br>
				<span class="option">Skill<br> Set</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div7')"><br>
				<span class="option">Areas of <br>Interest</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle2" onclick="show('div8')"><br>
				<span class="option">Personal <br>Details</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div9')"><br>
				<span class="option" class="single">Finish</span>
			</div>
			</a>
		</div>
		</div>
		<div id="content">
		<?php
			include 'form.html';
		?>
		</div>
		<div id="footer"><br>
			<input type="button" value="Back" id="back" onclick="backPage()">
			<input type="button" value="Next" id="next" onclick="nextPage()">
		</div>
		</div>
	</body>
</html>