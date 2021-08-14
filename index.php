h5<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'layouts.html'; ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
            <div class="col-6">
              <form action="user.php" method="post">

                <div class="form-group">
                  <h5 align='center'>Company name</h5>
                  <input type="text" name="company_name" class="form-control company_name">
                  <label class="message"></label>
                </div>

                <div class="form-group">
                  <h5 align='center'>Email</h5>
                  <input type="text" name="email" class="form-control email">
                  <label class="message_email"></label>
                </div>

                <div class="form-group">
                  <h5 align='center'>Password</h5>
                  <input type="password" name="password" class="form-control password">
                  <label class="message_password"></label>
                </div>

                <div class="form-group">
                  <h5 align='center'>Repeat password</h5>
                  <input type="password" name="repeat_password" class="form-control repeat_password">
                  <label class="message_repeat_password"></label>
                </div>

                <div class="form-group">
                  <h5 align='center'>Phone number</h5>
                  <input type="number" name="phone" class="form-control phone">
                  <label class="message_email"></label>
                </div>

                <div class="form-group">
                  <input type="checkbox" id='check' name="check">
                  <span style="font:20px cursive; padding:0px 50px; border: 1px dotted;">I agree to rules ... </span>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-dark col-12 btn_submit">

              </form>
            </div>
        <div class="col-3"></div>
      </div>
    </div>


<script type="text/javascript">
$(document).ready(function()
{
    var data = []
    $('.btn_submit').hide()
    $('#check').click(function()
    {
      if ($(this).is(':checked'))
      {
        $('.btn_submit').show(100);
      }
      else
      {
        $('.btn_submit').hide(100);
      }
    });

    $(".btn_submit").click(function()
    {
        var comp_name = $(".company_name").val()
        var email = $(".email").val()
        var password = $(".password").val()
        var repeat_password = $(".repeat_password").val()
        var phone = $(".phone").val()
        if (password == repeat_password)
        {
            data.push(comp_name, email, password, phone)
        }

    })

    $(".company_name").blur(function()
    {
      if($(".company_name").val().length<3 || $(".company_name").val().length>50)
      {
        $(".company_name").addClass('is-invalid')
        $(".company_name").removeClass('is-valid')
        $(".message").text('MUST BE 3-50 SYMBOL')
      }
      else
      {
        $(".company_name").removeClass('is-invalid')
        $(".company_name").addClass('is-valid')
        $(".message").text('')
      }
    });

    $(".email").blur(function()
    {
      if($(".email").val().length<=0)
      {
        $(".email").addClass('is-invalid')
        $(".email").removeClass('is-valid')
        $(".message_email").text('MUST BE REQUIRED')
      }
      else
      {
        $(".email").removeClass('is-invalid')
        $(".email").addClass('is-valid')
        $(".message_email").text('')
      }
    });

    $(".password").blur(function()
    {
      if($(".password").val().length<=0)
      {
        $(".password").addClass('is-invalid')
        $(".password").removeClass('is-valid')
        $(".message_password").text('MUST BE REQUIRED')
      }
      else
      {
        $(".password").removeClass('is-invalid')
        $(".password").addClass('is-valid')
        $(".message_password").text('')
      }
    });

    $(".repeat_password").blur(function()
    {
      if($(".repeat_password").val().length<=0 || $(".repeat_password").val()!=$(".password").val())
      {
        $(".repeat_password").addClass('is-invalid')
        $(".repeat_password").removeClass('is-valid')
        $(".message_repeat_password").text('MUST BE REQUIRED AND SAME PASSWORD')
      }
      else
      {
        $(".repeat_password").removeClass('is-invalid')
        $(".repeat_password").addClass('is-valid')
        $(".message_repeat_password").text('')
      }
    });

    $(".phone").blur(function()
    {
      if($(".phone").val().length<=0)
      {
        $(".phone").addClass('is-invalid')
        $(".phone").removeClass('is-valid')
        $(".message_phone").text('MUST BE REQUIRED')
      }
      else
      {
        $(".phone").removeClass('is-invalid')
        $(".phone").addClass('is-valid')
        $(".message_phone").text('')
      }
    });

})
</script>

  </body>
</html>
