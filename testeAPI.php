<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Teste API</h1>

	<?php

		error_reporting(E_ERROR | E_PARSE);
		
		include __DIR__ . '/settings.php';
		include __DIR__ . '/../src/Moinax/TvDb/Http/HttpClient.php';
		include __DIR__ . '/../src/Moinax/TvDb/Http/CurlClient.php';
		include __DIR__ . '/../src/Moinax/TvDb/CurlException.php';
		include __DIR__ . '/../src/Moinax/TvDb/Client.php';
		include __DIR__ . '/../src/Moinax/TvDb/Serie.php';
		include __DIR__ . '/../src/Moinax/TvDb/Banner.php';
		include __DIR__ . '/../src/Moinax/TvDb/Episode.php';

		use Moinax\TvDb\Client;

		


	?>

</body>
</html>