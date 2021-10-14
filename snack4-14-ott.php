<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$class41 = [
    [
        'nome' => 'Franco',
        'cognome' => 'Pippozzi',
        'voti' => [
            5,
            6,
            10,
            7,
            9
        ],
    ],
    [
        'nome' => 'Luciana',
        'cognome' => 'Litizzetto',
        'voti' => [
            9,
            7,
            5,
            9,
            8,
        ],
    ],
    [
        'nome' => 'Fabio',
        'cognome' => 'Fazio',
        'voti' => [
            5,
            6,
            10,
            7,
            9
        ],
    ],
    [
        'nome' => 'Michelle',
        'cognome' => 'Hunziker',
        'voti' => [
            5,
            5,
            4,
            5,
            5,
        ],
    ],
];

?>

<ul>
    <?php foreach ($class41 as $key ) { ?>
        <?php
        $somma_voti = 0;
        foreach ($key['voti'] as $chiave) {
            $somma_voti += $chiave;
        };
        $mediavoti = $somma_voti / count($key['voti']);
        ?>
        <?php if($mediavoti >= 5){ ?>
        <li style= 'color: green'><?php echo $key['nome'] . ' ' . $key['cognome'] . ' - media:' . $mediavoti?></li>

        <?php }elseif ($mediavoti <5) { ?>
        <li style='color: red'><?php echo $key['nome'] . ' ' . $key['cognome'] . ' - media:' . $mediavoti?></li>
            
        <?php } ?>
    <?php } ?>
</ul>


