<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
    <?php
        $product = [
            [
                "id"=>1,
                "name"=>"(LN) คุณอาเรียโต๊ะข้างๆ พูดรัสเซียหวานใส่ซะหัวใจจะวาย เล่ม 1",
                "price"=>275,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_tokidoki_bosotto_russiago_vol1_jacket_1.jpg"
            ],
            [
                "id"=>2,
                "name"=>"(LN) คุณอาเรียโต๊ะข้างๆ พูดรัสเซียหวานใส่ซะหัวใจจะวาย เล่ม 2",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_tokidoki_bosotto_russiago_vol2_jacket_cover_1.jpg"
            ],
            [
                "id"=>3,
                "name"=>"(LN) คุณอาเรียโต๊ะข้างๆ พูดรัสเซียหวานใส่ซะหัวใจจะวาย เล่ม 3",
                "price"=>305,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/t/o/tokidoki_bosotto_russiago_vol3_jacket_cover_1_.jpg"
            ],
            [
                "id"=>4,
                "name"=>"(LN) ห้องเรียนจารชน เล่ม 1",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_spy_kyoshitsu_vol1_jacket_cover_re.jpg"
            ],
            [
                "id"=>5,
                "name"=>"(LN) ห้องเรียนจารชน เล่ม 2",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/s/p/spy_kyoshitsu_vol2_jacket_cover.jpg"
            ],
            [
                "id"=>6,
                "name"=>"(LN) ห้องเรียนจารชน เล่ม 3",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_spy_kyoshitsu_vol3_jacket_cover.jpg"
            ],
            [
                "id"=>7,
                "name"=>"(LN) ห้องเรียนจารชน เล่ม 4",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_spy_kyoshitsu_vol4_jacket_cover.jpg"
            ],
            [
                "id"=>8,
                "name"=>"(LN) ห้องเรียนจารชน เล่ม 5",
                "price"=>295,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_spy_kyoshitsu_vol5_jacket_cover.jpg"
            ],
            [
                "id"=>9,
                "name"=>"(LN) 86 -เอทตี้ซิกซ์- เล่ม 1",
                "price"=>300,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/8/6/86_vol1_jacket.jpg"
            ],
            [
                "id"=>10,
                "name"=>"(LN) 86 -เอทตี้ซิกซ์- เล่ม 2",
                "price"=>275,
                "img"=>"https://www.phoenixnext.com/img/600/744/resize/catalog/product/_/l/_ln_86_vol2_jacket.jpg"
            ],
        ]
    ?>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">img</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($product as $book) {
                ?>
                    <?php
                        $r = rand(0,256);
                        $g = rand(0,256); 
                        $b = rand(0,256);
                        $style = "color:rgb($r,$g,$b)"
                    ?>
                    <tr>
                        <th scope="row" style="<?= $style ?>"><?= $book['id']; ?></th>
                        <td style="<?= $style ?>"><?= $book['name']; ?></td>
                        <td style="<?= $style ?>"><?= $book['price']; ?></td>
                        <td style="<?= $style ?>" width="250px"><img width="100%" src="<?= $book['img']; ?>" class="rounded"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>