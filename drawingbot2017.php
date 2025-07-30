<?php include('header.php'); ?>

<div class="content-container">


	<div class="title">
		<h2>Wi-Fi & Bluetooth Drawing Robot</h2> 
		<h5>Design and implementation of a wireless drawing robot controlled via Wi-fi and Bluetooth</h5>
	</div>
	
	<div class="text">
	<p>
			<span class="center">
				<img src="./assets/Images/Drawing_Robot_Preview.png" alt="Drawing Robot Preview"/>
				<br/>
				<span class="small-text">Drawing Robot Project Overview</span>
			</span>
			<br/><br/>
			Development Team:<br/>
			Georgios Gkoutos <br/>			
			Paraskevi Latsou <br/><br/>
			
			Supervision : <br/>
			<a href="https://arch.ece.uowm.gr/mdasyg/index.php">Dr. Minas Dasygenis</a>
			<br/>
			<br/>
			<span class="h4">Introduction</span>
			<br/><br/>
			This project consists of an Arduino Uno connected to a custom shield, which controls 2 stepper motors. These motors move a pen on a vertical axis, drawing a 2D image. The image is sent to the Arduino from a custom designed Windows application, using a Bluetooth module. The application can also communicate with the Arduino through Wi-Fi, using an ESP8266 Wi-Fi Module. The Arduino receives the image data (coordinates) and then moves the stepper motors to draw the image. Also, a simple web server is hosted on the ESP8266 module, which can receive the image data. All the connections and communications are made in the local network (LAN).
			<br/><br/>
			<span class="h4">Components</span>
			<br/><br/>
			The Drawing Robot consists of the following components:
			<ul>
				<li>Arduino Uno</li>
				<li>CNC Shield</li>
				<li>2x Stepper Motors (Nema 17)</li>
				<li>2x Stepper Drivers (DRV8825)</li>
				<li>Bluetooth Module (HC-05)</li>
				<li>Wi-Fi Module (ESP8266 ESP-01)</li>
				<li>Power Supply 12V DC</li>
				<li>Cables</li>
				<li>Custom PCB</li>
			</ul>
			<br/><br/>
			<span class="h4">Video Demonstration</span>
			<br/><br/>

			<span class="center">
				<iframe src="https://www.youtube.com/embed/g2J0NysXn4Q"></iframe>
				<br/>
				<span class="small-text">Drawing Robot Demonstration</span>
			</span>
			
			<br/><br/>
			<span class="h4">Image to Coordinates Application</span>
			<br/><br/>
			<span class="center">
				<img src="./assets/Images/Image_to_Coordinates_App.png" alt="Image to Coordinates App"/>
				<br/>
				<span class="small-text">Image to Coordinates Application Interface</span>
			</span>
			<br/><br/>
			This is the main application that converts an image to coordinates and sends them to the Arduino.
			<br/><br/>
			<span class="h4">Arduino Source Code</span>
			<br/><br/>
			<a href="./assets/DrawingBot2017/Arduino_Drawing_Robot.ino.zip">Download Arduino Source Code</a>
			<br/><br/>
			<span class="h4">Windows Application Source Code</span>
			<br/><br/>
			<a href="./assets/DrawingBot2017/Drawing_Robot_Application.zip">Download Windows Application Source Code</a>
			<br/><br/>
			<span class="h4">ESP8266 Web Server Source Code</span>
			<br/><br/>
			<a href="./assets/DrawingBot2017/ESP8266_Web_Server.ino.zip">Download ESP8266 Web Server Source Code</a>
			<br/><br/>
			<span class="h4">Presentation</span>
			<br/><br/>
			<a href="./assets/DrawingBot2017/Drawing_Robot_Presentation.pptx">Download Presentation</a>
			<br/><br/>
			<span class="h4">Full Project Documentation (Greek)</span>
			<br/><br/>
			<a href="./assets/DrawingBot2017/Drawing_Robot_Documentation.pdf">Download Documentation</a>
			<br/><br/>
			<span class="h4">Bill of Materials</span>
			<br/><br/>
			<table>
				<thead>
					<tr>
						<th>Component</th>
						<th>Quantity</th>
						<th>Unit Cost (&euro;)</th>
						<th>Total Cost (&euro;)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Arduino Uno</td>
						<td>1</td>
						<td>8.00</td>
						<td>8.00</td>
					</tr>
					<tr>
						<td>CNC Shield</td>
						<td>1</td>
						<td>5.00</td>
						<td>5.00</td>
					</tr>
					<tr>
						<td>Stepper Motor (Nema 17)</td>
						<td>2</td>
						<td>12.00</td>
						<td>24.00</td>
					</tr>
					<tr>
						<td>Stepper Driver (DRV8825)</td>
						<td>2</td>
						<td>2.50</td>
						<td>5.00</td>
					</tr>
					<tr>
						<td>Bluetooth Module (HC-05)</td>
						<td>1</td>
						<td>4.00</td>
						<td>4.00</td>
					</tr>
					<tr>
						<td>Wi-Fi Module (ESP8266 ESP-01)</td>
						<td>1</td>
						<td>3.00</td>
						<td>3.00</td>
					</tr>
					<tr>
						<td>Power Supply 12V DC</td>
						<td>1</td>
						<td>10.00</td>
						<td>10.00</td>
					</tr>
					<tr>
						<td>Total Cost</td>
						<td></td>
						<td></td>
						<td>59.00</td>
					</tr>
				</tbody>
			</table>
			<br/><br/>
			
	</div>
</div>
<?php include('footer.php'); ?>