<!-- Product Section -->
<?php
//add to cart function called
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['product_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}

$item_id = $_GET['item_id'] ?? 1;
foreach($product->getData() as $item):
    if($item['item_id'] == $item_id):
        
?>

<html>
<head>
    <link rel="stylesheet" href="./HTML Template/product.css">
</head>

<section class="product">
    <div class="row">
        <div class="image">
            <img id="mainImage" src="<?php echo $item['item_image']?>" alt="">
        </div>
        <div class="detail">
            <h6>Home / Books</h6>
            <h3 class="py-4"><?php echo $item['item_brand']," ",$item['item_name'];?></h3>
            <h2><?php echo $item['item_price']?></h2>
            <input type="number" name="quantity" id="qty" value="1">
            <br>
            <a href="<?php printf('%s?item_id=%s','payment.php',$item['item_id'])?>">Proceed to Buy</a>
            <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                <input type="hidden" name="user_id" value="<?php echo 1?>">
                <button type='submit' name='product_submit' class='btn'>Add To Cart</button>
            </form>
            <h4 class="pdetails">Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id, voluptate hic praesentium neque quaerat fugiat tenetur laudantium omnis architecto quos accusamus libero doloribus non? Consectetur eveniet voluptatem aperiam nam.</span>
        </div>
    </div>
</section>

<?php
    endif;
    endforeach;
?>
</html>

<!-- !Product Section -->