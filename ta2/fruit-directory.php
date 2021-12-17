<!DOCTYPE html>
<html>
    <head>
		<title>Fruit Directory</title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body bgcolor="#F2F0DF">
    <ul>
        <li><a href ="montharray.php">Calendar</a></li>
        <li><a class="active" href="fruit-directory.php"><i>Fruit Directory</i></a></li>
        <li><a href="shapevolume.php">Volume of Shapes</a></li>
        <li><a href="studresume.php">Student Resume</a></li>
        <li><a href="stringfunc.php">String Functions</a></li>
        <li style="float:right"><a>By Dana Huang</a>
    </ul>

    <?php
	echo "<br><br>";
	$fruit = array( array('<center><img src="mango.jpeg" width="100" height="100">', "Name"=>"Mango", "Crescent shaped fruit with smooth yellow exterior.", "Mangoes are related to cashews and pistachios."),
				   array('<center><img src="apple.jpeg" width="100" height="100">', "Name"=>"Apple", "The apple is a pome (fleshy) fruit, in which the ripened ovary and surrounding tissue both become fleshy and edible", "Apples make up half of the world's deciduous fruit tree production"),
				   array('<center><img src="durian.jpeg" width="100" height="100">', "Name"=>"Durian", "A large fruit with spiky hard outer shell and is known for its pungent smell", "Durian is banned in the public transportation, hotels and airplanes in some parts of southeast Asia because of its unpleasant aroma."),
				   array('<center><img src="kiwi.jpeg" width="100" height="100">', "Name"=>"Kiwi", "A sweet, citrusy, brownish-green fruit approximately the size of a chicken's egg", "Kiwifruit was named after its uncanny resemblance to the ‘fuzzy brown kiwi’ – New Zealand’s National Bird."), 
				   array('<center><img src="raspberry.jpeg" width="100" height="100">', "Name"=>"Raspberry", "A small, deep colored berry which has a tender texture, a sweet delicate taste and a pleasant aroma.", "The word “raspberry” seems to come from the Old French raspise, a term meaning “sweet rose-colored wine”"),
				   array('<center><img src="banana.jpeg" width="100" height="100">', "Name"=>"Banana", "A curved, yellow fruit with a thick skin and soft sweet flesh.", "Bananas are classified as a berry."),
				   array('<center><img src="strawberry.jpeg" width="100" height="100">', "Name"=>"Strawberry", "Strawberries are a sweet fruit, with a juicy texture and easy to recognize aroma.", "The average strawberry has 200 seeds."),
				   array('<center><img src="grapes.jpeg" width="100" height="100">', "Name"=>"Grapes", "Grapes are fleshy, rounded fruits that grow in clusters made up of many fruits of greenish, yellowish or purple skin", "One cup of grapes, with about 100 calories, provides more than a quarter of the daily recommended values of vitamins K and C"),
				   array('<center><img src="orange.jpeg" width="100" height="100">', "Name"=>"Orange", "Round orange-colored fruit with tough shiny orange skin", "With a high resistance to disease, more oranges are killed by lightning than by plant diseases."),
				   array('<center><img src="dragon.jpeg" width="100" height="100">', "Name"=>"Dragon Fruit", "Has a dramatic appearance, with bright red, purple or yellow-skinned varieties and prominent scales.", "The natural pigments of Dragon Fruit flesh can be used as dye or as ingredients in cosmetics.") 
				 ); 
				 
	$col = array_column($fruit, 'Name');
	array_multisort($col, SORT_ASC, $fruit);
	 
	echo "<table class='center'>";
	echo "<th colspan=4><h3>My Fruits</h3></th>";	
	echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>";
		foreach ($fruit as $val) {
			echo "<tr>";
			foreach ($val as $info) {
				echo "<td>{$info}</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
	echo "<br><br>";
?>
    </body>
</html>