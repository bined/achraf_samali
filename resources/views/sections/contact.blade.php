<div id="contact" class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>Contact Us</h1>
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map-canvas" id="map-canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5747417706993!2d-6.848573983814734!3d34.0034552806195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76d9d5bcf8f59%3A0xc6cfc5ad08bdd357!2sSAMALI%20TRANSPORT!5e0!3m2!1sfr!2sma!4v1618787603115!5m2!1sfr!2sma"
                        frameborder="0"
                        style="width: 100%; height: 100%;"
                >
                </iframe>
            </div>
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 contact-form centered">
                        <h3>Envoyer un message </h3>
                        <div id="successSend" class="alert alert-success invisible">
                            <strong>Well done!</strong>Your message has been sent.</div>
                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                        <form id="contact-form1" action="{{ route('save.contact') }}" method="POST">
                            @csrf
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" id="name" name="name" placeholder="* Votre nom" />
                                    <div class="error left-align" id="err-name">Nom</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="email" name="email" id="email" placeholder="* Votre email" />
                                    <div class="error left-align" id="err-email">Email</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" name="phone" id="phone" placeholder="* Votre téléphone" />
                                    <div class="error left-align" id="err-email">Téléphone</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea class="span12" name="messages" id="comment" placeholder="* Votre message"></textarea>
                                    <div class="error left-align" id="err-comment">Votre message</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button data-sitekey="6LfeYKcaAAAAALx2dnD7S6heS3WReaGdJyxVdHDk"
                                            data-callback='onSubmit'
                                            data-action='submit' id="btn-contact-save" class="message-btn">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="span9 center contact-info">
                <p>18, Avenue Omar Ibnou Khattab, Appt 7 Agdal Rabat</p>
                <p class="info-mail">contact@samali.ma</p>
                <p>+212537681318</p>
                <div class="title">
                    <h3>We Are Social</h3>
                </div>
            </div>
            <div class="row-fluid centered">
                <ul class="social">
                    <li>
                        <a href="">
                            <span class="icon-facebook-circled"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-linkedin-circled"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
