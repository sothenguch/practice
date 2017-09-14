
<!DOCTYPE html>
<html>
    
<head>
    <style>
        @import url("css/styles.css");
    </style>
    
    <title> 777 Slot Machine </title>
</head>
<body>
    <?php
        
        function geturl($v){
            
            switch($v){
                case 1:
                    $imgurl= "./img/lemon.png";
                    break;
                case 2:
                    $imgurl= "./img/cherry.png";
                    break;
                case 3:
                    $imgurl= "./img/orange.png";
                    break;
                case 4:
                    $imgurl= "./img/seven.png";
                    break;
            }
            return $imgurl;
        }
        for ($i = 0; $i < 3; $i++){
            $r[$i] = rand(1,4);
        }
        $url1 = geturl($r[0]);
        $url2 = geturl($r[1]);
        $url3 = geturl($r[2]);
        echo "<div id='main'>";
            echo "<img id='reel1' src=".$url1.">";
            echo "<img id='reel2' src=".$url2.">";
            echo "<img id='reel3' src=".$url3.">";
            echo "<form action='./index.php'>";
                echo "<input type='submit' value='spin!'/>";
            echo "</form>";
            echo "<div id='output'>";
                $point = 0;
                if($r[0]== $r[1] && $r[1] == $r[2]){
                switch ($r[0]){
                    case 1: $point = 250;
                        break;
                    case 2: $point = 500;
                        break;
                    case 4: $point = 1000;
                        echo "<h1>Jackpot!!!</h1>";
                        break;
                }
                echo "<h2>You won $point points</h2>";
                }
                else{
                echo "<h3>Try Again!</h3>";
                }
            echo "</div>";
        echo "</div>";
    ?>
</body>
</html>