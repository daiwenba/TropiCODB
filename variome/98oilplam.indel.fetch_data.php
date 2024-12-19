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

// 获取 POST 请求中的 chrom 参数
$chrom = $_POST['chrom'];

// 查询数据库，获取 POS, QUAL, REF 和 ALT 列
$sql = "SELECT POS, QUAL, REF, ALT FROM `oilpalm.indel` WHERE CHROM = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $chrom);
$stmt->execute();
$result = $stmt->get_result();

// 设置返回格式为纯文本
header('Content-Type: text/plain');

// 遍历查询结果并输出每一行的 POS, QUAL, REF 和 ALT
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['POS'] . ',' . $row['QUAL'] . ',' . $row['REF'] . ',' . $row['ALT'] . "\n";
    }
} else {
    echo "没有数据";
}

// 关闭连接
$stmt->close();
$conn->close();
?>

