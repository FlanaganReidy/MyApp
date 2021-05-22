<!--
 * Purpose: template for contact page
-->

<div id="error">

</div>
<div class ="container-fluid">
    <form id="email-form" name="email-form">
        <div class="input-group mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" id="name" name = "name" class="form-control" aria-label="name" maxlength="64">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Return Email</span>
            <input type="text" id="return-email" name="return-email" class="form-control" aria-label="return-email" maxlength="64" >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Re-enter Return Email</span>
            <input type="text" id="re-enter-return-email" name="re-enter Return email" class="form-control" maxlength="64">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Subject</span>
            <input type="text" id="contact-subject" name="contact-subject" class="form-control" maxlength="64">
        </div>
        <div class="input-group mb-3">
            <textarea class="form-control" name="message" id="message" rows="3" maxlength="1000" placeholder="Write your message..."></textarea>
        </div>
        <div class="row justify-content-md-center">
        <button type="button" id="contact-submit" class="btn btn-primary btn-md">Submit</button>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <button type="button" id="contact-clear" class="btn btn-primary btn-md">Clear</button>
        </div>
    </form>
</div>