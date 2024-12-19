<?php
// 数据库连接配置
$servername = "125.217.95.69";
$username = "root";
$password = "ZCJ123456";
$dbname = "devonDB";
ini_set('memory_limit', '512M');  // 增加内存限制到 512MB

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取 POST 请求中的 chrom 参数
$chrom = $_POST['chrom'];

// 获取前端传递的分页参数，默认为 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 1000;  // 每次返回1000行数据
$offset = ($page - 1) * $limit;  // 计算 OFFSET

// 查询数据库，获取 POS, QUAL, REF 和 ALT 列，并限制返回的行数
$sql = "SELECT POS, QUAL, REF, ALT FROM `cassava.indel` WHERE CHROM = ? LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $chrom, $limit, $offset);  // 绑定参数
$stmt->execute();
$result = $stmt->get_result();

// 设置返回格式为 JSON
header('Content-Type: application/json');

// 将结果转换为数组
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'POS' => $row['POS'],
            'QUAL' => $row['QUAL'],
            'REF' => $row['REF'],
            'ALT' => $row['ALT']
        ];
    }
} else {
    $data = ["message" => "没有数据"];
}

// 输出数据为 JSON 格式，前端可解析
echo json_encode($data);

// 关闭连接
$stmt->close();
$conn->close();
?>
