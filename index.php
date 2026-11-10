<?php 

$a = isset($_GET["a"]) && is_numeric($_GET["a"]) && $_GET["a"] != "" ? floatval($_GET["a"]) :"NOT_VALID";
$b = isset($_GET["b"]) && is_numeric($_GET["b"]) && $_GET["b"] != "" ? floatval($_GET["b"]) :"NOT_VALID";

$errore_a = false;
$errore_b = false;

$mostraRisultato = false;

if ($a == "NOT_VALID"){
    $errore_a = true;
}
if( $b == "NOT_VALID"){
    $errore_b = true;
}

if($errore_a = false && $errore_b = false){
    $mostraRisultato = true;
    if (isset($_GET["options"])){
        print_r($_GET["options"]);
        //se L'array options è definito posso scorrerlo:
        //con for   oppure
        //con un foreach
        //foreach ($array as $element)
        // ... qui $element è l'elementop i-esimo dell'array
        if(in_array("absolute", $_GET["options"])){

        }
}

if (isset($_GET["options"]) && isset($_GET["operazione"])){
    print_r($_GET["options"]);
    print_r($_GET["operazione"]);
    //se L'array options è definito posso scorrerlo:
    //con for   oppure
    //con un foreach
    //foreach ($array as $element)
    // ... qui $element è l'elementop i-esimo dell'array
    if(in_array("absolute", $_GET["options"])){

    }



    //foreach ($_GET["options"] as $element){
    //    echo $element . "<br>";
        // in questo caso particolare possiamo usare un'altra funzione per fare operazioni condizionali 
    //}

    //if(in_array("absolute", $_GET["options"])){
            // allora calcola il valore assoluto;
            // qui controllo se l'utente ha selezionato ANCHE square Senza else if ma solo con if()
    //}
    
}
?>


<?php if($mostraRisultato = true)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>
<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <form action="index.php" method="get">
        <h1>Calcolatrice</h1>
        <div>
            <label for="a"><b>a:</b></label>
            <input type="text" name="a" id="a">
        </div>
        <div>
            <label for="b"><b>b:</b></label>
            <input type="text" id="b" name="b">
        </div>        
   

    
        <fieldset>
            <legend>Operazione</legend>
        
            <div>
                <input id="somma" type="radio" name="operazione[]" value="somma" >
                  <label for="somma">Somma</label> 
            </div>

            <div>
                <input id="differenza" type="radio" name="operazione[]" value="differenza" >
                <label for="differenza">Differenza</label> 
            </div>
            <div>
                <input id="prodotto" type="radio" name="operazione[]" value="prodotto" >
                <label for="prodotto">Prodotto</label> 
            </div>
            <div>
                <input id="quozionte" type="radio" name="operazione[]" value="quozionte" >
                <label for="quozionte">Quozionte</label>
            </div>

        </fieldset>
        <fieldset>
            <legend>opzioni</legend>
            <div>
                <input id="abs" type="checkbox" name="options[]" value="absolute" >
                <label for="abs">Valore assoluto</label> 
            </div>
            <div>
                <input id="square" type="checkbox" name="options[]" value="square" >
                <label for="square">Quadrato</label> 
            </div>
            <div>
                <input id="round" type="checkbox" name="options[]" value="round" ><!--  lato php vedrà opzioni come un array che in questo caso sarà di tre valori-->
                <label for="round">Arrotonda a 2 decimali</label> <!-- per collegare la label e la casella  il for del label e l'id dell'input devono avere lo stesso es : abs-->
            </div>
            
        </fieldset>
        

        <input type="submit" value="calcola">
    </form>
    
</body>
</html>

