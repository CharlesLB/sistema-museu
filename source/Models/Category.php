<?php

namespace Source\Models;

use CoffeeCode\DataLayer\Connect;
use CoffeeCode\DataLayer\DataLayer;
use Source\Models\Fish;
use Exception;

class Category extends DataLayer
{
    public function __construct()
    {
        parent::__construct("categories", ["name" , "type"]);
    }

    public function save(): bool
    {
        if (!$this->validate() || !parent::save()) {
            return false;
        }

        return true;
    }

    public function show(string $type,string $term = null): ?array
    {
        $conn = Connect::getInstance();
        $query = $conn->query("SELECT id, name FROM categories WHERE name LIKE '%$term%' and type LIKE '$type' ORDER BY name ASC");
        $categories = $query->fetchAll();

        if (!$categories) {
            $this->fail = new Exception("Nenhuma espécie foi encontrada. Talvez a espécie ainda não foi cadastrada ou o texto inserido está incorreto.");
            return null;
        }

        return $categories;
    }

    public function edit(bool $updateData = false): bool
    {
        if ($updateData) {
            if (!$this->validate(false, true) || !parent::save()) {
                return false;
            }
        } else {
            if (!$this->validate(true) || !parent::save()) {
                return false;
            }
        }

        return true;
    }

    public function destroy(): bool
    {
        if (!$this->validate(false, true) || !parent::destroy()) {
            return false;
        }

        $this->deleteFishesOfThiscategory();
        return true;
    }

    //
    // ─── AUXILIAR FUNCTIONS ─────────────────────────────────────────────────────────
    //

    public function findByName(string $type ,string $name = null): ?Object
    {
        if (!$name) {
            $categoryByName = $this->find("name = :name and type = :type", "name={$this->name} and type={$type}")->fetch();
        } else {
            $categoryByName = $this->find("name = :name and type = :type", "name={$name} and type={$type}")->fetch();
        }

        if ($categoryByName) {
            return $categoryByName;
        }

        return null;
    }

    public function fishCount(int $id = null): int
    {
        $fish = new Fish;
        if (!$id) {
            $total = $fish->find("category_id = :category_id", "category_id={$this->id}")->count();
        } else {
            $total = $fish->find("category_id = :category_id", "category_id={$id}")->count();
        }

        return $total;
    }

    public function fishesFind(): ?array
    {
        $fish = new Fish;

        $fishes = $fish->find("category_id = :category_id", "category_id={$this->id}")->fetch(true);

        return $fishes;
    }

    //
    // ─── PRIVATE FUNCTIONS ──────────────────────────────────────────────────────────
    //

    private function validate(bool $update = false, bool $deleteOrDataChange = false): bool
    {
        if ($update || $deleteOrDataChange) {
            if (!$this->findById($this->id)) {
                $this->fail = new Exception("Essa espécie já foi excluída.");
                return false;
            }
        }

        if (!$deleteOrDataChange) {
            if (empty($this->name)) {
                $this->fail = new Exception("Informe o nome da espécie");
                return false;
            }

            if ($this->findByName($this->type)) {
                $this->fail = new Exception("Espécie já cadastrada");
                return false;
            }
        }

        return true;
    }

    private function deleteChildsOfThiscategory(): void
    {
        $fishesOfThiscategory = $fish->find("category_id = :category_id", "category_id={$this->id}")->fetch(true);

        if ($fishesOfThiscategory) {
            foreach ($fishesOfThiscategory as $fish) {
                $fish->destroy();
            }
        }
    }
}
