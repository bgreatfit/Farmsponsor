{{-- <!DOCTYPE html PUBLIC "-/W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
</html> --}}

<!DOCTYPE html PUBLIC "-/W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Montserrat&display=swap" rel="stylesheet"> 
    <title> Sponsors Receipt</title>
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
            font-family: Work Sans;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        } /* prevent windows and webkit based mobile platforms from changing declared text sizes*/
    
        /* GENERAL STYLES */
        h1, 
        h2 {
            font-size: 24px;
            font-family: "Helvetica Neue", Helvetica, Arial, Helvetica, sans-serif;
        }
    
        body, 
        .bodyTable {

        }

        .emailContainer {
            box-shadow: 4px 4px 40px rgba(0, 0, 0, 0.25);
            max-width: 520px;
        }

        .introductionContent {
            color: #fff;
            background-color: #0E2503;
        }
        .introductionContentCell {
            padding: 15px 0;
        }

        .introductionHeadingMain{
            font-family: Barlow;
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
        }

        .introductionLogo,
        .introductionHeading {

        }

        .introductionLogo {
            margin-bottom: 10px;
        }
        .introductionHeading {

        }

        .introductionBlock {
            margin-bottom: 15px;
        }
        
        .contentHeading {
            font-family: barlow;
            font-size: 14px;
            font-weight: 600;
            line-height: 17px;
            margin-bottom: 10px;
        }

        .contentText {
            margin: 0;

            font-size: 14px;
            line-height: 20px;
            color: #2B6DAD;
        }

        .transactionDateBlock {
            margin-bottom: 25px;
        }
        .transactionDateText {
            color: #999999;
        }

        .transactionDateContent:nth-of-type(2){
            padding-right: 30px;
        }
        .transactionDateContent:nth-of-type(3) {
            padding-right: 45px;
        }

        .customerInfoBlock {
            margin-bottom: 30px;
        }
        .customerInfoContent,
        .transactionDateContent,
        .transactionInfoDetailsContent,
        .contactUsContent {
            padding: 0 10px;
        }

        .customerInfoHeading {
            text-align: left;
            margin-bottom: 10px;
            font-size: 18px;
            font-family: barlow;
            line-height: 22px;
            font-weight: 500;

        }

        .customerInfoText {
            text-align: left;
            margin: 0 0 5px 0;
            font-family: barlow;
        }

        .customerInfoText span.transactionDateText,
        .contentHeading span.transactionDateText {
            margin-left: 10px;
        }

        .transactionInfoBlock {
            margin-bottom: 28px;
        }
      
        .transactionInfoText {
            color: #000;
        }

        .transactionInfoDetailsText{
            padding: 10px;
            margin: 0 -10px 0;
            font-family: barlow;
        }
        .transactionInfoDetailsText span.contentText {
            font-size: 13px;
            font-weight: 600;
            margin-left: 10px;
        }

        .transactionInfoDetailsText:nth-child(odd) {
            background-color: rgba(14, 37, 3, 0.2);
        }
        .transactionInfoDetailsText:nth-child(even) {
            background-color: rgba(153, 153, 153, 0.2);
        }

        .transactionInfoDetailsFarmCycleInfo{
            margin-top: 15px;
            text-align: center;
            font-family: Barlow;
            font-size: 12px;
            line-height: 14px;
        }

        .contactUsBlock {
            margin-bottom: 10px;
        }
       
        .contactUsText {
            text-align: left;
            font-size: 12px;
            color: #999999;
            font-family: barlow;
        }

        .footerText.footerSocials {
            background: #6e9e3d;
            padding: 6px 0;
            margin-bottom: 0;
        }

        .footerText {
           margin: 0;
           margin-bottom: 8px;
           font-size: 12px;
           color: #999999;
        }
        .fotterSocialsLink:not(:last-child) {
            margin-right: 25px;
        }


        .introductionContent, 
        .introductionHeading, 
        .contentText, 
        .footerContent {
            font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        }

        
        
      
        @media only screen and (max-width:480px){
            /* RESET STYLES */
            /* td[class="introductionContainer"],
            td[class="callToActionContainer"],
            td[class="footerContainer"] {
                padding-right: 10px !important;
                padding-left: 10px !important;
            } */

            /* table[class="introductionBlock"],
            table[class="callToActionBlock"],
            table[class="footerBlock"] {
                max-width: 480px !important;
                width: 100% !important;
            } */

            /* CLIENT-SPECIFIC STYLES */
            body{
                width: 100% !important;
                min-width: 100% !important;
            } /* force ios mail to render emails at full width*/

            /* GENERAL STYLES */
            h1 {font-size: 24px !important;}
            h2 {font-size: 14px !important;}
            /* h3 {font-size: 24px !important;} */

            /* img[class="luncheonImage"] {
                height: auto !important;
                max-width: 520px !important;
                width: 100% !important;
            } */

            /* td[class="introductionHeading"],
            td[class="introductionLogo"] {
                display: block !important;
                text-align: center !important;
            } */

            td[class="introductionHeading"]{
                /* padding: 40px 0 0 0 !important; */

            }
            h1[class="introductionHeadingMain"] {
                text-align: center !important;
            }
            /* td[class="introductionContent"] {
                padding-top: 20px !important;
            } */

            /* h2[class="contentHeading"] {
                text-align: center !important;
            } */

            /* td[class="callToActionButton"] {
                width: 100% !important;
            } */

            td[class="footerText"] {
                font-size: 15px !important;
            }

            /* td[class="footerText"] a{
                display: block !important;
            } */
        }
    
    </style>
