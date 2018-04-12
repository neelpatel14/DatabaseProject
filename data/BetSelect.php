<?php
 require_once('./library.php');
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno()) {
 echo("Can't connect to MySQL Server. Error code: " .
mysqli_connect_error());
 return null;
 }
 // Form the SQL query (a SELECT query)
 $sql="SELECT * FROM PJ_Bets";
 $result = mysqli_query($con,$sql);
 // Print the data from the table row by row
 echo "<table border=1><tr><th>betid</th><th>Amount</th><th>Odds</th><th>Outcome</th><th>Type</th></tr>\n";
 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td>" . $row['betid'] . "</td>";
   echo "<td>" . $row['Amount'] . "</td>";
   echo "<td>" . $row['Odds'] . "</td>";
   echo "<td>" . $row['Outcome'] . "</td>";
   echo "<td>" . $row['Type'] . "</td>";
   echo "</tr>";
 // echo $row['betid'];
 // echo " " . $row['Amount'];
 // echo " " . $row['Odds'];
 // echo " " . $row['Outcome'];
 // echo " " . $row['Type'];
 // echo "<br>";
 // echo "<tr><td>$row['betid']</td><td>$row['Amount']</td><td>$row['Odds']</td><td>$row['Outcome']</td><td>$row['Type']</td></tr>";
}
echo "</table>";

 mysqli_close($con);
 ?>
