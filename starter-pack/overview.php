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

<form method="POST">
		<label for="name">Input name into database</label><br>
		<input name="name" type="text" value="Name here"><br><br>
		<label for="amount">How much?</label><br>
		<input name="amount" type="number"><br>
		<label for="status">Input whether or not this person has paid yet</label><br>
		<input name="status" type="text" value="Pending or Paid?"><br>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Add to Database!</button>
	</form>
<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['id'] ?></li>
        <li><?= $card['name'] ?></li>
        <li><?= $card['amount'] ?></li>
        <li><?= $card['status'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>