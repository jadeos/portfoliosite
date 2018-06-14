<script type="text/javascript">(function(d, t, e, m){

        // Async Rating-Widget initialization.
        window.RW_Async_Init = function(){

            RW.init({
                huid: "271709",
                uid: "67f8a764115546fc4fa95996024f4a0a",
                source: "website",
                options: {
                    "size": "medium",
                    "style": "oxygen",
                    "isDummy": false
                }
            });
            RW.render();
        };
        // Append Rating-Widget JavaScript library.
        var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
            l = d.location, ck = "Y" + t.getFullYear() +
                "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
            f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
            a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
        if (d.getElementById(id)) return;
        rw = d.createElement(e);
        rw.id = id; rw.async = true; rw.type = "text/javascript";
        rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
        s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>


<div class="contact">


    <div class="company_address">
        <h3>Contact Us</h3>
        <p>Email: <a href="mailto:info@playgrounffinder.com">info@playgrounffinder.com</a></p>
        <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
    </div>

    <div class = "rating">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Rate this site</h3>
            </div>
            <div class="panel-bodyy">
                <p>Please feel free to rate this site based on your experience or contact us directly with any queries
                    by using the below contact form. If you want to have a playground added please send us the details using the
                    contact form and we will have it added to the site.  </p>
                <div class="rw-ui-container"></div>
            </div>
        </div>

    </div>


    <div class="contact_right">
        <div class="contact-form">
            <h3>Contact Us</h3>
            <div class="registration_form">
                <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
                echo form_open("Contactform/thanks", $attributes);?>

                <div class="form-group">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" required/>
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="email" placeholder="Your Email" type="email" value="<?php echo set_value('email'); ?>" required/>
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="subject" placeholder="Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message" required><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>

                <div class="form-group">
                    <input name="submit" type="submit" class="button-send" value="Send" />
                </div>

                <?php echo form_close(); ?>


            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>


