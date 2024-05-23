<?php
include($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/dbb_connect.php");
class SearchModel
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function search($query)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM your_table WHERE your_column LIKE ?");
        $stmt->execute(["%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
