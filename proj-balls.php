    <?php include "header.php" ?>
        <script src="js/libvec2.js"></script>
        <script src="js/ball.js"></script>
        <script src="js/ballphysics.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheets/jsstyle.css">

	        <h2>
	        	Balls in a Box
	        </h2>
	        
	        <p>
	        	A physics simulation of balls in a box, utilizing the velocity verlet algorithm. Click and hold to interact with them.
	        </p>

            <div id="physicswrapper" class="narrow">
                <div id="controlbuttonwrapper">
                    <!-- <button class="button1" id="updatebutton" onclick="UpdateBalls();">Update</button> -->
                    <button class="button1" id="startbutton" onclick="StartSimulation();">Start</button>
                    <button class="button1" id="stopbutton" onclick="StopSimulation();">Stop</button>
                    <button class="button1" id="resetbutton" onclick="ResetBalls();">Reset</button>
                </div>
                    
                <div id="canvaswrapper">
                    <canvas id="mainCanvas"></canvas>
                </div>
            </div>

    <?php include "footer.php" ?>