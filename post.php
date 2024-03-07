<?php
require('./database.php');


$id = $_GET['id'] ?? null;


if (!$id) {
    header('Location: index.php');
    exit;
}


$sql = 'select * from posts where id = :id';

$stmt = $pdo->prepare($sql);

$params = ['id' => $id];

$stmt->execute($params);

$post = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <h1><a href="/index.php"> My Blog</a></h1>
    </header>
    <div class="md my-4">
        <div class="rounded-lg shadow-md">
            <div class="p-4">
                <h2 class="text-xl font-semibold"><?= $post["title"] ?></h2>
                <p class="text-gary-700 text-lg mt-2"><?= $post["body"] ?></p>
            </div>
        </div>
    </div>
</body>

</html>