<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="title">Titre du livre :</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" required>
        </div>
        <div class="form-group col-md-5">
            <label for="author">Auteur :</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Auteur" required>
        </div>
        <div class="form-group col-md-2">
            <label for="date">Date de publication :</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="Date de publication" required>
        </div>
        <div class="form-group col-md-5">
            <label for="category">Catégorie du livre :</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Catégorie du livre" required>
        </div>
        <div class="form-group col-10">
            <label for="resume">Résumé :</label>
            <textarea class="form-control" name="resume" id="resume" rows="5" placeholder="Renseignez le résumé du livre" required></textarea>
        </div>
    </div>
    <button type="submit" class="my-3 btn btn-success">Enregistrer</button>
</form>