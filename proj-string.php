<?php include "header.php" ?>

    <script src="js/stringphysics.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/jsstyle.css">

	        <h2>
	        	String Simulation
	        </h2>
	        
	        <p>
	        	A physics simulation of a vibrating string, solving the 1-dimensional wave equation.
	        </p>

            <div id="physicswrapper" class="narrow">
                <div id="controlbuttonwrapper">
                    <!-- <button class="button1" id="updatebutton" onclick="UpdateString();">Update</button> -->
                    <button class="button1" id="startbutton" onclick="StartSimulation();">Start</button>
                    <button class="button1" id="stopbutton" onclick="StopSimulation();">Stop</button>
                    <button class="button1" id="resetbutton" onclick="ResetString();">Reset</button>
                </div>
                    
                <div id="canvaswrapper" class="narrow">
                    <canvas id="mainCanvas"></canvas>
                </div>

                <div id="parameterswrapper" class="narrow">
                    <div class="parameter" id="wavetypewrapper">

                        <div class="parameterheading">
                            Wave Type
                        </div>

                        <div class="parametercontent">
                            <form id="wavetypeform">
                                <input class="wavetyperadio" type="radio" name="wavetype" value="harmonic">Harmonic<br>
                                <input class="wavetyperadio" type="radio" name="wavetype" value="pluck">Pluck
                            </form>
                        </div>

                    </div>

                    <div class="parameter" id="harmonicwrapper">
                        
                        <div class="parameterheading">
                            Harmonic
                        </div>    

                        <div class="parametercontent">
                            <input class="numinput" id="harmonictext" type="text">
                        </div>

                    </div>

                    <div class="parameter" id="fractionwrapper">
                        
                        <div class="parameterheading">
                            Pluck Fraction
                        </div>    
                        
                        <div class="parametercontent">
                            <input class="numinput" id="fractiontext" type="text">
                        </div>

                    </div>
                    
                    <!-- <div class="parameter" id="wavetypewrapper">
                        <input type="text"
                    </div>     -->
                    
                    <div class="parameter" id="updateparameterswrapper">
                        <button class="button1" id="updateparameters" onclick="UpdateParameters();">Update Parameters</button>                    
                    </div>
                </div>

                <div id="showparameterswrapper" class="narrow">
                    <button class="button1" id="toggleparametersbutton" onclick="ToggleParameters();">Show Parameters</button>
                </div>

            </div>

<?php include "footer.php" ?>