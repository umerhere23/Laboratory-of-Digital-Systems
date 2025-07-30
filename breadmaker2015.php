<?php include('header.php'); ?>

<div class="project-detail-container">
    <div class="project-detail-header">
        <h1>The IoT (Internet of Things) Breadmaker</h1>
        <p>Modifying a bread maker home appliance with Arduino</p>
        <a href="projects.php" class="back-link">← Back to Projects</a>
    </div>

    <section class="project-section">
        <figure class="project-figure">
            <a href="./assets/Images/overview.jpg"><img src="./assets/Images/overview_small.jpg" alt="Bread Online overview"></a>
            <figcaption>The Bread Online bread maker</figcaption>
        </figure>
        <div class="team-info">
            <p><strong>Development:</strong> <a href="https://www.linkedin.com/profile/view?id=426689884">Panagiotis Ioannidis</a></p>
            <p><strong>Supervision:</strong> <a href="https://arch.ece.uowm.gr/mdasyg/index.php">Dr. Minas Dasygenis</a></p>
        </div>
    </section>
    
    <section class="project-section video-section">
        <h2>Demonstration Video</h2>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/hoTtp7hwVzE" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="project-section">
        <h2>Introduction</h2>
        <p>Bread Online is a home appliance management suite designed to control devices with specifically modified hardware. It consists of a website that provides the management interface and a modified bread maker that communicates with it. The purpose of this project is to provide an alternative solution to home appliances monitoring and management based on the philosophy of Internet of Things.</p>
    </section>

    <section class="project-section">
        <h2>Design</h2>
        <h4>Website</h4>
        <p>An easy-to-use graphical interface is required to access the service. The website provides this interface along with the tools to register a new account and new devices. Every device has its own management page where the user can start a new program, cancel the ongoing one, or just check the status of the device.</p>
        <div class="image-gallery">
            <figure><a href="./assets/Images/home_page.PNG"><img src="./assets/Images/home_page_small.PNG" alt="Bread Online Home Page"></a><figcaption>The home page of the website</figcaption></figure>
            <figure><a href="./assets/Images/device_manage_user.PNG"><img src="./assets/Images/device_manage_user_small.PNG" alt="Device Management Page"></a><figcaption>The device management page</figcaption></figure>
        </div>

        <h4>Hardware</h4>
        <p>The bread maker is controlled by an Arduino Uno R3, which communicates with the server via an Arduino Ethernet Shield R3. The sensitive functions of the bread maker are controlled by the TIMER1 of the Arduino. The device is able to function offline as well.</p>
    </section>

    <section class="project-section">
        <h2>Modification Process</h2>
        <p>The modification procedure took place under great precaution measurements. To replace the factory controller, we disassembled the device, removed the factory electronics, and integrated the Arduino, Ethernet Shield, relays, and new power supplies.</p>
        <div class="image-gallery">
            <figure><a href="./assets/Images/ports.jpg"><img src="./assets/Images/ports_small.jpg" alt="Ethernet and USB ports"></a><figcaption>Ethernet and USB ports</figcaption></figure>
            <figure><a href="./assets/Images/cables.jpg"><img src="./assets/Images/cables_small.jpg" alt="Routing the cables"></a><figcaption>Routing the cables</figcaption></figure>
            <figure><a href="./assets/Images/electronics.jpg"><img src="./assets/Images/electronics_small.jpg" alt="Electronics"></a><figcaption>All electronics before finishing</figcaption></figure>
        </div>
    </section>
    
    <section class="project-section code-section">
        <h2>Source Code & Schematics</h2>
        <p>The source code and schematics for this project are freely distributed under the Apache License 2.0.</p>
        <div class="download-links">
            <a href="projects/breadmaker2015/repo/schematics.zip" class="btn-download">Download Schematics</a>
            <a href="projects/breadmaker2015/repo/website-code.zip" class="btn-download">Download Website Code</a>
            <a href="projects/breadmaker2015/repo/Arduino_Code_and_Library.zip" class="btn-download">Download Arduino Code</a>
        </div>
        
        <div class="code-embed">
            <h4>Arduino Source Code on Codebender</h4>
            <iframe style="height: 510px; width: 100%;" src="https://codebender.cc/embed/sketch:112711" frameborder="0"></iframe>
        </div>
    </section>

    <section class="project-section">
        <h2>Bill of Materials</h2>
        <table class="bom-table">
            <thead>
                <tr><th>Component</th><th>Quantity</th><th>Unit Cost</th></tr>
            </thead>
            <tbody>
                <tr><td>Arduino Uno R3 clone</td><td>1</td><td>€7.00</td></tr>
                <tr><td>Arduino Ethernet Shield R3 clone</td><td>1</td><td>€5.80</td></tr>
                <tr><td>Nokia 5110 LCD</td><td>1</td><td>€1.90</td></tr>
                <tr><td>Beefcake Relay Kit</td><td>2</td><td>€7.00</td></tr>
                <tr><td>5V AC/DC Adapter</td><td>1</td><td>€3.00</td></tr>
                <tr><td>9V AC/DC Adapter</td><td>1</td><td>€3.00</td></tr>
                <tr><td>Momentary Push Button</td><td>6</td><td>€0.22</td></tr>
                <tr><td>Mains Switch</td><td>1</td><td>€2.00</td></tr>
            </tbody>
             <tfoot>
                <tr>
                    <td colspan="2">Total Cost</td>
                    <td>€45.33</td>
                </tr>
            </tfoot>
        </table>
    </section>
</div>

<?php include('footer.php'); ?>
