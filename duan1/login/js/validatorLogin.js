
 function validator(input)
 {
    // Truy xuất phần tử cần đến////
    var addresElement = document.querySelector(input.addres);
    if(addresElement){
       input.relus.forEach(function(rules){
        var relusElement =  addresElement.querySelector(rules.seletor);
        console.log(relusElement);
        if(relusElement){
            // sủ lý khi  onlur
            relusElement.onblur = function (){
                validateOnBlur(relusElement,rules,input);
            }
            // sử lý khi nhập oninput
            relusElement.oninput = function (){
                validateOnInput(relusElement,rules,input);
            }

        }
       });
    
    }
    /// form sử lý onblur
    function validateOnBlur(relusElement,rules,input){
        var selectError  = relusElement.parentElement.querySelector(input.ErrorMessage);
        var errorMessage = rules.test(relusElement.value)
        if(errorMessage){
           selectError.innerText = errorMessage;
           relusElement.parentElement.classList.add('invalid');
        }else{
            selectError.innerText = '';
           relusElement.parentElement.classList.remove('invalid');
        }
        return !errorMessage;
    }
    // function sử lý oninput //
    function validateOnInput(relusElement,rules,input){
        var selectError  = relusElement.parentElement.querySelector(input.ErrorMessage);
        selectError.innerText = '';
        relusElement.parentElement.classList.remove('invalid');
    }

}

validator.isName = function(seletor){
    return {
        seletor:seletor,
        test : function(value){
          return value.trim() ? undefined : "Vui lòng nhập lại trường này";
          
        }
    }

}
validator.isEmail = function(seletor){
     return {
        seletor:seletor,
        test : function(value){
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : "Vui lòng nhập lại email";
            
          }
    }

}
validator.isUsername = function(seletor){
    return {
        seletor:seletor,
        test : function(value){
          return value.trim() ? undefined : "Vui lòng nhập lại trường này";
          
        }
    }

}
validator.isPassword = function(seletor,minlength,maxlength){
    return {
        seletor:seletor,
        test : function(value){
           return value.length > minlength-1 && value.length  < maxlength ? undefined : "Vui long nhap lon hon 6 va nho hon 12";
            
          }
    }

}
validator.isPassword2 = function(seletor,minlength,maxlength){
    return {
        seletor:seletor,
        test : function(value){
           return value.length > minlength-1 && value.length  < maxlength ? undefined : "Vui long nhap lon hon 6 va nho hon 12";
            
          }
    }

}