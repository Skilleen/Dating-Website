<!--Scott Killen's Html Code. November 5, 2014. Assignment 4-->
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSSfolder/datingstyle.css"/>
<Title> GUNIT Dating Site </Title>
<center>
<h1> Welcome to the offical GUNIT dating site!</h1>
<h2> Created by Scott Killeen </h2>
</center>
</head>

<body>
<center>
<!--My form-->

<form action="signup-submit.php" method="post" enctype="multipart/form-data">
<!--Name-->
<div>
<label> First Name:</label>
<input type="text" size="10" name="Name" /> 
<label> Last Name:</label>
<input type="text" size="10" name="lName" /> <br> <br> <br>
</div>
<!--Gender/interests-->
<div>
<label> Gender: <br> <br>  </label>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female <br> <br> <br>
<label> Interested In: <br> <br> </label>
<input type="radio" name="interested" value="Male"> Male 
<input type="radio" name="interested" value="Female"> Female
<input type="radio" name="interested" value="Both"> Both <br> <br> <br>
</div>
<!--Birthday/hometown-->
</div>
<label> Birthday (dd/mm/yyyy):</label>  
<input type="text" size="10" name="Birthday" /> <br> <br> <br>
<label> Hometown:</label>
<input type="text" size="10" name="Hometown" /> <br> <br> <br>
</div>
<!--Dropdown favourite coding language-->
<div>
<label> Favourite Coding Language:</label>
<select name="favouritecodinglanguage">
<option value="java">Java</option>
<option value="python">Python</option>	
<option value="c++">C++</option>
<option value="php">PHP</option>
<option value="javascript">Javascript</option>
<option value="c">C</option>
<option value="ruby">Ruby</option> 
</select> <br> <br> <br>
</div>
<!--Dropdown favourite rapper-->
<div>
<label> Favourite Rapper:</label>
<select name="favouriterapper">
<option value="50cent">50 cent</option>
<option value="lloydbanks">Lloyd Banks</option>	
<option value="tonyyayo">Tony Yayo</option>
<option value="kiddkidd">Kidd Kidd</option>
<option value="youngbuck">Young Buck</option>
</select> <br> <br> <br>
</div>
<!--text area bio-->
<div>
<label> Bio :<br> <br>
<textarea rows="8" cols="80" name="bio"> Say something about yourself</textarea> <br> <br>
</label>
</div>

<label>Upload a Picture of Yourself! 
<input type="file" name="avatar"> <br> <br> <br> 
</label>

<button type="reset" value="reset">Reset</button>
<button type="submit" value="signup">Sign up!</button>
</form>
</center>
</body>