<?php include('../header.php'); ?>

<main class="schedule-page-content">
    <div class="schedule-container">
        <div class="schedule-header">
            <h1>Laboratory Schedule</h1>
        </div>

        <div class="schedule-form-container">
            <form name="form1" method="post" action="">
                <label for="date">Select a date to view the schedule:</label>
                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
                <input type="submit" name="Submit" value="Submit">
            </form>
        </div>

        <div class="schedule-table-container">
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th>Comments</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will be dynamically generated here -->
                </tbody>
            </table>
        </div>

        <div class="back-button-container">
            <a href="javascript:history.back()" class="back-button">Back</a>
        </div>
    </div>
</main>

<?php include('../footer.php'); ?> 