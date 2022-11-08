<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['nombre'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $confirmEmail = $_POST['confirmEmail'];
        $phone = $_POST['phone'];
        $affair = $_POST['asunto'];
        $message = $_POST['mensaje'];
        $prefix = $_POST['prefix'];


        echo "<h2>Your form has been submitted successfully!</h2>";
        echo "<h3>Here is the data you submitted:</h3>";
        /* mostrar en tabla */
        echo "<table border='1'>";
        echo "<tr><td>Name:</td><td>$name</td></tr>";
        echo "<tr><td>Last Name:</td><td>$lastname</td></tr>";
        echo "<tr><td>Email:</td><td>$email</td></tr>";
        echo "<tr><td>Confirm Email:</td><td>$confirmEmail</td></tr>";
        echo "<tr><td>Phone:</td><td>+$prefix $phone</td></tr>";
        echo "<tr><td>Affair:</td><td>$affair</td></tr>";
        echo "<tr><td>Message:</td><td>$message</td></tr>";
        echo "</table>";


    }

        

?>