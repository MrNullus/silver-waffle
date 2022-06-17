<?php
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

} else {
	echo "Informe um usuario!";
}

?>