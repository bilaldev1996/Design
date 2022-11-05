<?php

    if(isset($_POST['enviar'])) {
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $affair = $_POST['asunto'];
        $message = $_POST['mensaje'];


        echo "<h2>Your form has been submitted successfully!</h2>";
        echo "<h3>Here is the data you submitted:</h3>";
        /* mostrar en tabla */
        echo "<table border='1' cellpadding='10' cellspacing='0' width='100%'>";
        echo "<tr><td>Nombre</td><td>$name</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Asunto</td><td>$affair</td></tr>";
        echo "<tr><td>Mensaje</td><td>$message</td></tr>";
        echo "</table>";

    }

        

?>