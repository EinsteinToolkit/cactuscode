<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='openDX';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

<h3>What is OpenDX</h3>

OpenDX is the open source software version of <a href=http://www.ibm.com/dx>
IBM's Visualization Data Explorer Product</a>.
OpenDX is a uniquely powerful, full-featured software package for the visualization of scientific, engineering and analytical data: Its open system design is built on a standard interface environment. And its sophisticated data model provides users with great flexibility in creating visualizations.
<p>
The official <a href=http://www.opendx.org>OpenDX home page</a> should be visited to get general information about OpenDX.  There are links to a "Getting Started" introduction into OpenDX, a gallery of OpenDX visualization examples, a user and developer
discussion forum, FAQs, support contacts, and much more.
<p>
Similar to the visualization package AVS, OpenDX offers a data flow-based programming environment. Modules are the basic components for building a visualization application.
There exist various module categories of different functionality such as

<UL>
<LI>Import and Export of data
<LI>Data Transformation
<LI>Rendering
<LI>Graphics output
<LI>Interactors

<LI>Flow Control
<LI>Debugging
</UL>

<p>
A wide number of functional modules for each of the above categories is already built into the DX server program as provided with the standard distribution of OpenDX.
Developers can also add their own, specialized functionality as external modules to link against the OpenDX runtime libraries and build their own server program.
We are using this mechanism to provide our own Data Import modules to read datafiles written in HDF5 format.

<!--</td>
<td valign=top>-->
<img border=0 align=right src="../images/openDX_wavetoy.gif"
alt="WaveToy Isosurface Visualization">

<img border=0 align=right src="../images/openDX_shift.gif"
alt="Shift Slab Visualization">

<h3>The OpenDXutils Package</h3>

Datafiles written in the HDF5 file format (as created by
various I/O methods in Cactus) cannot be read by one of the built-in OpenDX data import modules. For that reason appropriate readers must be provided as external OpenDX modules.
<p>
The OpenDXutils packages provides such readers as runtime-loadable modules to be used in a standard installation of OpenDX.
There are a number of different reader modules available which can import different types of data from HDF5 datafiles into an OpenDX visualization application:

<ol>
<li><a href=../Visualization/ImportHDF5>ImportHDF5</a><br>
reads arbitrary N-dimensional datasets from an HDF5 file on a local file system, from another application (eg. a running Cactus simulation) as streamed HDF5 files via a live socket connection, or from a remote HDF5 file located on a GridFtp server (see the <a href="../Visualization/GridFtpVFD-HDF5">GridFtpVFD-HDF5</a> package
for details on remote HDF5 file visualization).
<br>
Data can be imported as full datasets, or as slabs
(orthogonal subregions within the full dataset, potentially with less than N dimensions, and defined by its origin, thickness, and stride parameters). The datasets in the HDF5 datafile are assumed to describe a regular grid.</li>

<p>

<li><a href="../Visualization/ImportCactusHDF5">ImportCactusHDF5</a><br>
provides same functionality as <a href=../Visualization/ImportHDF5>ImportHDF5</a>,
plus some extensions specific to import data from Cactus HDF5 datafiles.
<br>
This module is able to read distributed datasets from multiple chunked HDF5 output files (as usually created during a parallel Cactus run) directly, with transparent recombination on-the-fly.</li>
<p>

<li><a href=../Visualization/ImportCarpetHDF5>ImportCarpetHDF5</a><br>
imports fixed mesh refinement datasets from an HDF5 file which was generated by <a href=http://www.carpetcode.org/>Carpet's</a> IOFlexIO output method using CarpetIOHDF5 AMR Writer file format where many regular-shaped patches of different refinement levels can be arranged within multiple nested grids.
<br>
Like <a href=../Visualization/ImportHDF5>ImportHDF5</a> and <a href=ImportCactusHDF5>
ImportCactusHDF5</a>, this module can also read slabs of full FMR datasets.</li>
<p>

<li>ImportAHFinderFile<br>

reads HDF5 output files from the Cactus Apparent Horizon Finder thorn</li>
</ol>

<h3>Downloading and Installing</h3>
For obtaining OpenDX you can go to the
<a href=http://www.opendx.org/download.html>OpenDX download page</a>
which provides pre-compiled binaries for a number of architectures.  If your architecture is not among these, or the binary distribution doesn't work for you, you can also download the sources and build OpenDX yourself. Please read the README and INSTALL files in the
source distribution and follow the instructions given therein.
<br>
You should also download the OpenDX examples which come as a separate package and install these in the same directory as OpenDX.
<p>
The OpenDXutils package can be obtained from the Cactus CVS server via anonymous checkout:

