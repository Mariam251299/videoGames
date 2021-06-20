<div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    <form id="contactForm">
        <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group mb-md-0">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-group-textarea mb-md-0">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div id="success"></div>
            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
        </div>
    </form>
</div>