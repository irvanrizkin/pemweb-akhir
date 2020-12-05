<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Migration</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <h1 class="text-center text-4xl mb-3">Detected Migration</h1>
        <pre class="text-center">
        <?php print_r($migrations) ?>
        </pre>
        <form action="./Migrate/migrate_confirm" method="post">
        <div class="block text-center mb-3" >Are you sure want to migrate?</div>
        <input type="submit" value="Yes" name="confirm" class="block text-center mx-auto bg-green-500 px-4 py-2 text-white rounded-lg font-bold">
        </form>
    </div>
    
</body>
</html>