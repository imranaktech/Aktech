<script type="text/javascript">
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
  $("#email_error_message").hide();
  $("#password_error_message").hide();
  var error_email=false;
  var error_password=false;
  // var error_radio=false;


  $("#email_error").focusout(function()
  {
       show_email_error();
  });
  $('#email_error').keyup(function()
  {
    var email=$(this).val();
    $.ajax({
           url:' echo site_url()',
    });
  });

  $('#password').on('keyup',function()
{
       show_password_error();
});

  $('#radio_value').on('keyup',function()
  {
        show_radio_error();
  });
  function show_email_error()
  {
    var pattern=new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email=$('#email_error').val();
    if(pattern.test(email))
    {
      $('#email_error_message').hide();
    }
    else
    {
      $('#email_error_message').html('Invalid Email address');
      $('#email_error_message').show();
       error_email=true;
    }
  }
  
  function show_password_error()
  {
    var password_length=$('#password').val().length;
    if(password_length< 8)
    {
      $('#password_error_message').html('At least 8 characters');
      $('#password_error_message').show();
      error_password=true;
    }
    else
    {
        $('#password_error_message').hide();
    }
  }
  function show_radio_error()
  {
    var value=$('#radio_value').val();
    if(!value)
    {
     $('#radio_error_message').html('At least 8 characters');
      $('#radio_error_message').show();
      error_password=true;
    }
    else
    {
      $('#radio_error_message').hide();
    }
  }
  $("#Sign_up").submit(function() {
       error_email= false;
       error_password= false;
       error_radio=false;
       show_email_error();
       show_password_error();
       show_radio_error();
       if(error_email==false && error_password==false && error_radio==false)
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
