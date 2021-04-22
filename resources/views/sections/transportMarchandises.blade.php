<!-- Service section start -->
<div class="section primary-section" id="TransportMarchandises">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>Transport de marchandise</h1>
            <!-- Section's title goes here -->
            <p>Notre société peut aujourd’hui répondre à toutes vos demandes rapidement et efficacement et de respecter tout engagement quel que soit la nature de la marchandise.</p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a href="#marchandiseModal" role="button" class="da-link button white-btn" data-toggle="modal" onclick="openModal('marchandiseModal')">Formulaire de marchandise</a>
                        </h5>
                    </div>

                    <div  id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Service section end -->

<!-- Modal -->
<div id="marchandiseModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
            <div id="successSendMarchandise" class="alert alert-success invisible">
                <strong>Commande envoyé !</strong>
                <p>
                    Dans 30 minutes, vous recevrez un mail et un SMS mentionnant le détail
                    de la facturation.
                    Pour confirmer votre commande, merci de cliquer sur le lien envoyé.
                </p>
            </div>
            <form method="post" action="{{ route('save.marchandise') }}" id="marchandiseForm1" class="my-custom-form">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label class="">Nom</label>
                        <div class="">
                            <input type='text' required class="form-control" name="firstName"  >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class=" ">Prénom</label>
                        <div class="">
                            <input type='text' required class="form-control" name="lastName"   >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="">Téléphone</label>
                        <div class="">
                            <input type='text' required class="form-control" id="phone" placeholder="(06) 666-6666" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="">Email</label>
                        <div class="">
                            <input type='Email' required name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="">Date</label>
                        <div class="">
                            <input type='text' required class="form-control" data-provide="datepicker" name="date" placeholder='Select Date'>
                        </div>
                    </div>
                    <div class="col-sm-6  ">
                        <label for="Typemarchandises" class=" ">Type de marchandises</label>
                        <div class="">
                            <input type="Text" required name="type" class="form-control" id="Typemarchandises" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="Tonnage" class="">Tonnage</label>
                        <div class="">
                            <input type="Text" required name="tonnage" class="form-control" id="Tonnage" />
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <label for="Fragile" class="">Fragile</label>
                        <div class="">
                            <input type="Text" required name="fragile" class="form-control" id="Fragile" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <label for="Fragile" class=" ">Départ</label>
                        <div class="">
                            <input type="text" required name="depart" class="form-control controls autocomplete" id="adrDep">
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <label for="Fragile" class=" ">Arrivée</label>
                        <div class="">
                            <input type="text" required name="arrive" class="form-control controls autocomplete" id="adrArr">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="Maps">
                        <div id="divMap"></div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button data-sitekey="6LfeYKcaAAAAALx2dnD7S6heS3WReaGdJyxVdHDk"
                                data-callback='onSubmit'
                                data-action='submit' id="sendMarchandise" name="saveMarchandise" class="message-btn">Envoyer</button>
                    </div>
                </div>
            </form>
    </div>

</div>
