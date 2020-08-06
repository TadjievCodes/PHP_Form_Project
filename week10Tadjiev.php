<pre>
<?php


// As the second parameter we used, the UNIX EPOCH
// And first parameter are the special signs used for the date 

echo date("l d F Y - H:i:s", 1595622405);

echo   "</br>";
echo   "</br>";
echo   "</br>";




// mktime() Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the number
 //   of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

// the arguments are hour,minute,second,month,day,year
	//see php.net for parameters
	echo mktime(18,0,0,3,25,2020); // 1585155600 



    echo   "</br>";
echo   "</br>";


/*
Return current Unix timestamp. Often used in combination with integers to calculate another point in time.
time() function
*/

echo time() + (7 * 24 * 60 * 60);


// creating a space again on the line with a line break
echo   "</br>";
echo   "</br>";
echo   "</br>";






/*
The function expects to be given a string containing an English date format and will try to parse that format into a Unix timestamp
*/

	echo strtotime("now"), "\n";
	echo strtotime("10 September 2000"), "\n";
	echo strtotime("+1 day"), "\n";
	echo strtotime("+1 week"), "\n";
	echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
	echo strtotime("next Thursday"), "\n";
	echo strtotime("last Monday"), "\n";





    echo   "</br>";
    echo   "</br>";
    echo   "</br>";

    



// Accessing cookies just with a print_r
// you can view all the cookies in your $_COOKIE super global array
print_r($_COOKIE);




echo   "</br>";
    echo   "</br>";





//There are many instances where you will want to check if a variable has been declared and the value is anything but NULL isset() will return TRUE. 
// unset() will destroy the variables, read the php.net documentation from the links above 

	// 
	$a = “something”;
	var_dump(isset($a)); 	//TRUE
	unset($a);
	var_dump(isset($a)); 	//FALSE


    
    echo   "</br>";
    echo   "</br>";













?>
</pre>