    <body>
        <div class="alert alert-primary alert-dismissible fade show" role="alert" style="text-align: center;">
            Bonjour à tous! Bienvenue sur notre outil de classement des immeubles/appartements.
        </div>
        <div>&nbsp;</div>
        <form action="index.php" method="GET">
            <input type="text" name="id" class="">
            <input type="hidden" name="action" class="" value="listerAppart">
            <button class="btn btn-primary">Valider</button>
        </form>
        <form action="index.php" method="GET">
            <input type="text" name="id" class="">
            <input type="hidden" name="action" class="" value="afficherNbAppartByImm">
            <button class="btn btn-primary">Valider</button>
        </form>
        <div>&nbsp;</div>
        <h1>Ajouter un appartement</h1>
        <div>&nbsp;</div>
        <form action="index.php" method="GET">
            <input type="hidden" name="action" class="" value="addAppart">
            <input type="number" name="numero" class="">
            <input type="number" name="etage" class="">
            <input type="number" name="surface" class="">
            <input type="text" name="prix" class="">
            <input type="number" name="id_imm" class="">
            <button class="btn btn-primary">Valider</button>
        </form>
    </body>
</html>
