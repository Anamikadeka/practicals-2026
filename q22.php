<!-- Write a PHP script to display current date and time on a webpage -->
 <!DOCTYPE html>
 <html>
    <head>
        <title>Current Date and Time</title>
    </head>
    <body>
            <h2>Current Date and Time</h2>
            <?php
            date_default_timezone_set("Asia/Kolkata");
            echo "Current Date: ".date("d-m-Y");
            echo "<br>"
            echo "Current tTime: ".date("h:i:s A");
            ?>
    </body>
 </html>