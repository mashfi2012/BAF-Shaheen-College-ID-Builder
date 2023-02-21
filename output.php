<?php 
    if(isset($_POST['submit_btn'])){
        $img_name = $_FILES['image']['name'];
        $img_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($img_tmp, 'image/'. $img_name);
        $person = $_POST['person'];
        $id_no = $_POST['id_no'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $section = $_POST['section'];
        $blood = $_POST['blood'];
        $session = $_POST['session'];
        $mobile = $_POST['mobile'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BAFSB Id Maker</title>
    </head>

    <link rel="stylesheet" href="style.css">
    <body>
    	<center>
    		<div class="id">
    			<h1 class="output_title">BAF Shaheen College Bogura</h1><br>
    			<h3 class="output_subTitle">Student Id Card</h3><br><br>
    			<img src="<?php if (isset($_POST['submit_btn'])) {print 'image/'.$img_name;}?>"/>
    			<br><br>
    			<h1 class="main_id"><?php if (isset($_POST['submit_btn'])) {print $person;}?></h1>
    			<h1 class="main_id"><?php if (isset($_POST['submit_btn'])) {print "Student Id: ".$id_no;}?></h1>
    			<br><br>
    			<table border="1">
    				<tr>
    					<td>Class</td>
    					<td><?php if (isset($_POST['submit_btn'])) {print $class;}?></td>
    				</tr>
    				<tr>
    					<td>Roll No</td>
    					<td><?php if (isset($_POST['submit_btn'])) {print $roll;}?></td>
    				</tr>
    				<tr>
    					<td>Section</td>
    					<td><?php if (isset($_POST['submit_btn'])) {print $section;}?></td>
    				</tr>
    				<tr>
    					<td>Blood Group</td>
    					<td><?php if (isset($_POST['submit_btn'])) {foreach ($blood as $blood_group){print $blood_group;}}?></td>
    				</tr>
    				<tr>
    					<td>Session</td>
    					<td><?php if (isset($_POST['submit_btn'])) {print $session;}?></td>
    				</tr>
    				<tr>
    					<td>Mobile</td>
    					<td><?php if (isset($_POST['submit_btn'])) {print "+88".$mobile;}?></td>
    				</tr>
    			</table>
    		</div>
    		<br>
    	</center>
    	
    	<button onclick="printFunc()">Print</button>
    	<script>
    		function printFunc(){
    			var id = document.getElementById('id');
    			print(id);
    		}
    	</script>
    </body>
</html>