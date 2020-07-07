<div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletecategoryLabel">Deletar espécie <?= $category->name ?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="delete-category" action="<?= $router->route("category.delete"); ?>" method="post">
                <div class="modal-body">
                    Se deseja realmente deletar para sempre a espécie <?= $category->name ?> clique em <strong>deletar espécie</strong>.
                    <div class="form-group d-none">
                        <label for="category-id-input">ID</label>
                        <input type="text" class="form-control category-input" name="id" id="category-id-input" placeholder="ID" value="<?= $category->id ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Deletar espécie</button>
                </div>
            </form>
        </div>
    </div>
</div>