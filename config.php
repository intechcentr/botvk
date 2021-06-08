$album = 'https://vk.com/photo511254518_456239018';
$res = parse_url($album);
$path = substr($res['path'], 9);
$arr = explode('_', $path);
$owner_id = $arr[0];
$album_id = $arr[1];

$standalone = "7080babf86d134287cab24ce19c8961fa38fe4933396f8d68c6aff3db93222de06781332abadcb2373511";
$group_token = '67698fd5';
$conf = [
	'standalone' => $standalone,
	'group_token' => $group_token,
	'contorm_token' => '67698fd5',
	'mess' => 'Фото в студио',
	'not_command' => 'Ничего не понял!',
	'owner_id' => $owner_id,
	'album_id' => $album_id,
	'group_id' => '7874730',
	'apiurl' => 'https://api.vk.com/method/',
	'path' => substr($_SERVER['PHP_SELF'], 0, -2),
	'photos' => 'photos.txt',
	'temp_link' => 'temp_album.txt',
	'random_id' => mt_rand(0000000000, 999999999999),
	'v' => '5.50'
];
