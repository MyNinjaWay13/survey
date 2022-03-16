
$('.registerBtn').click(function(){
    
    let email = $("#email").val();
    let phone = $("#phone").val();
    let username = $("#username").val();
    let fullname = $("#fullname").val();
    let password  = $("#psw").val();
    let x=$("#email").val(); 
    let atposition=x.indexOf("@");  
    let dotposition=x.lastIndexOf(".");
    
    var errors = 0;
    $('#registrationForm').find('input').each(function(){
        if(!($(this).val().length > 0)){
            alert($(this).attr('name')+" field is required and should have right format")
            errors = 1
            return false;
        }
    });

    // if(email.length <= 0 && atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
    //     alert("Email field is required and should have right format")
    //     return false;
        
    // }
    // if(phone.length <= 0 ){
    //     alert("Phone field is required and should have right format")
    //     return false;
        

    // }
    // if(username.length <= 0){
    //     alert("Username field is required and should have right format")
    //     return false;

    // }
    // if(fullname.length <= 0 ){
    //     alert("Fullname field is required and should have right format")
    //     return false;

    // }
    // if(password.length <= 0){
    //     alert("Password field is required and should have right format")
    //     return false;

    // }

    
    let repass = $("#psw-repeat").val();
    if(repass !== password){
        alert("Password and Repeat Password don't match");
        die();
    }
    elseif(errors == 0)
        $("#registrationForm").submit();
});
    
