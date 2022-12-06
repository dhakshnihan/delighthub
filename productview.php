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
            function  myfunction_weight_value1(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML ="Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/4 + "" + "  (Inclusive Of Tax)";
             


            }
            function  myfunction_weight_value2(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML = "Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/parseInt(2) + "" + "  (Inclusive Of Tax)";
               
            }
            function  myfunction_weight_value3(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML =  "Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/parseInt(val) + "" + "  (Inclusive Of Tax)";
               
            }
            var incrementQuantity = 0;
            function increment_quantity(price) {
                incrementQuantity++;
                // newPrice.innerHTML = incrementQuantity * price;
                increment_decrement_value.innerHTML = incrementQuantity;
                console.log(decrementQuantity);
                
            }
            var decrementQuantity = 0;
            function decrement_quantity(price) {
              
                decrementQuantity--;
                // newPrice.innerHTML = decrementQuantity * price;
                increment_decrement_value.innerHTML = decrementQuantity;
                console.log(decrementQuantity);
               
               
            }
        </script>
        <!--=====================================
                    PRODUCT VIEW END
        =======================================-->
