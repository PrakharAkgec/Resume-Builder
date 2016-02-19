<?php

	/*header('Content Type: application/pdf');
	header('Content Disposition: attachment; filename="downloaded.pdf"');
	readfile('resume.php');
	*/
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resume_<?php echo $_POST['TemplateList'];?>_stylesheet.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				print();
			});
		</script>
	</head>
	<body>
		<div id="main">
		<h1 id="name"><?php echo $_POST['name'];?></h1>
		</div>
			
		<div id="header"><?php echo $_POST['name']." | ".$_POST['mail']." | ".$_POST['phone'];?></div>
			<br>
		<div class="table">
		<h2 id="heading">Objective</h2>
			
				<p><?php echo $_POST['objective'];?></p>
		</div>
		</div>
		
		<div class="table" >
		<h2 id="heading">Education</h2>	
				<table>
					<tr>
						<th >Year</th>
						<th>Institute</th>
						<th>Course</th>
						<th>Percentage</th>
					</tr>
					<tr>
						<td class="year"><?php echo $_POST['collegeyear'];?></td>
						<td class="institute"><?php echo $_POST['college'];?></td>
						<td class="course"><?php echo $_POST['collegecourse'];?></td>
						<td class="percent"><?php echo $_POST['collegepercentage']; 
												if(!empty($_POST['collegesem']))
												{echo "( till ".$_POST['collegesem']." semester )";}
											?></td>
					</tr>
					<tr>
						<?php
						if($_POST['choosediploma']==1){
							echo '<td class="year">'.$_POST["year_diploma"].'</td>';
							echo '<td class="institute">'.$_POST["school_diploma"].'</td>';
							echo '<td class="course">'.'Diploma'.'</td>';
							echo '<td class="percent">'.$_POST["percentage_diploma"].'</td>';
						}
						else if($_POST['choosediploma']==0){
							echo '<td class="year">'.$_POST["year12"].'</td>';
							echo '<td class="institute">'.$_POST['school12'].'</td>';
							echo '<td class="course">'.'12th'.'</td>';
							echo '<td class="percent">'.$_POST["percentage12"].'</td>';
						}
						?>
					</tr>
					<tr>
						<td class="year"><?php echo $_POST['year10'];?></td>
						<td class="institute"><?php echo $_POST['school10'];?></td>
						<td class="course">10th</td>
						<td class="percent"><?php echo $_POST['percentage10'];?></td>
					</tr>
				</table>
		</div>		
		<div class="table">
		<h2 id="heading">Summer Training</h2>
			
				<ul>
					<li>
						Company Name :<?php echo $_POST['stcomapnyname'];?>
					</li>
					<li>
						Duration :<?php echo $_POST['stduration'];?>
					</li>
					<li>
						Project Undertaken :<?php echo $_POST['stproject'];?>
					</li>
					<li>
						Technology Used :<?php echo $_POST['sttechnology'];?>
					</li>
				</ul>
		</div>
		<div class="table">
		<h2 id="heading">Projects Undertaken</h2>
				<ul>
					<?php 
					echo "<li>".$_POST['projectfinalyear']."</li>";
				$i=1;
					while(isset($_POST['project'.$i]))
					{
						if(!empty($_POST['project'.$i]))
						{
							echo "<li>".$_POST['project'.$i]."</li>";
						}
					$i++;
					}
				?>
				</ul>
		</div>	
		<div class="table">
		<h2 id="heading">Achievements</h2>
				<ul>
					<?php 
				$i=1;
					while(isset($_POST['achievement'.$i]))
					{
						if(!empty($_POST['achievement'.$i]))
						{
							echo "<li>".$_POST['achievement'.$i]."</li>";
						}
					$i++;
					}
				?>
				</ul>
		</div>	
		<div class="table">
		<h2 id="heading">Skill Set</h2>
				<ul>
					
				<?php 
				
					echo "<li>".$_POST['mandatoryskill']."</li>";
				$i=1;
					while(isset($_POST['skill'.$i]))
					{
						if(!empty($_POST['skill'.$i]))
						{
							echo "<li>".$_POST['skill'.$i]."</li>";
						}
					$i++;
					}
				?>
				
				</ul>
		</div>
		<div class="table">
		<h2 id="heading">Personal Details</h2>
				<ul>
					<li>
						<span>Date Of Birth :</span><?php echo $_POST['dob'];?>
					</li>
					<li>
						<span>Father's Name :</span><?php echo $_POST['fathersname'];?>
					</li>
					<li>
						<span>Landline No. :</span><?php echo $_POST['landline'];?>
					</li>
					<li>
						<span>Alternate No. :</span> <?php echo $_POST['otherno'];?>
					</li>
				</ul>
		</div>	
		<div id="disclaimer">
			<h2 id="declaration">Declaration</h2>
			<p class="data">
				I hereby declare that the details provided by me in this resume are correct and I have knowingly not omitted/ misrepresented any information. I am aware that the company can use this data for verification purposes and any material inconsistency identified between the details shared above versus actual information would have a bearing on my employment, based upon company policies.
			</p>
			<p>
				<span>Date :</span><?php echo $_POST['date'];?>
			</p>
			<p>
				<span>Time :</span><?php echo $_POST['time'];?>
			</p>
			<p>
				<span>Place :</span><?php echo $_POST['place'];?>
			</p>
			<p>
				<span>Signature :</span>
			</p>
		</div>
			
			
	</body>
</html>	