<?php include('header.php'); ?>

<main class="register-page-content">
    <div class="register-container">
        <div class="top-buttons">
            <a href="i-time-slot.php" class="btn-top">Log in</a>
            <a href="#" class="btn-top">Join/Register</a>
        </div>
        <div class="register-box">
            <h2>Register</h2>
            <p class="fields-required">ALL fields are required</p>

            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="username">Username <br><span>(latin characters):</span></label>
                    <input type="text" id="username" name="user" maxlength="25">
                </div>
                <div class="form-group">
                    <label for="password">Password <br><span>(latin/greek/numbers):</span></label>
                    <input type="password" id="password" name="pass" maxlength="25">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name <br><span>(greek characters):</span></label>
                    <input type="text" id="first_name" name="first_name" maxlength="25">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name <br><span>(greek characters):</span></label>
                    <input type="text" id="last_name" name="last_name" maxlength="25">
                </div>
                <div class="form-group">
                    <label for="aem">A.E.M. <br><span>(numbers):</span></label>
                    <input type="text" id="aem" name="aem" maxlength="4">
                </div>
                <div class="form-group">
                    <label for="email">E-mail <br><span>(academic mail):</span></label>
                    <input type="text" id="email" name="email" maxlength="25">
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <select id="department" name='department'>
                        <option value='4'>ΗΜΜΥ/UOWM (ΠΔΜ)</option>
                        <option value='3'>CSD (ΑΠΘ)</option>
                        <option value='2'>ΤΜM (ΠΔΜ)</option>
                        <option value='1'>ΤΜΠΤ (ΠΔΜ)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telephone">Phone number <br><span>(mobile):</span></label>
                    <input type="text" id="telephone" name="telephone" maxlength="10">
                </div>
                <div class="form-submit">
                    <button type="submit" name="subjoin">Join/Register!</button>
                </div>
            </form>

            <div class="info-text">
                <p><b>Προσοχή: Μόλις πατήσετε Join μην κλείσετε το παράθυρο, έως ότου να ολοκληρωθεί η αποστολή του email</b></p>
                <p><b>Important:</b></p>
                <h5>A confirmation e-mail will be sent in your univercity mail based on your A.E.M. (example "ece01110@uowm.gr). It is necessary to confirm your e-mail in order to register any times.</h5>
                <p><a href="http://webmail.uowm.gr/students/" target="_blank">http://webmail.uowm.gr/students/</a></p>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?> 