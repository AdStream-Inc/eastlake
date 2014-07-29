<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{{ title }}</title>
    <style type="text/css">
      /* Client-specific Styles */
      #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
      body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
      body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

      /* Reset Styles */
      body{margin:0; padding:0;}
      img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
      table td{border-collapse:collapse;}
      #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

      /* Template Styles */

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Page
      * @section background color
      * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
      * @theme page
      */
      body, #backgroundTable{
        /*@editable*/ background-color:#FAFAFA;
      }

      /**
      * @tab Page
      * @section email border
      * @tip Set the border for your email.
      */
      #templateContainer{
        /*@editable*/ border: 1px solid #DDDDDD;
      }

      /**
      * @tab Page
      * @section heading 1
      * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
      * @style heading 1
      */
      h1, .h1{
        /*@editable*/ color:#202020;
        display:block;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:34px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        margin-top:0;
        margin-right:0;
        margin-bottom:10px;
        margin-left:0;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 2
      * @tip Set the styling for all second-level headings in your emails.
      * @style heading 2
      */
      h2, .h2{
        /*@editable*/ color:#202020;
        display:block;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:30px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        margin-top:0;
        margin-right:0;
        margin-bottom:10px;
        margin-left:0;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 3
      * @tip Set the styling for all third-level headings in your emails.
      * @style heading 3
      */
      h3, .h3{
        /*@editable*/ color:#202020;
        display:block;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:26px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        margin-top:0;
        margin-right:0;
        margin-bottom:10px;
        margin-left:0;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 4
      * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
      * @style heading 4
      */
      h4, .h4{
        /*@editable*/ color:#202020;
        display:block;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:22px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        margin-top:0;
        margin-right:0;
        margin-bottom:10px;
        margin-left:0;
        /*@editable*/ text-align:left;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Header
      * @section preheader style
      * @tip Set the background color for your email's preheader area.
      * @theme page
      */
      #templatePreheader{
        /*@editable*/ background-color:#FAFAFA;
      }

      /**
      * @tab Header
      * @section preheader text
      * @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
      */
      .preheaderContent div{
        /*@editable*/ color:#505050;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:10px;
        /*@editable*/ line-height:100%;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Header
      * @section preheader link
      * @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
      */
      .preheaderContent div a:link, .preheaderContent div a:visited, /* Yahoo! Mail Override */ .preheaderContent div a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Header
      * @section header style
      * @tip Set the background color and border for your email's header area.
      * @theme header
      */
      #templateHeader{
        /*@editable*/ background-color:#FFFFFF;
        /*@editable*/ border-bottom:0;
      }

      /**
      * @tab Header
      * @section header text
      * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
      */
      .headerContent{
        /*@editable*/ color:#202020;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:34px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        /*@editable*/ padding:0;
        /*@editable*/ text-align:center;
        /*@editable*/ vertical-align:middle;
      }

      /**
      * @tab Header
      * @section header link
      * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
      */
      .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
      }

      #headerImage{
        height:auto;
        max-width:600px !important;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Body
      * @section body style
      * @tip Set the background color for your email's body area.
      */
      #templateContainer, .bodyContent{
        /*@editable*/ background-color:#FFFFFF;
      }

      /**
      * @tab Body
      * @section body text
      * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
      * @theme main
      */
      .bodyContent div{
        /*@editable*/ color:#505050;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:14px;
        /*@editable*/ line-height:150%;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Body
      * @section body link
      * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
      */
      .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
      }

      .bodyContent img{
        display:inline;
        height:auto;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Footer
      * @section footer style
      * @tip Set the background color and top border for your email's footer area.
      * @theme footer
      */
      #templateFooter{
        /*@editable*/ background-color:#FFFFFF;
        /*@editable*/ border-top:0;
      }

      /**
      * @tab Footer
      * @section footer text
      * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
      * @theme footer
      */
      .footerContent div{
        /*@editable*/ color:#707070;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:12px;
        /*@editable*/ line-height:125%;
        /*@editable*/ text-align:left;
      }

      /**
      * @tab Footer
      * @section footer link
      * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
      */
      .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
      }

      .footerContent img{
        display:inline;
      }

      /**
      * @tab Footer
      * @section social bar style
      * @tip Set the background color and border for your email's footer social bar.
      * @theme footer
      */
      #social{
        /*@editable*/ background-color:#FAFAFA;
        /*@editable*/ border:0;
      }

      /**
      * @tab Footer
      * @section social bar style
      * @tip Set the background color and border for your email's footer social bar.
      */
      #social div{
        /*@editable*/ text-align:center;
      }

      /**
      * @tab Footer
      * @section utility bar style
      * @tip Set the background color and border for your email's footer utility bar.
      * @theme footer
      */
      #utility{
        /*@editable*/ background-color:#FFFFFF;
        /*@editable*/ border:0;
      }

      /**
      * @tab Footer
      * @section utility bar style
      * @tip Set the background color and border for your email's footer utility bar.
      */
      #utility div{
        /*@editable*/ text-align:center;
      }

      #monkeyRewards img{
        max-width:190px;
      }

      #contact-table {
        width: 100%;
      }

      #contact-table th {
        width: 10%;
        background: #333;
        padding: 10px 15px;
        color: #fff;
      }

      #contact-table td {
        border: 1px solid #333;
        padding: 10px 15px;
      }
    </style>
  </head>
  <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: #FAFAFA;width: 100% !important;">
    <center>
      <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="margin: 0;padding: 0;background-color: #FAFAFA;height: 100% !important;width: 100% !important;">
        <tr>
          <td align="center" valign="top" style="border-collapse: collapse;">
            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border: 1px solid #DDDDDD;background-color: #FFFFFF;">
              <tr>
                <td align="center" valign="top" style="border-collapse: collapse;">
                  <!-- // Begin Template Body \\ -->
                  <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                    <tr>
                      <td valign="top" class="bodyContent" style="border-collapse: collapse;background-color: #FFFFFF;">
                        <!-- // Begin Module: Standard Content \\ -->
                        <table border="0" cellpadding="20" cellspacing="0" width="100%">
                          <tr>
                            <td valign="top" style="border-collapse: collapse;">
                              <div style="color: #505050;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
                                <h1 class="h1" style="color: #202020;display: block;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;">Eastlake Contact Form</h1>
                                <table id="contact-table" style="width: 100%;">
                                  <tr>
                                    <th style="width: 10%;background: #333;padding: 10px 15px;color: #fff;">Name</th>
                                    <td style="border-collapse: collapse;border: 1px solid #333;padding: 10px 15px;">{{ name }}</td>
                                  </tr>
                                  <tr>
                                    <th style="width: 10%;background: #333;padding: 10px 15px;color: #fff;">Email</th>
                                    <td style="border-collapse: collapse;border: 1px solid #333;padding: 10px 15px;">{{ email }}</td>
                                  </tr>
                                  <tr>
                                    <th style="width: 10%;background: #333;padding: 10px 15px;color: #fff;">Phone</th>
                                    <td style="border-collapse: collapse;border: 1px solid #333;padding: 10px 15px;">{{ phone }}</td>
                                  </tr>
                                  <tr>
                                    <th style="width: 10%;background: #333;padding: 10px 15px;color: #fff;">Interest</th>
                                    <td style="border-collapse: collapse;border: 1px solid #333;padding: 10px 15px;">{{ interest }}</td>
                                  </tr>
                                  <tr>
                                    <th style="width: 10%;background: #333;padding: 10px 15px;color: #fff;">Message</th>
                                    <td style="border-collapse: collapse;border: 1px solid #333;padding: 10px 15px;">{{ message }}</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                        <!-- // End Module: Standard Content \\ -->
                      </td>
                    </tr>
                  </table>
                  <!-- // End Template Body \\ -->
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>