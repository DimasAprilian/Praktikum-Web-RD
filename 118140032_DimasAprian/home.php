<?php 
require_once('app/db/Koneksi.php');
require_once('app/greetings.php');

session_start();
if(!isset($_SESSION['user'])) {
    header('Location:index.php');
}
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home.css"/>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <h1><?php greet($_SESSION['nama']); ?></h1>
    <a href="logout.php"><button>Logout</button></a>
    <section class="base">
        <main>
            <?php 
            $i = 0;
            foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" onclick="addHistory(<?= $i; ?>);">
                        <div class="container">
                            <h3 class="card-head" id="<?= $i; ?>"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php $i++; } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history">

            </div>
        </aside>
    </section>

    <script src="./assets/iklan/iklan.js"></script>
    <script src="assets/js/history.js"></script>
</body>

</html>