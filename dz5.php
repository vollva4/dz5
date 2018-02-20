<?php 
$content = file_get_contents('bd.json') ;
//echo $content;
$decoded = json_decode($content, true);
/*echo '<pre>';
print_r($decoded);
echo count($decoded)*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    <div>
    	<table style="border: 1px solid black">
    		<thead>	Телефонная книга.</thead>
    		<tr>
    			<th>Имя.	</th>
    			<th>Фамилия.	</th>
    			<th>Адрес.	</th>
    			<th>Телефон.	</th>
    		</tr>
    		<?php
    		/*for ($i=0; $i < count($decoded); $i++) {
    			$name = $decoded[$i] ['firstName'];
    			$family = $decoded[$i] ['lastName'];
    			$adress = $decoded[$i] ['address'];
    			$number = $decoded[$i] ['phoneNumber'];
    			?>*/
    			foreach ($decoded as $persone ) {
    				/*echo '<pre>';
    				/print_r($persone);
    				$name = $persone ['firstName'];
    				$family = $persone ['lastName'];
    				$adress = $persone ['address'];
    				$number = $persone ['phoneNumber'];
    				?>*/
    				?>
    			<tr>
    			<td><?=$persone ['firstName'] ?>	</td>
    			<td><?=$persone ['lastName'] ?>	</td>
    			<td><?=$persone ['address'] ?>	</td>
    			<td><?=$persone ['phoneNumber'] ?>	</td>	
    			</tr>
    		<?php }; ?>
    	</table>
    </div>
</body>