<?php
require_once('../controller/IndexController.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <script type="text/javascript">
    </script>

    <body>
        <form action="http://localhost/phpprofile/view/Studentadded.php" method="post">
            <b>Add a New Student</b>
            <p>First Name:
                <input type="text" name="first_name" size="30" value="" />
            </p>
            <p>Last Name:
                <input type="text" name="last_name" size="30" value="" />
            </p>
            <p>Email:
                <input type="text" name="email" size="30" value="" />
            </p>
            <p>Street:
                <input type="text" name="street" size="30" value="" />
            </p>
            <p>City:
                <input type="text" name="city" size="30" value="" />
            </p>
            <p>State (2 Characters):
                <input type="text" name="state" size="30" maxlength="2" value="" />
            </p>
            <p>Zip Code:
                <input type="text" name="zip" size="30" maxlength="5" value="" />
            </p>
            <p>Phone Number:
                <input type="text" name="phone" size="30" value="" />
            </p>
            <p>Birth Date (YYYY-MM-DD):
                <input type="text" name="birth_date" size="30" value="" />
            </p>
            <p>Sex (M or F):
                <input type="text" name="sex" size="30" maxlength="1" value="" />
            </p>
            <p>Lunch Cost:
                <input type="text" name="lunch" size="30" value="" />
            </p>
            <p>
                <input type="submit" name="submit" value="Send" />
            </p>

        </form>
    </body>

</html>
