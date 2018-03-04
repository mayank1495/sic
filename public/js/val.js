
var hasNum = function(strng){
    return /\d/.test(strng);
}

var hasAlph = function(strng){
    return /^[0-9]+$/.test(strng);
}
document.querySelector("#sub").addEventListener('click',function(){
     var strng = document.forms["form"]["namef"].value;
    if(hasNum(strng))
        {
            document.forms["form"]["namef"].value="Invalid Input";
        }
    strng = document.forms["form"]["namel"].value;
    if(hasNum(strng))
        {
            document.forms["form"]["namel"].value="Invalid Input";
        }
    strng = document.forms["form"]["city"].value;
    if(hasNum(strng))
        {
            document.forms["form"]["city"].value="Invalid Input";
        }
    strng = document.forms["form"]["state"].value;
    if(hasNum(strng))
        {
            document.forms["form"]["state"].value="Invalid Input";
        }
    strng = document.forms["form"]["tel"].value;
    if(hasAlph(strng) || document.forms["form"]["tel"].value.length)
        {
            document.forms["form"]["tel"].value="Invalid Input";
        }
    strng = document.forms["form"]["reg"].value;
    if(hasAlph(strng) || document.forms["form"]["reg"].value.length)
        {
            document.forms["form"]["reg"].value="Invalid Input";
        }
    
    
});
//var validate = function(){
//   // e.preventDefault();
//    var strng = document.forms["form"]["namef"].value;
//    if(hasNum(strng))
//        {
//            document.forms["form"]["namef"].value="Invalid Input";
//        }
//    strng = document.forms["form"]["namel"].value;
//    if(hasNum(strng))
//        {
//            document.forms["form"]["namel"].value="Invalid Input";
//        }
//    strng = document.forms["form"]["city"].value;
//    if(hasNum(strng))
//        {
//            document.forms["form"]["city"].value="Invalid Input";
//        }
//    strng = document.forms["form"]["state"].value;
//    if(hasNum(strng))
//        {
//            document.forms["form"]["state"].value="Invalid Input";
//        }
//    strng = document.forms["form"]["tel"].value;
//    if(hasAlph(strng) || document.forms["form"]["tel"].value.length)
//        {
//            document.forms["form"]["tel"].value="Invalid Input";
//        }
//    strng = document.forms["form"]["reg"].value;
//    if(hasAlph(strng) || document.forms["form"]["reg"].value.length)
//        {
//            document.forms["form"]["reg"].value="Invalid Input";
//        }
//    
//}