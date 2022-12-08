function  myhalf(val){

    var pri= document.getElementById('pricekg').innerText;
    weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
    total_price.innerHTML= "Rs:"+ ""+parseInt(pri)/4 +"" + "/-" + "(Include All taxs)";

    
}

function my2half(val){
    var pri2= document.getElementById('pricekg').innerHTML;
    weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
    total_price.innerHTML= "Rs:"+ ""+parseInt(pri2)/2 +"" + "/-" + "(Include All taxs)";

}

function mykilo(val){
    var pri3= document.getElementById('pricekg').innerHTML;
    weight_value.innerHTML="Weight: " + "" + val + "" + " Kg ";
    total_price.innerHTML= "Rs:"+ ""+parseInt(pri3) +"" + "/-" + "(Include All taxs)";

}