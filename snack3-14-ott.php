<!-- Utilizzare questo array: https://pastebin.com/CkX3680A Stampiamo il nostro array mettendo
 gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

 <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>




<div style='background-color : lightgray'>
    <ul>
        <?php foreach ($db['teachers'] as $key) { ?>
            <li><?php echo $key['name'] . $key['lastname']?></li>
        <?php } ?>
    </ul>
</div>

<div style='background-color : lime'>

    <ul>
        <?php foreach ($db['pm'] as $key) { ?>
            <li><?php echo $key['name'] . $key['lastname']?></li>
        <?php } ?>
    </ul>

</div>