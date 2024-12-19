<?php
// 增加 PHP 内存限制到 256MB
ini_set('memory_limit', '256M');

// 连接数据库
$con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
if (!$con) {
    die('数据库连接失败: ' . mysqli_connect_error());
}

mysqli_select_db($con, 'devonDB');
mysqli_query($con, 'SET NAMES utf8');

// 查询数据
$sql = "SELECT * FROM cassavaexpression";
$res = mysqli_query($con, $sql);

$data = array();
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        // 检查每行数据的具体内容，确认不是全部为 0
        if ($row) {
            // 打印到日志文件，调试查看
            error_log(print_r($row, true));
        } else {
            // 如果行数据为空或为 0，输出调试信息
            error_log("空数据或全部为0");
        }

        $data[] = $row;
    }
} else {
    die('查询失败: ' . mysqli_error($con));
}

// 检查 JSON 编码是否正确
$json_data = json_encode(array('data' => $data));
if ($json_data === false) {
    die('JSON 编码失败: ' . json_last_error_msg());
}

// 返回 JSON 格式数据
header('Content-Type: application/json');
echo $json_data;

mysqli_close($con);
?>

