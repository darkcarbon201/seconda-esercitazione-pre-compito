<?php 

if(isset($_GET["options"])){
    print_r($_GET["options"]);
    //se L'array options è definito posso scorrerlo:
    //con for   oppure
    //con un foreach
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    body{
        font-family: arial,sans-serif;
        align-content: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-left: 60px;
        padding-right: 60px;
        padding-top: 32px;
        padding-bottom: 32px;
        margin: 0;
        box-sizing: border-box;
    }
    fieldset{
        margin-top: 20px;
        width: 250px;
    }
    input[type ="text"]{
        width: 160px;
        height: 20px;
        margin-bottom: 5px;
    }

    input[type = "radio"],
    input[type = "checkbox"]{
        margin: 5px;
    }
</style>

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
                <input id="somma" type="radio" name="options[]" value="somma" >
                  <label for="somma">Somma</label> 
            </div>

            <div>
                <input id="differenza" type="radio" name="options[]" value="differenza" ><!--  lato php vedrà opzioni come un array che in questo caso sarà di tre valori-->
                <label for="differenza">Differenza</label> 
            </div>
            <div>
                <input id="prodotto" type="radio" name="options[]" value="round" >
                <label for="prodotto">Prodotto</label> 
            </div>
            <div>
                <input id="quozionte" type="radio" name="options[]" value="round" ><!--  lato php vedrà opzioni come un array che in questo caso sarà di tre valori-->
                <label for="quozionte">Quozionte</label> <!-- per collegare la label e la casella  il for del label e l'id dell'input devono avere lo stesso es : abs-->
            </div>

        </fieldset>
        <fieldset>
            <legend>opzioni</legend>
            <div>
                <input id="abs" type="checkbox" name="options[]" value="absolute" ><!--  lato php vedrà opzioni come un array che in questo caso sarà di tre valori-->
                <label for="abs">Valore assoluto</label> <!-- per collegare la label e la casella  il for del label e l'id dell'input devono avere lo stesso es : abs-->
            </div>
            <div>
                <input id="square" type="checkbox" name="options[]" value="square" ><!--  lato php vedrà opzioni come un array che in questo caso sarà di tre valori-->
                <label for="square">Quadrato</label> <!-- per collegare la label e la casella  il for del label e l'id dell'input devono avere lo stesso es : abs-->
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