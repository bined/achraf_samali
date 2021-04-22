<!-- About us section start -->
<div class="section primary-section" id="TransportPersonnel">
    <div class="triangle"></div>
    <div class="container">
        <div class="title">
            <h1>Transport du personnel</h1>
            <p>Samali met à disposition de votre entreprise un service sur-mesure de transport collectif avec chauffeurs. Offrez à votre société des solutions, régulières ou non, de bus et de navette de personnel avec chauffeur de .. à .. places, 24 heures sur 24, 7 jours sur 7, toute l’année</p>
        </div>
        <div class="row-fluid team">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a href="#contratModal" role="button" class="da-link button white-btn" data-toggle="modal" onclick="openModal('contratModal')" style="margin-right: 20px;">Contrat sur la durée</a>
                            <a href="#locationModal" role="button" class="da-link button white-btn" data-toggle="modal" onclick="openModal('locationModal')">Location ponctuelle</a>
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
<!-- About us section end -->


<!-- Modal -->
<div id="contratModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="">
            <p style="text-align: center;color: #000010;font-weight: 400;line-height: 4em;">
                Vous pouvez envoyer votre cahier des charges à l’adresse suivante : <br>
                <a href="mailto:contact@samali.ma" style="color: #fdcd1a;">contact@samali.ma</a> <br>
                Notre commercial grand comptes vous contactera dans les plus brefs délais.
            </p>
        </div>
    </div>

</div>
<div id="locationModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div id="successSendLocation" class="alert alert-success invisible">
            <strong>Demande bien reçue !</strong>
            <p>
                Notre commercial va vous contacter dans les plus brefs délais.
            </p>
        </div>
        <form method="post" action="{{ route('save.personnel') }}" id="locationForm" class="my-custom-form">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label class="">Nom</label>
                    <div class="">
                        <input type='text' required class="form-control" name="firstName"  >
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="">Prénom</label>
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
                    <label class="">Nombre de transfert/jour</label>
                    <div class="">
                        <input type='text' required class="form-control" name="transferts" placeholder='Ex: 6'>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label for="Typemarchandises" class="">Nombre de passager</label>
                    <div class="">
                        <input type="Text" required name="passagers" class="form-control" placeholder="Ex: 20" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="heures" class=" ">Heures de transfert</label>
                    <div class="">
                        <input type="Text" required name="heures" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 ">
                    <label for="Fragile" class="">Départ</label>
                    <div class="">
                        <input type="text" required name="depart" class="form-control controls" id="adrDep2">
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label for="Fragile" class="">Arrivée</label>
                    <div class="">
                        <input type="text" required name="arrive" class="form-control controls" id="adrArr2">
                    </div>
                </div>
            </div>

            <div class="">
                <div class="Maps">
                    <div id="divMap2"></div>
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
