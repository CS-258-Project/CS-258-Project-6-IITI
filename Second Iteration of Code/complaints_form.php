<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Amey Ambade-->

<!DOCTYPE html>


<html>
<head>
     <link rel="icon" type="image/png" href="images\demo\iit_indore_logo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    
    <title>Complaints</title>
</head>
<body>

<h2><center>
    Complaint Form
</h2></center>
    <br>
    <center>
    <form class="pure-form pure-form-aligned" method="post" action="gmailcomplaint.php" enctype="multipart/form-data">
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Name</label>
                <input name="names" type="text" placeholder="Name">
            </div>

             <div class="pure-control-group">
                <label for="email">Email Address</label>
                <input name="email" type="email" placeholder="Email Address">
            </div>

            <div>
                <h4>You are a</h4>
                    <input type="radio" name="types" value="stud"> Student
                    <input type="radio" name="types" value="fac"> Faculty
                    <input type="radio" name="types" value="staff"> Staff member
                    <input type="radio" name="types" value="other"> Other<br>
            </div>
   
    </center>

    <center>
    <h4>Choose what your complaint is regarding:</h4>

    <div align="center">
    <input type="radio" name="group1" value="Wrong information on Website">Wrong information on Website<br>
    <input type="radio" name="group1" value="Improper Security Arrangements">Improper Security Arrangements<br>
    <input type="radio" name="group1" value="Improper Behavior of Staff"> Improper Behavior of Staff<br>
    </div>
<center>
        <div>
            <h4>Your complaint is:</h4>
            <textarea name="details" rows="4" cols="50">
            </textarea>
        </div></center>
    <br>

    <div class="pure-controls"><center>
        <label align="center" for="cb" class="pure-checkbox">
            <input name="cb" type="checkbox"> I would like to be contacted by officials
        </label>
    </div></center>
    <br>

    <center><button type="submit" class="pure-button pure-button-primary">Submit form</center></button>
     </fieldset>
<hr>
</form>
<style>
table {
    border-collapse: collapse;    
}
td, th {
    border: 1px solid #ccc;
    padding: 10px;
}
th:empty {
    border: 0;
}
</style>
</body>
</html>
