<?php
// 数据库连接配置
$servername = "125.217.95.69";
$username = "root";
$password = "ZCJ123456";
$dbname = "devonDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 从数据库中获取CHROM列的唯一值
$sql = "SELECT DISTINCT CHROM FROM `oilpalm.indel`";
$result = $conn->query($sql);

// 输出下拉框选项
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['CHROM'] . "'>" . $row['CHROM'] . "</option>";
    }
} else {
    echo "<option value=''>No data</option>";
}

$conn->close();
?>

