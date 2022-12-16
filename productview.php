 <!--=====================================
                    PRODUCT VIEW START
  =======================================-->
  <div class="modal fade" id="product-view">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                    <div class="product-view">
                        
                    </div>
                </div> 
            </div> 
        </div>

        <script>
            //=======================Kges part Start caleculation =======================================
            function  myfunction_weight_value1(val,symbol){
                var price = document.getElementById("price").value;
                weight_value.innerHTML ="Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML = symbol + "" + parseFloat((price)/4).toFixed(2) + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseFloat((price)/4).toFixed(2)+'" >';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseFloat((price)/4).toFixed(2)+'" >';
                document.getElementById('number').value = 1;

                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.remove("active");
                myfunction_weight_value2.classList.remove("active");
                myfunction_weight_value1.classList.add("active");
               
            }
            function  myfunction_weight_value2(val,symbol){
                var price = document.getElementById("price").value;
                weight_value.innerHTML = "Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML = symbol + "" + parseFloat((price)/2).toFixed(2) + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseFloat((price)/2).toFixed(2)+'" >';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseFloat((price)/2).toFixed(2)+'" >';
                document.getElementById('number').value = 1;
                
                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.remove("active");
                myfunction_weight_value2.classList.add("active");
                myfunction_weight_value1.classList.remove("active");
                
            }
            function  myfunction_weight_value3(val,symbol){
                var price = document.getElementById("price").value;
                weight_value.innerHTML =  "Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML = symbol + "" + parseFloat((price)/val).toFixed(2) + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseFloat((price)/val).toFixed(2)+'">';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseFloat((price)/val).toFixed(2)+'" >';
                document.getElementById('number').value = 1;
               
                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.add("active");
                myfunction_weight_value2.classList.remove("active");
                myfunction_weight_value1.classList.remove("active");

               
            }
        
            function incrementValue(symbol)
            {
                var quantity_hidden = $("#quantity_hidden").val();
                var value = parseFloat(document.getElementById('number').value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<10){
                    value++;
                        document.getElementById('number').value = value;
                        document.getElementById('quantity').value =parseFloat(quantity_hidden*value).toFixed(2);
                        total_price.innerHTML = symbol + "" + parseFloat(quantity_hidden*value).toFixed(2) + "" + " /-"+" (Inclusive Of Tax)";
                }
            }
            function decrementValue(symbol)
            {
                var quantity_hidden = $("#quantity_hidden").val();
                var quantity = $("#quantity").val();
               
                var value = parseFloat(document.getElementById('number').value, 10);
                value = isNaN(value) ? 0 : value;
                if(value>1){
                    value--;
                        document.getElementById('number').value = value;
                        document.getElementById('quantity').value = parseFloat(quantity-quantity_hidden).toFixed(2);
                        total_price.innerHTML = symbol + "" + parseFloat(quantity-quantity_hidden).toFixed(2) + "" + "/-" +"  (Inclusive Of Tax)";
                        
                }

            }

             //=======================Kges part end caleculation =======================================


             //=======================Kges part Start caleculation =======================================
            function  myfunction_inches_value1(){
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="XL">';

                var myfunction_inches_value4 = document.getElementById("myfunction_inches_value4");
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value4.classList.remove("active");
                myfunction_inches_value3.classList.remove("active");
                myfunction_inches_value2.classList.remove("active");
                myfunction_inches_value1.classList.add("active");
               
            }
            function  myfunction_inches_value2(){
                 uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="L">';

                 var myfunction_inches_value4 = document.getElementById("myfunction_inches_value4");
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value4.classList.remove("active");
                myfunction_inches_value3.classList.remove("active");
                myfunction_inches_value2.classList.add("active");
                myfunction_inches_value1.classList.remove("active");
                
            }
            function  myfunction_inches_value3(){
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="M">';
                
                var myfunction_inches_value4 = document.getElementById("myfunction_inches_value4");
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value4.classList.remove("active");
                myfunction_inches_value3.classList.add("active");
                myfunction_inches_value2.classList.remove("active");
                myfunction_inches_value1.classList.remove("active");

               
            }

            function  myfunction_inches_value4(){
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="S">';

                var myfunction_inches_value4 = document.getElementById("myfunction_inches_value4");
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value4.classList.add("active");
                myfunction_inches_value3.classList.remove("active");
                myfunction_inches_value2.classList.remove("active");
                myfunction_inches_value1.classList.remove("active");

               
            }

             //=======================Kges part end caleculation =======================================
            

             //======================Added to cart start script======================================================
            function add_to_cart(product_id,price,user_id){
              var uom=$("#uom").val();
              var quantity=$("#quantity").val();
              var items=$("#number").val();
              var brand=$("#brand").val();
          
                $.ajax({
                    url:"ajax.php",
                    method:"post",
                    data:{'product_add_to_cart':'product_add_to_cart',product_id:product_id,total_price:quantity,user_id:user_id,items:items,uom:uom,brand:brand},
                    success:function(response){
                        window.location ='index.php';
                    }
                })
            }

            function already_exist(){
            alert("This item already added cart!");
        }

             //======================Added to cart end script=======================================================


             //======================add wishlist start script=====================================================
           function view_wish(product_id){

          
                 var user_id=$("#user_id").val();
                
                if(user_id>0){
                    $.ajax({
                        url:"ajax.php",
                        method:"POST",
                        data:{'add_wishlist':'add_wishlist',user_id:user_id,product_id:product_id},
                        success:function(response){
                            var data = jQuery.parseJSON(response);
                            if(data.value=="index"){
                                window.location.href="index.php";
                            }else if(data.value=="wishlist"){
                                window.location.href="wishlist.php";
                            }
                           
                        }
                     });
                }else{
                    alert("Please login!");
                }   
           }
                
         //======================add wishlist end script=====================================================



        </script>
        <!--=====================================
                    PRODUCT VIEW END
        =======================================-->
