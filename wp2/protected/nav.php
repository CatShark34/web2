<?php 
$nav = [
	[ 
		"link" => "https://google.com",
		"name" => "GOOGLE"
	],
	[ 
		"link" => "https://google.com",
		"name" => "GOOGLE2"
	],
	[ 
		"link" => "https://google.com",
		"name" => "GOOGLE3"
	],
	[ 
		"link" => "https://google.com",
		"name" => "GOOGLE4"
	]
];
?>
<?php foreach($nav as $n) : ?>
<a href="<?=$n["link"]?>"><?=$n["name"]?></a>
<br>
<?php endforeach; ?>