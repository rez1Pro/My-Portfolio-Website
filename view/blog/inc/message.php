<?php
if(isset($_REQUEST['success'])){
    echo "<font style='color:lime'>Your comments Has been Successfully Sent!!! </font>";
}
?>
<div class="contact-form  comment-reply-form">
    <h2 class="com-title">Leave a Reply<a href="#">Cancel Replay</a></h2>
    <form action="view/store/comments.php" method="post" class="cform-wrapper">
        <div class="input-field">
            <input id="name" type="text" name="name" class="validate input-box">
            <label for="name" class="input-label">Name*</label>
        </div>
        <div class="input-field">
            <input id="email" type="email" name="email" placeholder="rezwanhossainsajeeb@gmail.com" class="validate input-box">
            <label for="email" class="input-label">Email*</label>
        </div>
        <div class="input-field">
            <input id="website" type="text" name="website" class="validate input-box">
            <label for="website" value="https://" placeholder="https://rezwanbd.me" class="input-label">Website*</label>
        </div>
        <div class="input-field textarea-input">
            <textarea id="comment" name="comment" class="materialize-textarea" style="height: 22px;"></textarea>
            <label for="comment" class="input-label">Comment</label>
        </div>
        <div class="input-field submit-wrap">
            <button type="submit" name="submit" class="waves-effect waves-light btn-large brand-bg white-text comm-submit regular-text">SEND MESSAGE</button>

        </div>
    </form>
</div>