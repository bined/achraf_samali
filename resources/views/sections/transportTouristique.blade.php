<div id="TransportTouristique" class="section primary-section">
    <div class="triangle"></div>
    <div class="container">
        <div class="title">
            <h1>Transport touristique</h1>
            <p>
                Vous êtes un tour opérateur, comité d’entreprise, association, club de retraités, groupes de sportif et vous souhaitez organiser votre voyage, excursion ou circuit  touristique au Maroc, SAMALI vous assiste avec des prestations de qualités et un service irréprochable :
                <br>
                On vous propose des excursions ou des séjours parmi un choix de destinations touristiques et culturelles phares à travers les plus belles régions du Maroc.
            </p>
        </div>
        <div class="row-fluid team">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a href="#transfertModal" role="button" class="da-link button white-btn" data-toggle="modal" onclick="openModal('transfertModal')" style="margin-right: 20px;">Transfert</a>
                            <a href="#locationModal" role="button" class="da-link button white-btn" data-toggle="modal" onclick="openModal('locationModal')">Mise à disposition</a>
                        </h5>
                    </div>

                    <div id="collapsetwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        {{--  Form--}}
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="transfertModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div id="successSendMarchandise" class="alert alert-success invisible">
            <strong>Commande envoyé !</strong>
            <p>
                Dans quelques instants, vous recevrez un mail et un SMS mentionnant le
                prix de votre transfert et détail de la facturation.
                Pour confirmer votre commande, merci de cliquer sur le lien envoyé.
                Vous pouvez payer le reliquat par TPE disponible dans nos véhicules.
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

            {{-- jdid --}}

            <div class="row">
                <div class="col-sm-12">
                    <h4>Choisissez votre véhicule !</h4>
                </div>
                <div class="col-sm-12">
                    <div class="car-item">
                        <label class="">
                            <input type="radio" name="car" value="mercedes">
                            <img src="{{ asset('images/clients/decathlon.png') }}" alt="" class="checked">
                        </label>
                        <label class="">
                            <input type="radio" name="car" value="mercedes2">
                            <img src="{{ asset('images/clients/lafarge.png') }}" alt="">
                        </label>
                        <label class="">
                            <input type="radio" name="car" value="mercedes3">
                            <img src="{{ asset('images/clients/prodec.png') }}" alt="">
                        </label>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
{{--                    <label class="">Date</label>--}}
                    <div class="">
                        <label class="">
                            Maintenant <input type="radio" name="car" value="mercedes" checked>
                        </label>
                        <label class="">
                            A l’avance<input type="radio" name="car" value="mercedes">
                        </label>
                        <input type='text' required class="form-control" data-provide="datepicker" name="date">
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
                        <input type="text" required name="depart" class="form-control controls autocomplete" id="adrDep3">
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label for="Fragile" class=" ">Arrivée</label>
                    <div class="">
                        <input type="text" required name="arrive" class="form-control controls autocomplete" id="adrArr3">
                    </div>
                </div>
            </div>

            <div class="">
                <div class="Maps">
                    <div id="divMap3"></div>
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
