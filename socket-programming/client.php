<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socket Calling Example</title>
</head>

<body>
<button type="button" onclick="connectSocket()">
    Connect Socket
</button>
<script type="text/javascript">
    let conn = null;
    function connectSocket() {
        conn = new WebSocket('ws://localhost:8000');
        conn.onopen = function (e) {
            console.log("Connection established!");
        };

        conn.onmessage = function (e) {
            console.log(e.data);
        };
    }
</script>
</body>

</html>