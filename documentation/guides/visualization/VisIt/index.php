<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='VisIt';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h3>What is VisIt?</h3>

<p>
VisIt is a state-of-the-art data visualization tool based on the open source 
visualization class-library VTK and is developed and maintained at the Lawrence 
Livermore National Laboratory, University of California. VisIt is a uniquely 
powerful, full-featured software package for the visualization of scientific, 
engineering and analytical data: Its open system design is built on a standard 
interface environment. And its sophisticated data model provides users with 
great flexibility in creating visualizations.
</p><p>
The official <a href="http://www.llnl.gov/visit">VisIt home page</a>
should be visited to 
get general information about VisIt. There are links to a "Getting Started" 
introduction into VisIt, a gallery of VisIt visualization examples, a user and 
developer discussion forum, FAQs, support contacts, and much more.
</p><p>
In contrast to the visualization package OpenDX, VisIt does not offer a data 
flow-based programming environment. Instead, plots are generated by creating 
"plot objects" from variables contained in a data file and adding modifiers to 
the corresponding plot stack. In this way, sophisticated visualizations 
including complicated data transformations can be created within a few 
mouse-clicks making it the software of choice for quick and efficient data 
inspection. In addition, parallel rendering with multiple processor cores 
enables for the processing of hugh datasets. Various features include
</p>
<ul>
 <li>Import and Export of a large number of different data formats</li>
 <li>Data Transformation / Expressions</li>
 <li>High-end rendering</li>
 <li>Graphics output</li>
 <li>Full parallel support</li>
 <li>Online visualization</li>
 <li>Debugging</li>
</ul>

<p>
<a href="visit_alp.jpg"><img border=0 align="right" width="400" src="visit_alp.jpg" alt="VisIt Visualization"></a>
<a href="visit_wavetoy_volume.jpg"><img border=0 align="right" width="400" src="visit_wavetoy_volume.jpg" alt="VisIt Visualization"></a>
</p>

<p>
A wide number of functional modules for each of the above categories is already 
built into the VisIt server program as provided with the standard distribution 
of VisIt. Developers can also add their own, specialized functionality as 
external plugins to link against the VisIt runtime libraries. We are using this 
mechanism to provide our own database plugins to read datafiles written in our 
customized HDF5 format. WaveToy 3D Volume-rendering Visualization 2D 
Pseudocolour and Mesh Visualization of the lapse function from a binary black 
simulation
</p>

<h2>Remote Visualisation</h2>

<p>
VisIt supports remote visualisation, where the client runs locally,
but the data are stored on a remote machine.
</p><p>
Remote visualisation requires ssh access from the local to the remote
machine.  In addition, the "visit" command must be in the path
on the remote machine.  You may need to edit your <t>.profile</t> file on the remote machine.
</p><p>
In order to set up remote visualisation, one needs to add a "host
profile" for the remote machine; see the menu entry "Options/Host
profiles...".  Here is my host profile for numrel02.cct.lsu.edu:
</p>
<a href="visitscreenshot1.jpg"><img border=0 align="center" width="400" src="visitscreenshot1.jpg" alt="VisIt Visualization"></a>
<p>
 I have also enabled ssh tunnelling.  ssh tunnelling is useful if you want to access data while you are travelling and need to go through a firewall.  ssh tunnelling is probably slower than using direct access.
</p>

<p>
<a href="visitscreenshot2.jpg"><img border=0 align="center" width="400" src="visitscreenshot2.jpg" alt="VisIt Visualization"></a>
</p><p>
Remote files are accessed in the "File/Open file..." dialog by
choosing the corresponding host: 
</p><p>
<a href="visitscreenshot3.jpg"><img border=0 align="center" width="400" src="visitscreenshot3.jpg" alt="VisIt Visualization"></a>
</p>

<h2>The visitCarpetHDF5 package</h2>
<p>
Datafiles written in the HDF5 file format (as created by various I/O methods in 
Cactus) cannot be read by one of the built-in VisIt database plugins. For that 
reason appropriate readers must be provided as external database plugins.
</p><p>
The visitCarpetHDF5 package provides such readers as runtime-loadable plugins to 
be used in a standard installation of VisIt.
</p><p>
<tt>visitCarpetHDF5</tt> reads arbitrary N-dimensional datasets from (parallel) HDF5 output
      generated by the <a href="http://www.carpetcode.org/">Carpet</a> adaptive
      mesh-refinement (AMR) driver for Cactus.
      The datasets in the HDF5 datafile are assumed to describe Carpet-AMR data,
      i.e., one or multiple regular nested grids with different resolutions.
      Since in parallel runs one usualy deals with chunked HDF5 files, the
      reader is capable of transparent recombination on-the-fly.
</p>
<h3>Downloading and Installing</h3>
<p>
For obtaining VisIt you can go to the VisIt <a href="http://www.llnl.gov/visit/download.html">download page</a> which provides pre-compiled binaries 
for a number of architectures. If your architecture is not among these, or the 
binary distribution doesn't work for you, you can also download the sources and 
build VisIt yourself. Please read the README and INSTALL files in the source 
distribution and follow the instructions given therein.
</p><p>
The visitCarpetHDF5 package can be obtained from the Cactus CVS server via 
anonymous checkout:
</p>
<code>
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus login    # password is 'anon'
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout VizTools/visitCarpetHDF5
</code>
<p>
In order to build the visitCarpetHDF5 plugin you need to have HDF5 (with C++ bindings) and a 
standard distribution of VisIt installed on your system. For details where to 
obtain and how to install HDF5 please refer to the Cactus <a href="../Documentation/hdf5HowTo.txt">HDF5 HOWTO</a> Page.
</p><p>
To install the package, simply execute the install script contained in the 
visitCarpetHDF5 package. If VisIt was properly installed, a window will pop-up. 
In the "Makefile"-tab modify the library and include path for the HDF5-library 
to match the installation on your system. Then go to the "File"-menu, save the 
file and close the window. The plugin will then be generated and installed.
</p><p>
Note that there may be a problem if several plugins support HDF5
files.  In this case, it can happen that the wrong plugin in chosen to
open a file, even if the correct plugin is selected in the "open file"
dialogue.  As a work-around, you can remove all other HDF5-based
plugins, such as e.g. the PIXIE plugin.
</p>

<h3>Support and Acknowledgements</h3>
<p>
<a href="http://numrel.aei.mpg.de/People/personal_webpages/reisswig.html">Christian Reisswig</a> is the main 
author and maintainer of the visitCarpetHDF5 package. The development work has 
been supported by various people from the Cactus team and the <a href="http://numrel.aei.mpg.de">Numerical 
Relativity Group</a> at the <a href="http://www.aei.mpg.de">Albert Einstein Institute</a>.
Please report bugs and send any comments to the <a href="mailto:reisswig@aei.mpg.de">maintainer</a> of the visitcarpetHDF5 package.
</p><p>
The software in the visitCarpetHDF5 package is available under the GNU General 
Public License. In addition to the conditions in the GNU General Public License, 
the authors strongly suggest <b>using this software for non-military purposes only</b>.
</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>