  <!--=====================================
                  CART SIDEBAR PART START
        =======================================-->
        <aside class="cart-sidebar">
            <form method="POST" action="checkout.php" >
            <div class="cart-header">
                <div class="cart-total">
                    <i class="fas fa-shopping-basket"></i>
                    <span>total item (5)</span>
                </div>
                <button class="cart-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="cart-list">
                <?php 
                $grand_total_price=0;
                    $sql="select * from tbl_cart
                    left join tbl_products on fk_product=PRODTID
                    left join tbl_category on  PRODN10=CATEGTID
                    where status='Active'";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                        $image='./admin/masters/category_uploads/'.$row["PRODN07"];
                        $total_price=$row['total_price'];
                        $unit_price=$row['PRODN06'];
                        $items=$row['items'];
                        $uom=$row['uom'];
                        $category_uom=$row['CATEG04'];
                        $cart_id=$row["cart_id"];
                        if($items>0){

                        }else{
                            $items=1;
                        }
                        if($category_uom=='Kgs'){
                            $uom_tag="Weight : $uom - $category_uom";
                            if($uom=='0.5'){
                                $unit_price=($unit_price/2);
                            }else if($uom=='0.25'){
                                $unit_price=($unit_price/4);
                            }
                            
                        }else if($category_uom=='Inches'){
                            $uom_tag="Size : $uom";
                        }else{
                            $uom_tag="";
                        }
                echo    '<li class="cart-item">
                            <div class="cart-media">
                                <a href="#"><img src="'.$image.'" alt="product"></a>
                                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                            </div>
                            <div class="cart-info-group">
                                <div class="cart-info">
                                    <h6><a href="product-single.html">existing product name</a></h6>
                                    <p>Unit Price - $'.$unit_price.'<input type="hidden" id="unit_price_'.$cart_id.'" value="'.$unit_price.'"></p>

                                    <p>'.$uom_tag.'</p>
                                </div>
                                <div class="cart-info price" id="cart-price-'.$row["cart_id"].'">
                                <input type="hidden" name="cart_id[]" value="'.$row['cart_id'].'"> 
                                </div>
                                <div class="cart-action-group">
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus" onclick="cartdecrementValue('.$cart_id.','.$unit_price.')" value="-"><i class="icofont-minus"></i></button>
                                        <input type="text" name="input-quantity[]"  value="'.$items.'" maxlength="2" max="10" size="1"  class="input-quantity-'.$cart_id.'"  id="input-quantity-'.$cart_id.'"  />
                                        <button class="action-plus" title="Quantity Plus" onclick="cartincrementValue('.$cart_id.','.$unit_price.')" value="+"><i class="icofont-plus"></i></button>
                                    </div>
                                    <h6><input type="text" name="total_price[]" id="total_price_'.$cart_id.'" value="'.$total_price.'" style="color: forestgreen;"></h6>
                                </div>
                            </div>
                        </li>';
                        $grand_total_price=$grand_total_price+$total_price;
                        echo '<input type="hidden" id="grand_total_price_'.$cart_id.'" value="'.$grand_total_price.'" style="color: forestgreen;">';
                       
                    }
                
                ?>
                
            </ul>
            <div class="cart-footer">
                <button class="coupon-btn">Do you have a coupon code?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit"><span>apply</span></button>
                </form>
                 <a class="cart-checkout-btn" >
                     <button>
                        <span class="checkout-label">Proceed to Checkout</span>
                        <span class="checkout-price"><?php echo '$'.$grand_total_price; echo '<input type="hidden" id="grand_total_price" value="'.$grand_total_price.'" >'; ?></span>
                     </button>
                  
                </a> 
                <!-- <button class="cart-checkout-btn" > <span class="checkout-label">Proceed to Checkout</span>
                    <span class="checkout-price"><?php echo $grand_total_price; echo '<input type="hidden" id="grand_total_price" value="'.$grand_total_price.'" >'; ?></span>
                </button> -->
            </div>
            </form>
        </aside>
        
        <script>

                function cartincrementValue(cart_id,unit_price)
                {
                    
                    var input = $("#input-quantity-"+cart_id).val();
                    var grand_total_price = $("#grand_total_price").val();
                    
                    input = isNaN(input) ? 0 : input;
                    
                    if(input<10){
                        input++;
                            document.getElementById('input-quantity-'+cart_id).value  = input;
                            document.getElementById('total_price_'+cart_id).value =unit_price*input;
                        
                            document.getElementById('grand_total_price').value = (parseFloat(grand_total_price)+parseFloat(unit_price));
                    }
                }
                function cartdecrementValue(cart_id,unit_price)
                {
                  
                    var input = $("#input-quantity-"+cart_id).val();
                    var grand_total_price = $("#grand_total_price").val();

                    input = isNaN(input) ? 0 : input;
                    
                    if(input>1){
                        input--;
                            document.getElementById('input-quantity-'+cart_id).value  = input;
                            document.getElementById('total_price_'+cart_id).value =unit_price*input;
                            document.getElementById('grand_total_price').value = (parseFloat(grand_total_price)-parseFloat(unit_price));
                       
                    }
                  
                }

                function cart_checkout(){
                    var uom=$("#uom").val();
                
                        $.ajax({
                            url:"ajax.php",
                            method:"post",
                            data:{'product_add_to_cart':'product_add_to_cart',product_id:product_id,total_price:quantity,user_id:user_id,items:items,uom:uom},
                            success:function(response){
                                window.location ='index.php';
                            }
                        })

                }
        </script>
        <!--=====================================
                    CART SIDEBAR PART END
        =======================================-->

