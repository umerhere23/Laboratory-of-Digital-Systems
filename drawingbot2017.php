<?php include('header.php'); ?>

<div class="content-container">

    <div class="title">
		<h2>Wi-Fi & Bluetooth Drawing Robot</h2>
    </div>

    <div class="text">
        <p>

            <span class="center">
                <img src="./assets/Images/Drawing-Robot.jpg" alt="Drawing Robot Preview"/>
                <div></div>
                <span class="small-text">Drawing Robot Project Overview</span>
            </span>

            <div></div>
            Development Team:<div></div>

            Antonios Chatzisavvas
            <div></div>
            Panagiotis Pourgias
            <div></div>
            Supervision : <div></div>
            <a href="https://arch.ece.uowm.gr/mdasyg/index.php">Dr. Minas Dasygenis</a>
            <div></div>
            <div></div>
            Drawing Robot was made as a semester project for the course Operating Systems of the
            <a href="http://www.uowm.gr/">University of Western Macedonia</a>, <a href="http://www.ece.uowm.gr/?lan=en">Department of Informatics and Telecommunications engineering</a>. <div></div>
            <div></div>

            <span class="h4">Introduction</span>
            <div></div>

            <span class="h2">Demonstration Video</span>
            <iframe src="https://arch.ece.uowm.gr/projects/drawingbot2017/repository/Arduino_Drawing_no_sound.mp4" ></iframe>
            </span>

            <span class="h4">Design</span>
            Drawing Robot consists of different parts, which are built with the use of a 3D printer and then they are assembled. The robot movement is controlled by a microprocessor Arduino Uno that is supplied with 6 batteries AA.
            A ULN2803A chip and two 5-volt engines are responsible for its movement as well as a Micro Servo engine that controls the pen’s position.


            <div></div>
            <span class="bold-text">Α)</span> The full control of the robot is done by a specially designed web page and with the use of an ESP8266 Wi-Fi Module, which is responsible for the robot’s connection with the internet.
            <div></div>
            <span class="bold-text">Β)</span> The remote control of the robot is done with an android application and with the use of a Bluetooth Module. The application, except the simple remote control, also has the capability of vocal commands.
            <div></div><div></div>

            <span class="h4">System Aims</span>
            The evolution of technology gave the idea of developing robot «designers». We can find them in different forms and shapes. Because of their easy construction,
            they have been included at the educational robotics. People with special needs can also capture their thoughts and feelings on the paper with simple programming skills.
            <div></div>
            <div></div>

            <span class="h4">System application</span>
            For the easier use of the robot, a code has been written that gives the opportunity to the user to easily determine the movements of the robot by entering the
            direction and the centimeters, the degrees and the direction of the rotation.
            <div></div>

            <span class="h5">Website & ESP8266 Wifi Module: </span>
            Through the website, the user has the ability to choose between 4 shapes that the robot will paint. Using PHP programming language, a code,
            which writes to a text file (.txt) the shape’s code (1-4) chosen by the user, has been developed. Then the ESP8266 undertakes to read from this file the selection code and send it sequentially to the Arduino Uno microprocessor.
            <div></div>

            <span class="h5">Application & Bluetooth Module: </span>
            It consists of 6 buttons in front, back, right, left, one for the control of the pen and the last one for the transferring the page where the user has the ability to handle the robot with his voice.
            The application connects to the robot with the help of a Bluetooth Module and sends the command requested by the user (e.g. forward, left) sequentially.
            <div></div>
            <div></div>

            <span class="h4">Arduino Drawing Robot 3D Parts</span>
            <a href="./assets/DrawingBot2017/Arduino_Chassis_for_Drawing_Robot.zip" target="_blank">
                Local Mirror</a>
            <div></div>

            <span class="h4">Arduino Source Code</span>
            Drawing Robot Bluetooth [Arduino Code & Android application]:<div></div>
            <a href="./assets/DrawingBot2017/Arduino_UNO_Code_Bluetooth_HC-05.zip" target="_blank">
                Local Mirror</a>
            <div></div><div></div>
            Drawing Robot Wifi [Arduino Code & ESP8266 Code & Website] :<div></div>
            <a href="./assets/DrawingBot2017/Arduino_Drawing_Robot_Wifi[ESP8266].zip" target="_blank">
                Local Mirror</a>

        </p>
    </div>


    <div class="title">
        <h2>Drawing Robot Bluetooth Schematic [HC-05]</h2>
    </div>

    <div class="text">
    <p>
        <span class="center">
            <a href="./assets/Images/Schematic_Bluetooth.jpg" target="_blank">
                <img src="./assets/Images/Schematic_Bluetooth.jpg" alt="Drawing Robot Wifi Schematic"/>
            </a>
        </span>
    </p>
    </div>

    <div class="title">
        <h2>Drawing Robot Wifi Schematic [esp8266]</h2>
    </div>

    <div class="text">
    <p>
        <span class="center">
            <a href="./assets/Images/Schematic_ESP8266.png" target="_blank">
                <img src="./assets/Images/Schematic_ESP8266.png" alt="Drawing Robot Wifi Schematic"/>
            </a>
        </span>
    </p>
    </div>

    <div class="title">
        <h2>Bill of Materials</h2>
    </div>

    <div class="text">
        <span class="small-text">( The listed prices are based on a greek distributor. )</span>
        <table>
            <thead>
            <tr>
                <th>Component</th><th>Quantity</th><th>Unit Cost</th><th>Cost</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Arduino UNO R3</td><td>1</td><td>€ 9.0</td><td>€ 9.0</td>
            </tr>
            <tr>
                <td>Geared 5V Stepper 28BYJ-48-5V</td><td>2</td><td>€ 2,39 </td><td>€ 4.78</td>
            </tr>
            <tr>
                <td>ULN2803 Darlington Driver </td><td>1</td><td>€ 0.65</td><td>€ 0.65</td>
            </tr>
            <tr>
                <td>Half-size breadboard</td><td>1</td><td>€ 3.0</td><td>€ 3.0</td>
            </tr>
            <tr>
                <td>Micro servo </td><td>1</td><td>€ 3.50</td><td>€ 3.50</td>
            </tr>
            <tr>
                <td>2 x AA Holder </td><td>1</td><td>€ 0.49</td><td>€ 0.49</td>
            </tr>
            <tr>
                <td>3 x AA Holder </td><td>1</td><td>€ 0.85</td><td>€ 0.85</td>
            </tr>
            <tr>
                <td>470 uF 25V capacitor </td><td>1</td><td>€ 0.10</td><td>€ 0.10</td>
            </tr>
            <tr>
                <td>7/8" ID x 1/8" O-ring </td><td>2</td><td>€ 0.10</td><td>€ 0.20</td>
            </tr>
            <tr>
                <td>M3 x 8mm pan head screw</td><td>15</td><td>€ 0.05</td><td>€ 0.75</td>
            </tr>
            <tr>
                <td>Male-male jumpers </td><td>15</td><td>€ 0.01</td><td>€ 0.15</td>
            </tr>
            <tr>
                <td><span class="red-text">[Bluetooth Version]</span> HC05 Bluetooth Module </td><td>1</td><td>€ 7.50</td><td>€ 7.50</td>
            </tr>
            <tr>
                <td><span class="green-text">[WIFI Version]</span> ESP8266-01 WiFi Serial  </td><td>1</td><td>€ 5.50</td><td>€ 5.50	</td>
            </tr>
            <tr>
                <td><span class="green-text">[WIFI Version]</span> Voltage Regulator 3.3v LD1117V33  </td><td>1</td><td>€ 0.50</td><td>€ 0.50	</td>
            </tr>
            <tr>
            <tr>
                <td><span class="bold-text"><span class="red-text">[Bluetooth Version]</span> Total Cost</span></td> <td></td> <td></td> <td>€30.97</td>
            </tr>
            <tr>
                <td><span class="bold-text"><span class="green-text">[WIFI Version]</span> Total Cost</span></td> <td></td> <td></td> <td>€29.47</td>
            </tr>
            </tbody>
        </table>
    </div>

        <div></div>
        <span class="center"><span class="h4"><a href="http://www.instructables.com/id/Arduino-Drawing-Robot/">More about Arduino Drawing Robot...</a></span></span>
        <div></div>
    </p>
    </div>
</div>
<?php include('footer.php'); ?>