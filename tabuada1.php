<?php

$tab = 1;
if(isset($_POST["edTABUADA"])){
    $tab = $_POST["edTABUADA"];
    if(!is_numeric($tab)){
        echo "<br>O valor informado é um número.<br>";
    }else{

    $num=0;
    while($num<=0012){
        echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
        $num++;
    }

}
}

?>

<form method="post">
<input type="text" name="edTABUADA" >
<input type="submit">
</form>

</body>