<PRE>
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus login    # password is 'anon'
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout VizTools/OpenDXutils
</PRE>
The OpenDXutils package contains a <tt>src/</tt> subdirectory with the modules' C source code files and the corresponding module description file <tt>ImportHDF5.mdf</tt>.
A Makefile is also supplied to build the runtime-loadable module file.
<p>
In order to build the modules of the OpenDXutils package you need to have HDF5 and a standard distribution of OpenDX installed on your system.
For details where to obtain and how to install HDF5 please refer to the
<a href="../Documentation/hdf5HowTo.txt">
Cactus HDF5 HOWTO Page</a>.
<p>
Before starting to compile the modules the enviroment variable

<tt>HDF5_DIR</tt> must be set to point to your HDF5 installation
(eg. <tt>/usr/local/apps/hdf5/</tt>).
You also need to set the <tt>DXROOT</tt> environment variable to point to your OpenDX installation (eg. <tt>/usr/local/apps/dx-4.2.0/dx/</tt> so that make can find the OpenDX header files and libraries.
<br>
The Makefile already defines the proper compiler and linker options, so just by typing <tt>make</tt> in the <tt>src/</tt> subdirectory, a runtime-loadable module file called <tt>ImportHDF5</tt> should be created which contains the binary code of the HDF5 Data Import modules.

<br>
<strong>Note:</strong> The Makefile determines the compiler and linker flags to use from the underlying OpenDX installation's <tt>$DXROOT/lib_&lt;arch&gt;/arch.mak
</tt> file. The <tt>dx-4.2.0</tt> distribution of OpenDX has a bug in its installation procedure which causes the <tt>DX_RTL_LDFLAGS</tt> makefile variable not being expanded during installation. Until this bug is fixed,
the <tt>arch.mak</tt> file should be edited by hand in order to set the

<tt>DX_RTL_LDFLAGS</tt> variable properly.
For OpenDX installations built with the GNU C/C++ compilers, the corresponding line in the <tt>arch.mak</tt> file should be changed into
<pre>
  DX_RTL_LDFLAGS = --shared -Xlinker '-e DXEntry'
</pre>
You should upgrade to <tt>dx-4.3.0</tt> - in this version the above described bug has been fixed.
<p>
The OpenDXutils modules are dynamically loaded into the OpenDX server program by telling it where to find the runtime-loadable module file and the corresponding module description file.  This is done by either invoking OpenDX via:
<pre>

  dx -mdf  &lt;my_VizTools_dir&gt;/OpenDXutils/src/ImportHDF5.mdf \
     -modules  &lt;my_VizTools_dir&gt;/OpenDXutils/src            \
     [ any other options to OpenDX ]
</pre>
or, more easily, by setting the following two environment variables in your shell startup file:
<pre>
  # for csh/tcsh
  setenv DXMODULES  &lt;my_VizTools_dir&gt;/OpenDXutils/src
  setenv DXMDF      &lt;my_VizTools_dir&gt;/OpenDXutils/src/ImportHDF5.mdf

  # for bash
  DXMODULES=&lt;my_VizTools_dir&gt;/OpenDXutils/src
  DXMDF=&lt;my_VizTools_dir&gt;/OpenDXutils/src/ImportHDF5.mdf
  export DXMODULES
  export DXMDF

</pre>


<h3>Using OpenDX</h3>

Some example networks are contained in the <tt>net/</tt> subdirectory of the OpenDXutils package, demonstrating the use of the HDF5 data import modules.  Before running any of the programs please make sure that you change into this
directory because they import data from an HDF5 sample datafile located relative to that directory. 


<h3>Support and Acknowledgements</h3>

<a href=http://www.aei.mpg.de/~tradke>Thomas Radke</a> is the main author and maintainer of the OpenDXutils package. The development work has been supported by the <a href=http://www.dfn.de>Deutsches Forschungsnetz Verein</a> through the <a href=http://www.griksl.org>GriKSL project</a> under contract TK 602 - AN 200.
Various people from the Cactus team, the <a href=http://jean-luc.aei.mpg.de>Numerical Relativity Group</a> at the <a href=http://www.aei.mpg.de>Albert-Einstein-Institute</a> and Eh Tan from the <a href="http://www.geodynamics.org">Computational Infrastructure for Geodynamics</a> organization contributed to the developemnt and enhancement of the package.
              
<br>
Suggestions for the functional design and actual implementation of a general HDF5 data import module resulted from discussions on the
<a href=mailto:opendx-users@opendx.watson.ibm.com>
opendx-users@opendx.watson.ibm.com</a> mailing list.
Useful hints were taken from the
<a href=http://www-beams.colorado.edu/dxhdf5>dxhdf5</a> package developed by Ireneusz Szczesniak from the University of Colorado at Boulder.
<p>

Please report bugs and send any comments to the
<a href=mailto:tradke@aei.mpg.de>maintainer</a> of the OpenDXutils package.
<p>
The software in the OpenDXutils package is available under the GNU General Public License. In addition to the conditions in the GNU General Public License, the authors strongly suggest <strong>using this software for non-military purposes only.</strong>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
