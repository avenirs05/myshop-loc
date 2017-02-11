function addToCart(itemId) {
    console.log("js 1- addToCart()");
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

function getData(obj) {
    var hData = {};
    $('input, textarea, select', obj).each(function () {
        if (this.name && this.name !== '') {
            hData[this.name] = this.value;            
            //console.log('hData[' + this.name + '] = ' + hData[this.name]);        
        }
    });
    return hData;
}

function registerNewUser() {
    var postData = getData('#registerBox');    
    $.ajax({
        type: 'POST',
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {            
            if (data['success']) {
                alert('Регистрация прошла успешно');
                $('#registerBox').hide();
                
                //$('#userLink').attr('href', '/user/');
                //$('#userLink').html(data['userName']);
                //$('#userBox').show();
                
                //$('#loginBox').hide();
                //$('#btnSaveOrder').show();
                
            }
            else {
                alert(data['message']);
            }
        },    
        error: function () { alert('Ошибка!'); }
    });
}


