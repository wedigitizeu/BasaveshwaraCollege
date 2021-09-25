<form  method="post" id="form" class="site-contact-form">
    <!-- Name -->
    <!-- <div class="form-ttl">Name </div> -->
    <label><input type="text" name="name" id="name" placeholder="Your name">
    <p class= "warnMessage" id="nameWarning"></p>    
</label>
    <!-- Email -->
    <!-- <div class="form-ttl">Email </div> -->
    <label><input type="email" name="email" id="email" placeholder="Your Email Id" >
    <p class= "warnMessage" id="emailWarning"></p>  
</label>
    <!-- Phone -->
    <!-- <div class="form-ttl">Phone </div> -->
    <label><input type="text" name="mobile" id="mobile" placeholder="Your 10 digit mobile number" >
    <p class= "warnMessage" id="mobileWarning"></p>  
</label>
    <!-- Message -->
    <!-- <div class="form-ttl">Message </div> -->

    <label><textarea name="message" id="message" placeholder="Your message" ></textarea>
    <p class= "warnMessage" id="messageWarning"></p>  
    
</label>

<div class="g-recaptcha" data-sitekey="6LfggCYcAAAAAD0pAUDicjWCvwo-q8KGdnqpQ3JA"></div>


    <!-- Submit -->
    <button type="submit">Send request <i class="fa fa-spin fa-spinner"></i></button>
</form>