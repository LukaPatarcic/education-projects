<?php

namespace App\Controllers;
use App\Core\Role\AdminRoleController;
use App\Models\CategoryModel;
use App\Models\ItemModel;

class AdminDashboardController extends AdminRoleController
{

    public function index()
    {

    }

    public function getAddItem()
    {
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories', $categories);

    }

    public function postAddItem()
    {
        $itemName = filter_input(INPUT_POST, 'item_name', FILTER_SANITIZE_STRING);
        $itemCategory = filter_input(INPUT_POST, 'item_category', FILTER_SANITIZE_STRING);
        $itemPrice = sprintf('%.2f',filter_input(INPUT_POST, 'item_price', FILTER_SANITIZE_STRING));
        $itemDescription = filter_input(INPUT_POST, 'item_description', FILTER_SANITIZE_STRING);

        $itemModel = new ItemModel($this->getDatabaseConnection());
        $add = $itemModel->add([
            'item_name' => $itemName,
            'item_price' => $itemPrice,
            'category_id' => $itemCategory,
            'item_description' => $itemDescription
        ]);

        if ($add) {
            return $this->set('message', 'Successfully added a new item');
        }
        return $this->set('message', 'Item not added check if your fields are valid');
    }

    public function getAddCategory()
    {

    }

    public function postAddCategory()
    {
        $categoryName = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $add = $categoryModel->add([
            'category_name' => $categoryName,
        ]);

        if ($add) {
            return $this->set('message', 'Successfully added a new category');
        }
        return $this->set('message', 'Item not added check if your fields are valid');
    }

    public function items()
    {
        $itemModel = new ItemModel($this->getDatabaseConnection());
        $items = $itemModel->getAllWithCategory();

        $this->set('items',$items);
    }

    public function getEditItem($id)
    {
        $itemModel = new ItemModel($this->getDatabaseConnection());
        $item = $itemModel->getWithCategory($id);

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        if(!$item) {
          return $this->set('message','No item with that id');
        }

        if(!$categories) {
            return $this->set('message','No categories');
        }
        $this->set('categories',$categories);
        $this->set('item',$item);

    }

    public function postEditItem()
    {
        $itemId = filter_input(INPUT_POST,'item_id',FILTER_SANITIZE_NUMBER_INT);
        $itemName = filter_input(INPUT_POST, 'item_name', FILTER_SANITIZE_STRING);
        $itemCategory = filter_input(INPUT_POST, 'item_category', FILTER_SANITIZE_STRING);
        $itemPrice = sprintf('%.2f',filter_input(INPUT_POST, 'item_price', FILTER_SANITIZE_STRING));
        $itemDescription = filter_input(INPUT_POST, 'item_description', FILTER_SANITIZE_STRING);


        $itemModel = new ItemModel($this->getDatabaseConnection());
        $edit = $itemModel->editByID($itemId,[
            'item_name' => $itemName,
            'item_price' => $itemPrice,
            'category_id' => $itemCategory,
            'item_description' => $itemDescription
        ]);

        if ($edit) {
            return $this->set('message', 'Successfully edited item '.$itemId);
        }
        return $this->set('message', 'Item not edited check if your fields are valid');


    }

    public function postDeleteItem($id)
    {
        $itemModel = new ItemModel($this->getDatabaseConnection ());
        $delete = $itemModel->deleteById ($id);

        if($delete)
        {
            return $this->set ('message','Item successfully deleted');
        }

        return $this->set ('message','Something went wrong');

    }
}