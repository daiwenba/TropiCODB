<?php
header('Content-Type: application/json');

// 连接数据库
$mysqli = new mysqli("125.217.95.69", "root", "ZCJ123456", "devonDB");

// 获取 gene_id 列
$query = "SELECT DISTINCT ID FROM cassavaexpression1";
$result = $mysqli->query($query);

// 转换为 JSON 格式
$gene_ids = [];
while ($row = $result->fetch_assoc()) {
    $gene_ids[] = $row;
}

echo json_encode($gene_ids);
?>

