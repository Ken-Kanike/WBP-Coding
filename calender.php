<html>
<body>
    <?php
        $day = 1;
        switch( $day)
        {
            case 1 : echo ("<br>Day = Sunday"); 
            break;
            case 2 : echo ("<br>Day = Monday"); 
            break;
            case 3 : echo ("<br>Day = Tuesday"); 
            break;
            case 4 : echo ("<br>Day = Wednessday"); 
            break;
            case 5 : echo ("<br>Day = Thursday"); 
            break;
            case 6 : echo ("<br>Day = Friday");
            break;
            case 1 : echo ("<br>Day = Saturday"); 
            break;

            default : echo ("<br>Invalid Day");  
        }
    ?>
</body>
</html>