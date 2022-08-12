<?php
include("layout/uheader.php");
?>
<!DOCTYPE html>
<html>
<body>
    <form action="Inquery.php" method="post">
        <label><h5>Inquiry details</h5></label>
        
                    <?php
                        $conn2 = new mysqli("localhost","root","","myproject");
                        $data = "SELECT * FROM message";
                        $result = $conn2->query($data);
                        echo "<table border='1' id='dtHorizontalExample' class='table table-dark' ><tr class='table-success'><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
                        while($row = $result->fetch_assoc())
                        {
                        $x = $row['email'];
                         echo "<tr class='dtHorizontalExampleWrapper'><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['subject']."</td><td>".$row['message']."</td></tr>";
                        }
                        echo "</table>";
                        ?>
    </form>
</body>
</html>
 