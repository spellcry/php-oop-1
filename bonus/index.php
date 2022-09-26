<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <?php
    include __DIR__ . '/app/Movie.php';

    $loHobbit = new Movie('Lo Hobbit', 'Fantasy', 'Inglese', "Lo Hobbit o la riconquista del tesoro (titolo originale: The Hobbit, sottotitolato There and Back Again, ossia \"Andata e ritorno\"), noto anche semplicemente come Lo Hobbit, è un romanzo fantasy scritto da J. R. R. Tolkien. La sua prima pubblicazione risale al 21 settembre 1937 ed ha venduto complessivamente più di 140 milioni di copie che lo rendono una delle opere di maggior successo del XX secolo. È seguito da Il Signore degli Anelli (The Lord of the Rings), pubblicato tra il 1954 ed il 1955 in 3 volumi.", "lo-hobbit.webp");
    $nottingHill = new Movie('Notting Hill', 'Commedia', 'Inglese', "Notting Hill è un film del 1999 diretto da Roger Michell. Sceneggiato da Richard Curtis e prodotto da Duncan Kenworthy, reduci dal successo di Quattro matrimoni e un funerale del 1994, la pellicola è una commedia romantica ambientata nell'omonimo quartiere di Londra, che racconta la storia d'amore tra una star del cinema statunitense (Julia Roberts) e un libraio inglese (Hugh Grant). Rhys Ifans, Emma Chambers, Tim McInnerny, Gina McKee e Hugh Bonneville completano il cast degli attori principali del lungometraggio. Il film, che uscì nel Regno Unito il 21 maggio, vinse numerosi premi, tra cui tre Empire Awards e un British Comedy Awards, e ricevette inoltre tre candidature ai Golden Globe. Ben accolto dalla critica, Notting Hill ebbe un ottimo risultato al botteghino: a fronte di un budget di circa 42 milioni di dollari, ottenne oltre 360 milioni di dollari in tutto il mondo, diventando così il film britannico con maggiori incassi nella storia del cinema al momento della sua uscita e il maggior successo cinematografico nel Regno Unito del 1999.", "notting-hill.jpg");
    $signoreDegliAnelli = new Movie('Il Signore degli Anelli', 'High Fantasy', 'Inglese', "Il Signore degli Anelli (titolo originale in inglese: The Lord of the Rings) è un romanzo epico high fantasy scritto da J. R. R. Tolkien e ambientato alla fine della Terza Era dell'immaginaria Terra di Mezzo. Scritto a più riprese tra il 1937 e il 1949, fu pubblicato in tre volumi tra il 1954 e il 1955 nonché tradotto in trentotto lingue ed ha venduto oltre 150 milioni di copie che lo rendono una delle opere letterarie di maggior successo del XX secolo.", "il-signore-degli-anelli.jpg");
    $ritornoAlFuturo = new Movie('Ritorno al Futuro', 'Fantascienza', 'Inglese', "Ritorno al futuro (Back to the Future) è un film del 1985 diretto da Robert Zemeckis e interpretato da Michael J. Fox e Christopher Lloyd. Primo episodio della trilogia omonima, è considerato un'icona del cinema degli anni ottanta e ha riscosso un enorme successo a livello internazionale. La pellicola ha ricevuto il premio Oscar al miglior montaggio sonoro. Nel 2007 è stato scelto per essere conservato nel National Film Registry della Biblioteca del Congresso degli Stati Uniti. In occasione del suo 25º anniversario, il 27 ottobre 2010 il film è stato riproposto per un solo giorno nelle sale cinematografiche italiane, statunitensi e britanniche; la stessa cosa si è ripetuta il 21 ottobre 2015, in corrispondenza della data di viaggio verso il futuro dei protagonisti nel secondo capitolo della serie.", "ritorno-al-futuro.jpg");
    $armageddon = new Movie('Armageddon - Giudizio Finale', 'Fantascienza', 'Inglese', "Armageddon - Giudizio finale (Armageddon) è un film del 1998 diretto da Michael Bay. Negli Stati Uniti uscì il 1º luglio del 1998, mentre nelle sale italiane arrivò il 4 settembre dello stesso anno, preceduto da un'anteprima nelle principali località balneari il 14 agosto. È stato distribuito nei cinema circa due mesi dopo un altro film di fantascienza che tratta un argomento identico, Deep Impact.", "armageddon.jpg");
    
    $films = [];
    array_push($films, $loHobbit);
    array_push($films, $nottingHill);
    array_push($films, $signoreDegliAnelli);
    array_push($films, $ritornoAlFuturo);
    array_push($films, $armageddon);

    var_dump($films);
    ?>
    <div class="container">
        <ul>
            <?php
            foreach ( $films as $film ) {
                ?>
                <li>
                    <?= $film->title ?><br>
                    <?= $film->genre ?><br>
                    <?= $film->language ?><br>
                    <?= $film->description ?><br>
                    <img src="./assets/<?= $film->poster ?>">                    
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>
