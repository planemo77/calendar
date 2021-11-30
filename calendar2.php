<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CALENDAR 2</title>
    <style>
        body{
            background-color: burlywood;
            margin-top: 3%;
        }
        .col{
            padding: 3%;          
        }
    </style>

</head>
<body>
<div class="container">
    <?php 
            date_default_timezone_set('UTC');
            $month = 11;
            $year = 2021;
            $date = "2021-11-01";
            $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);                   
            $date=explode("-", $date);
            $week_day = date("w", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
            //
            echo "<div class=\" d-flex justify-content-center\">Місячний календар на $month місяць $year року</div>";
            echo "<br>";
            echo "<div class=\"row \">";
                $foo = array(1 => 'Пн', 2 => 'Вт', 3 => 'Ср', 4 => 'Чт', 5 => 'Пт', 6 => 'Сб', 7=> 'Нд');
                foreach ($foo as $k => $v) {echo "<div class=\"col \"> $v</div> "; }
            echo "</div>";
            echo "<div class=\"row\">";
                If($week_day == 0){ $week_day = $week_day +7;}
                for($j=1; $j<$week_day  ;$j++){echo "<div class=\"col  \">  </div> ";}  
                for($i = 1; $i <=35; $i++)
                {
                    if($i>$number && $i<=35){
                         echo "<div class=\"col\"></div>";
                    }else{echo "<div class=\"col\"> $i</div> ";}           
                    $row = (7 - $week_day) +1;
                    if ( $i == $row  ){
                        echo "<div class=\"row\"></div> ";                  
                    }elseif($i == $row + 7 ){
                        echo "<div class=\"row\"></div> ";
                    }elseif($i == $row + 14 ){
                        echo "<div class=\"row\"></div> ";
                    }elseif($i == $row + 21 ){
                        echo "<div class=\"row\"></div> ";
                    }elseif($i == $row + 28){
                        echo "<div class=\"row \"></div> ";  
                    }
                }
            echo "</div > "; 
    ?> 
    <br>
    <div  class=" d-flex justify-content-center">
         <p><a href="index.php">INDEX</a></p>
    </div>
</div>
</body>
</html>