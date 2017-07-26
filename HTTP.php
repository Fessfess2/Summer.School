<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
  case 'POST':
    if (file_exists($file)){
		$fd = fopen($file, 'w');
		fputs($fd, http_get_request_body());
		fclose($fd);
	}
	else echo 'Файл не найден';
    break;
  case 'GET':
    if (file_exists($file)){
		$str = htmlentities(file_get_contents($file));
		echo $str;
	}
	else echo 'Файл не найден';
    break;
  case 'HEAD':
    if (file_exists($file)) echo 'Размер файла '.$file.': '.filesize($file).' байт';
	else echo 'Файл не найден';
    break;
  case 'DELETE':
	if (file_exists($file)){
		if (unlink($file)) echo "Файл удален";
		else echo "Ошибка при удалении файла";
	}
    break;
  case 'PATCH':
    if (file_exists($file)){
		$fd = fopen($file, 'a');
		fputs($fd, http_get_request_body());
		fclose($fd);
	}
	else echo 'Файл не найден';
    break;
}
?>