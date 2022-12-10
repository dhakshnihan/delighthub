<?php
    include('dbconnection.php');
    
    if(isset($_POST["action"]))
    {

        $data="";
        $query="";
        $data.='<div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">';

       

        if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
        {
            $query.= " AND PRODN06 BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
        }
        if(isset($_POST["filter_category"]) && !empty($_POST["filter_category"])){
            
            $query.= " AND PRODN10='".$_POST["filter_category"]."'";
        }
        if(isset($_POST["filter_brand"]) && !empty($_POST["filter_brand"])){
            
            $query.= " AND PRODN03='".$_POST["filter_brand"]."'";
        }
       
       
        if(isset($_POST["rating5"])){
            $query.= " AND  PRODN11>'".$_POST["rating5"][0]."'";
        }
        if(isset($_POST["rating4"])){
            $query.= " AND   PRODN11>'".$_POST["rating4"][0]."'";
        }
        if(isset($_POST["rating3"])){
            $query.= " AND  PRODN11>'".$_POST["rating3"][0]."'";
        }
        if(isset($_POST["filter_region"]) && !empty($_POST["filter_region"])){
            $query.= " AND PRODN12='".$_POST["filter_region"]."'";
        }
       
        if(isset($_POST["short_by_filter"]) && !empty($_POST["short_by_filter"])){

            if($_POST["short_by_filter"]=="price_high_to_low"){
                $query.= " ORDER BY PRODN06 DESC";
            }
            if($_POST["short_by_filter"]=="price_low_to_high"){
                $query.= " ORDER BY PRODN06 ASC";
            }
            
        }

        $sql="select * from  tbl_products where PRODN08='Active' $query ";
        // echo $sql;
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            // $image='/admin/masters/product_uploads/."'.$row['PRODN07'].'"';
            $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
            $price=$row['PRODN06'];
            $product_name=$row['PRODN01'];
            $product_id=$row['PRODTID'];

        $data.='<div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="'.$image.'" alt="product">
                        </a>
                        
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="icofont-star"></i>
                            <a href="product-tab.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                            <a href="product-tab.html">'.$product_name.'</a>
                        </h6>
                        <h6 class="product-price">
                            <span>$'.$price.'<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                            <i class="fas fa-shopping-basket"></i>
                            <span title="Product View" href="#" class="add_cart" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
                            </button>
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>';
        }
        echo '</div>';
        
        echo $data;
    }
?>