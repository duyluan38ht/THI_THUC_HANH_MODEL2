<?php
include_once "../../src/controller/ProductController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-color: lightskyblue;
    }

    .table {
        background-color: white
    }

    a {
        color: white;
    }

    th {
        text-align: center;
    }

</style>
<body>
<br><br>
<h1 align="center"><b>Kết quả tìm kiếm mặt hàng</b></h1>
<br><br>
<table align="center" class="table" style="width: 1000px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th>Tên hàng</th>
        <th>Loại hàng</th>
        <th >Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($input as $key => $product): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td>
                <a  href="index.php?page=update&id=<?php echo $product->getId(); ?>">Chỉnh sửa</a>
            </td>
            <td>
                <a
                   href="index.php?page=delete&id=<?php echo $product->getId(); ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>

</html>