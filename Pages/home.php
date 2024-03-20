<!DOCTYPE html>
<html>

<head>
	<title>Meering Arcobaleno Management</title>
</head>

<body>
	<?php
	include("../Management/navbar.php");
	?>
	<table id="recap_situa" cellspacing="2" border="1" bordercolor="#333">
		<tr id="prima_riga">	
			<td><a class="titolo" title="data iscrizione">DATA</a></td>
			<td><a class="titolo" title="approvato">A</a></td>
			<td><a class="titolo" title="nome">NOME</a></td><!--nome e cognome insieme-->
			<td><a class="titolo" title="sesso">S</a></td>
			<td><a class="titolo" title="età">Y</a></td>
			<td><a class="titolo" title="cittadinanza">CIT</a></td>
			<td><a class="titolo" title="manager">MANAGER</a></td>
			<td><a class="titolo" title="gara1">G1</a></td>
			<td><a class="titolo" title="punti1">PTS1</a></td>
			<td><a class="titolo" title="gara2">G2</a></td>
			<td><a class="titolo" title="punti2">PTS2</a></td>
			<td><a class="titolo" title="worldathletics profile">WA</a></td>
			<td><a class="titolo" title="membro EAP">EAP</a></td>
			<td><a class="titolo" title="note/richieste atleta">Note Atleta</a></td>
			<td><a class="titolo" title="note organizzazione">Note Org</a></td>
			<td><a class="titolo" title="dettagli arrivo">Arrivo</a></td>
			<td><a class="titolo" title="ora arrivo">Ora Arrivo</a></td>
			<td><a class="titolo" title="dettagli partenza">Partenza</a></td>
			<td><a class="titolo" title="ora partenza">Ora Partenza</a></td>
			<td><a class="titolo" title="paghiamo noi">Vitto&Alloggio</a></td>
			<td><a class="titolo" title="richieste camera">Richieste camera</a></td>
			<td><a class="titolo" title="paghiamo cibo">Solo Cibo</a></td>
			<td><a class="titolo" title="ingaggio">$$</a></td>
			<td><!--elimina atleta--></td>
		</tr>
		<div id="athletes">
			<?php
			$result = selectWholeDb();
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["registration_date"] . "</td>";
					echo "<td>" . $row["stato"] . "</td>";
					echo "<td>" . $row["surname"] . " " . $row["name"]  . "</td>";
					echo "<td>" . $row["category"] . "</td>";
					echo "<td>" . $row["birthdate"] . "</td>";
					echo "<td>" . $row["citizenship"] . "</td>";
					echo "<td>" . $row["manager_email"] . "</td>";
					echo "<td>" . $row["comp1"] . "</td>";
					echo "<td></td>";
					echo "<td>" . $row["comp2"] . "</td>";
					echo "<td></td>";
					echo "<td>" . $row["link"] . "</td>";
					echo "<td>" . $row["eap"] . "</td>";
					echo "<td>" . $row["note_atle"] . "</td>";
					echo "<td>" . $row["note"] . "</td>";
					echo "<td>" . $row["arrivo"] . "</td>";
					echo "<td>" . $row["ora_arrivo"] . "</td>";
					echo "<td>" . $row["partenza"] . "</td>";
					echo "<td>" . $row["ora_partenza"] . "</td>";
					echo "<td>" . $row["paghiamo"] . "</td>";
					echo "<td>" . $row["richieste_alloggio"] . "</td>";
					echo "<td>" . $row["pahiamo_soloCibo"] . "</td>";
					echo "<td>" . $row["ingaggio"] . "</td>";
					//echo "<td><a href='deleteAthlete.php?id=" . $row["id"] . "'>Elimina</a></td>";
					echo "</tr>";
				}
			}
			?>
		</div>
</body>
</html>