<?php if($categories):?>
<div class="row d-flex categories">
    <?php 
    foreach ($categories as $category) :
        $v->insert("admin/fragments/widgets/project/category", ["category" => $category]);
    endforeach;
    ?>
</div>
<?php else:
    $v->insert("admin/fragments/widgets/general/message", ["message" => "Nenhuma categoria foi cadastrada neste tipo ainda ainda, quando for cadastrada alguma, ela aparecerá aqui.", "type" => "primary"]);
endif; ?>
