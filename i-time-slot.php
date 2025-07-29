<?php include('header.php'); ?>

<main class="login-page-content">
    <div class="page-wrapper">
        <div class="notification-bar">
            <p>Οι τελευταίες ώρες γραφείου έγιναν στις 10/6 γιατί τελείωσε το εξάμηνο. Αν θελήσει κάποιος συνάντηση μετά τις 10/6 πρέπει να στείλει εμαιλ με τη διαθεσιμότητα του και να αναφέρει το λόγο του αιτήματος.</p>
        </div>

        <div class="login-container">
            <h2>Log in</h2>

            <div class="login-options">
                <a href="https://sso.uowm.gr/login?service=https%3A%2F%2Farch.ece.uowm.gr%2Faccount%2F" class="login-option-link active">Σύνδεση με ακαδημαϊκή ταυτότητα UOWM</a>
                <a href="register.php" class="login-option-link">Σύνδεση με τοπικούς κωδικούς</a>
            </div>
            
            <form class="login-form" method="post" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me next time</label>
                </div>
                <div class="form-submit">
                    <button type="submit">Login</button>
                </div>
            </form>

            <div class="message-box">
                <p>Δεν υπάρχει ενεργή εξέταση αυτή τη στιγμή.</p>
            </div>

            <div class="login-links">
                <p><a href="https://sso.uowm.gr/login?service=https%3A%2F%2Farch.ece.uowm.gr%2Faccount%2F">Register/Join/Εγγραφή</a></p>
                <p><a href="reset-password.php">Forgot Password, Request Password Reset, Remind Username, Resend Activation Email</a></p>
                <p><a href="printschedule.php">Προβολή όλων των χρονοθυρίδων</a></p>
                <p><a href="#">Αποσύνδεση</a></p>
                <p><a href="dpa.php">Δήλωση προσωπικών δεδομένων</a></p>
            </div>
        </div>
        
        <div class="login-footer">
            <p>© Developed by <a href="#">Lymperidis Efstathios</a>, Supervised by <a href="#">Dr. Minas Dasygenis</a>.</p>
            <p><a href="#">[ΠΟΛΙΤΙΚΗ ΑΣΦΑΛΕΙΑΣ ΚΑΙ ΑΠΟΡΡΗΤΟΥ]</a></p>
        </div>
    </div>
</main>

<?php include('footer.php'); ?> 