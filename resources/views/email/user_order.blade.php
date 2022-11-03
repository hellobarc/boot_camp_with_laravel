<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Order History</title>
  <!--[if mso]>
  <style>
    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
    div, td {padding:0;}
    div {margin:0 !important;}
  </style>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {
      font-family: Arial, sans-serif;
    }
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <a href="#" style="text-decoration:none;"><img src="https://bootcamp.hellobarc.com/img/Png-yellow.png" width="165" alt="Logo" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;background-color:#f7d63c;">
                <h1 style="margin-top:0;margin-bottom:16px;font-size:30px;line-height:32px;font-weight:800;letter-spacing:-0.02em; color: #000;">Order list</h1>
                {{-- <p style="margin:0; font-weight: 800;">Transaction number:  {{$purchase_info[0]['transaction_id']}}</p>
                <p>Date  : {{$purchase_info[0]['date']}}</p> --}}
              </td>
            </tr>
            <!-- <tr>
              <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;">
                <a href="http://www.example.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/1200x800-2.png" width="600" alt="" style="width:100%;height:auto;display:block;border:none;text-decoration:none;color:#363636;"></a>
              </td>
            </tr> -->
            <tr>
              <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                <!--[if mso]>
                <table role="presentation" width="100%">
                <tr>
                <td style="width:145px;" align="left" valign="top">
                <![endif]-->
                <div class="col-sml" style="display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;">
                  <!-- <img src="https://assets.codepen.io/210284/icon.png" width="115" alt="" style="width:115px;max-width:80%;margin-bottom:20px;"> -->
                  <p style="font-size: 30px; line-height: 50px;"><span style="font-weight: 700;">User Name:</span> <br>{{ $fetch_user['name'] }}</p>
                </div>
                <!--[if mso]>
                </td>
                <td style="width:395px;padding-bottom:20px;" valign="top">
                <![endif]-->
                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                  <p style="font-size: 20px; font-weight: 700; margin-top: 45px;">User Info</p>
                  <!--<p>Name</p>-->
                 
                  <p>Billing Email : {{ $fetch_user['email'] }}</p>
                  <p>Phone: {{ $fetch_user['phone'] }}</p>
                  <p>Address: {{ $fetch_user['address'] }}</p>
                  <p>Purchase Type: {{ $fetch_user['payment_type'] }}</p>
                  <p>Transaction ID: #{{ $fetch_user['transaction'] }}</p>
                  <p>Product: 
                      @if($fetch_user['product_id'] == 1)
                        <p>Bootcamp Pro</p>
                      @else
                        <p>Bootcamp Max</p>
                      @endif
                  </p>
                 
                  <p style="margin:0;"><a href="#" style="background: #f7d63c; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884"><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span style="mso-text-raise:10pt;font-weight:bold;">Regarding Any issues please call the number</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>
                    <p style="font-size: 25px; font-weight:700">+88 01617-302010</p>
                 
                </div>
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
            {{-- <tr>
              <td style="padding:30px;font-size:24px;line-height:28px;font-weight:bold;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                  <p style="font-size:25px; font-weight: 700;">Price: {{ $purchase_info[0]['price'] }} {{ $purchase_info[0]['currency'] }}</p>
              </td>
            </tr> --}}
            <tr>
              <td style="padding:30px;background-color:#ffffff;">
                <p style="margin:0; font-size: 22px; text-align: center; color: #ff3884; letter-spacing: 3px;">Thank you</p>
                <p style="margin:0; font-size: 22px; text-align: center; color: #000; letter-spacing: 3px;">We are delighted that you have found something your like!!</p>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                <p style="margin:0 0 8px 0;"><a href="https://www.facebook.com/hellobarc" style="text-decoration:none;">
                  <img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a></p>
                <p style="margin:0;font-size:14px;line-height:20px;">&reg; British American Resource Center<br>
                <a class="unsub" href="https://www.youtube.com/c/BARCTV" style="color:#cccccc;text-decoration:underline;">Subscribe</a></p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
</body>
</html>