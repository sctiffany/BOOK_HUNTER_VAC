<div class="col-md-6">
    <div class="page-header">
        <h1>Modification d'une catégorie</h1>
    </div>
    <form action="categories/edit/<?php echo $category['id'] ?>" method="post" class="edit">
        <div>
            <label for="name">Nom de la catégorie : </label>
            <input type="text" id="name" name="name" value="<?php echo $category['name'] ?>" />
        </div>
        <div>
            <input type="submit" class="btn btn-lg btn-primary" />
        </div>
    </form>
</div>