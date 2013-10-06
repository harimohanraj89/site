<?php include "header.php" ?>

	<h2>
    	Immersive Sonification of Medical Imaging Data
    </h2>
    <p>
    	Sonification is the representation of any data or information through the sense of sound,
    	as opposed to more conventional methods, such as plots, graphs, visual displays, etc. This
    	particular project deals with the use of sound to represent medical imaging data, with a 
    	focus on supplementing existing diagnosis techniques for identifying Alzheimer's disease.
    </p>

    <h2>
    	The Data
    </h2>
    <p>
    	Medical imaging data is stored in a standardized format called DICOM. The datasets 
    	that are handled in this project are three-dimensional scans of human brains that have
    	been diagnosed with Alzheimer's disease, with varying levels of progression. These datasets are converted
    	into easily readable (by humans and computers) text files utilizing MATLAB's inbuilt functions to
    	read DICOM files.
    </p>
    
    <h2>
    	The Sonification Tool
    </h2>
    <p>
    	The magic happens in the C++ tool that I developed named SoniScan++ (the MATLAB prototype was named SoniScan).
    	Here the user is presented with the option to "sonify" a dataset in a number of ways. Some of the sonification techniques
    	are voxel(volumetric pixel)-to-note mappings. Here, each datapoint, or voxel, is assigned a note to play on a pre-determined scale
    	, and the various
    	properties of the voxel, namely its position and value, are mapped to different parameters of the note to be played,
    	such as which instrument should play the note, or how long and loud the note should play. The result is musical
    	piece of sorts, 
    </p>

    <h2>
    	The Workflow
    </h2>
    <p>
    	Sonification is the representation of any data or information through the sense of sound,
    	as opposed to more conventional methods, such as plots, graphs, visual displays, etc. This
    	particular project deals with the use of sound to represent medical imaging data, with a 
    	focus on supplementing existing diagnosis techniques for identifying Alzheimer's disease.
    </p>

<?php include "footer.php" ?>