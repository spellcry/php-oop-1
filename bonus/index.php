<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    include __DIR__ . '/app/Movie.php';

    $loHobbit = new Movie('Lo Hobbit', 'Fantasy', 'Inglese', "Lo Hobbit o la riconquista del tesoro (titolo originale: The Hobbit, sottotitolato There and Back Again, ossia \"Andata e ritorno\"), noto anche semplicemente come Lo Hobbit, è un romanzo fantasy scritto da J. R. R. Tolkien. La sua prima pubblicazione risale al 21 settembre 1937 ed ha venduto complessivamente più di 140 milioni di copie che lo rendono una delle opere di maggior successo del XX secolo. È seguito da Il Signore degli Anelli (The Lord of the Rings), pubblicato tra il 1954 ed il 1955 in 3 volumi.", "lo-hobbit.webp");
    $nottingHill = new Movie('Notting Hill', 'Commedia', 'Inglese', "Notting Hill è un film del 1999 diretto da Roger Michell. Sceneggiato da Richard Curtis e prodotto da Duncan Kenworthy, reduci dal successo di Quattro matrimoni e un funerale del 1994, la pellicola è una commedia romantica ambientata nell'omonimo quartiere di Londra, che racconta la storia d'amore tra una star del cinema statunitense (Julia Roberts) e un libraio inglese (Hugh Grant). Rhys Ifans, Emma Chambers, Tim McInnerny, Gina McKee e Hugh Bonneville completano il cast degli attori principali del lungometraggio. Il film, che uscì nel Regno Unito il 21 maggio, vinse numerosi premi, tra cui tre Empire Awards e un British Comedy Awards, e ricevette inoltre tre candidature ai Golden Globe. Ben accolto dalla critica, Notting Hill ebbe un ottimo risultato al botteghino: a fronte di un budget di circa 42 milioni di dollari, ottenne oltre 360 milioni di dollari in tutto il mondo, diventando così il film britannico con maggiori incassi nella storia del cinema al momento della sua uscita e il maggior successo cinematografico nel Regno Unito del 1999.", "notting-hill.jpg");
    $signoreDegliAnelli = new Movie('Il Signore degli Anelli', 'High Fantasy', 'Inglese', "Il Signore degli Anelli - La Compagnia dell'Anello (The Lord of the Rings: The Fellowship of the Ring) è un film colossal del 2001 diretto da Peter Jackson. Tratto dall'omonima prima parte del romanzo di J. R. R. Tolkien, è il primo lungometraggio della trilogia de Il Signore degli Anelli, seguito da Il Signore degli Anelli - Le due torri e da Il Signore degli Anelli - Il ritorno del re, basati sul secondo e terzo volume dei romanzi. Acclamato dalla critica e dal pubblico, ottenne vari riconoscimenti tra cui 4 premi Oscar su 13 candidature e 4 British Academy Film Awards. Nel 2007, l'AFI lo inserì al cinquantesimo posto nella classifica dei cento migliori film statunitensi di tutti i tempi e al secondo posto nella classifica dei dieci migliori film fantasy di tutti i tempi nell'AFI's 10 Top 10 della American Film Institute. Il film occupa il 24º posto nella lista del 2008 dell'Empire dei 500 migliori film di tutti i tempi. Nel 2021 è stato scelto per la conservazione nel National Film Registry della Biblioteca del Congresso degli Stati Uniti.", "il-signore-degli-anelli.jpg");
    $ritornoAlFuturo = new Movie('Ritorno al Futuro', 'Fantascienza', 'Inglese', "Ritorno al futuro (Back to the Future) è un film del 1985 diretto da Robert Zemeckis e interpretato da Michael J. Fox e Christopher Lloyd. Primo episodio della trilogia omonima, è considerato un'icona del cinema degli anni ottanta e ha riscosso un enorme successo a livello internazionale. La pellicola ha ricevuto il premio Oscar al miglior montaggio sonoro. Nel 2007 è stato scelto per essere conservato nel National Film Registry della Biblioteca del Congresso degli Stati Uniti. In occasione del suo 25º anniversario, il 27 ottobre 2010 il film è stato riproposto per un solo giorno nelle sale cinematografiche italiane, statunitensi e britanniche; la stessa cosa si è ripetuta il 21 ottobre 2015, in corrispondenza della data di viaggio verso il futuro dei protagonisti nel secondo capitolo della serie.", "ritorno-al-futuro.jpg");
    $armageddon = new Movie('Armageddon - Giudizio Finale', 'Fantascienza', 'Inglese', "Armageddon - Giudizio finale (Armageddon) è un film del 1998 diretto da Michael Bay. Negli Stati Uniti uscì il 1º luglio del 1998, mentre nelle sale italiane arrivò il 4 settembre dello stesso anno, preceduto da un'anteprima nelle principali località balneari il 14 agosto. È stato distribuito nei cinema circa due mesi dopo un altro film di fantascienza che tratta un argomento identico, Deep Impact.", "armageddon.jpg");
    
    $loHobbit->addActor('Martin', 'Freeman', 51);
    $loHobbit->addActor('Ian', 'McKellen', 83);
    $loHobbit->addActor('Richard', 'Armitage', 51);
    $nottingHill->addActor('Hugh', 'Grant', 62);
    $nottingHill->addActor('Julia', 'Roberts', 54);
    $nottingHill->addActor('Rhys', 'Ifans', 54);
    $signoreDegliAnelli->addActor('Elijah', 'Wood', 41);
    $signoreDegliAnelli->addActor('Ian', 'McKellen', 83);
    $signoreDegliAnelli->addActor('Liv', 'Tyler', 45);
    $ritornoAlFuturo->addActor('Michael J.', 'Fox', 61);
    $ritornoAlFuturo->addActor('Christopher', 'Lloyd', 84);
    $ritornoAlFuturo->addActor('Lea', 'Thompson', 61);
    $armageddon->addActor('Bruce', 'Willis', 67);
    $armageddon->addActor('Ben', 'Affleck', 50);
    $armageddon->addActor('Will', 'Patton', 68);

    $films = [];
    array_push($films, $loHobbit);
    array_push($films, $nottingHill);
    array_push($films, $signoreDegliAnelli);
    array_push($films, $ritornoAlFuturo);
    array_push($films, $armageddon);
    ?>
    <main class="main-content">
        <div class="container">
            <ul class="card-list">
                <?php
                foreach ( $films as $film ) {
                    ?>
                    <li class="card">
                        <img src="./assets/<?= $film->poster ?>"><br>
                        <h3 class="title"><?= $film->getTitle() ?></h3>
                        <p><span class="accent">Genere:</span> <?= $film->getGenre() ?></p>                    
                        <p><span class="accent">Attori:</span> <?= $film->printActors() ?></p>
                        <p><span class="accent">Lingua originale:</span> <?= $film->getLanguage() ?></p>
                        <p><span class="accent">Descrizione:</span> <?= $film->getDescription() ?></p>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>
