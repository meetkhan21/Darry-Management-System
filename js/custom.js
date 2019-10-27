var IQuantity = document.getElementById('itemQuantity');
var IPrice = document.getElementById('itemPrice');
var TPrice = document.getElementById('totalPrice');
var IQ =0;
var IP =0;

IQuantity.onchange = function(){
    IQ = IQuantity.value;
    if(IP === 0){
        TPrice.value = (IQ).toString();
    } else {
        TPrice.value = (IQ*IP).toString();
    }
    
}
IPrice.onchange = function(){
    IP = parseInt(IPrice.value);
    if(IQ === 0){
        TPrice.value = (IP).toString();
    } else {
        TPrice.value = (IQ*IP).toString();
    }
    
}



