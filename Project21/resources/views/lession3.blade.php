<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "image" => "/Project21/image/2.jpg"
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "image" => "/Project21/image/2.jpg"
    ],

    [
        "id" => 3,
        "name" => "Shoes",
        "price" => 5,
        "description" => "A comfortable .",
        "image" => "/Project21/image/3.jpg"

    ],

    [
        "id" => 4,
        "name" => "Coat",
        "price" => 2,
        "description" => "A comfortable and beautiful.",
        "image" => "/Project21/image/4.jpg"
        
    ],

    [
        "id" => 5,
        "name" => "Hat",
        "price" => 3,
        "description" => "Beautiful.",
        "image" => "/Project21/image/5.jpg"
    ],


    [
        "id" => 5,
        "name" => "Hat",
        "price" => 3,
        "description" => "Beautiful.",
        "image" => "/Project21/image/6.jpg"
    ],


    [
        "id" => 5,
        "name" => "Hat",
        "price" => 3,
        "description" => "Beautiful.",
        "image" => "/Project21/image/7.jpg"
    ],


    [
        "id" => 5,
        "name" => "Hat",
        "price" => 3,
        "description" => "Beautiful.",
        "image" => "/Project21/image/8.jpg"
    ],


];

$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính tổng số trang
$totalPages = ceil(count($products) / $itemsPerPage);

// Sử dụng array_slice để lấy mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <!-- Hiển thị sản phẩm -->
    <img src="../image/1.jpg" alt="test">
    <div class="product-list" style="display: flex; justify-content: space-around">
        <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <img src="../image/1.jpg" alt="">
            <h2>
                <?php echo $product['name']; ?>
            </h2>
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <p>
                <?php echo $product['description']; ?>
            </p>
            <p>Price: $
                <?php echo $product['price']; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Hiển thị phân trang -->
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
        <span class="active">
            <?php echo $i; ?>
        </span>
        <?php else: ?>
        <a href="?page=<?php echo $i; ?>">
            <?php echo $i; ?>
        </a>
        <?php endif; ?>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>