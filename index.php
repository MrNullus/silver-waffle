<?php require('./api.php') ?>

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
		<h1>Silver Waffle</h1>
		<h2>meet your followers 🎈</h2>
	</header>


	<form method="GET">
		<div class="input-field">
			<input type="search" name="searchUser" id="searchUser" placeholder="Digite o usuario..." />
		</div>
		<button type="submit">🔍</button>
	</form>

	<?php if (!empty($user)): ?>
	<p style="padding-left: 24px;">User pesquisado: <strong><?php echo $user; ?></strong></p>
	<?php endif; ?>

	<section class="box-followers">
		<?php foreach($json as $follower): ?>
			<div class="follower">
				<div 
					class="avatar_url" 
					style="background-image: url('<?php echo $follower->avatar_url; ?>)'">
				</div>
				<div class="info-follower">
					<h3><?php echo $follower->login; ?></h3>
					<a href="<?php echo $follower->html_url; ?>"><?php echo $follower->html_url; ?></a>
				</div>
			</div>
		<?php endforeach; ?>
	</section>
</body>

</html>