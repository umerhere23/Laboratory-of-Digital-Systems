<?php include('header.php'); ?>

<main class="reset-page-content">
    <div class="reset-container">
        <div class="top-buttons">
            <a href="i-time-slot.php" class="btn-top">Log in</a>
            <a href="register.php" class="btn-top">Join/Register</a>
        </div>
        <div class="reset-box">
            <section class="reset-section">
                <h2>Reset Password</h2>
                <form action="passreset.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="aem-reset">A.E.M.:</label>
                        <input type="text" id="aem-reset" name="aem" maxlength="4">
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="respass">Reset</button>
                    </div>
                </form>
                <div class="info-text">
                    <p>An e-mail will be sent to your university mail based on your A.E.M. (example "ece01111@uowm.gr"). In that e-mail you will receive a new randomly generated password which you can change later to something you remember.</p>
                    <p><a href="http://webmail.uowm.gr/students/" target="_blank">http://webmail.uowm.gr/students/</a></p>
                </div>
            </section>

            <section class="reset-section">
                <h2>Resend Activation email</h2>
                <p>To resend your activation email, <a href="activation.php">enter your AEM</a>.</p>
            </section>

            <section class="reset-section">
                <h2>Remind Username</h2>
                <form action="passreset.php" method="post">
                    <div class="form-group">
                        <label for="aem-remind">A.E.M.:</label>
                        <input type="text" id="aem-remind" name="aemremind" maxlength="4">
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="usernameremind">Send</button>
                    </div>
                </form>
                <div class="info-text">
                    <p>An e-mail with your username will be sent in your university mail based on your A.E.M. (example "XXX@uowm.gr").</p>
                    <p><a href="http://webmail.uowm.gr/students/" target="_blank">http://webmail.uowm.gr/students/</a></p>
                </div>
            </section>
        </div>
    </div>
</main>

<?php include('footer.php'); ?> 