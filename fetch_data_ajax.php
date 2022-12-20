<?php

error_reporting(0);
session_start();
    include('dbconnection.php');
    
    if(isset($_POST["action"]))
    {

        $data="";
        $query="";
        $results_per_page = 2;  

        if (!isset ($_POST['page_no']) ) {  
            $page_no = 1;  
        } else {  
            $page_no = $_POST['page_no'];  
        }  

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
            $query.= " AND  PRODN11>='".$_POST["rating5"][0]."'";
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

        $sqlx="select * from tbl_currency where currency_name='".$_SESSION['currency']."'";
        $resultx=mysqli_query($con,$sqlx);
        $rowx=mysqli_fetch_array($resultx);
        $exchange_rate=$rowx['exchange_rate'];

        $sql="select * from  tbl_products where PRODN08='Active' $query ";
        // echo $sql;
        $result=mysqli_query($con,$sql);
        $number_of_result = mysqli_num_rows($result); 
        $number_of_page = ceil ($number_of_result / $results_per_page);  
        $page_first_result = ($page_no-1) * $results_per_page;  
        $query = "select * from  tbl_products where PRODN08='Active' $query LIMIT " . $page_first_result . ',' . $results_per_page;  
        $resultx=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($resultx)){
            // $image='/admin/masters/product_uploads/."'.$row['PRODN07'].'"';
            $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
            $product_name=$row['PRODN01'];
            $product_id=$row['PRODTID'];
            $rating=$row['PRODN11'];

            $price = $row['PRODN06'];
            $symbol="₹";
            
            if($_SESSION['currency']=="USD"){
                
                $price = round(($row['PRODN06']*$exchange_rate), 2);
                $symbol="$";

            }else if($_SESSION['currency']=="Pound"){
                $price = round(($row['PRODN06']*$exchange_rate), 2);
                $symbol="£";
            }

            $sqlxx="select * from tbl_wishlist where fk_product_id='".$product_id."' and fk_user_id='".$_POST['user_id']."' and status='Active'";
                  
            $resultxx=mysqli_query($con,$sqlxx);
            $rowxx=mysqli_fetch_array($resultxx);
            $wishlist_id=$rowxx['wishlist_id'];
            
            if($wishlist_id>0){
                $status="active";

            }else{
                $status="";

            }

        $data.='<div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish '.$status.'"  onclick="view_wish('.$product_id.')" value='.$product_id.'>
                            <i class="fas fa-heart"> </i>
                            
                         </button>
                        <a class="product-image" href="product-tab.php?id='.$product_id.'">
                            <img src="'.$image.'" alt="product">
                        </a>
                        
                    </div>
                    <div class="product-content">
                        <div class="product-rating">';
                        for ($i = 1; $i <= 5; $i++) {
                                                       
                            if($i <= $rating) {
                               $data.='<i class="active icofont-star"></i>';
                            }else{
                                $data.='<i class=" icofont-star"></i>';
                            }
                        }
                            
                    $data.='<a href="product-tab.html">('.$rating.')</a>
                        </div>
                        <h6 class="product-name">
                            <a href="product-tab.html">'.$product_name.'</a>
                        </h6>
                        <h6 class="product-price">
                            <span>'.$symbol.''.$price.'<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                            <i class="fas fa-shopping-basket"></i>
                            <span title="Product View" href="#" class="add_cart" onclick="add_cart('.$product_id.')" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
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
        $data.='</div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-paginate">
                                    <p class="page-info">Showing 5 of '.$number_of_result.' Results</p>
                                    <ul class="pagination">';
                                    if(($page_no-1)>0){
                                        $data.='<li class="page-item">
                                                    <button class="page-link" onclick=previous_page('.($page_no-1).')>
                                                        <i class="fas fa-long-arrow-alt-left"></i>
                                                    </button>
                                                </li>';
                                    }else{
                                        
                                    }
                                        
                                        for($page = 1; $page<= $number_of_page; $page++) { 
                                           
                                            if($page==$page_no){
                                                $status='active';
                                            }else{
                                                $status='';
                                            }
                                            $data.='<li class="page-item"> <button class="page-link '.$status.'" onclick=pagenation('.$page.')>'.$page.'</button></li>';
                                        }
                                 $data.='<li class="page-item">
                                            <button class="page-link" onclick=next_page('.($page_no+1).')>
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
        
        
        echo $data;
    }
?>