<div class="col-md-12">
    <div class="page-header">
        <h1>LISTE DES TAGS</h1>
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
            <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><?php echo $tag['id'] ?></td>
                    <td><?php echo $tag['name'] ?></td>
                    <td><?php echo $tag['created_at'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-secondary">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>