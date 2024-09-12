<div class="col-md-12">
    <div class="page-header">
        <h1>LISTE DES BOOKS</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Title</th>
                <th>Publicated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id'] ?></td>
                    <td><?php echo $book['firstname'] ?></td>
                    <td><?php echo $book['lastname'] ?></td>
                    <td><?php echo $book['title'] ?></td>
                    <td><?php echo $book['publicated_at'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-secondary">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>