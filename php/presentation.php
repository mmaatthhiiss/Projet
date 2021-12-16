
<?php
$data=yaml_parse_file('data/presentation.yaml');


	echo "<section id='presentation'>";
	echo"<h1>Presentation</h1>"	;
	echo "<h2>Qui suis-je ?</h2>";
    echo $data["accroche"]."<br>";
	echo "<img id='premierephoto'src='https://img.wattpad.com/49f4a34d3208e9ba5ea83cc59367a501d3f3347d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f4f6e366e36734c436b31574568773d3d2d3330313830353936372e313436643265633163666262623034353233383534393330313433302e6a7067?s=fit&w=720&h=720' >";
	echo "</section>";
?>
