
<div class="container">
    <div class="row">
        <div class="col">
            <h1 id='title'>PRODUCTS</h1>
        </div>
    </div>
    <div class="row">

    <?php
    
    if(isset($data['dataModel'])){
        foreach($data['dataModel'] as $item){
            ?>
                <div class='item--box col-4' >
                    <div class='item-product' style="height: 350px !important">
                        <img src="./public/images/airblade.jpeg" alt="">
                        <div class='idProduct'>ID Product: <?= $item['id'] ?></div>
                        <div class='nameProduct'>Name Product: <?= $item['productName'] ?></div>
                        <div class='priceProduct'>Price: <?= $item['price'] ?></div>
                    </div>
                </div>
            <?php
        }
    }

    ?>

    </div>
</div>