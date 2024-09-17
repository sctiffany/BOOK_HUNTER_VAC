<div class="col-md-6">
    <div class="page-header">
        <h1>Ajout d'un book</h1>
    </div>
    <form action="books/add/insert" method="post">
        <div>
            <label for="isbn">ISBN : </label>
            <input type="text" name="isbn" placeholder="ISBN" required />
        </div>
        <div>
            <label for="title">Titre du book : </label>
            <input type="text" name="title" placeholder="Titre du book" required />
        </div>
        <div>
            <label for="resume">Résumé : </label>
            <textarea name="resume" id="resume"></textarea>
        </div>
        <div>
            <label for="publicated_at">Publié le : </label>
            <input type="date" name="publicated_at" />
        </div>
        <div>
            <label for="author_id">Auteur : </label>
            <select name="author_id" required>
                <?php foreach ($authors as $author): ?>
                    <option value="<?php echo $author['id'] ?>"><?php echo $author['firstname'] . " " . $author['lastname'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="category_id">Catégorie : </label>
            <select name="category_id" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="tags">Tags : </label>
            <div>
                <?php foreach ($tags as $tag): ?>
                    <input type="checkbox" id="<?php echo $tag['name'] ?>" name="<?php echo $tag['name'] ?>" />
                    <label for="<?php echo $tag['name'] ?>"><?php echo $tag['name'] ?></label>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-lg btn-primary" />
        </div>
    </form>
</div>