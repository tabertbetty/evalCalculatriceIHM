<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="http://localhost/evalCalculatriceIHM/"/>

<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="Modules/calculatrice/css/style.css">

    <script src="Modules/calculatrice/js/calcul.js"></script>
    <script src="Modules/calculatrice/js/racineCarre.js"></script>
    <script src="Modules/calculatrice/js/Factoriel.js"></script>
</head >

<body >
<h3>Calculatrice</h3>  
    <main id="container">
<!--ecran!-->
	            <input type="text"  disabled="disabled" name="result_calc" id="result_calc" class="result_calc" ><br>
<!--boutons!-->                     
                <input type="button" class="btn btn-primary" name="submit"  value="1" />
                <input type="button"  class="btn btn-primary" name="submit"  value="2"/>
                <input type="button" class="btn btn-primary" name="submit"  value="3"/>
                <input type="button"  class="btn btn-info" name="submit"  value="/"/>
               <br>
             
                <input type="button" class="btn btn-primary" name="submit"  value="4"/>
                <input type="button" class="btn btn-primary" name="submit"  value="5"/>
                <input type="button" class="btn btn-primary" name="submit"  value="6"/>
                <input type="button" class="btn btn-info" name="submit"  value="*"/>
               <br>
              
                <input type="button" class="btn btn-primary" name="submit"  value="7"/>
                <input type="button" class="btn btn-primary" name="submit"  value="8"/>
                <input type="button" class="btn btn-primary" name="submit"  value="9"/>
                <input type="button" class="btn btn-info" name="submit"  value="-"/>
              <br>
                <input type="button" class="btn btn-primary" name="submit"  value="0"/>
                <input type="button" class="btn btn-primary" name="submit"  value="."/>
                <input type="modulo" class="btn btn-info" name="submit"  value="%"/>
                <input type="button" class="btn btn-info" name="submit"  value="+ "/>
                <br>
             
               
                <tr>
                <input type="racineCarre" id="racineCarre" class="btn btn-warning" name="submit"  value="&#8730"/>
                <input type="facto"id="facto" class="btn btn-warning" name="submit"  value="!"/>
                <input type="button" class="btn btn-danger" name="submit"  value="C"/>
                <input type="resultat"id="resultat" class="btn btn-success" name="submit"  value="="/>
            <br>
         
    </main>            
</body>
    	
</html>
