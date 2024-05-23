<?php
// session_start();
// if (session_status() !== PHP_SESSION_ACTIVE) {
//     session_start();
// }
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
<div class="container_inscription">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="message">
            <?php echo $_SESSION['message'];
            unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>
    <div class="fond_formulaire"></div>
    <div class="inscription">
        <h1>Contact</h1>
        <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/controller/contactController.php" method="post">
            <input type="text" id="nom_prenom" name="nom_prenom" placeholder="Nom et Prénom" required autofocus><br>
            <input type="text" id="email" name="email" placeholder="email" required><br>
            <textarea class="textarea-input-like"" id=" message" name="message" placeholder="message" required></textarea>
            <input class="cta" type="submit" name="bValider" value="Entrer">
        </form>
    </div>
    <div class="liens_contact">
        <a href="/view/message_excuse.php">EclatDesSonges@outlook.com</a>
        <div class="social-media">
            <a href="/view/message_excuse.php"><i class="fa-solid fa-share-nodes"></i></a>
            <a href="/view/message_excuse.php"><i class="fab fa-facebook"></i></a>
            <a href="/view/message_excuse.php"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>