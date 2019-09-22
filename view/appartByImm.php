    <body>
        <h1>Résultat</h1>
        <?php foreach($result as $r){ //var_dump($r);?>
            <h1><?=$r['count(*)']; //affiche le résultat grâce au foreach (il n'y a que le chiffre du nb d'apparts dans $result)?></h1>
        <?php } ?> 
    </body>
</html>
