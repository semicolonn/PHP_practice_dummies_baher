<?php


	function fontWrap($text, $fontSize){


		echo "<span style=\"font-size: $fontSize\">".$text."</span>";
	}

//call above function here

	fontWrap("A Heading<br/>","24pt");
	fontWrap("some body text<br/>","16pt");
	fontWrap("smaller body text<br/>","12pt");
	fontWrap("even smaller body text<br/>","10pt");



////////////////////////////////////////////////////////////////////////////

	function fontWrapDef($text, $fontSize="12pt"){ // with default size value


		echo "<span style=\"font-size: $fontSize\">".$text."</span>";
	}


	fontWrapDef("A Heading<br/>");
	fontWrapDef("some body text<br/>");
	fontWrapDef("smaller body text<br/>");
	fontWrapDef("even smaller body text<br/>");



	function boldText($text){

		echo "<b>$text</b>";

	}

	boldText("Hello World format bolded");




?>