@extends('layouts.basic')


@section('content')
    <section class="section-faq">
        <div class="container">
            <div class="faq-general">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h4 class="mb-0">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                            Who is a sponsor?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                   <p class="card__text">An individual or group that sponsors a farmer (an Investor)</p> 
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                        About Farm/Farmer
                                    </a>
                                </h4>
                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body">
                                   <p class="card__text">This is the location where Farmsponsor carry out agricultural activities (E.g. Poultry, Fish, Maize, Rice, etc.)</p>
                                   <p class="card__text">A farm owner or person that produces agricultural products from the farm</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                        What is a Sponsoring Window?
                                    </a>
                                </h4>
                                </div>
                                <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p class="card__text">
                                            The window of opportunity for sponsors to send funds to farmers through Farmsponsor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h4 class="mb-0">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                            What is a Farm Cycle?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <p class="card__text">
                                            The period from after the sponsoring window, through the farming period until after harvest and sales.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        What is a unit?
                                    </a>
                                </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <p class="card__text">
                                            These are packets of sponsorship data created by Farmsponsor for sponsors to buy. The funds gotten from sale of unit are used to fund farmers throughout the farm cycle.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        What are returns? 
                                    </a>
                                </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p class="card__text">
                                            The yield (remunerations) paid at the end of the farm cycle to the sponsors.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-returns">
                <h2 class="heading__secondary faq-returns__heading">SPONSORSHIP AND RETURNS</h2>
                <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="mb-0">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapseOne">
                                                What is my return? 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <p class="card__text">
                                                Your seed input (Capital) plus a percentage of your seed input, depending on the farm cycle and window you sponsored.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                    <h4 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                                            When do I get my returns? 
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <p class="card__text">
                                                At the end of the term of the farming cycle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                    <h4 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                                            Can I have multiple sponsorships? 
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            <p class="card__text">
                                                YES! So long as they fall within a sponsorship window and they are not below the minimum or above the maximum sponsorship amount, otherwise it is considered alien sponsorship.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="mb-0">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapseOne">
                                                What is the minimum I can sponsor with? 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <p class="card__text">
                                                It depends on the farm, the sponsoring window and cycle. This will be duly advertised.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                    <h4 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapseTwo">
                                            Are you covered by insurance? 
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <p class="card__text">
                                                A third party insurance covers Farmsponsor from financial loss and by extension both farmers and sponsors are indemnified from financial losses. This implies that all returns are assured.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                    <h4 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapseThree">
                                            Can I sponsor from any country? 
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            <p class="card__text">Yes, you can sponsor from anywhere in the world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="faq-farmers">
                <h2 class="heading__secondary faq-returns__heading">SPONSORSHIP AND FARMERS</h2>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h4 class="mb-0">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapseOne">
                                            How can I sponsor a farm?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <p class="card__text">How can I sponsor a farmer?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapseTwo">
                                        Who's eligible to sponsor?
                                    </a>
                                </h4>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <p class="card__text">
                                            A sponsor must be least 18 years old or participate with the help of a guardian.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                <h4 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                                        I am a farmer, how do I join farmsponsor programme? 
                                    </a>
                                </h4>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p class="card__body">
                                            If you have an up-to-capacity farm and are willing to do business with us, 
                                            then contact us with: +234 0703 196 0724, +234 0808 099 0560, or send us a mail at: 
                                            <b>farmsponsorng@gmail.com</b> or <b>hello@farmsponsor.com.ng</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection