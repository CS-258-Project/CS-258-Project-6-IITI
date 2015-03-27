<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
<title>Lost and Found</title>  
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<!link rel="stylesheet" href="http://yui.yahooapis.com/pure//pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <!--link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
</head>
<body>
<center>
<form class="pure-form pure-form-aligned" method="post" action="gmaillost.php" enctype="multipart/form-data">
	<fieldset>
        <div class="pure-control-group">
			<label for="name">Name</label>
			<input name="name" type="text" placeholder="Name">    
        </div>

        <div class="pure-control-group">
			<label for="number">Contact Number</label>
			<input name="number" type="text" placeholder="Number">
        </div>
		
		<div class="pure-control-group">
			<label for="course">Course</label>
			<select name="course">
				<option selected disabled></option>
				<option>B.Tech First Year</option>
				<option>B.Tech Second Year</option>
				<option>B.Tech Third Year</option>
				<option>B.Tech Fourth Year</option>
				<option>Phd</option>
				<option>MSc</option>
				<option>M.Tech</option>
			</select>
        </div>
		
		<div class="pure-control-group">
			<label for="details">Details</label>
			<textarea name="details" rows="8" class="pure-input-1-5" placeholder="Last seen,brief,suspected person..."></textarea>
        </div>
		
		<div class="pure-control-group">
			<label for="image">Image</label>
			<input name="image" type="file">
        </div>
		
        <div class="pure-controls">
             <button type="submit" class="pure-button pure-button-primary">Submit</button>
			<button type="reset" class="pure-button pure-button-primary">Reset</button>	
        </div>
		
	</fieldset>
</form>
</center>
</body>
</html>