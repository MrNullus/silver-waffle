<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>My Followers</title>
	<link rel="stylesheet" href="./style.css" />
</head>

<body>
	<header>
		<h1>Silver Waffle 🧇</h1>
		<h2>meet your followers 🎈</h2>
	</header>


	<form method="GET" >	
		<div class="input-field">
			<input type="search" name="searchUser" id="searchUser" placeholder="Digite o usuario..." />
		</div>
		<button type="submit">🔍</button>
	</form>

	<?php if (!empty($user)): ?>
	<p style="padding-left: 24px;">User pesquisado: <strong><?php echo $user; ?></strong></p>
	<?php endif; ?>

	<section class="box-followers">
		<?php include('./api.php') ?>		
	</section>
</body>

</html>