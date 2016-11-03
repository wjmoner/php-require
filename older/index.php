<!DOCTYPE html>

<html>
<head>
	<title>PHP Basics</title>
</head>
<body>

<h1>PHP Basics</h1>

<?php include "nav.php" ?>
<?php // also can include_once or require or require_once ?>

<p>The year is <?php echo date('Y'); ?></p>
<p>I was born on a 
	<?php echo date("l", mktime(0, 0, 0, 10, 4, 1975)); ?>
</p>
<p>The full date is <?php echo date(DATE_RFC2822); ?> 
</p>

<p style="font-size: 2em"> <?php include "description.txt" ?>
</p>

</body>
</html>