<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\Category;

class CategoryController extends Controller
{
    private $category;

    public function __construct($router)
    {
        parent::__construct($router);

        $this->category = new Category;
    }

    public function create(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

        $this->category->name = $data["name"];

        if (!$this->category->save()) {
            $callback["alert"] = $this->view->render("admin/fragments/widgets/general/alert", ["type" => "danger", "message" => $this->category->fail()->getMessage()]);
            $callback["success"] = false;
            echo json_encode($callback);
            return;
        }
        
        $callback["success"] = true;
        $callback["alert"] = $this->view->render("admin/fragments/widgets/general/alert", ["type" => "success", "message" => "Espécie {$this->category->name} foi cadastrada com sucesso! :)"]);
        $callback["category"] = $this->view->render("admin/fragments/widgets/project/category", ["category" => $this->category]);
        echo json_encode($callback);
    }

    public function search(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);
        $term = $data["search"];

        $categories = $this->category->show($term);

        if (!$categories) {
            $callback["message"] = $this->view->render("admin/fragments/widgets/general/message", ["type" => "error", "message" => $this->category->fail()->getMessage()]);
        } else {
            $callback["categories"] = $this->view->render("admin/fragments/pages/project/categories", ["categories" => $categories]);
        }
        echo json_encode($callback);
    }

    public function edit(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

        $this->category->id = $data["id"];
        $this->category->name = ucfirst($data["name"]);

        if (!$this->category->edit()) {
            $callback["alert"] = $this->view->render("admin/fragments/widgets/general/alert", ["type" => "danger", "message" => $this->category->fail()->getMessage()]);
            $callback["success"] = false;
            echo json_encode($callback);
            return;
        }

        $callback["success"] = true;
        $callback["alert"] = $this->view->render("admin/fragments/widgets/general/alert", ["type" => "success", "message" => "Espécie {$this->category->name} foi editada com sucesso! :)"]);
        $callback["categoryName"] = $this->category->name;
        echo json_encode($callback);
    }

    public function delete(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);
        $this->category->id = $data["id"];

        if (!$this->category->destroy()) {
            $callback["alert"] = $this->view->render("admin/fragments/widgets/general/alert", ["type" => "error", "message" => $this->category->fail()->getMessage()]);
            echo json_encode($callback);
            return;
        };

        $callback["success"] = true;
        echo json_encode($callback);
    }
}
