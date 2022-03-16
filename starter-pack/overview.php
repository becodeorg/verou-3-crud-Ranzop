<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment System</title>
</head>
<body>

<h1>Payment System</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['id'], $card['name'], $card['amount'], $card['status']?></li>
        <a href="index.php?action=create">create</a><br>
        <a href="index.php?action=edit&card_id=<?= $card['id'] ;?>">edit</a><br>
    <?php endforeach; ?>
</ul>

</body>
</html>