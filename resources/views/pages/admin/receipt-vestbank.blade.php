<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Farmsponsor | receipt</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="background">
                    <div class="receipt__content">
                        <div class="receipt__heading-container mb-4">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="logo-box">
                                        <img src="" alt="Farmsponsor Logo" class="receipt__logo">
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="receipt__heading text-center">
                                        <h1 class="receipt__heading--main">FARMSPONSOR NIG. LTD.</h1>
                                        <p class="receipt__heading--text">16 Abua Close off Port Harcourt Aba Express Way, Rumuibekwe, Port Harcourt.</p>
                                        <p class="receipt__heading--text">07031960724, 08080990560</p>
                                        <p class="receipt__heading--text">farmsponsorng@gmail.com, www.farmsponsor.com.ng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="receipt__id-container">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="receipt__id-box">
                                        <p class="receipt__id">No. <span class="receipt-id">00071</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="receipt__title-container mb-4">
                            <div class="row">
                                <div class="col-12 offset-md-3 col-md-9 text-center">
                                    <div class="receipt__info">
                                        <p class="receipt__info--title">Official receipt</p>
                                        <p class="receipt__info--date text-right">Date: <span class="receipt-date">17/06/2019</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="receipt__body-container mb-2">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="receipt__info-group mb-4">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <p class="receipt__info">Recieved from:</p>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="receipt__info"><span class="depositor">Ajila Abitogun Tobi</span></p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="receipt__info-group mb-4">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <p class="receipt__info">Of:</p>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="receipt__info"><span class="depositor-address">Akure, Ondo State</span></p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="receipt__info-group mb-4">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <p class="receipt__info">The Sum Of:</p>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="receipt__info"><span class="deposit-amount">Sixty Six Thousand Naira Only</span></p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="receipt__info-group mb-4">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <p class="receipt__info">Being Payment for:</p>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="receipt__info"><span class="deposit-purpose">66 VestBanking Units</span></p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="receipt__info-group mb-4">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <p class="receipt__info"><span class="deposit-amount-figure">₦ &nbsp; &nbsp; 66,000.00</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="receipt__info-group mb-2">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <p class="receipt__info text-center"> 
                                                    Vest Banking Balance Report will be sent to you on 16th of every subsequent month
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="receipt__foot-note-container mb-4">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <p class="receipt__info receipt__foot-note text-center">Thank you for your Patronage!</p>
                                </div>
                            </div>
                        </div>
{{--                       
                        <div class="receipt__table-container">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="receipt__table">
                                        <h3 class="receipt__table--heading text-center mb-3">20th farming cycle starts from may 25, 2019 to end aug 16, 2019.</h3>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">Voucher</th>
                                                <th scope="col">Refund</th>
                                                <th scope="col">Interest</th>
                                                <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="reciep__table-info voucher">0.00</p>
                                                    </td>
                                
                                                    <td>
                                                        <p class="reciep__table-info refund">400,000.00</p>
                                                    </td>
                                                    <td>
                                                        <p class="reciep__table-info interest">60,000.00</p>
                                                    </td>
                                                    <td>
                                                        <p class="reciep__table-info total">460,000.00</p>
                                                    </td>
                                                    
                                                </tr>
                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        --}}

                        <div class="receipt__signature-container">
                            {{-- <div class="row"> --}}
                                {{-- <div class="col-12 col-md-12"> --}}
                                    {{-- <div class="receipt__signature-container"> --}}
                                        <p class="receipt__signature--customer">Customer Sign.</p>
                                        <div class="receipt__signature-farmsponsor-wrap">
                                            <p class="receipt__signature--farmsponsor">Akpa Innocent Bill</p>
                                            <p class="receipt__signature--farmsponsor">C.E.O</p>
                                            <p class="receipt__signature--farmsponsor">Farmsponsor</p>
                                        </div>
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>