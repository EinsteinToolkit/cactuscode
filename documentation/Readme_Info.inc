<!-- Do not edit this file directly. It is automatically generated.
     All changes will be overwritten. Resistance is futile. -->
<table>
<th>Thorn</th><th>Authors</th><th>Licence</th><th>Purpose</th>
 <tr><td>Cartoon2D</td><td>Sai Iyer<br>
Denis Pollney<br>
Thomas Radke<br>
David Rideout<br>
</td><td>LGPL</td><td>Implements a "cartoon" axisymmetric evolution according to the method
described in gr-qc/9908012.  The original idea for 'Cartoon2D' was due
to Steve Brandt.
</td></tr>
 <tr><td>HTTPD</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This is a prototype C version of a web server thorn.
</td></tr>
 <tr><td>HTTPDExtra</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>IOASCIIStream</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>Boundary</td><td>Gabrielle Allen<br>
Gerd Lanfermann<br>
Miguel Alcubierre<br>
David Rideout<br>
</td><td>LGPL</td><td>This thorn defines a generic interface for boundary conditions, which
allows, among other things, symmetry boundary conditions associated
with the grid to be applied without other thorns having knowledge of
them.
</td></tr>
 <tr><td>CartGrid3D</td><td>Gabrielle Allen<br>
Gerd Lanfermann<br>
Joan Masso<br>
</td><td>LGPL</td><td>This thorn sets up a Cartesian grid, for a given domain. It also
provides a method for registering symmetries of Grid Functions
across the grid axes, and a call for applying symmetry boundary
conditions.
</td></tr>
 <tr><td>CoordBase</td><td>Cactus team<br>
</td><td>LGPL</td><td>Provides generic handling of coordinates for grid variables.
</td></tr>
 <tr><td>IOASCII</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does 1D, 2D, and 3D output of 3D variables in ASCII format.
</td></tr>
 <tr><td>IOBasic</td><td>Gabrielle Allen<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn provides two I/O methods "Info" and "Scalar" which output grid
variables as scalars as a function on time.
</td></tr>
 <tr><td>IOUtil</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn is the flesh for IO - it always needs to be activated
if you want to do some IO in Cactus.
</td></tr>
 <tr><td>InitBase</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Thorn InitBase specifis how initial data are to be set up.  It does
not set up any initial data by itself, nor does it contain any
routines which are to be called.  It is merely a convenient repository
remembering how initial data are to be set up, so that other thorns
can check their actions against this thorn.
</td></tr>
 <tr><td>LocalInterp</td><td>Thomas Radke<br>
Jonathan Thornburg<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn does processor-local interpolation of N-dimensional data
arrays.  In general there may be many input arrays (all defined on the
same uniform Cartesian grid) all being interpolated to the same set
of interpolation points.
</td></tr>
 <tr><td>LocalReduce</td><td>Ravi Paruchuri<br>
Tom Goodale<br>
Yaakoub El Khamra<br>
</td><td>LGPL</td><td>Local array reduction implementation, using the new local reduction API. New features added, please refer to the thorn documentation for details and to TestLocalReduce thorn for examples of usage. 
</td></tr>
 <tr><td>MoL</td><td>Ian Hawke<br>
</td><td>LGPL</td><td>This thorn provides generic time integrators.
This allows clean coupling when multiple thorns wish to integrate at the
same time.
It also means a physics thorn doesn't have to rewrite its own time
integrator.
This version is designed to work with Mesh Refinement codes as well as
unigrid.
</td></tr>
 <tr><td>SymBase</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Provide generic handling of symmetries for grids and grid arrays.
</td></tr>
 <tr><td>Time</td><td>Gabrielle Allen<br>
</td><td>LGPL</td><td>Thorn Time sets the timestep for the simulation by either
</td></tr>
 <tr><td>BenchADM</td><td>Gabrielle Allen<br>
Authors of CactusEinstein/ADM<br>
</td><td>LGPL</td><td>This thorn provides one of the key evolution methods of the Einstein
Equations, to be used and optimised for benchmarking.
</td></tr>
 <tr><td>BenchIO</td><td>Cactus team<br>
</td><td>LGPL</td><td>This thorn provides a number of benchmarking parameter files for 
some of the standard IO methods which the Cactus Computation Toolkit
provides.
</td></tr>
 <tr><td>HTTPD</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This is a prototype C version of a web server thorn.  
