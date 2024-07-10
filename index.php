<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>1. ให้นักเรียนเขียนคำสั่งภาษา Php ชื่อนักเรียนลงในตารางรูปแบบ</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ห้อง</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>นายทดสอบ</td>";
                echo "<td>ระบบ</td>";
                echo "<td>6/10</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>