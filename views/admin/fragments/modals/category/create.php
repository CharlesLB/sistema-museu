<div class="modal fade" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createcategoryLabel">Adicionar categoria</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="create-category" action="<?= $router->route("category.create"); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category-type-input">Nome da espécie</label>
                        <input type="text" class="form-control" name="type" id="category-type-input" value="<?= $type ?>">
                    </div>
                    <div class="form-group">
                        <label for="category-name-input">Nome da categoria</label>
                        <input type="text" class="form-control" name="name" id="category-name-input" placeholder="Nome da espécie">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Adicionar categoria</button>
                </div>
            </form>
        </div>
    </div>
</div>