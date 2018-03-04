var print = function (str) {
    console.log(str);
}

var hasNum = function (strng) {
    return /\d/.test(strng);
}

var hasSpChar = function (str) {
    return /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\? ]/g.test(str);
}

var onlyChar = function (str) {
    return /^[a-z A-Z]+$/.test(str);
}

var hasAlph = function (strng) {
    return /^[0-9]+$/.test(strng);
}

var setInvalid = function (flg, form) {
    if (flg) {
        form.setCustomValidity("Invalid field.");
        form.focus();
    } else {
        form.setCustomValidity("");
    }
}

var checkString = function (form) {
    var input = form.value;
    setInvalid((!(onlyChar(input))), form);
}

var checkEmail = function (form) {
    var input = form.value;
    setInvalid(hasSpChar(input), form);
}

var checkPhone = function (form) {
    var lenp = form.value.length;
    setInvalid(!(lenp==10),form);
}

var checkPwd=function(form){
    pwd=document.querySelector("#pwd");
    // print(pwd);
    setInvalid(form.value!=pwd.value,form);
}

var checkPwdb=function(form){
    pwd=document.querySelector("#pwd");
    // print(pwd);
    if(pwd.value!=form.value)
     pwd.focus();
}



// document.querySelector("#sub").addEventListener('click',function(){
//      var strng = document.forms["form"]["namef"].value;
//     if(hasNum(strng))
//         {
//             document.forms["form"]["namef"].value="Invalid Input";
//         }
//     strng = document.forms["form"]["namel"].value;
//     if(hasNum(strng))
//         {
//             document.forms["form"]["namel"].value="Invalid Input";
//         }
//     strng = document.forms["form"]["city"].value;
//     if(hasNum(strng))
//         {
//             document.forms["form"]["city"].value="Invalid Input";
//         }
//     strng = document.forms["form"]["state"].value;
//     if(hasNum(strng))
//         {
//             document.forms["form"]["state"].value="Invalid Input";
//         }
//     strng = document.forms["form"]["tel"].value;
//     if(hasAlph(strng) || document.forms["form"]["tel"].value.length)
//         {
//             document.forms["form"]["tel"].value="Invalid Input";
//         }
//     strng = document.forms["form"]["reg"].value;
//     if(hasAlph(strng) || document.forms["form"]["reg"].value.length)
//         {
//             document.forms["form"]["reg"].value="Invalid Input";
//         }


// });
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