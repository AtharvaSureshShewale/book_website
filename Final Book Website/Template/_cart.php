<!-- Cart Section -->

<!-- Product Display -->

<html>
<head>
    <link rel="stylesheet" href="./HTML Template/cart.css">

</head>
<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <!-- <td>Price</td>
                <td>Quantity</td> -->
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach($product->getData('cart') as $item):
            // Assuming $product->getProduct() fetches product details based on item ID
            $cart = $product->getProduct($item['item_id']);
            // Check if $cart is not empty before proceeding
            if (!empty($cart)):
                $subtotal[] = array_map(function($item){
        ?>
                    <tr>
                        <td><button><i class="far fa-times-circle"></i></button></td>
                        <td><img src="<?php echo $item['item_image'];?>" alt="images"></td>
                        <td><?php echo $item['item_brand']," ",$item['item_name'];?></td>
                        <td><?php echo $item['item_price'];?></td>
                        <!-- <td>
                            <form method='post' class="quantity-form" data-item-id="<?php echo $item['item_id']; ?>">
                                Place the item ID inside the form for reference 
                                <input type="hidden" name="item_id" value="<?php // echo $item['item_id'];?>">
                                <input type="number" name="quantity" value="1" min="1">
                            </form>
                        </td> -->
                        <!-- <td class="total-price" id="total-price-<?php echo $item['item_id']; ?>"><?php echo $item['item_price']; ?></td> -->
                    </tr>
        <?php 
                return $item['item_price'];
                },$cart);
            endif; // end if $cart is not empty
        endforeach;
        ?>


        </tbody>
    </table>
</section>

<!-- !Product Display -->


<!-- Coupon & Subtotal Display -->

<section id="cart-add" class="section-p1">

    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon" name="" id="">
            <button>Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotals</td>
                <td><?php $sum = isset($subtotal) ? $Cart->getSum($subtotal):0 ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>
                    <?php
                        if($sum>600){
                            echo "Free";
                        }else{
                            echo "₹50";
                            $sum+=50;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong><?php echo $sum?></strong></td>
            </tr>
            
        </table>
        <button>Peoceed to Checkout</button>
    </div>

</section>

<!-- !Coupan & Subtotal Display -->

<!-- !Cart Section -->
</html>