<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/controller/compte_administrateurController.php");

if (!function_exists('generateTableRow')) {
    function generateTableRow($item, $fields, $idField)
    {
        echo "<tr>";
        foreach ($fields as $field) {
            echo "<td>" . htmlspecialchars($item->$field) . "</td>";
        }
        echo "<td>";
        echo "<a href='edit.php?id=" . htmlspecialchars($item->$idField) . "'>Modifier</a> | ";
        echo "<a href='delete.php?id=" . htmlspecialchars($item->$idField) . "'>Supprimer</a>";
        echo "</td>";
        echo "</tr>";
    }
}
?>

<div class="container_admin">
    <div class="profil_admin">
        <div class="administrateur">
            <h1><?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
            <!-- placer la possibiliter de changer un utilisateur en admin et changer mdp et email(comme compte utilisateur) -->
            <h2>Paramètres</h2>
        </div>
        <div class="avatar">
            <img src="/galerieDart/images_photos/galerie/profil.jpg" alt="">
        </div>
        <div class="nom_admin">
            <h2>administrateur</h2>
            <h2><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/galerieDart/controller/deconnexionController.php">Déconnexion</a></h2>
        </div>
    </div>
    <!-- <div class="fond_admin"></div> -->
    <div class="tab_utilisateur">
        <h2>Utilisateurs</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                    <th>Role</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>date de création</th>
                    <th>date connexion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Supposons que $utilisateurs est un tableau d'objets utilisateur
                $userFields = ['id_user', 'user_name', 'role', 'nom', 'prenom', 'email', 'password', 'date_creation', 'd_connect'];
                foreach ($users as $current_user) {
                    generateTableRow($current_user, $userFields, 'id_user');
                }

                ?>
            </tbody>
        </table>
        <!-- rajouter la page en lien pour injection utilisateur -->
        <?php echo "<a href='create_user.php'>Créer un nouvel utilisateur</a>"; ?>
    </div>
    <!-- <div class="fond_admin"></div> -->
    <div class="tab_oeuvres">
        <h2>Oeuvres</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Artistes</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>prix</th>
                    <th>url_image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Supposons que $oeuvres est un tableau d'objets oeuvre
                $objetArtFields = ['id_objet', 'type', 'artistes', 'titre', 'description', 'prix', 'url_image'];
                foreach ($objet_art as $current_objet_art) {
                    generateTableRow($current_objet_art, $objetArtFields, 'id_objet');
                }

                ?>
            </tbody>
        </table>
        <!-- creer lien remplacer href pour injection new oeuvres -->
        <?php echo "<a href='create_artwork.php'>Créer une nouvelle œuvre</a>"; ?>
    </div>
    <div class="tab_contact">
        <h2>Contacts</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Contact</th>
                    <th>Nom Prénom</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Supposons que $contacts est un tableau d'objets contact
                $contactFields = ['id_contact', 'nom_prenom', 'email', 'message'];
                foreach ($contact as $current_contact) {
                    generateTableRow($current_contact, $contactFields, 'id_contact');
                }
                ?>
            </tbody>
        </table>
        <!-- creer injection pour contact bdd -->
        <?php echo "<a href='create_contact.php'>Créer un nouveau contact</a>"; ?>
    </div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>