</td></tr>
 <tr><td>HTTPDExtra</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn registers additional HTML pages with the web server provided by
thorn HTTPD.
</td></tr>
 <tr><td>Socket</td><td>Tom Goodale<br>
Thomas Radke<br>
John Shalf<br>
</td><td>LGPL</td><td>This thorn provides platform-independent socket calls.
</td></tr>
 <tr><td>ADM</td><td>Gabrielle Allen<br>
Bernd Bruegmann<br>
Gerd Lanfermann<br>
Joan Masso<br>
Mark Miller<br>
Paul Walker<br>
</td><td>LGPL</td><td>This thorn evolves the standard 3+1 variables using the ADM Evolution
equations.
</td></tr>
 <tr><td>ADMAnalysis</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn does basic analysis of the metric and extrinsic curvature 
tensors.
</td></tr>
 <tr><td>ADMBase</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn provides the basic variables used to communicate between
thorns doing General Relativity in the 3+1 formalism.
</td></tr>
 <tr><td>ADMConstraints</td><td>Gabrielle Allen<br>
Mark Miller<br>
</td><td>LGPL</td><td>This analysis thorn calculates the violation in the ADM constraints using 
the standard Einstein variables. 
</td></tr>
 <tr><td>ADMCoupling</td><td>Ian Hawke<br>
</td><td>LGPL</td><td>The "friend of a friend" thorn to help matter / spacetime coupling. Does nothing itself.
</td></tr>
 <tr><td>ADMMacros</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn provides nothing but a load of macros for other thorns to use
</td></tr>
 <tr><td>AHFinder</td><td>Miguel Alcubierre<br>
</td><td>LGPL</td><td>This thorn looks for apparent horizons (AH) in 3D.  An AH is defined
as a surface where the expansion of outgoing null geodesics is zero.
</td></tr>
 <tr><td>CoordGauge</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>Base thorn to provide the infrastructure for dynamic gauge selection.
</td></tr>
 <tr><td>Einstein</td><td>Cactus team<br>
</td><td>LGPL</td><td>Thorn Einstein is now defunct and has been replaced with ADMBase plus
other thorns:
CactusEinstein/ADMAnalysis
CactusEinstein/ADMBase
CactusEinstein/ADMMacros
CactusEinstein/CoordGauge
CactusEinstein/IDSimple
CactusEinstein/SpaceMask
CactusEinstein/StaticConformal
</td></tr>
 <tr><td>EvolSimple</td><td>unknown<br>
</td><td>LGPL</td><td>Simplistic evolver for the ADM equations, demonstrating the use of
the CactusEinstein arrangement.
</td></tr>
 <tr><td>Extract</td><td>Gabrielle Allen<br>
</td><td>LGPL</td><td>Calculate gauge invariant waveforms, using the Moncrief formalism,
for cases when the spacetime approximates spherical symmetry.
</td></tr>
 <tr><td>IDAnalyticBH</td><td>Steve Brandt<br>
Carsten Gundlach<br>
Joan Masso<br>
Ed Seidel<br>
Paul Walker<br>
</td><td>LGPL</td><td>This thorn calculates analytic initial data for the Einstein grid functions
(lapse, shift, metric, curv) for various black hole spacetimes:
</td></tr>
 <tr><td>IDAxiBrillBH</td><td>Steve Brandt<br>
Paul Walker<br>
Ryoji Takahashi<br>
</td><td>LGPL</td><td>This thorn calculates initial data for a black hole distorted by an
even parity perturbation.
</td></tr>
 <tr><td>IDBrillData</td><td>Carsten Gundlach<br>
Miguel Alcubierre<br>
</td><td>LGPL</td><td>Initializes Brill wave data.
</td></tr>
 <tr><td>IDLinearWaves</td><td>Malcolm Tobias<br>
Joan Masso<br>
</td><td>LGPL</td><td>Provides analytic data for linear gravitational waves.
</td></tr>
 <tr><td>IDSimple</td><td>Cactus team<br>
</td><td>LGPL</td><td>Simple initial data sets for 3-metric and extrinsic curvature.
</td></tr>
 <tr><td>Maximal</td><td>unknown<br>
