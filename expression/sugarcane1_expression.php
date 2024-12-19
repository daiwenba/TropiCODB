<?php
// 连接数据库
$con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
mysqli_select_db($con, 'devonDB');
@mysqli_query($con, 'SET NAMES utf8');
ini_set('memory_limit', '512M'); // 将内存限制增加到 512MB

// 查询数据
$sql = "SELECT id,Susceptible_0d,Susceptible_2d,Susceptible_6d,Susceptible_10d,Susceptible_recovery_10d,Tolerant_0d,Tolerant_2d,Tolerant_5d, Tolerant_10d, Tolerant_recovery_10d FROM sugarcane1_expression";
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