</head>
<body>
    <center>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="bodyTable">
            <tr>
                <td align="center" valign="top" class="bodyCell">
                    <table border="0" cellpadding="0" cellspacing="0" width="520" class="emailContainer">
                    <!-- EMAIL CONTENT BEGIN -->

                        <tr>
                            <td align="center" valign="top" class="introductionContainer">
                                <!-- EMAIL INTRO CONTENT -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="introductionBlock">
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="introductionContent">
                                                <tr>
                                                    <td align="center" valign="top" class="introductionContentCell">
                                                        <div class="introductionLogo">
                                                            <a href="https://farmsponsor.com.ng" target="_blank" class="logoLink">
                                                                <img src="{{asset('img/fs-email-logo.svg')}}" width="89" height="60" alt="Farmsponsor Logo"  class="logo">
                                                            </a>
                                                        </div>
                                                        <div class="introductionHeading">
                                                            <h1 class="introductionHeadingMain">Sponsor’s Receipt</h1>
                                                        </div>
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
                            <td align="center" valign="top" class="transactionDateContainer">
                                <!-- EMAIL TRANSACTION DATE CONTENT  -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="transactionDateBlock">
                                    <tr>
                                        <td align="left" valign="top" class="transactionDateContent">
                                            <h2 class="contentHeading">
                                                Date: <span class="contentText transactionDateText">7/06/2019</span>
                                            </h2>
                                            <h2 class="contentHeading">
                                                Total Amount: <span class="contentText transactionDateText">N200,000.00</span>
                                            </h2>
                                            <h2 class="contentHeading">
                                                Transaction ID: <span class="contentText transactionDateText"> 00757 </span>
                                            </h2>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL TRANSACTION DATE CONTENT END -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" class="customerInfoContainer">
                                <!-- EMAIL CUSTOMER INFO CONTENT  -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="customerInfoBlock">
                                    <tr>
                                        <td align="left" valign="top" class="customerInfoContent">
                                            <h2 class="contentHeading customerInfoHeading">
                                                Customer Info: 
                                            </h2>
                                            <p class="customerInfoText">
                                                Name: <span class=" transactionDateText">Emmanuel Jacobson </span>
                                            </p>
                                            <p class="customerInfoText">
                                                Address: <span class=" transactionDateText">2 Orosi Street, Rumuola, Port Harcourt, Rivers State.</span>
                                            </p>
                                            <p class="customerInfoText">
                                                Phone: <span class=" transactionDateText"> 08062268255 </span>
                                            </p>
                                            <p class="customerInfoText">
                                                Email: <span class=" transactionDateText"> writeprovidence@gmail.com </span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL TRANSACTION DATE CONTENT END -->
                            </td>
                        </tr>

                        <tr>
                            <td align="center" valign="top" class="transactionInfoContainer">
                                <!-- EMAIL TRANSACTION  INFO CONTENT  -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="transactionInfoBlock">
                                    <tr>
                                        <td align="center" valign="top" class="transactionInfoDetailsContainer">
                                            <table border="0" cellpadding="0" cellspacing="0" width="520" class="transactionInfoDetailsBlock">
                                                <tr>
                                                    <td align="left" valign="top" class="transactionInfoDetailsContent">
                                                        <h2 class="contentHeading customerInfoHeading">
                                                            Transaction Details: 
                                                        </h2>
                                                        <p class="transactionInfoDetailsText">
                                                            Amt Sponsored:
                                                            <span class="contentText transactionInfoText">
                                                                200,000.00 
                                                            </span>
                                                        </p>
                                                        <p class="transactionInfoDetailsText">
                                                            No Of Units:
                                                            <span class="contentText transactionInfoText">
                                                                2
                                                            </span>
                                                        </p>
                                                        <p class="transactionInfoDetailsText">
                                                            Returns:
                                                                <span class="contentText transactionInfoText">
                                                                    30000
                                                                </span>
                                                        </p>
                                                        <p class="transactionInfoDetailsText">
                                                            Payable:
                                                            <span class="contentText transactionInfoText">
                                                                230000
                                                            </span>
                                                        </p>
     
                                                        <p class="transactionDateText transactionInfoDetailsFarmCycleInfo">
                                                            21st Farming cycle starting from June 28, 2019 to Sept 20, 2019 
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL TRANSACTION INFO CONTENT END -->
                            </td>
                        </tr>

                        <tr>
                            <td align="center" valign="top" class="contactUsContainer">
                                <!-- EMAIL CUSTOMER INFO CONTENT  -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="contactUsBlock">
                                    <tr>
                                        <td align="center" valign="top" class="contactUsContent">
                                            <span class="contactUsText">
                                                P: 07031960724, 08080990560 
                                            </span>
                                            <span class="contactUsText">
                                                W: farmsponsor.com.ng
                                            </span>
                                            <span class="contactUsText">
                                                E: farmsponsorng@gmail.com 
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                                <!-- EMAIL TRANSACTION DATE CONTENT END -->
                            </td>
                        </tr>


                        <tr>
                            <td align="center" valign="top" class="footerContainer">
                                <!-- EMAIL FOOTER CONTENT -->
                                <table border="0" cellpadding="0" cellspacing="0" width="520" class="footerBlock">
                                    <tr>
                                        <td align="center" valign="center" class="footerContent">
                                            <div class="footerText footerSocials">
                                                <a href="https://www.facebook.com/farmsponsorng" class="fotterSocialsLink" target="_blank"><img src="{{asset('img/email-icon-fb.svg')}}" alt="facebook icon" width="25.9" height="27.5" class="footerSocialsIcon"></a>
                                                <a href="https://twitter.com/Farmsponsor1" class="fotterSocialsLink" target="_blank"><img src="{{asset('img/email-icon-ig.svg')}}" alt="instagram icon" width="25.9" height="27.5" class="footerSocialsIcon"></a>
                                                <a href="https://www.instagram.com/farmsponsor" class="fotterSocialsLink" target="_blank"><img src="{{asset('img/email-icon-twt.svg')}}" alt="twitter icon" width="25.9" height="27.5" class="footerSocialsIcon"></a>
                                            </div>
                                            {{-- <p class="footerText">
                                                <a href="#" target="_blank" class="footerLink">Unsubscribe from our mailing list</a>
                                            </p> --}}
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