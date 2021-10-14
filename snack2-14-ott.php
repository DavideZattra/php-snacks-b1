<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$user_number = $_GET["number"];
$numeri_unici = [];
while (count($numeri_unici) < 15) {
    $number = rand(1, 100);

    if (!in_array($number, $numeri_unici) && !is_int($number / $user_number)){
        
        array_push($numeri_unici, $number);
        // $numeri_unici[] = $number;

    }
};
// echo count($numeri_unici);
// print_r($numeri_unici)

?>

<h1><?php echo count($numeri_unici)?></h1>
<ul style="display : flex">
    <?php foreach ($numeri_unici as $key) { ?>
        <li style="padding-right : 10px; list-style: none">
            <?php echo $key ?>
        </li>
    <?php } ?>

    
</ul>
