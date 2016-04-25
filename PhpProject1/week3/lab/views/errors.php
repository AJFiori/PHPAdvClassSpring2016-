<?php if(isset($message)) : ?>
<center>
<p class="bg-success">

<?php 

	for($i = 0; $i < count($message); $i++)
	{	
		echo $message[$i] . "<br/>";
	} 

?>

</p>
</center>
<?php endif; ?>
