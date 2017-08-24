<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />


    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="css/css/themes/default/jquery.mobile-1.4.5.css">
    <link type="text/css" rel="stylesheet" href="css/css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/css/style.min.css" />
    <link type="text/css" rel="stylesheet" href="css/css/colors/yellow.css" />
    <script src="phonegap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/custom.js"></script>
   

    <title>Mobile POS Template</title>
</head>

<!-- <body class="green">
    Loading ...

    <script type="text/javascript">
        app.initialize();
    </script> -->
<body>

<div data-role="page" id="homepage"  data-theme="b" class="">

    <div data-role="" data-position="fixed">
        <div class="nav_center_logo"></div>
        <div class="clear"></div>
    </div>
            <div role="main" class="ui-content">

        <div class="logo_container">
            <div class="logo">
            <img src="css/css/images/logo3.png" alt="" title="" />
            <h2></h2>
            <span></span>                        
            </div>                     
        </div>

    </div>



    


       <input type="hidden" id="is_finish" value="<?=$finish?>">
       <div data-role="footer" class="ui-footer ui-bar-inherit">
    <h4 class="banner_footer"><span class="v-align">Powered by</span> <img class="btm_logo" src="css/css/images/header_logo_p1.png"></h4>



    <script type="text/javascript">
        app.initialize();
    </script>

<!-- <script>
  $(function(){


    check_finish();


    function check_finish(){
      var is_finish = $('#is_finish').val();

      if(is_finish){

        swal({
          title: "Thank you for shopping!",
          type:'success',
          text: "Your order is now on process and will be ready in a minute.",
          timer: 7000,
          showConfirmButton: false
        });
        
      }      
    }

  });

</script> -->
</body>

</html>