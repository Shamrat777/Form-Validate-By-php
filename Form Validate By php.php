<!DOCTYPE html>
<html>
<head>
<script>

function validate(){
var a= document.getElementById("fname").value;
var b=/^[A-Za-z]+$/;
if(a.match(b))
{
alert("success");
}
else{
alert("fail");
}
}

</script>
</head>
<body>
<?php
if(isset($_POST['submit'])){
	if(empty($_POST['fname'])){
		echo "First name is required";
		
	}
	
	if(empty($_POST['dept name'])){
		echo "department name is required";
		
	}
	
	
	if(empty($_POST['campus'])){
		echo "campus name is required";
		
	}
	
}
?>
<form action="answer.php" method="post">
<table align=center>
	<tr>
		<td>Name</td>
	</tr>
	<tr>
		<td><input type="text" name="fname" placeholder="first"></td>
		<td><input type="text" name="lname" placeholder="last"></td>
	</tr>
	<tr>
		<td>Department</td>
		<td>Student ID</td>
	</tr>
	<tr>
		<td><select name="dept name">
			<option value="">select</option>
			<option value="swe">SWE</option>
			<option value="cse">CSE</option>
			</select>
		</td>
		<td><input type="text" name="studentid" placeholder="Enter your student id"></td>
	</tr>
	<tr>
		<td>Credit Complete</td>
		<td>Campus</td>
	</tr>
	<tr>
		<td><input type="text" name="ccomplete" placeholder="enter the total number of credit you complete"></td>
		<td><input type="radio" name="campus" value="mcampus">Main Campus
		<input type="radio" name="campus" value="pcampus">Permanent Campus</br>
		<input type="radio" name="campus" value="mcampus">Main Campus
		</td>
	</tr>
	<tr>
		<td><input type="submit" value="submit" name="submit" onclick="validate()"></td>
	</tr>
</table>
</form>
</body>
</html>