<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    <table>

        <tr>
            <td>ID</td>
            <td>Product Name</td>
            <td>Price</td>
        </tr>

        <?php
        
        if(isset($data)){
            foreach($data as $item){
                ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['productName'] ?></td>
                        <td><?= $item['price'] ?></td>
                    </tr>
                <?php
            }
        }

        ?>
    </table>
</body>
</html>