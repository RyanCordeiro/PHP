<?php
$sql = "SELECT * FROM calendars";
sc_select(rs, $sql);

if({rs} !== false) {
	while(!$rs->EOF) {
		
		echo $rs->fields["title"]."<br>";
		echo $rs->fields["serviço"]."<br>";
		echo $rs->fields["description"]."<br>";
		echo "<hr>";
		$rs->MoveNext();
	}
	$rs->Close();
}

?>
