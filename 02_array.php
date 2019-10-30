<?php
//creo in tutte le modalità un array di parole con la b e le stampo a video
echo "visualizzazione array 1 <br>";
$arrayB1=array('bianco', 'bandiera', 'basso','bicchiere','battello');
for($i=0; $i<5;$i++){
    echo $arrayB1[$i]."<br>";
}
echo "<br>visualizzazione array 2<br>";
$arrayB2=['bianco', 'bandiera', 'basso','bicchiere','battello'];
for($i=0; $i<5;$i++){
    echo $arrayB2[$i]."<br>";
}
echo "<br>visualizzazione array 3<br>";
$arrayB3= array(
                0=>"bianco",
                1=>"bandiera",
                2=>"basso",
                3=>"bicchiere",
                4=>"battello");
foreach($arrayB3 as $a){
    echo $a."<br>";
}
echo "<br>visualizzazione array 4<br>";
$arrayB4= array(
                "bi"=>"bianco",
                "ba"=>"bandiera",
                "bs"=>"basso",
                "bc"=>"bicchiere",
                "bt"=>"battello");
foreach($arrayB4 as $key=>$val){
    echo "$key=$val<br>";
}
?>