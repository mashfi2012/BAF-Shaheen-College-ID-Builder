<!DOCTYPE html>
<html>
    <head>
        <title>BAFSB Id Maker</title>
    </head>

    <link rel="stylesheet" href="style.css">
    <body>
            <div class="content">
                <div class="input">
                	<h1 class="title" style="font-family: 'Courier New', Courier, monospace; font-size: xx-large; color: cornflowerblue; text-align: center; font-size: 50px;">BAFSB Id Maker</h1>
                    <form action="output.php" method="POST" enctype="multipart/form-data" class="input_form">
                    	<center><img src="logo.jpg" class="logo"/><br/><br/></center>
                        <label for="image">Enter your image : </label>
                        <input type="file" name="image" required/><br/><br/>

                        <label for="name">Enter your name : </label>
                        <input type="text" name="person" required/><br/><br/>

                        <label for="id_no">Enter your id no : </label>
                        <input type="password" name="id_no" required/><br/><br/>

                        <label for="class">Enter your class : </label>
                        <input type="text" name="class" required/><br/><br/>

                        <label for="roll">Enter your roll no : </label>
                        <input type="text" name="roll" required/><br/><br/>

                        <label for="section">Enter your section : </label>
                        <input type="text" name="section" required/><br/><br/>

                        <label for="blood">Enter your Blood group : </label>
                        <select name="blood[]" required>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select><br/><br/>

                        <label for="session">Enter this session : </label>
                        <input type="text" name="session" required/><br/><br/>

                        <label for="mobile">Enter your mobile no : </label>
                        <input type="text" name="mobile" required/><br/><br/>
						<br/><br/><br/>	
                        <input type="submit" name="submit_btn" value="Submit data" class="btn"/>
                    </form>
                </div>
            </div>
    </body>
</html>