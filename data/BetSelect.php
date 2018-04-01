<?php
 	require "dbutil.php";
 	$db = DbUtil::loginConnection();

 	$stmt = $db->stmt_init();

 	if($stmt->prepare("select * from PJ_Bets") or die(mysqli_error($db))) {
 		$stmt->execute();
 		$stmt->bind_result($betid, $Amount, $Odds, $Outcome, $Type);
 		echo "<table border=1><th>betid</th><th>Amount</th><th>Odds</th><th>Outcome</th><th>Type</th>\n";
 		while($stmt->fetch()) {
 			echo "<tr><td>$betid</td><td>$Amount</td><td>$Odds</td><td>$Outcome</td><td>$Type</td></tr>";
 		}
 		echo "</table>";

 		$stmt->close();
 	}

 	$db->close();
?>
