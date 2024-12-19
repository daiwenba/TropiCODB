<?php
// 数据库连接
$servername = "125.217.95.69";
$username = "root";
$password = "ZCJ123456"; // 在此填写数据库密码
$dbname = "devonDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 查询表数据
$sql = "SELECT qualid, subjectid, othername FROM key_gene_sugar_sugarcane";
$result = $conn->query($sql);

// 准备返回 HTML 表格内容
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // 处理 subjectid 字段，生成链接
        $subjectLinks = '';
        $ids = explode(",", $row['subjectid']);
        foreach ($ids as $id) {
            $subjectLinks .= '<a href="../search_result.php?id=' . urlencode(trim($id)) . '">' . htmlspecialchars(trim($id)) . '</a><br>';
        }

        // 将每行数据存入数组
        $data[] = [
            'qualid' => htmlspecialchars($row['qualid']),
            'subjectid' => $subjectLinks,
            'othername' => htmlspecialchars($row['othername']),
        ];
    }
} else {
    $data[] = ['qualid' => '无数据', 'subjectid' => '无数据', 'othername' => '无数据'];
}

$conn->close();

// 返回 JSON 数据供前端使用
header('Content-Type: application/json');
echo json_encode($data);
?>