</td><td>LGPL</td><td>This thorn setus up the maximal slicing equation (dtrK/dt=0):
</td></tr>
 <tr><td>PsiKadelia</td><td>Steve Brandt<br>
John Baker<br>
Hisaaki Shinkai<br>
Paul Walker<br>
</td><td>LGPL</td><td>This thorn provides a somewhat invariant means of measuring "waves" and 
other geometrical content in a numerically generated spacetime. 
</td></tr>
 <tr><td>SpaceMask</td><td>Denis Pollney<br>
</td><td>LGPL</td><td>Provides utilities for assigning states to individual grid points
using a mask grid function.
</td></tr>
 <tr><td>StaticConformal</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn provides the variables defining a static conformal factor
which is used to transform the physical metric.  If this thorn is
active and the ADMBase::metric_type parameter is set to
`static conformal' then the ADMBase::g... variables are the
conformal values as opposed to the physical values.
</td></tr>
 <tr><td>TimeGeodesic</td><td>Miguel Alcubierre<br>
Florian Siebel<br>
</td><td>LGPL</td><td>This thorn integrates timelike geodesics.  The integration is
done `on the fly', that is, at the same time as the evolution
of the spacetime is being calculated.  The thorn can calculate
geodesics either on the numerical spacetime, or on an exact
spacetime (given by thorn Exact).
</td></tr>
 <tr><td>EllBase</td><td>unknown<br>
</td><td>LGPL</td><td>This thorn does ...
</td></tr>
 <tr><td>EllPETSc</td><td>Cactus team<br>
</td><td>LGPL</td><td>This thorn shows how PETSc can be used with the EllBase Elliptic 
solver interface. 
</td></tr>
 <tr><td>EllSOR</td><td>Cactus team<br>
</td><td>LGPL</td><td>This thorn provides basic elliptic solvers for different equation types 
using SOR iterative methods. The thorn is written to be robust and 
pedagogical rather that a viable fast solver.
</td></tr>
 <tr><td>DemoInterp</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn demonstrates the use of the Cactus interpolation API.
</td></tr>
 <tr><td>FleshInfo</td><td>Cactus team<br>
</td><td>LGPL</td><td>Demonstrates obtaining information about computational infrastructure
from the flesh.
</td></tr>
 <tr><td>HelloWorld</td><td>Cactus team<br>
</td><td>LGPL</td><td>Hello World example for Cactus, possibly the simplest thorn ever.
</td></tr>
 <tr><td>IDWaveMoL</td><td>Ian Hawke<br>
</td><td>LGPL</td><td>Provides initial data for the WaveMoL thorn.
</td></tr>
 <tr><td>SampleBoundary</td><td>Carsten Gundlach<br>
David Rideout<br>
</td><td>LGPL</td><td>This thorn provides a simple example of how to create and register a
physical boundary condition.  It implements a linear extrapolation
boundary condition in three dimensions.  
</td></tr>
 <tr><td>SampleIO</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn provides a very simple I/O method which prints the values of
three-dimensional Cactus grid functions and arrays at a chosen location
(selected by parameters) to screen.
</td></tr>
 <tr><td>TimerInfo</td><td>Cactus team<br>
</td><td>LGPL</td><td>At the moment just prints out the value of all timers at chosen
iteration intervals. Will be worked into a more useful thorn to 
report of different kinds of timing information in different ways
</td></tr>
 <tr><td>WaveMoL</td><td>Ian Hawke<br>
</td><td>LGPL</td><td>This implements the wave equation in FOSH form for use with the Method
of Lines thorn. Intended as a basic test. 
</td></tr>
 <tr><td>WaveToy1DF77</td><td>Gabrielle Allen<br>
</td><td>LGPL</td><td>This thorn illustrates the solution of the scalar wave equation in 1D using
centered explicit finite differencing. Included are routines to
</td></tr>
 <tr><td>WaveToy2DF77</td><td>Gabrielle Allen<br>
</td><td>LGPL</td><td>This thorn illustrates the solution of the scalar wave equation in 2D using
centered explicit finite differencing. Included are routines to
NOTE: This thorn isn't working properly yet for multiple processors, it 
      will be fixed very soon in the development version.
