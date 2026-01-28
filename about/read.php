<?php

require 'config.php';
$sql="SELECT username,usercontact,useremail,usermessage FROM details";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "</td>"."<td>".$row["username"]."</td>"."<td>".$row["usercontact"]."</td>"."<td>".$row["useremail"]."</td>"."<td>".$row["usermessage"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "NO RESULTS";
}

$con->close();

?>