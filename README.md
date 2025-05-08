功能说明：
<?php echo $serverTimestamp; ?>：将服务器端时间戳传给 JavaScript。
JavaScript 使用该时间戳初始化一个 Date 对象，并每隔 1 秒递增一秒以模拟真实时间。
页面中两个 <span> 分别用于显示实时的时间和时间戳。
显示效果：
打开页面后，时间会每秒自动更新。
时间格式为 YYYY-MM-DD HH:mm:ss。
同时也显示对应的时间戳（秒级）。
