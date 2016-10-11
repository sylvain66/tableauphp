<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>tableauphp</title>
		<meta charset="utf-8">
	
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>	
	</head>
		<body>

			<?php
	
	
	
		$semaine = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');




		for ($numero = 0; $numero < 7; $numero++)

		{

		    echo $semaine[$numero] . '<br />';

		}






		$semaine =  array('lundi', 'mardi', 'mercredi', 'jeudi', "vendredi", 'samedi', 'dimanche');
			foreach ($semaine as $jours) 
				
		{

			echo $jours . '<br />';
		}






		
    		$i=0;
   				 while($i<count($semaine)) {
       			 echo "$semaine[$i]". '<br />';
       		 $i++;
    		}





/*!!!!! formulaire !!!!!*/
    		

    		$semaine2 = $_POST['semaine'];

    		switch ($semaine2) 
    		{
    			case lundi: 
    				echo "lundi c'est php et c'est nul";
    			break;
    			case mardi: 
    				echo "c'est moin pénible";
    			break;
    			case mercredi: 
    				echo "sa commence a sentir bon";
    			break;
    			case jeudi: 
    				echo "le moral devient bon";
    			break;
    			case vendredi: 
    				echo "alors là c'est génial!!!!";
    			break;

    			default:
    				echo "desolé mais il na pas de réponse !!!";

    		}

			?>

		
		<form method="post" action="index.php">
			<input type="text" name="semaine"/>s	
			<input type="submit" value="cliquez"/>

		</form>


		</body>

		</html>