</td></tr>
 <tr><td>BLAS</td><td>Yaakoub Y El-Khamra<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn enables a configuration to access the BLAS library.
</td></tr>
 <tr><td>FFTWlib</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn enables a configuration to access the FFTW library.
</td></tr>
 <tr><td>FlexIO</td><td>John Shalf<br>
</td><td>LGPL</td><td>Thorn FlexIO provides a library for writing multidimensional data from 
Cactus using the IEEEIO data format. The advantage of using this library
is that it is distributed with Cactus and needs no additional libraries
to be installed on a machine.
</td></tr>
 <tr><td>GSL</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Make the GSL (GNU Scientific Library) available to Cactus thorns.
See http://www.gnu.org/software/gsl.
</td></tr>
 <tr><td>HDF5</td><td>Yaakoub Y El-Khamra<br>
</td><td>LGPL</td><td>This thorn provides a capability 'HDF5' and some utility programs
to manipulate HDF5 files (independently of any Carpet or PUGH specifics).
</td></tr>
 <tr><td>LAPACK</td><td>Yaakoub Y El-Khamra<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn enables a configuration to access the LAPACK library.
</td></tr>
 <tr><td>LORENE</td><td>Yaakoub Y El-Khamra<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn enables a configuration to access the LORENE library.
</td></tr>
 <tr><td>PETSc</td><td>Yaakoub Y El-Khamra<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn adds PETSc capability to a configuration.
</td></tr>
 <tr><td>SDF</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorns checks for an external SDF installation and, if one was found,
provides the capability SDF.
</td></tr>
 <tr><td>jpeg6b</td><td>The Independent JPEG Group<br>
</td><td>LGPL</td><td>This thorn contains a copy of the Independent JPEG Group's JPEG software
of release 6b of 27-Mar-1998. See further details in the file src/README.
</td></tr>
 <tr><td>IOJpeg</td><td>John Shalf<br>
Gabrielle Allen<br>
Tom Goodale<br>
Gerd Lanfermann<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does output of 2D slices from Cactus grid functions and arrays
in jpeg image format.
</td></tr>
 <tr><td>IOSDF</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does 1D, 2D, and 3D output of grid variables in SDF file format.
</td></tr>
 <tr><td>PUGH</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
Matei Ripeanu<br>
Paul Walker<br>
</td><td>LGPL</td><td>This thorn provides a unigrid parallel driver with MPI.
</td></tr>
 <tr><td>PUGHInterp</td><td>Paul Walker<br>
Thomas Radke<br>
</td><td>LGPL</td><td>   This thorn implements the Cactus flesh interpolation API routine
   CCTK_InterpGridArrays() which provides interpolation of CCTK grid
   arrays at arbitrary points.
</td></tr>
 <tr><td>PUGHReduce</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>Standard reduction operators which use PUGH for communications
</td></tr>
 <tr><td>PUGHSlab</td><td>Gabrielle Allen<br>
Tom Goodale<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn implements the following parts of the CCTK hyperslab API:
</td></tr>
 <tr><td>IOFlexIO</td><td>John Shalf<br>
Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does output of arbitrary Cactus variables in IEEEIO file format.
</td></tr>
 <tr><td>IOHDF5</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does output of arbitrary Cactus variables in HDF5 file format.
</td></tr>
 <tr><td>IOHDF5Util</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn serves as a utility thorn for other HDF5 I/O thorns such as
IOStreamedHDF5 and IOHDF5.
</td></tr>
 <tr><td>IOPanda</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn does output of 3D variables in IEEEIO format.
It uses the I/O library Panda for writing files in parallel.
</td></tr>
 <tr><td>IOStreamedHDF5</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn uses the HDF5 Stream Virtual File Driver to stream HDF5 data and
checkpoint files via live sockets to any connected clients.
</td></tr>
 <tr><td>IsoSurfacer</td><td>John Shalf<br>
</td><td>LGPL</td><td>This thorn extracts isosurfaces of grid functions.
</td></tr>
 <tr><td>TestAllTypes</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Test all the variable types.
</td></tr>
 <tr><td>TestArrays</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestComplex</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestCoordinates</td><td>Gabrielle Allen<br>
</td><td>LGPL</td><td>Test the Cactus coordinate infrastructure.
</td></tr>
 <tr><td>TestFortranDependencies1</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Test Fortran intra-thorn and inter-thorn make dependencies.  This
