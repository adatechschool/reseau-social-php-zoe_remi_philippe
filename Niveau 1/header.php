<?php
session_start();
// Initialize $userId variable
$userId = null;
// Check if the user is logged in
if (isset($_SESSION['connected_id'])) {
    $userId = $_SESSION['connected_id'];
} else {
    // Redirect to login page if user is not logged in
    echo ("you need to login first :)");
    header("Location: login.php");
    exit();
}
?>
<img src="img/tulip.jpg" alt="Logo de notre réseau social" />
<nav id="menu">
    <a href="news.php">Actualités</a>
    <a href="wall.php?user_id=<?php echo $userId ?>">Mur</a>
    <a href="feed.php?user_id=<?php echo $userId ?>">Flux</a>
    <a href="tag.php">Mots-clés</a>
</nav>
<nav id="user">
    <a href="#">Profil</a>
    <ul>
        <li><a href="settings.php?user_id=<?php echo $userId ?>">Paramètres</a></li>
        <li><a href="followers.php?user_id=<?php echo $userId ?>">Mes suiveurs</a></li>
        <li><a href="subscriptions.php?user_id=<?php echo $userId ?>">Mes abonnements</a></li>
    </ul>

</nav>