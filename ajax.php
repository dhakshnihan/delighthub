
<?php
require_once('dbconnection.php');

    $response='';

    $product_id=$_POST['product_id'];
    $sql="select * from tbl_products where PRODTID='".$_POST['product_id']."'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    
        $image='./admin//masters/category_uploads/'.$row["PRODN07"];
        $price=$row['PRODN06'];
        $product_name=$row['PRODN01'];

        $response.='<div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group">
                                    <label class="view-label new">new</label>
                                    <label class="view-label off">-10%</label>
                                </div>
                                <ul class="preview-slider slider-arrow"> 
                                    <li><img src='.$image.' alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name">
                                    <P>'.$product_name.'</P>
                                </h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 reviews)</a>
                                </div>
                                <h3 class="view-price">
                                    <span><input type="hidden" value="'.$price.'" id="price" class="price">$'.$price.'<small>/per kilo</small></span>
                                </h3>
                                <p id="weight_value">Weight: 0.25 kg</p>
                                <div class="cart-info quantity">
                               
                                <div class="view-list-group">
                                  
                                    <ul class="view-tag-list">
                                        <li><button type="button" class="btn btn-outline-success btn-sm" onclick="myfunction_weight_value1(0.25)">0.25 KG</button></li>
                                        <li><button type="button" class="btn btn-outline-success btn-sm" onclick="myfunction_weight_value2(0.50)">0.50 KG</button></li>
                                        <li><button type="button" class="btn btn-outline-success btn-sm" onclick="myfunction_weight_value3(1)">1 KG</button></li>
                                    </ul>
                                    
                                </div>
                                <span id="total_price"> $500 (Inclusive Of Tax)</span>
                                <div class="cart-action-group">
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus" onclick="decrement_quantity('.$price.')"><i class="icofont-minus"></i></button>
                                        <input  title="Quantity Number" type="text" name="quantity" value="0" id="increment_decrement_value">
                                        <button class="action-plus" title="Quantity Plus" onclick="increment_quantity('.$price.')"><i class="icofont-plus"></i></button>
                                    </div>
                                    
                                </div>
                                <div class="view-add-group">
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add to cart</span>
                                    </button>
                                
                                </div> 

                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                <div class="view-action-group">
                                    <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                        <i class="icofont-heart"></i>
                                        <span>add to wish</span>
                                    </a>
                                
                                </div>
                            </div>
                        </div>
                    </div>';
    }

echo $response;

?>