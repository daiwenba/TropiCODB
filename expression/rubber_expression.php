<?php
// 连接数据库
$con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
mysqli_select_db($con, 'devonDB');
@mysqli_query($con, 'set names utf8');
ini_set('memory_limit', '512M'); // 将内存限制增加到 512MB
// 查询数据
$sql = "SELECT * FROM rubber_expression";
$res = mysqli_query($con, $sql);

$data = array();
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

// 返回 JSON 格式数据
echo json_encode(array('data' => $data));

mysqli_close($con);
?>
