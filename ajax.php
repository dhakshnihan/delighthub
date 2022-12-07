
<?php
require_once('dbconnection.php');

if(isset($_POST['product_view'])){

    $response='';

    $product_id=$_POST['product_id'];
    $user_id=$_POST['user_id'];
    $sql="select * from tbl_products
    left join tbl_category on PRODN10=CATEGTID
    where PRODTID='".$_POST['product_id']."'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    
        $image='./admin//masters/category_uploads/'.$row["PRODN07"];
        $price=$row['PRODN06'];
        $product_name=$row['PRODN01'];
        $uom=$row['CATEG04'];

        if($uom=="Kgs"){
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
                                    <p id="weight_value">Weight: 1 kg</p>
                                    <span id="uom_input_value"><input  title="UOM" type="hidden" id="uom" name="uom" value="1"></span>
                                    <div class="cart-info quantity">
                                
                                    <div class="view-list-group">
                                    
                                        <ul class="view-tag-list">
                                            <li><button type="button" class="btn btn-outline-success " value="0.25" id="myfunction_weight_value1" onclick="myfunction_weight_value1(0.25)">0.25 KG</button></li>
                                            <li><button type="button" class="btn btn-outline-success " value="0.50" id="myfunction_weight_value2" onclick="myfunction_weight_value2(0.50)">0.50 KG</button></li>
                                            <li><button type="button" class="btn btn-outline-success " value="1" id="myfunction_weight_value3" onclick="myfunction_weight_value3(1)">1 KG</button></li>
                                        </ul>
                                        
                                    </div>
                                    <span id="total_price" class="total_price"> $'.$price.' (Inclusive Of Tax)</span>

                                    <span id="total_input_price"><input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'.$price.'"></span>
                                    <span id="total_input_hidden_price"><input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'.$price.'"></span>
                                    <div class="cart-action-group">
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus" onclick="decrementValue()" value="-"><i class="icofont-minus"></i></button>
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
                                            <button class="action-plus" title="Quantity Plus" onclick="incrementValue()" value="+"><i class="icofont-plus"></i></button>
                                        </div>
                                        
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart" onclick="add_to_cart('.$product_id.','.$price.','.$user_id.')">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                    
                                    </div> 
                                    <div class="view-action-group">
                                        <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                            <i class="icofont-heart"></i>
                                            <span>add to wish</span>
                                        </a>
                                    
                                    </div>
                                    <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                    
                                </div>
                            </div>
                        </div>';

        }else if($uom=="Inches"){
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
                                        <span><input type="hidden" value="'.$price.'" id="price" class="price">$'.$price.'<small>/per Item</small></span>
                                    </h3>
                                   
                                    <div class="cart-info quantity">
                                    <span id="uom_input_value"><input  title="UOM" type="hidden" id="uom" name="uom" value="S"></span>
                                    <div class="view-list-group">
                                    
                                        <ul class="view-tag-list">
                                            <li><button type="button" class="btn btn-outline-success " id="myfunction_inches_value1" onclick="myfunction_inches_value1()">XL</button></li>
                                            <li><button type="button" class="btn btn-outline-success " id="myfunction_inches_value2" onclick="myfunction_inches_value2()">L</button></li>
                                            <li><button type="button" class="btn btn-outline-success " id="myfunction_inches_value3" onclick="myfunction_inches_value3()">M</button></li>
                                            <li><button type="button" class="btn btn-outline-success " id="myfunction_inches_value4" onclick="myfunction_inches_value4()">S</button></li>
                                        </ul>
                                        
                                    </div>
                                    <span id="total_price" class="total_price"> $'.$price.' (Inclusive Of Tax)</span>

                                    <span id="total_input_price"><input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'.$price.'"></span>
                                    <span id="total_input_hidden_price"><input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'.$price.'"></span>
                                    <div class="cart-action-group">
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus" onclick="decrementValue()" value="-"><i class="icofont-minus"></i></button>
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
                                            <button class="action-plus" title="Quantity Plus" onclick="incrementValue()" value="+"><i class="icofont-plus"></i></button>
                                        </div>
                                        
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart" onclick="add_to_cart('.$product_id.','.$price.','.$user_id.')">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                    
                                    </div> 
                                    <div class="view-action-group">
                                        <a class="view-wish wish" href="#" title="Add Your Wishlist" >
                                            <i class="icofont-heart"></i>
                                            <span>add to wish</span>
                                        </a>
                                    
                                    </div>
                                    <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                    
                                </div>
                            </div>
                        </div>';

        }else{
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
                                        <span><input type="hidden" value="'.$price.'" id="price" class="price">$'.$price.'<small>/per Item</small></span>
                                    </h3>
                                
                                    <span id="total_price" class="total_price"> $'.$price.' (Inclusive Of Tax)</span>

                                    <span id="total_input_price"><input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'.$price.'"></span>
                                    <span id="total_input_hidden_price"><input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'.$price.'"></span>
                                    <div class="cart-action-group">
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus" onclick="decrementValue()" value="-"><i class="icofont-minus"></i></button>
                                            <input type="text" name="quantity"  value="1" maxlength="2" max="10" size="1" id="number" />
                                            <button class="action-plus" title="Quantity Plus" onclick="incrementValue()" value="+"><i class="icofont-plus"></i></button>
                                        </div>
                                        
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart" onclick="add_to_cart('.$product_id.','.$price.','.$user_id.')">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                    
                                    </div> 
                                    <div class="view-action-group">
                                    <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                        <i class="icofont-heart"></i>
                                        <span>add to wish</span>
                                    </a>
                                
                                </div>
                                    <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                   
                                </div>
                            </div>
                        </div>';
        }
       
    }

echo $response;

}

//cart insert 

if(isset($_POST['product_add_to_cart'])){
    $product_id=$_POST['product_id'];
    $user_id=$_POST['user_id'];
    $total_price=$_POST['total_price'];
    $items=$_POST['items'];
    $uom=$_POST['uom'];
  

    $sqlx="insert into tbl_cart (fk_product,total_price,items,uom,fk_userid) value ('".$product_id."','".$total_price."','".$items."','".$uom."','".$user_id."')";
    // echo $sqlx;
    mysqli_query($con,$sqlx);


}
//cart checkout update 
if(isset($_POST['cart_checkout'])){
    $items=$_POST['items'];
    $total_price=$_POST['total_price'];
    $cart_id=$_POST['cart_id'];
    

    for($x=0;$x<sizeof($cart_id);$x++){
        $sql="update tbl_cart set total_price='".$total_price[$x]."',items='".$items[$x]."' where cart_id='".$cart_id[$x]."'";
        echo $sql;
        mysqli_query($con,$sql);
    }
  }
 



?>