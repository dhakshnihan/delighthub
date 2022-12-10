// function  myhalf(val){

//     var pri= document.getElementById('pricekg').innerText;
//     weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
//     total_price.innerHTML= "Rs:"+ ""+parseInt(pri)/4 +"" + "/-" + "(Include All taxs)";

    
// }

// function my2half(val){
//     var pri2= document.getElementById('pricekg').innerHTML;
//     weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
//     total_price.innerHTML= "Rs:"+ ""+parseInt(pri2)/2 +"" + "/-" + "(Include All taxs)";

// }

// function mykilo(val){
//     var pri3= document.getElementById('pricekg').innerHTML;
//     weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
//     total_price.innerHTML= "Rs:"+ ""+parseInt(pri3) +"" + "/-" + "(Include All taxs)";

// }



            //=======================Kges part Start caleculation =======================================
            function  myfunction_weight_value1(val){
                var price = document.getElementById("pricekg").innerHTML;
                weight_value.innerHTML ="Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML= "Rs:"+ ""+parseInt(price)/4 +"" + "/-" + "(Include All taxs)";
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
                var price = document.getElementById("pricekg").innerHTML;
                weight_value.innerHTML = "Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML= "Rs:"+ ""+parseInt(price)/4 +"" + "/-" + "(Include All taxs)";
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
                var price = document.getElementById("pricekg").innerHTML;
                weight_value.innerHTML =  "Weight: " + "" + val + "" + " Kg ";
                uom_input_value.innerHTML = '<input  title="UOM" type="hidden" id="uom" name="uom" value="'+val+'">';
                total_price.innerHTML= "Rs:"+ ""+parseInt(price)/4 +"" + "/-" + "(Include All taxs)";
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
                        total_price.innerHTML = "Rs" + "" + parseInt(quantity_hidden)*parseInt(value) + "" +  "/-" + "  (Inclusive Of Tax)";
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
                        total_price.innerHTML = "Rs" + "" + (quantity-quantity_hidden) + "" + "/-" + "(Inclusive Of Tax)";
                        
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
             
         
                $.ajax({
                    url:"ajax.php",
                    method:"post",
                    data:{'product_add_to_cart':'product_add_to_cart',product_id:product_id,total_price:quantity,user_id:user_id,items:items,uom:uom},
                    success:function(response){
                        window.location ='index.php';
                    }
                })
            }

             //======================Added to cart end script=======================================================



  