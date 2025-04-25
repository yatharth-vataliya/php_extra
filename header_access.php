<?php
// if (isset($_SERVER["HTTP_ORIGIN"]) === true) {
// 	$origin = $_SERVER["HTTP_ORIGIN"];
// 	$allowed_origins = array(
// 		"http://public.app.moxio.com",
// 		"https://foo.app.moxio.com",
// 		"https://lorem.app.moxio.com",
//     "chrome-search://local-ntp/"
// 	);
// 	if (in_array($origin, $allowed_origins, true) === true) {
// 		header('Access-Control-Allow-Origin: ' . $origin);
// 		header('Access-Control-Allow-Credentials: true');
// 		header('Access-Control-Allow-Methods: POST');
// 		header('Access-Control-Allow-Headers: Content-Type');
// 	}
// 	if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
// 		exit; // OPTIONS request wants only the policy, we can stop here
// 	}
// }
header('Access-Control-Allow-Origin: *');

?>
<script type="text/javascript">
console.log('yatharth');
</script>