thorn contains the intra-thorn dependencies, and depends on the thorn
TestFortranDependencies2.
</td></tr>
 <tr><td>TestFortranDependencies2</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Test Fortran intra-thorn and inter-thorn make dependencies.  Thorn
TestFortranDependencies1 depends on this thorn.
</td></tr>
 <tr><td>TestFpointerNULL</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn tests whether a Fortran routine accepts a NULL pointer reference
as a function argument when called from a C function. The code should not crash
as long as the NULL pointer argument isn't dereferenced.
</td></tr>
 <tr><td>TestFreeF90</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Test automatic line breaks in free-form Fortran 90 code.
</td></tr>
 <tr><td>TestGlobalReduce</td><td>Yaakoub Y El Khamra<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestInclude1</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestInclude2</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestLocalReduce</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestReduce</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>TestSchedule</td><td>Rion Dooley<br>
</td><td>LGPL</td><td>This thorn is used to test that all schedule bins are executed.
</td></tr>
 <tr><td>TestStrings</td><td>Cactus team<br>
</td><td>LGPL</td><td>Test use of strings in Cactus. At the moment:
</td></tr>
 <tr><td>TestTable</td><td>Jonathan Thornburg<br>
</td><td>LGPL</td><td>This thorn contains a test driver for the Cactus key/value tables
API, Util_Table*().
</td></tr>
 <tr><td>TestTimers</td><td>Cactus team<br>
</td><td>LGPL</td><td>This thorn demonstrates and tests the use of Timers in thorns.
</td></tr>
 <tr><td>TestTypes</td><td>Erik Schnetter<br>
</td><td>LGPL</td><td>Test most of the variable types.
</td></tr>
 <tr><td>NaNChecker</td><td>Thomas Radke<br>
</td><td>LGPL</td><td>This thorn can be used to analyze CCTK variables of real or complex data type
for NaN (Not-a-Number) and (on availability of finite(3)) infinite values.
</td></tr>
 <tr><td>TimerReport</td><td>Cactus team<br>
</td><td>LGPL</td><td>Simplistic additional timer information.  This thorn provides timer
details to screen at different iterations and before checkpoints
depending on parameter settings.
</td></tr>
 <tr><td>IDScalarWave</td><td>Tom Goodale<br>
Gabrielle Allen<br>
</td><td>LGPL</td><td>This thorns sets initial data for the scalar wave equation evolver
</td></tr>
 <tr><td>IDScalarWaveC</td><td>Tom Goodale<br>
Gabrielle Allen<br>
Werner Benger<br>
</td><td>LGPL</td><td>This thorn sets initial data for the scalar wave equation evolver.
</td></tr>
 <tr><td>IDScalarWaveCXX</td><td>Tom Goodale<br>
Gabrielle Allen<br>
Werner Benger<br>
</td><td>LGPL</td><td>This thorns sets initial data for the scalar wave equation evolver
</td></tr>
 <tr><td>IDScalarWaveElliptic</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>WaveBinarySource</td><td>Gerd Lanfermann<br>
</td><td>LGPL</td><td>Provides a source term to the scalar field evolution
for two rotating binary charges.
</td></tr>
 <tr><td>WaveToyC</td><td>Gabrielle Allen<br>
Tom Goodale<br>
</td><td>LGPL</td><td>This thorn solves the linear wave equation.
</td></tr>
 <tr><td>WaveToyCXX</td><td>unknown<br>
</td><td>LGPL</td><td>not documented
</td></tr>
 <tr><td>WaveToyExtra</td><td>Cactus team<br>
</td><td>LGPL</td><td>Additional functionality for the WaveToy example
</td></tr>
 <tr><td>WaveToyF77</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn solves the linear wave equation
</td></tr>
 <tr><td>WaveToyF90</td><td>Tom Goodale<br>
</td><td>LGPL</td><td>This thorn solves the linear wave equation
</td></tr>
 <tr><td>WaveToyFreeF90</td><td>Tom Goodale<br>
Erik Schnetter<br>
</td><td>LGPL</td><td>This thorn solves the linear wave equation, using free form (as
opposed to fixed form) Fortran 90.
</td></tr>
</table>