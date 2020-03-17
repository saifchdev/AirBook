
$(function(){
    $('#id').on('blur',function(){
        if(!/(\d{2}((CO)|(DCO)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
            alert("invalid roll no");
            this.value="";
            $(this).focus();
        }
    });
    
    $('#username').on('blur',function(){
        if(/[^a-zA-Z]/.test(e.key)){
            alert("invalid name.only alphabet and spaces are allowed");
            this.value="";
            $(this).focus();
            return false;
        }
    });
    });