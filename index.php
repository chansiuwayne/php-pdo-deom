<?php
require 'database.php';

$stmt = $pdo->prepare('select * from posts');

$stmt->execute();

$posts = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

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
        <h1>My Blog</h1>
    </header>
    <?php foreach ($posts as $post) : ?>
        <div class="md my-4">
            <div class="rounded-lg shadow-md">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?= $post['title'];  ?></h2>
                    <p class="text-gary-700 text-lg mt-2"><?= $post["body"] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</body>

</html>