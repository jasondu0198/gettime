<?php
// 获取服务器当前时间戳
$serverTimestamp = time();
$serverTime = date("Y-m-d H:i:s", $serverTimestamp);
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>服务器时间实时显示</title>
    <script>
        // 初始时间（来自服务器）
        let serverTimestamp = <?php echo $serverTimestamp; ?>;

        function updateClock() {
            const now = new Date(serverTimestamp * 1000);
            document.getElementById('server-time').innerText = now.toLocaleString();
            document.getElementById('timestamp').innerText = Math.floor(now.getTime() / 1000);
            serverTimestamp++;
        }

        // 每秒更新一次时间
        window.onload = function () {
            updateClock();
            setInterval(updateClock, 1000);
        };
    </script>
</head>
<body>
    <h1>当前服务器时间：<span id="server-time"><?php echo $serverTime; ?></span></h1>
    <p>当前时间戳：<span id="timestamp"><?php echo $serverTimestamp; ?></span></p>
</body>
</html>
