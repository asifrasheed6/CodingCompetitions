<?php
    /*
        Front End of the webpage is made by Really Good Emails
                website: https://codepen.io/reallygoodemails
        Back End of the webpage is made by Asif Rasheed
                website: https://github.com/asifrasheed6
        Rights Reserved to the Authors
     */
    
    // Checks if the user has already logged in or not
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        if((time())-$_SESSION['last_activity']>=600){
            session_unset();
            session_destroy();
            exit;
        }
        else{
            include 'config.php'; // Here it is required only if a valid session is active
            $id = $_SESSION['id'];
            $row = mysqli_fetch_array(mysqli_query($database,'SELECT * FROM `USER` WHERE `ID` = $id'));
            // If the user is admin, redirect to admin panel
            if($row['Admin'])
                header('location: /postoffice/');
            else
                header('location: /home/');
            exit;
        }
    }
    $email = $_GET['email'];
    $status = $_GET['status'];
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<title><?php if($status=='true') echo 'Please verify your email';
    else echo 'Something went wrong'; ?></title>
  <link rel="stylesheet" href="./style.css">

</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
style="margin: 0pt auto; padding: 0px; background:#e3e3e3;">
  <table id="main" width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"
  bgcolor="#F4F7FA">
    <tbody>
<?php if($status=='true'){ ?>
<tr>
  <td valign="top">
    <table class="innermain" cellpadding="0" width="580" cellspacing="0" border="0"
    bgcolor="#F4F7FA" align="center" style="margin:0 auto; table-layout: fixed;">
      <tbody>
        <!-- START of MAIL Content -->
        <tr>
          <td colspan="4">
            <!-- Logo start here -->
            <table class="logo" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td colspan="2" height="30"></td>
                </tr>
                <tr>
                  <td valign="top" align="center">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" height="30"></td>
                </tr>
              </tbody>
            </table>
            <!-- Logo end here -->
            <!-- Main CONTENT -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
            style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
              <tbody>
                <tr>
                  <td height="40"></td>
                </tr>
                <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
                  <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                      <tbody>
                        <tr>
                          <td align="center" valign="bottom" colspan="2" cellpadding="3">
                            <img alt="Coinbase" width="80" src="https://www.coinbase.com/assets/app/icon_email-e8c6b940e8f3ec61dcd56b60c27daed1a6f8b169d73d9e79b8999ff54092a111.png"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td height="30" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center"> <span style="color:#48545d;font-size:22px;line-height: 24px;">
  Verify your email address
</span>

                          </td>
                        </tr>
                        <tr>
                          <td height="24" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td height="1" bgcolor="#DAE1E9"></td>
                        </tr>
                        <tr>
                          <td height="24" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
We have sent an email to <?php echo $email ?> containing information on how to verify your email address. 
</span>

                          </td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center">
                            <img src="https://s3.amazonaws.com/app-public/Coinbase-notification/hr.png" width="54"
                            height="2" border="0">
                          </td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td height="60"></td>
                </tr>
<?php } else{ ?>
<tr>
  <td valign="top">
    <table class="innermain" cellpadding="0" width="580" cellspacing="0" border="0"
    bgcolor="#F4F7FA" align="center" style="margin:0 auto; table-layout: fixed;">
      <tbody>
        <!-- START of MAIL Content -->
        <tr>
          <td colspan="4">
            <!-- Logo start here -->
            <table class="logo" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td colspan="2" height="30"></td>
                </tr>
                <tr>
                  <td valign="top" align="center">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" height="30"></td>
                </tr>
              </tbody>
            </table>
            <!-- Logo end here -->
            <!-- Main CONTENT -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
            style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
              <tbody>
                <tr>
                  <td height="40"></td>
                </tr>
                <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
                  <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                      <tbody>
                        <tr>
                          <td align="center" valign="bottom" colspan="2" cellpadding="3">
                          </td>
                        </tr>
                        <tr>
                          <td height="30" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center"> <span style="color:#48545d;font-size:22px;line-height: 24px;">
  Something Went Wrong
</span>

                          </td>
                        </tr>
                        <tr>
                          <td height="24" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td height="1" bgcolor="#DAE1E9"></td>
                        </tr>
                        <tr>
                          <td height="24" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
Please try to signup again or contact web admin.
</span>

                          </td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                        <tr>
                          <td align="center">
                            <img src="https://s3.amazonaws.com/app-public/Coinbase-notification/hr.png" width="54"
                            height="2" border="0">
                          </td>
                        </tr>
                        <tr>
                          <td height="20" &nbsp;=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td height="60"></td>
                </tr>
<?php } ?>
    </tbody>
  </table>
</body>
</html>
