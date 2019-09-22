    <body>
        <div class="container">
            <!--$fetch = array();
            //$resultclone = $result;
            //$fetch = $result->fetchAll();
            //var_dump($fetch);
            //$fetch['0']['id_app']; -->
            <h1>Détail appartement </h1>
            <a href="index.php">Retour à l'accueil</a>
            <div>&nbsp;</div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Numéro</th>
                        <th scope="col">Etage</th>
                        <th scope="col">Surface</th>
                        <th scope="col">Prix</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $r){ ?>
                    <tr>
                        <th><?= $r['numero'] ?></th>
                        <td><?= $r['etage'] ?></td>
                        <td><?= $r['surface'] ?></td>
                        <td><?= $r['prix'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>