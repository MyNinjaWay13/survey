

//----------------------------------------------------------------------------------------------------------------------------------------------
$('body').on('submit','#surveyform',function(){
    errors = 0;
    $('#surveyform').find('input').each(function(){
        if(!($(this).val().length > 0)){
            alert($(this).attr('name')+" field is required and should have right format")
            errors = 1
            break;
        } 
    });
    if(errors == 0){
        $("#surveyform").submit();
    }
});

// if(!($(this).val().length > 0)){
//     alert($(this).attr('name')+" field is required and should have right format")
//     errors = 1
//     return false;
// }
// else if(errors == 0){
//     $("#surveyform").submit();
// }