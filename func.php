<?
function save_mess() {
	$str = $_POST['name'] . ' | '. $_POST['mess'] .' | ' . date('Y-m-d H:i:s') . PHP_EOL . '***' . PHP_EOL;
	file_put_contents('mess.txt', $str, FILE_APPEND);
}

function get_mess() {
	return file_get_contents('mess.txt');
}

function array_mess($message) {
	$message = explode(PHP_EOL . '***' . PHP_EOL, $message);
	array_pop($message);
	return array_reverse($message);
}

function get_format_message($mess) {
	return explode('|', $mess);
}

function print_array($arr) {
	echo "<pre> . print_r($arr, true) . </pre>";
}
?>