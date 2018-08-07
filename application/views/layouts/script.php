<script type="text/javascript">

    $('#email_error').keyup(function(){  
           var email = $('#email_error').val();
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>LoginCI/available_email",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  

                          $('#email_error_message').html(data);  
                     }  
                });  
           }  
      });


  //<!--Code of Show password in Login-->


  function show()
  {
  var x=document.getElementById('password');
  if(x.type=='password')
  {

    x.type='text';
    document.getElementById('eye').style.color="blue";
  }
  else
  {
    x.type='password';
    document.getElementById('eye').style.color="black";
  }
}

//<!--Code of Show validation in Login-->


$(document).ready(function()
{
  $(function()
{
  var error_password=false;
  $('#password').on('keyup',function()
{
       show_password_error();
});


  function show_password_error()
  {
    var password_length=$('#password').val().length;
    if(password_length< 8)
    {
      $('#password_error_message').html('at least 8 characters');
      $('#password_error_message').show();
      error_password=true;
    }
    else 
    {
       $('#password_error_message').html('<label class="text-success">Password good</span></label>');
      $('#password_error_message').show();
    }
  }
  
  $("#Sign_up").submit(function() {
       error_password= false;
       show_password_error();
       if(error_password==false)
       {
        return true;
       }
       else
       {
        return false;
       }               

  });
});
});
</script>