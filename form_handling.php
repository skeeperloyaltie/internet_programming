<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <?php 
    error_reporting(E_ALL);
    ?>
    <!--A form that has two inputs -->
    <form action="data.php" method="POST">
    First Name: <input type="text" id="First Name" name="first_name" placeholder="John"> <br /> Last Name: <input type="text" id="Last Name" name="lname" placeholder="Doe"><br />
        Submission: <input type="date" id="date" name="date" placeholder="Today's Date">

        <input type="submit" value="Submit">
    </form>
    </body>
</html>
