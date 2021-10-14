<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
 suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->



<?php 


$essay = "Nel 1693, William Penn scrisse un breve saggio, Discorso intorno alla pace presente e futura dell'Europa, dove per la prima volta nella storia propose \"la costituzione di un'Europa ordinata in una Dieta o in un Parlamento o in Stati generali\". Penn immaginò un Parlamento Europeo composto da circa 90 deputati rappresentanti dei diversi stati e popoli del continente. Penn difese l'idea del voto segreto, consentendo quindi ai deputati dello stesso paese di votare sulla base delle proprie convinzioni e non in base all'interesse del proprio stato di origine. Sorprendentemente, il suo Progetto riguardava solamente i paesi europei, anche se previde la possibilità di farvi aderire anche la Russia e, addirittura, l'Impero Ottomano. Da questo punto di vista, Penn può considerarsi come il primo pensatore a proporre l'istituzione di un Parlamento europeo. Il suo progetto fu ripreso nel 1710 dal quacchero John Bellers e nel 1814 da Claude-Henri de Saint-Simon. Penn tornò in Pennsylvania nel 1699, quando propose una federazione fra tutte le colonie inglesi del Nord America, anche se la proposta ebbe scarso seguito. Pur avendo avuto intenzione di stabilirsi definitivamente a Filadelfia, nel 1701 Penn dovette tornare in Inghilterra per via di difficoltà economiche dovute alle macchinazioni del suo amministratore Philip Ford, in seguito alle quali Penn rischiò di perdere la concessione della Pennsylvania. Bloccato in patria da una serie di cause legali contro Ford, nel 1712 Penn rinunciò definitivamente a tornare in America per via di una paralisi. Morì quindi in Inghilterra, nel 1718. La sua famiglia rimase formalmente proprietaria della Pennsylvania fino alla Rivoluzione Americana.";

$essay_array = explode( "." , $essay);

?>

<?php foreach ($essay_array as $key) {?>
    <p>
        <?php
            if(!empty($key)){

                echo $key; 
            }
        ?>
    </p>
<?php } ?>