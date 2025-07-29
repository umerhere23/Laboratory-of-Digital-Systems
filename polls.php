<?php include('header.php'); ?>

<main class="polls-page-content">
    <div class="container">
        <div class="polls-header">
            <h1>Available Polls</h1>
            <p>Select a poll from the list below to view details and cast your vote.</p>
</div>

        <section class="poll-list-container">
            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Course Workload Evaluation</h3>
                    <p>Provide feedback on the workload of the current semester's courses.</p>
                </div>
                <div class="poll-card-action">
                    <button class="btn-view-poll" data-title="Course Workload Evaluation" data-questions='[{"question":"In relation to previous semesters, the course load of this semester is:","options":["Significantly less","A little less","The same","A little more","Significantly more"]},{"question":"In relation to other courses I have attended or am attending in the Department, the workload of this course is:","options":["Significantly less","A little less","The same","A little more","Significantly more"]}]'>View Poll &raquo;</button>
                </div>
            </div>

            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Hellenic Open University (EAP) Program Feedback</h3>
                    <p>Share your valuable insights on the EAP program structure and content.</p>
                </div>
                <div class="poll-card-action">
                    <button class="btn-view-poll" data-title="Hellenic Open University (EAP) Program Feedback" data-questions='[{"question":"How would you rate the overall quality of the EAP program?","options":["Poor","Fair","Good","Very Good","Excellent"]}]'>View Poll &raquo;</button>
                </div>
            </div>

            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Laboratory Equipment Satisfaction</h3>
                    <p>Rate your satisfaction with the availability and quality of our lab equipment.</p>
                </div>
                <div class="poll-card-action">
                     <button class="btn-view-poll" data-title="Laboratory Equipment Satisfaction" data-questions='[{"question":"How satisfied are you with the availability of lab equipment?","options":["Very Dissatisfied","Dissatisfied","Neutral","Satisfied","Very Satisfied"]},{"question":"How satisfied are you with the quality and condition of the lab equipment?","options":["Very Dissatisfied","Dissatisfied","Neutral","Satisfied","Very Satisfied"]}]'>View Poll &raquo;</button>
                </div>
            </div>
            
            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Website Redesign Suggestions</h3>
                    <p>Help us improve our digital presence by providing feedback on the new website design.</p>
                </div>
                <div class="poll-card-action">
                    <button class="btn-view-poll" data-title="Website Redesign Suggestions" data-questions='[{"question":"How do you find the new website design?","options":["Difficult to navigate","Needs improvement","It is ok","Good","Excellent"]}]'>View Poll &raquo;</button>
                </div>
            </div>

            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Library Services Feedback</h3>
                    <p>Let us know your opinion about the university's library services and resources.</p>
                </div>
                <div class="poll-card-action">
                    <button class="btn-view-poll" data-title="Library Services Feedback" data-questions='[{"question":"How would you rate the helpfulness of the library staff?","options":["Poor","Fair","Good","Very Good","Excellent"]}]'>View Poll &raquo;</button>
                </div>
            </div>

            <div class="poll-card">
                <div class="poll-card-info">
                    <h3>Student Cafeteria Quality</h3>
                    <p>Provide your feedback on the quality and variety of food at the student cafeteria.</p>
                </div>
                <div class="poll-card-action">
                    <button class="btn-view-poll" data-title="Student Cafeteria Quality" data-questions='[{"question":"How would you rate the food quality at the cafeteria?","options":["Poor","Fair","Good","Very Good","Excellent"]}]'>View Poll &raquo;</button>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Modal Structure -->
<div id="poll-modal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <div class="modal-header">
            <h2 id="modal-poll-title"></h2>
        </div>
        <div id="modal-poll-body" class="modal-body">
            <!-- Poll questions will be injected here by JavaScript -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('poll-modal');
    const modalTitle = document.getElementById('modal-poll-title');
    const modalBody = document.getElementById('modal-poll-body');
    const closeModalBtn = modal.querySelector('.modal-close');
    const pollButtons = document.querySelectorAll('.btn-view-poll');

    pollButtons.forEach(button => {
        button.addEventListener('click', function() {
            const title = this.getAttribute('data-title');
            const questions = JSON.parse(this.getAttribute('data-questions'));
            
            modalTitle.textContent = title;
            modalBody.innerHTML = ''; // Clear previous content

            questions.forEach(q => {
                const questionBox = document.createElement('div');
                questionBox.className = 'question-box';

                const questionText = document.createElement('p');
                questionText.textContent = q.question;
                questionBox.appendChild(questionText);

                const optionsList = document.createElement('ul');
                optionsList.className = 'options-list';

                q.options.forEach(optionText => {
                    const listItem = document.createElement('li');
                    const link = document.createElement('a');
                    link.href = '#';
                    link.textContent = optionText;
                    listItem.appendChild(link);
                    optionsList.appendChild(listItem);
                });

                questionBox.appendChild(optionsList);
                modalBody.appendChild(questionBox);
            });

            modal.style.display = 'flex';
        });
    });

    function closeModal() {
        modal.style.display = 'none';
    }

    closeModalBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});
</script>

<?php include('footer.php'); ?>
