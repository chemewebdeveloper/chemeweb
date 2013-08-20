<?php 
	function display_competencies($class_name,$connection){
		$query = "SELECT * FROM competencies WHERE class =" . "\"" . $class_name . "\""; // Here I plug the $class_name variable in the SQL statement.
		echo "<table>";
	 if($class_name =="none" || (!isset($class_name))){
		echo"<!--";
	  }  // this will keep my table header from displaying when it's first loaded and when the please select option is chosen.
		 echo "<tr>";
		 echo "<th colspan=\"4\" class=\"courseheader\">" . $class_name . "</th>"; 
		 echo "</tr>";
		 echo "<tr>";
		 echo "<th>Competency Number</th><th>Expectation</th><th>Level</th><th>Usage</th>";
		 echo "</tr>";
	if($class_name =="none" || (!isset($class_name))){
		echo"-->";
	}  // this will keep my table header from displaying when it's first loaded and when the please select option is chosen.
		//3 Perform database query
	if($class_name == "none"){
		echo "You have not chosen a course. Please try again.";
	}
	$competencies = mysql_query($query, $connection);  // Here I do the actual query.
		If(!$competencies){
			die("Database connection failed: " . mysql_error());
		}
		//4. Use returned data
		while($competency = mysql_fetch_array($competencies)) {
			echo "<tr><td>" . $competency['outcome'] . "." . $competency['competency'] . "</td><td>" . $competency['expectation'] 
			. "<td>" . $competency['level'] . "</td><td>" . $competency['usage'] . "</td></tr>"; 
		}
		echo "</table>";
	}

	function display_l3_competencies($connection){ // This function is only used in l3exam.php
	$class_name ="Level 3 exam";
	$query = "SELECT * FROM competencies WHERE class =" . "\"" . $class_name . "\""; 
		 echo "<table>";
	     echo "<tr>";
		 echo "<h2>Level 3 Exam Competencies</h2><br />";
		 echo "</tr>";
		 echo "<tr>";
		 echo "<th>Competency Number</th><th>Expectation</th><th>Level</th><th>Usage</th>";
		 echo "</tr>";
		//3 Perform database query
	$competencies = mysql_query($query, $connection);  // Here I do the actual query.
		If(!$competencies){
			die("Database connection failed: " . mysql_error());
		}
		//4. Use returned data
		while($competency = mysql_fetch_array($competencies)) {
			echo "<tr><td>" . $competency['outcome'] . "." . $competency['competency'] . "</td><td>" . $competency['expectation'] 
			. "<td>" . $competency['level'] . "</td><td>" . $competency['usage'] . "</td></tr>"; 
		}
		echo "</table>";
		
		
	

	
	}
	
	function getJobArchive($connection){  //This function is just to display the previous job offers to students. I call it in jobarchive.php
		
		$query = "SELECT * FROM jobarchive";
		$jobs = mysql_query($query, $connection);
		echo "<table>";
		echo "<tr>";
		 echo "</tr>";
		 echo "<tr>";
		 echo "<th>Company</th><th>Job Type</th><th>State</th><th>Contact</th><th>Email</th>";
		 echo "</tr>";
			if(!jobs){
				die("Database connection failed: " . mysql_error());
			}
		while($job = mysql_fetch_array($jobs)){
			echo "<tr><td>" . $job['company'] . "</td><td>" . $job['jobtype'] . "</td><td>" . $job['c_state'] . "</td><td>" . $job['contact'] . "</td><td>" . $job['contact_email'] . "</td></tr>";
		}
		echo "</table>";
	}
	
?>

