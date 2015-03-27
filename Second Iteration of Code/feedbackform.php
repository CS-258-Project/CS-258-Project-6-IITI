<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari and Amey Ambade-->

<!DOCTYPE html>


<html>
<head>
     <link rel="icon" type="image/png" href="images\demo\iit_indore_logo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    
    <title>Feedback</title>
</head>
<body>

<h2><center>Feedback Form</h2></center>

<br>

<center>

<form class="pure-form pure-form-aligned" method="post" action="gmailfeedback.php">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Name</label>
            <input name="name" type="text" placeholder="Name">
        </div>

         <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input name="email" type="email" placeholder="Email Address">
        </div>

        <div>
            <form action=""><h4>You are a</h4>
                <input type="radio" name="type" value="student"> Student
                <input type="radio" name="type" value="faculty"> Faculty
                <input type="radio" name="type" value="staff"> Staff member
                <input type="radio" name="type" value="other"> Other<br>
            </form>
        </div>
   

    <table>
    <tr>
        <th></th>
        <th>Satisfied</th>
        <th>Neutral</th>
        <th>Dissatisfied</th>
    </tr>
    <h4>How satisfied are you with:</h4>
    <tr>
        <td>Security Personnel</td>
        <td><input type="radio" name="rowa" value="Satisfied"></td>
        <td><input type="radio" name="rowa" value="Neutral"></td>
        <td><input type="radio" name="rowa" value="Dissatisfied"></td>
    </tr>
    <tr>
        <td>Security Official Interaction</td>
        <td><input type="radio" name="rowb" value="Satisfied"></td>
        <td><input type="radio" name="rowb" value="Neutral"></td>
        <td><input type="radio" name="rowb" value="Dissatisfied"></td>
    </tr>
    <tr>
        <td>Security Arrangements</td>
        <td><input type="radio" name="rowc" value="Satisfied"></td>
        <td><input type="radio" name="rowc" value="Neutral"></td>
        <td><input type="radio" name="rowc" value="Dissatisfied"></td>
    </tr>
    </table>

    <div align="center"><br><h4>How useful did you find the content of this web portal?</h4>
    <input type="radio" name="groupa" value="Very">Very<br>
    <input type="radio" name="groupa" value="Not Much">Not Much<br>
    <input type="radio" name="groupa" value="Least"> Least<br>
    </div>
    <br>


    <div align="center"><br><h4>How responsive and interactive did you find this website?</h4>
    <input type="radio" name="groupb" value="Very">Very<br>
    <input type="radio" name="groupb" value="Not Much">Not Much<br>
    <input type="radio" name="groupb" value="Least"> Less<br>
    </div>
    <br>


        <div>
      <h4>Do you have any comments regarding the security system of IIT Indore?</h4>
        <textarea name="texta" rows="4" cols="50">
        </textarea
    </div>
    <br>

        <div>
      <h4>Do you have any comments/suggestions for the website?</h4>
        <textarea name="textb" rows="4" cols="50">
        </textarea>
    </div>
    <br>
    <div class="pure-controls">
        <label for="cb" class="pure-checkbox">
            <input name="cb" type="checkbox"> I would like to be contacted by officials
        </label>
    </div>
    <br>
	<button type="submit" class="pure-button pure-button-primary">Submit form</button>
    <hr>
 </fieldset>
</form>
</center>

</body>
</html>
