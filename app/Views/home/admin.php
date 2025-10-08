<h1>Správa článků</h1>
<a href="<?= site_url('admin/articles/create') ?>" class="btn btn-success mb-3">Přidat článek</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Datum</th>
            <th>Top</th>
            <th>Publikováno</th>
            <th>Akce</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td><?= esc($article['link']) ?></td>
                <td><?= esc($article['date']) ?></td>
                <td><?= $article['top'] ? 'Ano' : 'Ne' ?></td>
                <td><?= $article['published'] ? 'Ano' : 'Ne' ?></td>
                <td>
                    <a href="<?= site_url('admin/articles/edit/' . $article['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $article['id'] ?>">
                      Smazat
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal<?= $article['id'] ?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Smazat článek</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <div class="modal-body">
                            Opravdu chcete smazat článek "<?= esc($article['link']) ?>"?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušit</button>
                            <a href="<?= site_url('admin/articles/delete/' . $article['id']) ?>" class="btn btn-danger">Smazat</a>
                          </div>
                        </div>
                      </div>
                    </div>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
