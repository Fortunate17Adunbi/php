<?php   
    #   the date() function
    // this the date of thr server. it can receve two parameter the first one is compulsory while the second is optional
    // date(format, timestamp)
    // d - Represents the day of the month (01 to 31)
    // m - Represents a month (01 to 12)
    // Y - Represents a year (in four digits)
    // l (lowercase 'L') - Represents the day of the week 
    echo date("Y/m/d");
    echo "</br>";
    echo date("d.m.Y");
    echo "</br>";
    echo date("l");
    echo "</br>";

    #   automatic copyright
    echo "&copy 2010-<?php echo date('Y');?>";

?>