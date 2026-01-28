<?php
require 'config.php';

$sql="SELECT username, password FROM login1";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["username"]."</td>"."<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

}
else{
    echo"No result";
}

$con->close();
?>