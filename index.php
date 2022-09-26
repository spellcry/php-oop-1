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
    $nottingHill = new Movie('Notting Hill', 'Commedia', 'Inglese', "Notting Hill è un film del 1999 diretto da Roger Michell. Sceneggiato da Richard Curtis e prodotto da Duncan Kenworthy, reduci dal successo di Quattro matrimoni e un funerale del 1994, la pellicola è una commedia romantica ambientata nell'omonimo quartiere di Londra, che racconta la storia d'amore tra una star del cinema statunitense (Julia Roberts) e un libraio inglese (Hugh Grant). Rhys Ifans, Emma Chambers, Tim McInnerny, Gina McKee e Hugh Bonneville completano il cast degli attori principali del lungometraggio. Il film, che uscì nel Regno Unito il 21 maggio, vinse numerosi premi, tra cui tre Empire Awards e un British Comedy Awards, e ricevette inoltre tre candidature ai Golden Globe. Ben accolto dalla critica, Notting Hill ebbe un ottimo risultato al botteghino: a fronte di un budget di circa 42 milioni di dollari, ottenne oltre 360 milioni di dollari in tutto il mondo, diventando così il film britannico con maggiori incassi nella storia del cinema al momento della sua uscita e il maggior successo cinematografico nel Regno Unito del 1999.", "nottingh-hill.jpg");
    ?>
    <ul>
        <li>
            <?= $loHobbit->title ?><br>
            <?= $loHobbit->genre ?><br>
            <?= $loHobbit->language ?><br>
            <?= $loHobbit->description ?><br>
            <?= $loHobbit->poster ?>
        </li>
        <li>
            <?= $nottingHill->title ?><br>
            <?= $nottingHill->genre ?><br>
            <?= $nottingHill->language ?><br>
            <?= $nottingHill->description ?><br>
            <?= $nottingHill->poster ?>
        </li>
    </ul>
</body>
</html>
