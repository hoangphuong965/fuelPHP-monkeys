<h2>Viewing #<?php echo $monkey->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $monkey->name; ?></p>
<p>
	<strong>Still here:</strong>
	<?php echo $monkey->still_here; ?></p>
<p>
	<strong>Height:</strong>
	<?php echo $monkey->height; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $monkey->description; ?></p>

<?php echo Html::anchor('monkey/edit/'.$monkey->id, 'Edit'); ?> |
<?php echo Html::anchor('monkey', 'Back'); ?>