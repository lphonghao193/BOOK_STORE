<?php 
require_once APP_PATH . "\app\models\ProductsModel.php";
require_once APP_PATH . "\app\models\CategoriesModel.php";

function getFeatureProducts() {
    $productsModel = new Products(DATABASE);
    $products = $productsModel->getFeatureProduct();
    return $products;
}

function getCategories() {
    $categoriesModel = new Categories(DATABASE);
    $categories = $categoriesModel->getCategories();
    return $categories;
}