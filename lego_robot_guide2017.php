<?php include('header.php'); ?>

<div class="content-container">
	
	<div class="title">
		<h2>Lego System Guidance For Visual Ιmpairment</h2> 
		<h5>Design and implementation of a guidance system for the visual Ιmpairment using lego ev3 building blocks</h5>
	</div>
	
	<div class="text">
	<p>
			<span class="center">
				<img src="./assets/Images/pic_1.png" alt="Smart Car overview"/>
				<br/>
				<span class="small-text">Overview of lego system guidance full project.</span>
			</span>
			<br/><br/>
			Development Team:<br/>
			Aikaterini Mangiroglou <br/>
			Christos Chaschatzis<br/>
			Sotiria Papanikopoulou <br/><br/>
			
			Supervision : <br/>
			<a href="https://arch.ece.uowm.gr/mdasyg/index.php">Dr. Minas Dasygenis</a>
			<br/>
			<br/>
			<span class="h4">Introduction</span>
			<br/><br/>
			Lego system guidance is a wearable jacket made of lego ev3 and consists of three sensors and one intelligent brick which helps the user to understand if there is an object in front of him with the help of appropriate sounds. The project was made for the Festival <a href="http://www.i2fest.gr/">i2fest 2017.</a>
			<br/><br/>
			<span class="h4">Componets</span>
			<br/><br/>
			The guidance system consists of several Lego Mindstorm ev3 componets (LEGO MINDSTORMS Education EV3 Core Set).
			<ul>
				<li>Lego ev3 Intelligent brick x1</li>
				<li>Ultra sonic lego x2(Range 1 of 250 cm)</li>
				<li>Touch sensor x1</li>
				<li>Tracks</li>
				<li>Cables x3</li>
				<li>Brick 2x05</li>
				<li>Technic brick 7x03</li>
				<li>Technic brick 6x09</li>
				<li>Technic brick 6x11</li>
				<li>Technic brick 2x13</li>
				<li>Technic brick 8x15</li>
				<li>HTO V Beam 90 Degrees</li>
				<li>Connector bus x70</li>
				<li>Other x40(plus extensions for smaller size)</li>
			</ul>
			<br/><br/>
			
			<span class="center">
				<img src="./assets/Images/pic_2.jpg" alt="Lego System Guidance overview"/>
				<br/>
				<span class="small-text">Overview of Lego Sytsem Guidance where all types of the components are shown.</span>
			</span>
			<br/>
			<br/>
			<span class="h4">Project in action</span>
			Initially, the project boot by pressing the touch sensor which is located on the front side of project. Then, 2 lego ev3 ultrasonic sensors which are located on the front side start to produce different  sounds. Τhe first one, has 90 degrees difference from the ground and produces an intermittent unique sound which tells the user it has an object in 50cm of him. More specifically, starts beeping from the 60cm and detects particularly large objects such as people, walls etc.The second, is adjustable i.e. the degrees of the sensor from the ground depending on the height of the user and and starts to produce sound from a distance of 160cm which is different from the first ultrasonic, as near approaching the user at obstacle so most frequently becomes the sound produced and in 35cm begins to sound a continuous sound, detects particularly small or medium objects such as desks, chairs,terrace etc.At the end, we can shut down the program with the touch sensor.
			<span class="center"><br/><br/>
			<span class="h3">Demonstration Video</span><br/><br/>

			<iframe src="https://www.youtube.com/embed/4PbjBkIsZxc"></iframe>
			or view it on <a href=https://www.youtube.com/watch?v=4PbjBkIsZxc> Youtube </a>

			<br/><span class="h4">Lego ev3 mindstorm source code: </span> 
			<a href="./assets/Lego_Robot_Guide/Lego Robot Guide.ev3">Click here to download the code</a>
			<span class="h4">Greek Poster at i2fest Computing Festival</span>
			<a href="./assets/Lego_Robot_Guide/Lego Robot Guide.pptx"> i2fest Poster </a>
			<br/>
			<br/>
		</p>
	</div>
	
	<div class="title">
	<h2>Bill of Materials</h2>
	</div>
	<p> Lego Mindstorms Education EV3 Core Set 45544 costs 470.36 € or you can buy it in pieces</p><br/>
	<p> NOTICE! <i> is more expensive to buy separate the pieces than the whole set</i></p>
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
				<td>LEGO Education EV3 Intelligent Brick</td><td>1</td><td>€ 248</td><td>€ 248</td>
			</tr>
			<tr>
				<td>Lego Mindstorms EV3 Touch Sensor</td><td>1</td><td>€ 23.50</td><td>€ 23.50</td>
			</tr>
			<tr>
				<td>LEGO Education EV3 Cable Pack </td><td>1</td><td>€ 18.50</td><td>€ 18.50</td>
			</tr>
			<tr>
				<td>LEGO Education EV3 Ultrasonic</td><td>2</td><td>€ 40.30</td><td>€ 80.60</td>
			</tr>
			<tr>
				<td>Varius lego ev3 bricks</td><td>195</td><td>€ -</td><td>€ 80</td>
			</tr>
			<tr>
				<td>Total Cost</td> <td></td> <td></td> <td>€ 450.60</td>
			</tr>
			</tbody>
		</table>	
	</div>


</div>
<?php include('footer.php'); ?>
