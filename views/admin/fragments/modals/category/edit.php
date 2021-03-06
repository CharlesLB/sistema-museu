<div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editcategoryLabel">Editar espécie <?= $category->name ?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="edit-category" action="<?= $router->route("category.edit"); ?>">
                <div class="modal-body">
                    <div class="form-group d-none">
                        <label for="category-id-input-edit">ID</label>
                        <input type="text" class="form-control category-input" name="id" id="category-id-input-edit" placeholder="ID" value="<?= $category->id ?>">
                    </div>
                    <div class="form-group">
                        <label for="category-name-input-edit">Nome da espécie</label>
                        <input type="text" class="form-control category-input" name="name" id="category-name-input-edit" placeholder="Nome da espécie" value="<?= $category->name ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Editar espécie</button>
                </div>
            </form>
        </div>
    </div>
</div>