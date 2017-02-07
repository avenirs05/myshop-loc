function addToCart(itemId) {
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST', 
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                $('#cartCntItems').html(data.cntItems);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
}

function removeFromCart(itemId) {
    console.log("js - removeFromCart()");
    $.ajax({
        type: 'POST',
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                $('#cartCntItems').html(data.cntItems);
                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    });
}

function conversionPrice (itemId) {
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemTotalPrice = newCnt * itemPrice;
    
    $('#itemTotalPrice_' + itemId).html(itemTotalPrice);
}

