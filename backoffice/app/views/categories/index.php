<div class="col-md-12">
    <div class="page-header">
        <h1>LISTE DES CATEGORIES</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['id'] ?></td>
                    <td><?php echo $category['name'] ?></td>
                    <td><?php echo $category['created_at'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-secondary">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>