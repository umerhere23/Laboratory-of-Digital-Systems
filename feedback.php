<?php include('header.php'); ?>

<div class="content-container">
    <div class="title">
        <h2>Anonymous Feedback</h2>
    </div>

    <div class="text attention-text">
        <h1>NOTE: If you want an anonymous email answer by me use a Disposable Temporary E-Mail Address like <a href="https://www.guerrillamail.com/"> https://www.guerrillamail.com/</a>, otherwise I will not be able to give an answer (From 2016/II, I have decided that I will not post the email on the course forum) </h1>
    </div>
    <div class="text attention-text">
        <h2> Αν θέλετε απάντηση, να χρησιμοποιήσετε ένα προσωρινό email μιας χρήσης, όπως το <a href="https://www.guerrillamail.com/"> https://www.guerrillamail.com </a> </h2>
    </div>

    <form id="feedback" method="post" action="">
        <table>
            <tr>
                <td>Nature of Feedback:</td>
                <td>
                    <select name="nature">
                        <option>Suggestion for Lecture Topic</option>
                        <option>Feedback Concerning Lecture</option>
                        <option>Feedback Concerning Class Activity</option>
                        <option>General Classroom Issue</option>
                        <option>Review of Class</option>
                        <option>Feedback Concerning Web site</option>
                        <option>Resource Suggestion for Web site</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Course:</td>
                <td>
                    <select name="course">
                        <option>Computer Architecture</option>
                        <option>Embedded Systems</option>
                        <option>Parallel and Distributed Systems</option>
                        <option>Operating Systems</option>
                        <option>Python</option>
                        <option>Not Course Related</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">Comments:</td>
                <td>
                    <textarea name="comments" rows="5" cols="35"></textarea>
                </td>
            </tr>
            <tr>
                <td>Verify-Code:</td>
                <td>
                    <input type="text" name="user-code" size="5" maxlength="4" />
                </td>
                <td>
                    <img src="makecode.php?code=KPDc" alt="captcha code" class="captcha-image"/>
                </td>
            </tr>
        </table>

        <p class="captcha-note">Please copy the <b>case-sensitive</b> four digit code from the right into the area to the left to verify you are a human. If you would like to leave your name or contact details, you can provide it in the comments area.</p>

        <div class="form-submit-container">
            <input type="hidden" name="system-code" value="KPDc" />
            <input type="submit" value="Submit Anonymous Feedback" name="submit" />
        </div>
    </form>
</div>

<?php include('footer.php'); ?>
