<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Configuration Files';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<!-- 2009-01-22 Erik Schnetter: This file is currently manually
     created from information stored in the SimFactory machine
     database.  This process should be automated.  -->



<h2>Supported Architectures (With Example Systems)</h2>

<table>
  
  <tr>
    <th>Architecture</th>
    <th>Machine</th>
    <th>Location</th>
    <th>Option List</th>
    <th>Script File Template</th>
  </tr>
  
  <tr>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
    <td><a href="http://www.ncsa.uiuc.edu/UserInfo/Resources/Hardware/Intel64Cluster/">Abe</td>
    <td>NCSA</td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/abe-mvapich2">abe-mvapich2</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/abe-mvapich2">abe-mvapich2</td>
  </tr>
  
</table>

<ul>
  
  <li><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters
    <ul>
      <li><a href="http://www.ncsa.uiuc.edu/UserInfo/Resources/Hardware/Intel64Cluster/">Abe</a>
        (NCSA), <a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/abe-mvapich2">option
        list</a>, <a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/abe-mvapich2">script
        file template</a></li>
      <li><a href="http://supercomputers.aei.mpg.de/damiana">Damiana</a>
        (AEI)</li>
      <li><a href="http://www.loni.org/systems/system.php?system=Eric">Eric</a>,
        <a href="http://www.loni.org/systems/system.php?system=Louie">Louie</a>,
        <a href="http://www.loni.org/systems/system.php?system=Oliver">Oliver</a>,
        <a href="http://www.loni.org/systems/system.php?system=Poseidon">Poseidon</a>,
        <a href="http://www.loni.org/systems/system.php?system=QueenBee">Queen
          Bee</a>, <a href="http://www.hpc.lsu.edu/systems/system.php?system=Tezpur">Tezpur</a>
        (LONI/LSU)</li>
      <li><a href="http://www.tacc.utexas.edu/services/userguides/lonestar/">Lonestar</a>
        (TACC)</li>
      <li><a href="http://www.tacc.utexas.edu/services/userguides/ranger/">Ranger</a>
        (TACC)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/Cray_XT4">Cray XT4</a> (CNL)
    <ul>
      <li><a href="http://www.nersc.gov/nusers/systems/franklin/">Franklin</a>
        (NERSC)</li>
      <li><a href="http://www.nics.tennessee.edu/computing-resources/kraken">Kraken</a>
        (NICS)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/Blue_Gene">IBM Blue
      Gene/P</a> (Linux)
    <ul>
      <li><a href="http://www.alcf.anl.gov/resources/storage.php">Surveyor</a> (ALCF)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/IBM_System_p">IBM p5</a>
    (AIX)
    <ul>
      <li><a href="http://www.loni.org/systems/system.php?system=Bluedawg">Bluedawg</a>,
        <a href="http://www.loni.org/systems/system.php?system=Ducky">Ducky</a>,
        <a href="http://www.loni.org/systems/system.php?system=LaCumba">LaCumba</a>,
        <a href="http://www.loni.org/systems/system.php?system=Neptune">Neptune</a>,
        <a href="http://www.loni.org/systems/system.php?system=Zeke">Zeke</a>
        (LONI)</li>
      <li><a href="http://www.hpc.lsu.edu/systems/system.php?system=Pelican">Pelican</a>
        (LSU)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/Altix">SGI Altix</a>
    <ul>
      <li><a href="http://www.lrz-muenchen.de/services/compute/hlrb/">HLRB
          II</a> (LRZ)</li>
      <li><a href="http://www.hpc.lsu.edu/systems/system.php?system=Santaka">Santaka</a>
        (LSU)</li>
    </ul>
  </li>
  
  <li>SiCortex (Linux)
    <ul>
      <li><a href="http://sicortex.com/">SiCortex</a> (Houston)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/Linux">Linux</a>
    Laptops/Workstations
    <ul>
      <li><a href="http://www.cct.lsu.edu/">numrel02</a> (CCT, Linux
        workstation)</li>
    </ul>
  </li>
  
  <li><a href="http://en.wikipedia.org/wiki/Mac_OS_X">Mac OS X</a>
    Laptops/Workstations
    <ul>
      <li><a href="http://www.cct.lsu.edu/">Redshift</a> (CCT, Mac OS X
        laptop)</li>
    </ul>
  </li>
  
</ul>


<p>
  TODO: Missing, potentially interesting machines/architectures, in
  order of decreasing interest:
</p>

<ul>
  <li>Big Red (IBM e1350)</li>
  <li>Big Ben (Cray XT3) (but we have Cray XT4)</li>
  <li>TeraGrid Clusters at NCSA, SDSC, UC/ANL (Itanium2)</li>
  <li>Frost (IBM BlueGene/L) (but we have BlueGene/P)</li>
  <li>Pople (SGI Altix 4700) (but we have SGI Altix)</li>
  <li>Q (Mac OS X) (but we have Mac OS X already)</li>
  <li>Windows</li>
  <li>PlayStation 3</li>
  <li>XBox</li>
</ul>



<h2>Supported Compilers</h2>

<p>
  Different system architectures support various compilers.  Usually,
  each system has a preferred compiler.
</p>

<ul>
  <li><a href="http://gcc.gnu.org/">GCC</a> (gcc, g++, gfortran)</li>
  <li><a href="http://www.ibm.com/software/awdtools/xlcpp/">IBM</a>
    (xlc, xlC, xlf, xlf90)</li>
  <li><a href="www.intel.com/cd/software/products/asmo-na/eng/compilers/">Intel</a>
  (icc, icpc, ifort)</li>
  <li><a href="http://www.pathscale.com/">PathScale</a> (pathcc,
    pathCC, pathf95)</li>
  <li><a href="http://www.pgroup.com/">PGI</a> (pgcc, pgCC, pgf,
    pgf90)</li>
</ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
