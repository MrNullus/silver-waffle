<?php
$json = array();
if (isset($_GET['searchUser']) && !empty($_GET['searchUser'])) {

	$user = $_GET['searchUser'];

	$opts = [
    'http' => [
      'method' => 'GET',
      'header' => [
        'User-Agent: PHP'
      ]
		]
	];

	$context = stream_context_create($opts);
	$json = file_get_contents("https://api.github.com/users/$user/followers", false, $context);
	$json = json_decode($json);
}
?>


<?php 
if (isset($json)) {
	foreach($json as $follower): ?>
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
<?php 
	endforeach; 
}
?>