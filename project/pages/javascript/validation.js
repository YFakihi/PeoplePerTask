
var form = document.getElementById('contact-form')


form.addEventListener('submit', function(e)  {
   
    e.preventDefault();
 
    var name = document.getElementById('name_in').value;
    var mail = document.getElementById('email_in').value;
    var subject = document.getElementById('subject_in').value;
    var message = document.getElementById('message_in').value;
    var name_error = document.getElementById('name_error');
    var mail_error = document.getElementById('email_error');
    var message_error = document.getElementById('message_error');


    
    var mailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    name_error.textContent=""
    mail_error.textContent=""
    message_error.textContent=""



    

    if(name.trim() == "")
    {

        name_error.textContent="name is required"

        return;
    }

    if(mail.trim() == "")
    {
        mail_error.textContent="email is required"
        return;

    }

    if(!mailregex.test(mail))
    {
        mail_error.textContent="email is not correct"
        return;
        
    }

    if(message.trim().length<30)
    {
        message_error.textContent="the message must be more than 30 characters long."
        return;
    }



  form.submit();


})



