
<?php

class ArtModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getArtObjects()
    {
        $stmt = $this->db->prepare('SELECT * FROM objet_art');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
