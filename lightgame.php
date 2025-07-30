<?php include('header.php'); ?>

<div class="project-detail-container">
    <div class="project-detail-header">
        <h1>Lightgame Project</h1>
        <p>A multiplayer response game developed in Arduino.</p>
        <a href="projects.php" class="back-link">← Back to Projects</a>
    </div>

    <section class="project-section">
        <figure class="project-figure">
            <img src="./assets/Images/lightgame_3.jpg" alt="Lightgame overview">
            <figcaption>Overview of Lightgame where all the components are shown.</figcaption>
        </figure>
    </section>

    <section class="project-section team-section">
        <div class="team-info">
            <p><strong>Development Team:</strong><br>
                <a href="https://www.linkedin.com/profile/view?id=285066107">Efstathios Lymperidis</a><br>
                <a href="https://www.linkedin.com/profile/view?id=243598472">Thodoris Bais</a>
            </p>
            <p><strong>Supervision:</strong><br>
                <a href="https://arch.ece.uowm.gr/mdasyg/index.php">Dr. Minas Dasygenis</a>
            </p>
        </div>
    </section>

    <section class="project-section">
        <h2>Introduction</h2>
        <p>Lightgame is a reaction game designed for four players. Each player has a button with one of the colors red, green, blue and yellow. At each round an RGB LED will light randomly one of those colors. If the player with the corresponding color presses their button, their score will be their reaction time in milliseconds. The player with the lower score is the winner.</p>
        <figure class="project-figure">
            <img src="./assets/Images/lightgame_1.jpg" alt="The Lightgame setup">
            <figcaption>At the left side there is the Slave arduino with its components and at the right side, the Master arduino responsible for the buttons and calculations.</figcaption>
        </figure>
    </section>

    <section class="project-section">
        <h2>Design</h2>
        <p>The game is developed using two Arduino devices connected in a Master-Slave configuration via the I2C protocol. The Master Arduino handles the buttons, RGB colors, and game logic, while the Slave Arduino manages the TFT LCD screen and buzzer.</p>
        
        <h4>Stage 1: Start of the game</h4>
        <p>The Master Arduino initializes scores, ensures the RGB LED is off, and commands the Slave to display a starting message and play an intro tune.</p>
        
        <h4>Stage 2: The turns</h4>
        <p>The Master commands the Slave to signal a new round, selects a random color, starts a timer, and enables the player buttons. An interrupt is used to calculate the reaction time and update the score when a button is pressed.</p>

        <figure class="project-figure">
            <img src="./assets/Images/lightgame_5.jpg" alt="Lightgame's display system">
            <figcaption>A closer look at the screen and buzzer on the left and the RGB LED on the right.</figcaption>
        </figure>

        <h4>Stage 3: Game over</h4>
        <p>Once the turns are complete, the Master commands the Slave to display the final scores and play a game over sound. The game can then be reset.</p>
    </section>

    <section class="project-section video-section">
        <h2>Demonstration Video</h2>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/ofEW3TbrWUU" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="project-section code-section">
        <h2>Arduino Source Code</h2>
        <p>The source code is freely distributed under the Apache 2 license.</p>
        <div class="code-links">
            <div>
                <h4>Master Arduino Code</h4>
                <a href="https://codebender.cc/sketch:22657" class="btn-code">Codebender</a>
                <a href="projects/lightgame2014/repository/Lightgame-Master-Arduino.zip" class="btn-code">Local Mirror</a>
            </div>
            <div>
                <h4>Slave Arduino Code</h4>
                <a href="https://codebender.cc/sketch:35798" class="btn-code">Codebender</a>
                <a href="projects/lightgame2014/repository/Lightgame-Slave-Arduino.zip" class="btn-code">Local Mirror</a>
            </div>
        </div>
    </section>

    <section class="project-section">
        <h2>Lightgame Schematic</h2>
        <figure class="project-figure">
            <a href="./assets/Images/lightgame_schematic.jpg">
                <img src="./assets/Images/lightgame_schematic.jpg" alt="Lightgame schematic">
            </a>
            <figcaption><a href="projects/lightgame2014/repository/lightgame_schematic.zip">Download detailed Schematic.</a></figcaption>
        </figure>
    </section>

    <section class="project-section">
        <h2>Bill of Materials</h2>
        <table class="bom-table">
            <thead>
                <tr>
                    <th>Component</th>
                    <th>Quantity</th>
                    <th>Unit Cost</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Arduino Uno Rev3</td><td>2</td><td>€ 24.60</td><td>€ 49.20</td></tr>
                <tr><td>Breadboard 830 Tie Point</td><td>2</td><td>€ 5.50</td><td>€ 11.00</td></tr>
                <tr><td>Arduino TFT LCD Screen</td><td>1</td><td>€ 24.60</td><td>€ 24.60</td></tr>
                <tr><td>Buzzer 5V</td><td>1</td><td>€ 0.50</td><td>€ 0.50</td></tr>
                <tr><td>Push Button Monostable Blue</td><td>1</td><td>€ 0.55</td><td>€ 0.55</td></tr>
                <tr><td>Push Button Monostable Red</td><td>1</td><td>€ 0.55</td><td>€ 0.55</td></tr>
                <tr><td>Push Button Monostable Green</td><td>1</td><td>€ 0.55</td><td>€ 0.55</td></tr>
                <tr><td>Push Button Monostable Yellow</td><td>1</td><td>€ 0.55</td><td>€ 0.55</td></tr>
                <tr><td>Push Button Square 11x13</td><td>1</td><td>€ 0.55</td><td>€ 0.55</td></tr>
                <tr><td>Led Transparent 5mm RGB</td><td>1</td><td>€ 0.60</td><td>€ 0.60</td></tr>
                <tr><td>Resistor 1/4W Carbon 5% (330 ohm)</td><td>7</td><td>€ 0.01</td><td>€ 0.10</td></tr>
                <tr><td>Diode 1N4148</td><td>4</td><td>€ 0.02</td><td>€ 0.08</td></tr>
                <tr><td>Jumper Wires</td><td>2</td><td>€ 4.29</td><td>€ 4.29</td></tr>
                <tr><td>Cable USB A to B - 1.8m</td><td>2</td><td>€ 1.50</td><td>€ 3.00</td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total Cost</td>
                    <td>€ 96.12</td>
                </tr>
            </tfoot>
        </table>
    </section>

</div>

<?php include('footer.php'); ?>
