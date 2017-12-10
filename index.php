<?php
	$heading = 'Welcome'; 
	$fruit = array('Apple','Orange','Grapes');
	$keyval = array('fruit1'=>'Apple','fruit2'=>'Orange','fruit3'=>'Grapes');
	$user = array('First name'=>'xadnem','Last name'=>'mendax','Email'=>'abcd@efgh.ijk');
	foreach($fruit as $fruits){
		echo $fruits.'<br>';
	}

	$x = 10;
	if($x==1)
		echo 'YES';
	
	else
		echo 'NO';


	function sayHello($words){
		echo 'Hello World';
		echo $words;
	}
	sayHello('');
	sayHello('hello again');
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


<ul>

<?php foreach($user as $key=>$value) : ?>

	<li><?php echo $key;?> : <?php echo $value;?></li>

<?php endforeach;?>
</ul>
