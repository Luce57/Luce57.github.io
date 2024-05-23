<?php
require_once 'model/SearchModel.php';

class SearchController
{
    private $searchModel;

    public function __construct($bdd)
    {
        $this->searchModel = new SearchModel($bdd);
    }

    public function search()
    {
        $query = $_GET['q'];
        $results = $this->searchModel->search($query);
        require 'views/searchResults.php';
    }
}
