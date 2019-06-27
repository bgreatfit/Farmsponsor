<!DOCTYPE html PUBLIC "-/W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> HTML email | Template</title>
    <style type="text/css">

        /* CSS RESET STYLES */
        body,
        .bodyTable,
        .bodyCell {
            height: 100% !important;
            width: 100% !important;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        img,
        a img {
            border: 0;
            outline: 0;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }
    
        /* EMAIL CLIENT-SPECIFIC STYLES */
        /* outlook/hotmail.com styles */
        .ReadMsgBody,
        .ExternalClass {
            width: 100%;
        } /* force hotmail/outlook.com to display emails at full width */
    
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div { line-height: 100%;} /* force hotmail/outlook.com to displayline heights normally */
    
        table, 
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        } /* remove spacing between tables in outlook 2007 and up */
    
        #outlook a {padding: 0;} /* force outlook 2007 and up to provide a "view in browser" message.*/
    
        /* INTERNET EXPLORER STYLES */
        img{-ms-interpolation-mode: bicubic;} /*force IE to render resized image smoothly*/
    
        body, 
        table,
        p, 
        li, 
        a,
        td, 
        blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        } /* prevent windows and webkit based mobile platforms from changing declared text sizes*/
    
        /* GENERAL STYLES */
        h1, 
        h2 {
            font-family: "Helvetica Neue", Helvetica, Arial, Helvetica, sans-serif;
        }

        h1, 
        h1 a {
            color: #d83826;
            font-size: 44px;
            font-weight: 100;
            line-height: 115%;
            text-align: left;
        }

        h2, 
        h2 a {
            color: #606060;
            font-size: 34px;
            font-weight: 100;
            line-height: 100%;
            text-align: left;
        }

        h3, 
        h3 a {
            color: #d83826;
            font-size: 30px;
            font-weight: 100;
            line-height: 115%;
            text-align: left;
        }
    
        body, 
        .bodyTable {
            background-color: #424145;
        }

        .emailContainer {
            width: 100%;
        }

        .luncheonImageContainer,
        .introductionContainer {
            background-color: #f0f0f0;
        }
        
        .introductionContainer,
        .callToActionContainer { padding: 40px;}

        .callToActionContainer { background-color: #14b610}

        .introductionContent, 
        .introductionHeadingText, 
        .introductionHeading, 
        .callToActionContent,
        .contentText, 
        .footerContent {
            font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        }

        .introductionHeadingText {
            font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
            padding: 0 25px;
            margin-bottom: 5px;
            color: #797171;
            font-weight: bold;
        }

        .introductionHeadingMain{
            padding: 0 25px;
        }

        .callToActionBlock{
            margin-bottom: 10px;
            color: #ffffff;
        }

        .callToActionContent{
            padding: 15px 0;
        }

        .callToActionText{
            margin-bottom: 20px;
        }

        .callToActionButton{
            text-decoration: none;
            background-color: #f0f0f0;
            color: #424145;
            border-radius: 4px;
            padding: 20px 40px;
            box-shadow: 0 5px 0 rgba(0,0,0,.5);
            letter-spacing: -1px;
            font-weight: bold;
            line-height: 100%;
        }

        .footerContainer{
            padding: 40px;
        }

        .footerText {
            color: #AAAAAA;
            font-size: 13px;
            line-height: 150%;
        }

        .footerText1{
            margin-bottom: 5px;
         }

         .footerText2{
            margin-top: 0;
         }

        .footerLink{
            color: #d83826;
        }

        @media only screen and (max-width:480px){
            /* RESET STYLES */
            td[class="introductionContainer"],
            td[class="callToActionContainer"],
            td[class="footerContainer"] {
                padding-right: 10px !important;
                padding-left: 10px !important;
            }

            table[class="introductionBlock"],
            table[class="callToActionBlock"],
            table[class="footerBlock"] {
                max-width: 480px !important;
                width: 100% !important;
            }

            /* CLIENT-SPECIFIC STYLES */
            body{
                width: 100% !important;
                min-width: 100% !important;
            } /* force ios mail to render emails at full width*/

            /* GENERAL STYLES */
            h1 {font-size: 34px !important;}
            h2 {font-size: 30px !important;}
            h3 {font-size: 24px !important;}

            img[class="luncheonImage"] {
                height: auto !important;
                max-width: 520px !important;
                width: 100% !important;
            }

            td[class="introductionHeading"],
            td[class="introductionLogo"] {
                display: block !important;
                text-align: center !important;
            }

            td[class="introductionHeading"]{
                padding: 40px 0 0 0 !important;

            }
            h1[class="introductionHeadingMain"] {
                text-align: center !important;
            }
            td[class="introductionContent"] {
                padding-top: 20px !important;
            }

            h2[class="contentHeading"] {
                text-align: center !important;
            }

            td[class="callToActionButton"] {
                width: 100% !important;
            }

            td[class="footerText"] {
                font-size: 15px !important;
            }

            td[class="footerText"] a{
                display: block !important;
            }
        }
    
    </style>
</head>
<body>
    <center>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="bodyTable">
            <tr>
                <td align="center" valign="top" class="bodyCell">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="emailContainer">
                    <!-- EMAIL CONTENT BEGIN -->

                        <tr>
                            <td align="center" valign="top" class="luncheonImageContainer">
                                <!-- MAIN IMAGE  -->
                                <img src="img/luncheon.png" alt="Black blazer with a leaf pattern tie design" height="415" width="520" class="luncheonImage" class="luncheonImage">
                                <!-- MAIN IMAGE END -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" class="introductionContainer">
                                <!-- EMAIL INTRO CONTENT -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="introductionBlock">
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="introductionContent">
                                                <tr>
                                                    <td align="left" valign="top" class="introductionLogo">
                                                        <a href="https://farmsponsor.com.ng" target="_blank" class="logoContainer">
                                                            <img src="img/logo.png" alt="Farmsponsor Logo" height="165" width="150" class="logo">
                                                        </a>
                                                    </td>
                                                    <td align="left" valign="middle" class="introductionHeading">
                                                        <p class="introductionHeadingText">Presents</p>
                                                        <h1 class="introductionHeadingMain">Sponsors Luncheon</h1>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="introductionContent">
                                                <tr>
                                                    <td align="left" valign="top" class="introductionContent">
                                                        <p class="contentText">         
                                                            Hello Our dearly Esteemed Sponsor,
                                                        </p>
                                                        <p class="contentText">
                                                            This is to inform you that we will be coming to Abuja! Yes...
                                                            we are coming to Abuja and we are coming for you. 
                                                            We want to meet you, relate with you, get to know you better and 
                                                            as well discuss our future plans with you. 
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL INTRO CONTENT END -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" class="callToActionContainer">
                                <!-- EMAIL CALL TO ACTION CONTENT  -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="callToActionBlock">
                                    <tr>
                                        <td align="center" valign="top" class="callToActionContent">
                                            <h2 class="contentHeading">
                                                Do you know why? You are family!
                                            </h2>
                                            <p class="contentText callToActionText">
                                                We think you are an amazing Nigerian because you have also taken steps 
                                                towards ensuring food security by partnering with Farmsponsor. 
                                                We look forward to hosting you to a luncheon on the 8th of July, 2019.
                                                Further details will be communicated duly. 
                                                Attendance is free but registration is compulsory.
                                            </p>
                                            <p class="callToActionText">To register please click the button below.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="callToActionContent">
                                                <tr>
                                                    <td align="center" valign="top">
                                                        <a href="http://bit.ly/sponsorluncheon" target="_blank" class="callToActionButton">Register Now</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL CALL TO ACTION CONTENT END -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" class="footerContainer">
                                <!-- EMAIL FOOTER CONTENT -->
                                <table border="0" cellpadding="0" cellspacing="0" width="600" class="footerBlock">
                                    <tr>
                                        <td align="center" valign="top" class="footerContent">
                                            <strong>  
                                                <p class="footerText footerText1">Everyone at Farmsponsor thanks you</p>
                                                <p class="footerText footerText2">for your support. We couldn't exist without you</p>
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="center" class="footerContent">
                                            <p class="footerText copyright">
                                                &copy; copyright 2019 Farmsponsor. &bull; 16 Abua Close, Rumuibekwe Port Harcourt, Rivers State.
                                            </p>
                                            <p class="footerText">
                                                <a href="#" target="_blank" class="footerLink">Unsubscribe from our mailing list</a>
                                            </p>

                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL FOOTER CONTENT END -->
                            </td>
                        </tr>
                    <!-- EMAIL CONTENT END -->
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>