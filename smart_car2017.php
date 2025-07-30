<?php include('header.php'); ?>

<div class="content-container">

        <div class="title">
                <h1>SmartCar 2017</h1>
                <h2>Smart Car Follower of a person</h2>
        </div>

        <div class="text">

<a href="./assets/Images/IMG_20170525_141705.jpg" target="_blank"><img src="./assets/Images/IMG_20170525_141705.jpg" alt="Smart Car overview"/></a>
<p>Development: <a href="https://www.linkedin.com/in/john-stoltidis-481a098b" >Ioannis Stoltidis</a></p>
<p>Supervision:&nbsp;<a href="https://arch.ece.uowm.gr/mdasyg/index.php" target="_blank">Dr. Minas Dasygenis</a>&nbsp;from the&nbsp;<a href="http://arch.ece.uowm.gr/" target="_blank">Laboratory of Digital Systems and Computer Architecture</a>.</p>
<p>Smart Car Follower&nbsp;is a project developed as part of a thesis for the&nbsp;<a href="http://www.ece.uowm.gr/?lan=en" target="_blank">Department of Informatics &amp; Telecommunications Engineering</a>&nbsp;of the&nbsp;<a href="http://www.uowm.gr/" target="_blank">University of Western Macedonia</a>, Greece, under the supervision of <a href=/mdasyg/index.php> Dr. Minas Dasygenis</a>.  The full text (in Greek) is available <a href=/mdasyg/thesis/2017.smart_car/text/smart_car_follow_stoltidhs_dasygenis.pdf> online</a>, together with the presentation <a href=/mdasyg/thesis/2017.smart_car/presentation/smart_car_follow_stoltidhs_dasygenis_presentation.pdf> file</a>.</p>
<p><video poster="Video" controls="controls">
<source src="./assets/video/smart_car_full_sort.mp4" type="video/mp4" /></video>
or download the <a href=./assets/video/smart_car_full_sort.mp4> video</a></p>
<h1>Introduction</h1>
<p>Smart follower is a modified vehicle which follows the user and has the ability to overcome obstacles. Additionally the user can control remotely the vehicle via internet with a gamepad. For this case, an application running on windows was developed. This application uses SSH protocol for the communication between the vehicle and the client’s PC. In the past we had presented the <a href=/projects/smart_car2016/> alpha version</a> of this vehicle.</p>
<h1>Features</h1>
<ol>
<li> Follow a user that carries a special designed keychain that transmits Bluetooth and infrared signals</li>
<li> Avoid obstacles using sonar and smart bumper</li>
<li> Remote control the vehicle using a custom PC application and a mounted webcam on a remotely operated pan/tilt structure</li>
<li> Control the vehicle by ssh into the onboard raspberry and issue commands to the USB attached Arduino</li>
</ol>
<h1>Design</h1>
<h2>CarControl UI</h2>
<a href="./assets/Images/CarControl.png" target="_blank"><img src="./assets/Images/CarControl.png" alt="CarControl UI" /></a>
<p>CarControl is the application for remote controlling our vehicle. A user friendly graphics interface was developed, making the use of the application easier. After the SSH connection with the vehicle is established, the user can control it using their gamepad. The application uses both Xinput and DXinput methods for gamepad reading, supporting many kinds of gamepads. The distance sensors’ readings are viewed at the right side of the app’s main window and are refreshed every 1s. Also there is a video streaming window and a debug message viewer window. The follow-me function needs nothing more than pressing a button (the green one) from the vehicle and to turn on the user transmitter. The vehicle reading IR messages will follow the user.</p>
<h1>Hardware</h1>
<p>The vehicle is equipped with a Raspberry Pi 3 model B and two Arduino Uno R3 connected with a USB cable. An LCD 16x2 is connected directly on the Pi, showing periodically the local IP of the vehicle. Also some simple components like LEDs and push buttons are connected at Pi’s GPIO pins. All five sonar distance sensors, two servo motors (for camera rotation) and two DC motors through a dual H bridge, are connected to the first Arduino. Four 38Khz IR receivers are connected to the second Arduino. Additionally a client receiver, which contains an Arduino Uno R3, six IR LED and a Bluetooth transmitter (BC417), was designed.</p>
<a href="./assets/Images/Power_supply_System.jpg" target="_blank"><img src="./assets/Images/Power_supply_System.jpg" alt="Power supply System" /></a>
<p>Software</p>
<h2>Remote Control</h2>
<p>When using CarControl, each control command is sent via SSH to the Raspberry. The command is a two letter string (like “ms”) and saved in a file mounted on RAM. Most commands are forwarded to Arduino for execution, while some other less important (like LED toggle) are executed directly on Pi.</p>
<a href="./assets/Images/Car_Control_Comunication.jpg" target="_blank"><img src="./assets/Images/Car_Control_Comunication.jpg" alt="Remote control communication" /></a>
<h2>Follow-me function</h2>
<p>The Arduino connected with IR receivers, decodes received signal and prints periodically a 4-bit variable. The main software, when reading this variable, knows the position of the client compared to the vehicle. Also the Bluetooth signal’s strength readings reveal the distance between the vehicle and the client. With these information the vehicle follows the client. </p>
<a href="./assets/Images/Follow_me.jpg" target="_blank"><img src="./assets/Images/Follow_me.jpg" alt="Follow me communication" /></a>
<h1>Hardware Schematics</h1>
<a href="./assets/Images/car_schematic_pi3.jpg" target="_blank"><img src="./assets/Images/car_schematic_pi3.jpg" alt="car schematic" /></a>
<p>car schematic</p>
<a href="./assets/Images/ir_transmitter.jpg" target="_blank"><img src="./assets/Images/ir_transmitter.jpg" alt="Client's transmitter schematic" /></a>
<p>Client transmitter</p>
<h1>CarControl Project</h1>
<p><a href="./assets/CarControl/car_control.rar">Download</a> CarControl</p>
<h1>Main Arduino Source Code</h1>
<p><a href="./assets/ArduinoCode/car_pro_pi.zip">Download</a> car_pro_pi</p>
<h1>Receiver Arduino Source Code</h1>
<p><a href="./assets/ArduinoCode/ir_rcv.zip">Download</a> ir_rcv</p>
<h1>Transmitter Arduino Source Code</h1>
<p><a href="./assets/ArduinoCode/ir_trans.zip">Download</a> ir_trans</p>
<h1>Python Source Code</h1>
<p><a href="./assets/RaspberryPi_Scripts/RaspberryPi_Scripts.rar">Download</a> RaspberryPi_Scripts</p>
<h1>Bill of Materials</h1>
<table>
<tbody>
<tr>
<td width="201">
<p><strong>Component</strong></p>
</td>
<td width="148">
<p><strong>Unit Cost (&euro;)</strong></p>
</td>
<td width="113">
<p><strong>Cost (&euro;)</strong></p>
</td>
</tr>
<tr>
<td width="201">
<p>1x children car</p>
</td>
<td width="148">
<p>100</p>
</td>
<td width="113">
<p>100</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Battery MW MWS 7.2-12</p>
</td>
<td width="148">
<p>15.8</p>
</td>
<td width="113">
<p>15.8</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Raspberry Pi 3 Model B</p>
</td>
<td width="148">
<p>35</p>
</td>
<td width="113">
<p>35</p>
</td>
</tr>
<tr>
<td width="201">
<p>3x Arduino Uno R3 clone</p>
</td>
<td width="148">
<p>1.80</p>
</td>
<td width="113">
<p>5.4</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Bluetooth BC417</p>
</td>
<td width="148">
<p>5.16</p>
</td>
<td width="113">
<p>5.16</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x &Eta; Bridge</p>
</td>
<td width="148">
<p>1.30</p>
</td>
<td width="113">
<p>1.30</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Web Camera</p>
</td>
<td width="148">
<p>15.26</p>
</td>
<td width="113">
<p>15.26</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x DC converter LM2596s</p>
</td>
<td width="148">
<p>1.02</p>
</td>
<td width="113">
<p>1.02</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x LCD 16x2 HD44780</p>
</td>
<td width="148">
<p>0.88</p>
</td>
<td width="113">
<p>0.88</p>
</td>
</tr>
<tr>
<td width="201">
<p>2x Servo motor SG90</p>
</td>
<td width="148">
<p>0.87</p>
</td>
<td width="113">
<p>1.74</p>
</td>
</tr>
<tr>
<td width="201">
<p>2x Sonar US-020</p>
</td>
<td width="148">
<p>1.2</p>
</td>
<td width="113">
<p>2.4</p>
</td>
</tr>
<tr>
<td width="201">
<p>3x Sonar HC-SR04</p>
</td>
<td width="148">
<p>0.85</p>
</td>
<td width="113">
<p>1.7</p>
</td>
</tr>
<tr>
<td width="201">
<p>4x IR receiver VS1838b</p>
</td>
<td width="148">
<p>0.05</p>
</td>
<td width="113">
<p>0.2</p>
</td>
</tr>
<tr>
<td width="201">
<p>9x IR LEDs</p>
</td>
<td width="148">
<p>0.01</p>
</td>
<td width="113">
<p>0.09</p>
</td>
</tr>
<tr>
<td width="201">
<p>7x Push button</p>
</td>
<td width="148">
<p>0.01</p>
</td>
<td width="113">
<p>0.07</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Potentiometer</p>
</td>
<td width="148">
<p>0.01</p>
</td>
<td width="113">
<p>0.01</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x Breadboard mini</p>
</td>
<td width="148">
<p>0.4</p>
</td>
<td width="113">
<p>0.4</p>
</td>
</tr>
<tr>
<td width="201">
<p>1x car USB adaptor</p>
</td>
<td width="148">
<p>0.7</p>
</td>
<td width="113">
<p>0.7</p>
</td>
</tr>
<tr>
<td width="201">
<p>Total Cost</p>
</td>
<td width="148">
<p>&nbsp;</p>
</td>
<td width="113">
<p>187,24 &euro;</p>
</td>
</tr>
</tbody>
</table>
</div>

<?php include('footer.php'); ?>
