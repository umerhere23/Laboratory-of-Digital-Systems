<?php include('header.php'); ?>

<main class="courses-page-content">
    <div class="courses-container">
        <div class="courses-header">
            <h1>Courses</h1>
        </div>

        <div class="courses-intro">
            <p>The equipment is used for the laboratory exercises in the following obligatory courses:</p>
        </div>

        <ul class="courses-list">
            <li>
                <div class="course-info">
                    <span class="course-title">(MK20) Computer Architecture</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE155/" target="_blank">E-class</a>
                        <a href="/courses/arch/">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (8086 assembly, evaluating CPU VHDL cores and programming via assembly in FPGA)
                    <span class="semester">@ 3rd semester</span>
                </div>
            </li>
            <li>
                <div class="course-info">
                    <span class="course-title">(MK22) Operating Systems</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE189/" target="_blank">E-class</a>
                        <a href="/courses/os">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (shell scripts, POSIX C system programming on Unix)
                    <span class="semester">@ 4th semester</span>
                </div>
            </li>
            <li>
                <div class="course-info">
                    <span class="course-title">(MK34) Parallel and Distributed Systems</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE161/" target="_blank">E-class</a>
                        <a href="/courses/parallel">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (cuda, opempi, openmp, threads, Intel Vtune, Intel Compiler, Intel ManyCore Lab )
                    <span class="semester">@ 6th semester</span>
                </div>
            </li>
            <li>
                <div class="course-info">
                    <span class="course-title">(E33) Embedded Systems</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE192/" target="_blank">E-class</a>
                        <a href="/courses/embedded/">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (ARM development, IP Cores in VHDL for picoblaze, microblaze developemnt )
                    <span class="semester">@ 9th semester</span>
                </div>
            </li>
            <li class="past-course">
                <div class="course-info">
                    <span class="course-title">(MK9) Digital Design</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE193/" target="_blank">E-class</a>
                        <a href="/courses/digital_design/">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (digital design, logicsim schematic entry, intro to VHDL)
                    <span class="semester">@ 2nd semester</span>
                </div>
            </li>
            <li class="past-course">
                <div class="course-info">
                    <span class="course-title">(MK35) Web Programming</span>
                    <div class="course-links">
                        <a href="http://eclass.uowm.gr/courses/ICTE196/" target="_blank">E-class</a>
                        <a href="/courses/webprogramming/">Course Page</a>
                    </div>
                </div>
                <div class="course-details">
                    (php,mysql,javascript,DOM,CSS,security)
                    <span class="semester">@ 6th semester</span>
                </div>
            </li>
        </ul>

        <div class="additional-info">
            <p>Students that fail during the laboratory examination are obliged to attend again in the following year.</p>
            <p><a href="mdasyg/">Dr. Minas Dasygenis</a> is currently teaching the courses (both lectures & laboratories): (MK20) Computer Architecture, (MK22) Operating Systems, (MK34) Parallel and Distributed Systems, (Y10) Embedded Systems</p>
            <p>Due to the nature of the compulsory courses, the number of students enrolled every semester in each course is over 70. In order to be able to support this large number of students, Dr. Minas Dasygenis utilizes some asynchronous education websites (either open source, or designed by himself and his team). The following websites are used in each course:</p>
        </div>

        <ul class="tools-list">
            <li><a href="http://eclass.uowm.gr" target="_blank">E-class</a>, for lecture notes, exercises and announcements.</li>
            <li><a href="/schedule">I-schedule</a>, for time management, like appointments for office hours, scheduling personal examinations or demonstration of exercises (developed in-lab).</li>
            <li><a href="/igrades">I-grades</a>, for detailed student grade management and personal student messages (developed in-lab).</li>
            <li><a href="/iexamsII">I-exams</a>, for automatic personal examination system using random multiple choice questions, from category pools (developed in-lab).</li>
            <li><a href="/feedback">Anonymous Feedback</a>, for receiving anonymous comments or messages from students that help to develop and enchance the courses (developed in-lab).</li>
        </ul>
    </div>
</main>

<?php include('footer.php'); ?> 