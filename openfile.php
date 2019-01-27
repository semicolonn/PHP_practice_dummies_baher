<?php

	($fp= fopen("exist.txt", "r")) || die("Could not open file, sorry!"); //read file exist.txt
	echo $fp;