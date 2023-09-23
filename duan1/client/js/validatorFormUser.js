
 function validator(input)

 {
    // Truy xuất phần tử cần đến////
    var addresElement = document.querySelector(input.addres);

    if(addresElement){
       input.relus.forEach(function (rules){
        var relusElement =  addresElement.querySelector(rules.seletor);
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
validator.isName2 = function(seletor){
    return {
        seletor:seletor,
        test : function(value){
          return value.trim() ? undefined : "Vui lòng nhập lại trường này";
          
        }
    }

}
validator.isPhone2 = function(seletor){
    return {
        seletor:seletor,
        test : function(value){
          return value.trim() ? undefined : "Vui lòng nhập lại trường này";
          
        }
    }

}
validator.isAddress = function(seletor){
    return {
        seletor:seletor,
        test : function(value){
          return value.trim() ? undefined : "Vui lòng nhập lại trường này";
          
        }
    }

}

