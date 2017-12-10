<?php
	$heading = 'Welcome'; 
	$fruit = array('Apple','Orange','Grapes');
	$keyval = array('fruit1'=>'Apple','fruit2'=>'Orange','fruit3'=>'Grapes');
	$user = array('first_name'=>'xadnem','last_name'=>'mendax','email'=>'abcd@efgh.ijk');
	foreach($fruit as $fruits){
		echo $fruits.'<br>';
	}
?>

<h1>Welcome</h1>

<h2><?php echo $heading;?></h2>

<p><?php echo $fruit[0];?></p>

<p><?php echo $keyval['fruit3'];?></p>

<ul>
	
	<?php foreach($fruit as $fruits) : ?>
		<li> <?php echo $fruits; ?> </li>
	<?php endforeach; ?>
	
</ul>
