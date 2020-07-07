<?php $v->layout('admin/_theme'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <div>
        <?php if ($page == "collection") : ?>
            <form class="d-none d-sm-inline-block form-inline navbar-search mr-2 search" action="<?= $router->route("category.searchCollection"); ?>">
                <div class="input-group">
                    <input type="text" name="search" class="form-control border-0 small" id="categoryInput" placeholder="Pesquisar categoria" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        <?php else : ?>
            <form class="d-none d-sm-inline-block form-inline navbar-search mr-2 search" action="<?= $router->route("category.searchLibrary"); ?>">
                <div class="input-group">
                    <input type="text" name="search" class="form-control border-0 small" id="categoryInput" placeholder="Pesquisar categoria" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        <?php endif; ?>

        <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#create-category">
            Adicionar categoria
        </button>
    </div>
</div>

<!-- categories -->
<?= $v->insert("admin/fragments/pages/project/categories", ["categories" => $categories]) ?>

<!-- Modals -->
<?php $v->insert("admin/fragments/modals/category/create", ["type" => $page]) ?>

<?php $v->start("scripts"); ?>
<?php if ($page == "collection") :
    $v->insert("admin/fragments/scripts/collectionCategories");
else :
    $v->insert("admin/fragments/scripts/libraryCategories");
endif; ?>
<?php $v->end(); ?>