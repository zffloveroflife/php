<?php
	header('Content-Disposition: attachment; filename="two.html"');
	header('Content-Length:'.filesize("two.html"));
	readfile("two.html");
	
