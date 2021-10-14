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



<?php foreach ($db as $key => $value) { ?>

    <?php if($key == 'teachers'){ ?>

        <div style="background-color: gray">

            <?php foreach ($value as $key) { ?>

                <p><?php echo $key["name"] . ' ' . $key["lastname"]  ?></p>
                
            <?php } ?>

        </div>

    <?php } elseif ($key == 'pm') { ?>

        <div style="background-color: green">
    
            <?php foreach ($value as $key) { ?>
                
                <p><?php echo $key["name"] . ' ' . $key["lastname"]  ?></p>
                
            <?php } ?>

        </div>

    <?php } ?>

<?php } ?>
<ul>
    <?php foreach ($db['teachers'] as $key) { ?>
        <li><?php echo $key['name'] . $key['lastname']?></li>
    <?php } ?>
</ul>