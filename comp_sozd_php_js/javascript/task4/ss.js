'use strict'
var txt = [],
    phone = [],
    email = [],
    counte = 0,
    countp = 0,
    countt = 0;

function change(form, data = 0){
   // alert('say hi');

    
    switch (form){
        case 'email': 
            if (data !== "" && data !== " "){
                email[counte] = data;
         //       alert(counte);
                counte++;
            } else {
                alert('Нельзя оставлять пустым');
            }
                break;
        
        case 'phone': 
            if (data !== "" && data !== " "){
            phone[countp] = data;
      //      alert(email[countp]);
            countp++;
            } else {
                alert('Нельзя оставлять пустым');
            }
                break;
        
        case 'text': 
            if (data !== "" && data !== " "){
            text[countt] = data;
            countt++;
            } else {
                alert('Нельзя оставлять пустым');
            }
                break;
        
        case 'back': 
            if (countt !== 0){
           //     alert(text.length);
           //     text.pop;
                var i = +(text.length - 1);
                document.form1.text.value = text[i];
                countt--;
                
            }  else {
                    if (countp !== 0)
                    {
                //    alert(phone.length);
                    phone.pop;
                    var i = +(phone.length - 1);
                    document.form1.phone.value = phone[i];
                    countp--;
                    
                    } else {
                            if (counte !== 0)
                            {
                         //   alert(email.length);
                            email.pop;
                            var i = +(email.length - 1);
                            document.form1.email.value = email[i];
                            counte--;
                                
                            } else {
                            alert('Изменений больше не было');
                    }}
                            
            }
                break;
    }};
            
    
