<?php include $_SERVER['DOCUMENT_ROOT'] ."/galerieDart/view/header.php"; ?>
<div class ="container_admin">
    <div class="profil_admin">
        <div class= "administrateur">
            <h1>Name</h1>
            <h2>Paramètres</h2>
        </div>
        <div class="avatar">
            <img src="/galerieDart/images_photos/galerie/profil.jpg" alt="">
        </div>
        <div class= "nom_admin">
            <h2>administrateur</h2>
        </div>  
    </div>
    <!-- <div class="fond_admin"></div> -->
    <div class="tab_utilisateur">
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
                foreach ($utilisateurs as $utilisateur) {
                    echo "<tr>";
                    echo "<td>" . $utilisateur->id . "</td>";
                    echo "<td>" . $utilisateur->pseudo . "</td>";
                    echo "<td>" . $utilisateur->role . "</td>";
                    echo "<td>" . $utilisateur->nom . "</td>";
                    echo "<td>" . $utilisateur->prenom . "</td>";
                    echo "<td>" . $utilisateur->email . "</td>";
                    echo "<td>" . $utilisateur->password . "</td>";
                    echo "<td>" . $utilisateur->date_creation . "</td>";
                    echo "<td>" . $utilisateur->date_connexion . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $utilisateur->id . "'>Modifier</a> | ";
                    echo "<a href='delete.php?id=" . $utilisateur->id . "'>Supprimer</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?> 
            </tbody>
        </table>
    </div>
    <!-- <div class="fond_admin"></div> -->
    <div class="tab_oeuvres">
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
            foreach ($oeuvres as $oeuvre) {
                echo "<tr>";
                echo "<td>" . $oeuvre->id . "</td>";
                echo "<td>" . $oeuvre->type . "</td>";
                echo "<td>" . $oeuvre->artiste . "</td>";
                echo "<td>" . $oeuvre->titre . "</td>";
                echo "<td>" . $oeuvre->description . "</td>";
                echo "<td>" . $oeuvre->prix . "</td>";
                echo "<td>" . $oeuvre->url_image . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $oeuvre->id . "'>Modifier</a> | ";
                echo "<a href='delete.php?id=" . $oeuvre->id . "'>Supprimer</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>