<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../extra/main.css">

	<title>VSV &mdash; PHP Module 1</title>

	<style>
		.emoji {

			font-size: 4rem;
			margin: 0;

		}
	</style>

</head>

<body>

	<?php

	/*******************/
	/* Filename: 1.php
	/* Author: Oscar Hill
	/* Purpose: VSV Applied computing PHP module 1
	/* Created: April 2021
	/*******************/

	?>

	<a href="/folio" class="back">Back to index</a>

	<h1 id="1.3"> Module 1.3 &mdash; Syntax </h1>

	<span>
		<?php 'Semicolons!'; ?>
	</span>

	<br>

	<span>
		<?php echo 'No semicolons!!!' ?>
	</span>

	<br>

	<span>
		<?php echo 'Fails to compile without closing tags (and trailing content)' ?>
	</span>

	<br>

	<span>
		Prepending content...
		<?php echo "Echo'd content "; ?>
		Trailing content...
	</span>

	<br>

	<span>
		Prepending content...
		<?= "Newline content " ?>
		Trailing content...
	</span>

	<br>

	<span>
		<?php
		echo "Statement #1 — ";
		echo "Statement #2"
		?>
	</span>

	<br>

	<h2> Newlines </h2>

	<span>
		<?php echo "

		<p> Lorem ipsum dolor sit amet. </p>
		Lorem ipsum dolor sit amet. /n \n
		Lorem ipsum dolor sit amet. /r \r
		Lorem ipsum dolor sit amet. <br>
		Lorem ipsum dolor sit amet.

		" ?>
	</span>

	<h1 id="1.4"> Module 1.4 &mdash; Commenting </h1>

	<!-- HTML Commenting -->

	<?php

	// echo "PHP Single line c++ style comment"
	# echo "PHP Single line Unix shell style comment"

	/*
		echo "Multi..."
		echo "Line..."
		echo "C Style..."
		echo "Comment..."
	*/

	?>

	<span>
		<?php

		echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, sapiente. <br>"; // Lorem10
		echo "Something secret lurks...."; // echo "QSBzZWNyZXQh"

		// echo "Useless #1"
		# echo "Useless #2"

		?>
	</span>

	<h1 id="1.5"> Module 1.5 &mdash; HTML Layout </h1>

	<p class="emoji">
		<?php

		// Have a look at this lovely EMMET constructed HTML boilerplate!

		echo "\u{1F648}";
		echo "\u{1F649}";
		echo "\u{1F64A}"

		?>
	</p>

</body>

</html>