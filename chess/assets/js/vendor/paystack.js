function payWithPaystack(email){
    var phone = $("#phone").val()
    var handler = PaystackPop.setup({
        key: 'pk_test_0cbf3a9ee927e2ac3cc8c47876b845bba0a9d14b',
        email: email,
        amount:20000000,
        currency:"NGN",
        ref: 'Flaming-K'+Math.floor((Math.random() * 1000000000) + 1),
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: phone
                }
            ]
        },
        callback: function(response){
            alert('successfully subscribed. transaction ref is ' + response.reference);
        },
        onClose: function(){
            alert('window closed');
        }
    });
    handler.openIframe();
}