<?php
// 连接数据库
$con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
mysqli_select_db($con, 'devonDB');
@mysqli_query($con, 'SET NAMES utf8');
ini_set('memory_limit', '512M'); // 将内存限制增加到 512MB

// 查询数据
$sql = "SELECT ID,SAMN02444908,SAMN02444909,SAMN02444910,SAMN02444911,SAMN02444912,SAMN02444913,SAMN02444914,SAMN02444915, SAMN02444916, SAMN02444917,SAMN02444918, SAMN02444919 FROM cassavaexpression1";
$res = mysqli_query($con, $sql);

$data = array();
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

// 返回 JSON 格式数据
echo json_encode(array('data' => $data)); // 保持原来的数据结构

// 关闭数据库连接
mysqli_close($con);
?>
