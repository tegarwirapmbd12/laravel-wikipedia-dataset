<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List dengan Bullet</title>
    <style>
        /* Reset gaya default daftar */
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Gaya daftar dengan bullet */
        ul li {
            position: relative;
            padding-left: 20px; /* Jarak antara bullet dan teks */
        }

        ul li::before {
            content: '\2022'; /* Karakter bullet (titik hitam kecil) */
            position: absolute;
            left: 0;
        }
    </style>
</head>
<body>
    <ul class="list">
        <li class="list-group">Tulisan pertamdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>
        <li>Tulisan kedua</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem architecto quis nulla esse. Pariatur, non! Obcaecati vitae commodi sint hic eos ab velit minima, reiciendis, blanditiis sunt numquam doloremque perferendis pariatur voluptatem. Quasi modi dolorum, hic ut consectetur aperiam delectus ratione quas blanditiis aliquid voluptatum! Incidunt tempore harum ipsum exercitationem minima, sequi quisquam, placeat iste totam adipisci accusantium. Sunt, sapiente eveniet? Tempora quo quod fuga dolore dignissimos eos reprehenderit ratione natus, architecto iste nihil ut minima necessitatibus distinctio deleniti iure, optio maxime praesentium consequuntur quidem. Nisi possimus odio vero. Porro veniam aperiam unde sequi similique id culpa, illo molestias quae.</li>

    </ul>
</body>
</html>
