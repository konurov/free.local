<?php 
require_once 'funcs.php';
$messages = get_mess();
$messages = array_mess($messages);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
	
	.message{
		border: 1px solid #ccc;
		padding: 10px;
		margin-bottom: 20px;
	}

</style>
<body>
<div class="container">
<?php if(!empty($messages)): ?>
		<?php foreach($messages as $message): ?>
			<?php $message = get_format_message($message); ?>
			<div class="message">
				<p>Автор: <?=$message[0]?> | Дата: <?=$message[2]?></p>
				<div><?=nl2br(htmlspecialchars($message[1]))?></div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
</body>
</html>