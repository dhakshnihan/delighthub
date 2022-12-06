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
            function  myfunction_weight_value1(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML ="Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/4 + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseInt(price)/4+'" >';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseInt(price)/4+'" >';
                document.getElementById('number').value = 1;

                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.remove("active");
                myfunction_weight_value2.classList.remove("active");
                myfunction_weight_value1.classList.add("active");
               
            }
            function  myfunction_weight_value2(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML = "Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/parseInt(2) + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseInt(price)/parseInt(2)+'" >';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseInt(price)/parseInt(2)+'" >';
                document.getElementById('number').value = 1;
                
                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.remove("active");
                myfunction_weight_value2.classList.add("active");
                myfunction_weight_value1.classList.remove("active");
                
            }
            function  myfunction_weight_value3(val){
                var price = document.getElementById("price").value;
                weight_value.innerHTML =  "Weight: " + "" + val + "" + " Kg ";
                total_price.innerHTML = "$" + "" + parseInt(price)/parseInt(val) + "" + "  (Inclusive Of Tax)";
                total_input_price.innerHTML = '<input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'+parseInt(price)/parseInt(val)+'">';
                total_input_hidden_price.innerHTML = '<input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'+parseInt(price)/parseInt(val)+'" >';
                document.getElementById('number').value = 1;
               
                var myfunction_weight_value3 = document.getElementById("myfunction_weight_value3");
                var myfunction_weight_value2 = document.getElementById("myfunction_weight_value2");
                var myfunction_weight_value1 = document.getElementById("myfunction_weight_value1");
                myfunction_weight_value3.classList.add("active");
                myfunction_weight_value2.classList.remove("active");
                myfunction_weight_value1.classList.remove("active");

               
            }
        
            function incrementValue()
            {
                var quantity_hidden = $("#quantity_hidden").val();
                var value = parseInt(document.getElementById('number').value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<10){
                    value++;
                        document.getElementById('number').value = value;
                        document.getElementById('quantity').value =quantity_hidden*value;
                        total_price.innerHTML = "$" + "" + parseInt(quantity_hidden)*parseInt(value) + "" + "  (Inclusive Of Tax)";
                }
            }
            function decrementValue()
            {
                var quantity_hidden = $("#quantity_hidden").val();
                var quantity = $("#quantity").val();
               
                var value = parseInt(document.getElementById('number').value, 10);
                value = isNaN(value) ? 0 : value;
                if(value>1){
                    value--;
                        document.getElementById('number').value = value;
                        document.getElementById('quantity').value =quantity-quantity_hidden;
                        total_price.innerHTML = "$" + "" + (quantity-quantity_hidden) + "" + "  (Inclusive Of Tax)";
                        
                }

            }

             //=======================Kges part end caleculation =======================================


             //=======================Kges part Start caleculation =======================================
            function  myfunction_inches_value1(){

                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value3.classList.remove("active");
                myfunction_inches_value2.classList.remove("active");
                myfunction_inches_value1.classList.add("active");
               
            }
            function  myfunction_inches_value2(){
                
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value3.classList.remove("active");
                myfunction_inches_value2.classList.add("active");
                myfunction_inches_value1.classList.remove("active");
                
            }
            function  myfunction_inches_value3(){
               
                var myfunction_inches_value3 = document.getElementById("myfunction_inches_value3");
                var myfunction_inches_value2 = document.getElementById("myfunction_inches_value2");
                var myfunction_inches_value1 = document.getElementById("myfunction_inches_value1");
                myfunction_inches_value3.classList.add("active");
                myfunction_inches_value2.classList.remove("active");
                myfunction_inches_value1.classList.remove("active");

               
            }
             //=======================Kges part end caleculation =======================================



        </script>
        <!--=====================================
                    PRODUCT VIEW END
        =======================================-->
