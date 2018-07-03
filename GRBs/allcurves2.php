<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head> 
    <title>UKSSDC | All Swift-XRT light curves</title>
    <meta name="keywords" content="Swift, GRB, XRT, light curve"/>
    <meta name="description" lang="en" content="UKSSDC | All Swift-XRT light curves"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv='Content-Style-Type' content='text/css'/>
    <meta http-equiv='Content-Script-Type' content='text/javascript'/>
    <link href="/style/autoproc_xrt_curves.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/scripts/dropdown.js"></script>
    <link rel="icon" href="/icons/swift.ico" type="image/x-icon"/>

  <style type='text/css'>
  <!--
  #holder {width: 1080px;}
  -->
  </style>
    </head>

  <body>
    <div id="holder">
    <p style='visibility: hidden; display: none;'><a href='#mainContentPostBanner'>Skip banner and navigation tools</a>.</p>
  <div id="swiftbanner">
    <div id="uolbanner">
      <a href="http://www.le.ac.uk">
      <img class="uollogo" src="/images/uol_logo.png"
         alt="University of Leicester logo"/></a>
      <a href="http://www2.le.ac.uk/departments/physics/">Dept. of Physics &amp; Astronomy</a>
      <br/>
      <a href="http://www2.le.ac.uk/departments/physics/research/xroa">XROA</a>
      <br/>
    </div>

    <a href="http://swift.gsfc.nasa.gov" id="us"><span class="hidden">US Site | </span></a>
    <a href="http://swift.asdc.asi.it/" id="it"><span class="hidden">Italian Site | </span></a>
    <a href="/" id="uk" ><span class="hidden">UK site</span></a>
  </div>

  <div id="addressBar">
      <form class="right search" action="/search/search.php:NOSSL" method="get">
      <p>
          <label for="searchBox">Search:</label> 
          <input id="searchBox" type="text" name="terms"  
	         value=""/>
          <input type="submit" name="submit" value="?"/>
      </p>
      </form>
      <span class="right">&nbsp;|&nbsp;</span>
      <a class="right" href="/sitemap.php:NOSSL">site map</a>
  <ul>
    <li>
      <a href="/index.php">Home</a>
    </li>

    <li>
      <a href="/about/index.php" 
        onmouseover="menu_open('mabout')" 
        onmouseout="menu_closetime()">About</a>
        <div id="mabout" 
            onmouseover="menu_cancelclosetime()" 
            onmouseout="menu_closetime()">
        <a href="/about/index.php">The Swift Mission</a>
        <a href="/about/uk.php">UK involvement</a>
        <a href="/about/instruments.php">Instruments</a>
        <hr/>
        <a href="/about/grb.php">GRBs before Swift </a>
        <a href="/about/swiftera.php">GRBs in the Swift era</a>
        <a href="/about/swifteranongrb.php">Non-GRB science with Swift</a>
        <a href="/about/research.php">GRB research at Leicester</a>
        
        <hr/>
        <a href="/about/status.php">Spacecraft status</a>
        <a href="/about/press.php">Swift in the press</a>
        <a href="/about/videos.php">Swift Videos</a>
        </div>
    </li>

   
    <li>
      <a href="/support/index.php"
        onmouseover="menu_open('msupport')"
        onmouseout="menu_closetime()">Support</a>

      <div id="msupport"
          onmouseover="menu_cancelclosetime()"
          onmouseout="menu_closetime()">
      <a href="/support/index.php">Helpdesk</a>
      <a href="/support/too.php">TOO requests</a>
      <a href="/support/gi.php">Guest Investigator program</a>
      <a href="/sunpos.php">Target visibility checker</a>
      <a href="/support/transientSearch">Search transient database</a>
      </div>
    </li>

 
    <li>
      <a href="/archive/index.php" 
        onmouseover="menu_open('marchive')" 
        onmouseout="menu_closetime()">Data Access</a>

      <div id="marchive" 
          onmouseover="menu_cancelclosetime()" 
          onmouseout="menu_closetime()">
      <a href="/archive/index.php">Overview</a>
      <a href="/archive/ql.php">Quick Look</a>
      <a href="/gcn/index.php">GCN Notices</a>
      <a href="/swift_portal">Download obs data</a>
      <a href="/swift_live">Search obs catalogue</a>
      <a href="/1SXPS">The 1SXPS catalogue</a>
      </div>
    </li>
    
    
    <li>
      <a href="/analysis/index.php" 
        onmouseover="menu_open('manal')" 
        onmouseout="menu_closetime()">Data Analysis</a>

      <div id="manal" 
          onmouseover="menu_cancelclosetime()" 
          onmouseout="menu_closetime()">
      <a href="/analysis/index.php">Data analysis overview</a>
      <a href="/analysis/software.php">Swift software</a>
      <hr/>
      <a href="/user_objects/">Build XRT products</a>
      <hr/>
      <a href="/analysis/bat/index.php">BAT data analysis guide</a>
      <a href="/analysis/xrt/index.php">XRT data analysis guide</a>
      <a href="/analysis/xrt/digest_sci.php">XRT digest</a>
      <a href="/analysis/uvot/index.php">UVOT data analysis guide</a>
      </div>
    </li>
    
    

    <li>
      <a href="/xrt_products/index.php" 
        onmouseover="menu_open('mproducts')" 
        onmouseout="menu_closetime()">GRB Products</a>

      <div id="mproducts" 
          onmouseover="menu_cancelclosetime()" 
          onmouseout="menu_closetime()">

        Full dataset
        <a href="/xrt_products/index.php">Swift XRT products for GRBs</a>
        <a href="/xrt_positions/">XRT positions</a>
        <a href="/xrt_curves/">XRT light curves</a>
        <a href="/xrt_spectra/">XRT spectra</a>
        <a href="/xrt_live_cat/">XRT GRB catalogue</a>
        <a href="/xrt_images/">XRT GRB images</a>
        <a title="Burst Analyser index page" href="/burst_analyser/">Burst analyser</a>
 
        Prompt dataset
        <a href="/grb_region/">GRB field info</a>
        <a title="X-ray Prompt data index page" href="/sper/">XRT prompt analysis</a>      </div>
    </li>

    <li>
      <a href="/results/index.php" 
        onmouseover="menu_open('mresults')" 
        onmouseout="menu_closetime()">Publications</a>

       <div id="mresults" 
          onmouseover="menu_cancelclosetime()" 
          onmouseout="menu_closetime()">
        <a href="/results/index.php">Publication index</a>
        <a href="/results/pub.php">Published papers</a>
        <a href="/results/sub.php">Submitted papers</a>
        <a href="/results/spie.php">XRT instrument papers</a>
        <a href="/results/atels.php">ATELs</a>
        <a href="/results/grbs.php">GCNs</a>
        <a href="/results/conferences.php">Conferences</a>
      </div>
    </li>

    <li>
      <a href="/links.php" 
        onmouseover="menu_open('mlinks')" 
        onmouseout="menu_closetime()">Links</a>

      <div id="mlinks" 
          onmouseover="menu_cancelclosetime()" 
          onmouseout="menu_closetime()">
      
            Databases
	    <a href="http://nedwww.ipac.caltech.edu/">NED</a>
	    <a href="http://simbad.u-strasbg.fr/Simbad">Simbad</a>
            <a href="http://gcn.gsfc.nasa.gov/gcn3_archive.html">GCN circulars archive</a>
            <a href="http://swift.gsfc.nasa.gov/docs/swift/archive/grb_table/">GRB data table</a>
	    Software &amp; Tools
	    <a href="http://heasarc.nasa.gov/lheasoft/">Swift Software (HEASoft)</a>
            <a href="http://swift.gsfc.nasa.gov/docs/xanadu/xanadu.html">Xanadu</a>
            <a href="http://heasarc.gsfc.nasa.gov/Tools/w3pimms.html">WebPIMMS</a>
	    Institutional Swift Sites
	    <a href="http://swift.gsfc.nasa.gov">GSFC</a>
	    <a href="http://www.swift.psu.edu">PSU</a>
	    <a href="http://www.brera.inaf.it/docM/OAB/Research/SWIFT/">OAB</a>
	    <a href="http://www.asdc.asi.it/">ASDC</a>
	    <a href="http://www.mssl.ucl.ac.uk/www_astro/uvot/">MSSL</a>
	    <a href="http://www2.le.ac.uk/">University of Leicester</a>
            <a href="http://www.src.le.ac.uk/projects/swift/">Leicester Space Research Centre</a>
      </div>
    </li>
  </ul>  <br id='mainContentPostBanner' style='visibility: hidden; display: none;'/>
  </div>
  

    <h1>All Swift-XRT light curves</h1>



    <table id='allgrb' style="margin: auto;" summary="Images of all Swift-XRT light curves of GRBs" cellpadding="0" cellspacing="10" border="1">
    

  <tr>
  
<td><p class='grb'>Fermi Trigger 430148973</p><a href='/xrt_curves/00020413/'><img src='/xrt_curves/00020413/thumb2.gif' alt='XRT Light curve of Fermi Trigger 430148973'/></a></td>
<td><p class='grb'>GRB 041218</p><a href='/xrt_curves/00020001/'><img src='/xrt_curves/00020001/thumb2.gif' alt='XRT Light curve of GRB 041218'/></a></td>
<td><p class='grb'>GRB 041223</p><a href='/xrt_curves/00100585/'><img src='/xrt_curves/00100585/thumb2.gif' alt='XRT Light curve of GRB 041223'/></a></td>
<td><p class='grb'>GRB 050124</p><a href='/xrt_curves/00103647/'><img src='/xrt_curves/00103647/thumb2.gif' alt='XRT Light curve of GRB 050124'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050126</p><a href='/xrt_curves/00103780/'><img src='/xrt_curves/00103780/thumb2.gif' alt='XRT Light curve of GRB 050126'/></a></td>
<td><p class='grb'>GRB 050128</p><a href='/xrt_curves/00103906/'><img src='/xrt_curves/00103906/thumb2.gif' alt='XRT Light curve of GRB 050128'/></a></td>
<td><p class='grb'>GRB 050215B</p><a href='/xrt_curves/00106107/'><img src='/xrt_curves/00106107/thumb2.gif' alt='XRT Light curve of GRB 050215B'/></a></td>
<td><p class='grb'>GRB 050219A</p><a href='/xrt_curves/00106415/'><img src='/xrt_curves/00106415/thumb2.gif' alt='XRT Light curve of GRB 050219A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050219B</p><a href='/xrt_curves/00106442/'><img src='/xrt_curves/00106442/thumb2.gif' alt='XRT Light curve of GRB 050219B'/></a></td>
<td><p class='grb'>GRB 050223</p><a href='/xrt_curves/00106709/'><img src='/xrt_curves/00106709/thumb2.gif' alt='XRT Light curve of GRB 050223'/></a></td>
<td><p class='grb'>GRB 050315</p><a href='/xrt_curves/00111063/'><img src='/xrt_curves/00111063/thumb2.gif' alt='XRT Light curve of GRB 050315'/></a></td>
<td><p class='grb'>GRB 050318</p><a href='/xrt_curves/00111529/'><img src='/xrt_curves/00111529/thumb2.gif' alt='XRT Light curve of GRB 050318'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050319</p><a href='/xrt_curves/00111622/'><img src='/xrt_curves/00111622/thumb2.gif' alt='XRT Light curve of GRB 050319'/></a></td>
<td><p class='grb'>GRB 050326</p><a href='/xrt_curves/00112453/'><img src='/xrt_curves/00112453/thumb2.gif' alt='XRT Light curve of GRB 050326'/></a></td>
<td><p class='grb'>GRB 050401</p><a href='/xrt_curves/00113120/'><img src='/xrt_curves/00113120/thumb2.gif' alt='XRT Light curve of GRB 050401'/></a></td>
<td><p class='grb'>GRB 050406</p><a href='/xrt_curves/00113872/'><img src='/xrt_curves/00113872/thumb2.gif' alt='XRT Light curve of GRB 050406'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050408</p><a href='/xrt_curves/00020004/'><img src='/xrt_curves/00020004/thumb2.gif' alt='XRT Light curve of GRB 050408'/></a></td>
<td><p class='grb'>GRB 050410</p><a href='/xrt_curves/00114299/'><img src='/xrt_curves/00114299/thumb2.gif' alt='XRT Light curve of GRB 050410'/></a></td>
<td><p class='grb'>GRB 050412</p><a href='/xrt_curves/00114485/'><img src='/xrt_curves/00114485/thumb2.gif' alt='XRT Light curve of GRB 050412'/></a></td>
<td><p class='grb'>GRB 050416A</p><a href='/xrt_curves/00114753/'><img src='/xrt_curves/00114753/thumb2.gif' alt='XRT Light curve of GRB 050416A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050421</p><a href='/xrt_curves/00115135/'><img src='/xrt_curves/00115135/thumb2.gif' alt='XRT Light curve of GRB 050421'/></a></td>
<td><p class='grb'>GRB 050422</p><a href='/xrt_curves/00115214/'><img src='/xrt_curves/00115214/thumb2.gif' alt='XRT Light curve of GRB 050422'/></a></td>
<td><p class='grb'>GRB 050502B</p><a href='/xrt_curves/00116116/'><img src='/xrt_curves/00116116/thumb2.gif' alt='XRT Light curve of GRB 050502B'/></a></td>
<td><p class='grb'>GRB 050504</p><a href='/xrt_curves/00020006/'><img src='/xrt_curves/00020006/thumb2.gif' alt='XRT Light curve of GRB 050504'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050505</p><a href='/xrt_curves/00117504/'><img src='/xrt_curves/00117504/thumb2.gif' alt='XRT Light curve of GRB 050505'/></a></td>
<td><p class='grb'>GRB 050509A</p><a href='/xrt_curves/00118707/'><img src='/xrt_curves/00118707/thumb2.gif' alt='XRT Light curve of GRB 050509A'/></a></td>
<td><p class='grb'>GRB 050509B</p><a href='/xrt_curves/00118749/'><img src='/xrt_curves/00118749/thumb2.gif' alt='XRT Light curve of GRB 050509B'/></a></td>
<td><p class='grb'>GRB 050520</p><a href='/xrt_curves/00020010/'><img src='/xrt_curves/00020010/thumb2.gif' alt='XRT Light curve of GRB 050520'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050525A</p><a href='/xrt_curves/00130088/'><img src='/xrt_curves/00130088/thumb2.gif' alt='XRT Light curve of GRB 050525A'/></a></td>
<td><p class='grb'>GRB 050603</p><a href='/xrt_curves/00131560/'><img src='/xrt_curves/00131560/thumb2.gif' alt='XRT Light curve of GRB 050603'/></a></td>
<td><p class='grb'>GRB 050607</p><a href='/xrt_curves/00132247/'><img src='/xrt_curves/00132247/thumb2.gif' alt='XRT Light curve of GRB 050607'/></a></td>
<td><p class='grb'>GRB 050701</p><a href='/xrt_curves/00143708/'><img src='/xrt_curves/00143708/thumb2.gif' alt='XRT Light curve of GRB 050701'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050712</p><a href='/xrt_curves/00145581/'><img src='/xrt_curves/00145581/thumb2.gif' alt='XRT Light curve of GRB 050712'/></a></td>
<td><p class='grb'>GRB 050713A</p><a href='/xrt_curves/00145675/'><img src='/xrt_curves/00145675/thumb2.gif' alt='XRT Light curve of GRB 050713A'/></a></td>
<td><p class='grb'>GRB 050713B</p><a href='/xrt_curves/00145754/'><img src='/xrt_curves/00145754/thumb2.gif' alt='XRT Light curve of GRB 050713B'/></a></td>
<td><p class='grb'>GRB 050714</p><a href='/xrt_curves/00020014/'><img src='/xrt_curves/00020014/thumb2.gif' alt='XRT Light curve of GRB 050714'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050714B</p><a href='/xrt_curves/00145994/'><img src='/xrt_curves/00145994/thumb2.gif' alt='XRT Light curve of GRB 050714B'/></a></td>
<td><p class='grb'>GRB 050716</p><a href='/xrt_curves/00146227/'><img src='/xrt_curves/00146227/thumb2.gif' alt='XRT Light curve of GRB 050716'/></a></td>
<td><p class='grb'>GRB 050717</p><a href='/xrt_curves/00146372/'><img src='/xrt_curves/00146372/thumb2.gif' alt='XRT Light curve of GRB 050717'/></a></td>
<td><p class='grb'>GRB 050721</p><a href='/xrt_curves/00146970/'><img src='/xrt_curves/00146970/thumb2.gif' alt='XRT Light curve of GRB 050721'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050724</p><a href='/xrt_curves/00147478/'><img src='/xrt_curves/00147478/thumb2.gif' alt='XRT Light curve of GRB 050724'/></a></td>
<td><p class='grb'>GRB 050726</p><a href='/xrt_curves/00147788/'><img src='/xrt_curves/00147788/thumb2.gif' alt='XRT Light curve of GRB 050726'/></a></td>
<td><p class='grb'>GRB 050730</p><a href='/xrt_curves/00148225/'><img src='/xrt_curves/00148225/thumb2.gif' alt='XRT Light curve of GRB 050730'/></a></td>
<td><p class='grb'>GRB 050801</p><a href='/xrt_curves/00148522/'><img src='/xrt_curves/00148522/thumb2.gif' alt='XRT Light curve of GRB 050801'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050802</p><a href='/xrt_curves/00148646/'><img src='/xrt_curves/00148646/thumb2.gif' alt='XRT Light curve of GRB 050802'/></a></td>
<td><p class='grb'>GRB 050803</p><a href='/xrt_curves/00148833/'><img src='/xrt_curves/00148833/thumb2.gif' alt='XRT Light curve of GRB 050803'/></a></td>
<td><p class='grb'>GRB 050813</p><a href='/xrt_curves/00150139/'><img src='/xrt_curves/00150139/thumb2.gif' alt='XRT Light curve of GRB 050813'/></a></td>
<td><p class='grb'>GRB 050814</p><a href='/xrt_curves/00150314/'><img src='/xrt_curves/00150314/thumb2.gif' alt='XRT Light curve of GRB 050814'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050815</p><a href='/xrt_curves/00150532/'><img src='/xrt_curves/00150532/thumb2.gif' alt='XRT Light curve of GRB 050815'/></a></td>
<td><p class='grb'>GRB 050819</p><a href='/xrt_curves/00151131/'><img src='/xrt_curves/00151131/thumb2.gif' alt='XRT Light curve of GRB 050819'/></a></td>
<td><p class='grb'>GRB 050820A</p><a href='/xrt_curves/00151207/'><img src='/xrt_curves/00151207/thumb2.gif' alt='XRT Light curve of GRB 050820A'/></a></td>
<td><p class='grb'>GRB 050820B</p><a href='/xrt_curves/00151334/'><img src='/xrt_curves/00151334/thumb2.gif' alt='XRT Light curve of GRB 050820B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050822</p><a href='/xrt_curves/00151486/'><img src='/xrt_curves/00151486/thumb2.gif' alt='XRT Light curve of GRB 050822'/></a></td>
<td><p class='grb'>GRB 050824</p><a href='/xrt_curves/00151905/'><img src='/xrt_curves/00151905/thumb2.gif' alt='XRT Light curve of GRB 050824'/></a></td>
<td><p class='grb'>GRB 050826</p><a href='/xrt_curves/00152113/'><img src='/xrt_curves/00152113/thumb2.gif' alt='XRT Light curve of GRB 050826'/></a></td>
<td><p class='grb'>GRB 050827</p><a href='/xrt_curves/00152325/'><img src='/xrt_curves/00152325/thumb2.gif' alt='XRT Light curve of GRB 050827'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050904</p><a href='/xrt_curves/00153514/'><img src='/xrt_curves/00153514/thumb2.gif' alt='XRT Light curve of GRB 050904'/></a></td>
<td><p class='grb'>GRB 050908</p><a href='/xrt_curves/00154112/'><img src='/xrt_curves/00154112/thumb2.gif' alt='XRT Light curve of GRB 050908'/></a></td>
<td><p class='grb'>GRB 050915A</p><a href='/xrt_curves/00155242/'><img src='/xrt_curves/00155242/thumb2.gif' alt='XRT Light curve of GRB 050915A'/></a></td>
<td><p class='grb'>GRB 050915B</p><a href='/xrt_curves/00155284/'><img src='/xrt_curves/00155284/thumb2.gif' alt='XRT Light curve of GRB 050915B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 050916</p><a href='/xrt_curves/00155408/'><img src='/xrt_curves/00155408/thumb2.gif' alt='XRT Light curve of GRB 050916'/></a></td>
<td><p class='grb'>GRB 050922B</p><a href='/xrt_curves/00156434/'><img src='/xrt_curves/00156434/thumb2.gif' alt='XRT Light curve of GRB 050922B'/></a></td>
<td><p class='grb'>GRB 050922C</p><a href='/xrt_curves/00156467/'><img src='/xrt_curves/00156467/thumb2.gif' alt='XRT Light curve of GRB 050922C'/></a></td>
<td><p class='grb'>GRB 051001</p><a href='/xrt_curves/00157870/'><img src='/xrt_curves/00157870/thumb2.gif' alt='XRT Light curve of GRB 051001'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 051006</p><a href='/xrt_curves/00158593/'><img src='/xrt_curves/00158593/thumb2.gif' alt='XRT Light curve of GRB 051006'/></a></td>
<td><p class='grb'>GRB 051008</p><a href='/xrt_curves/00158855/'><img src='/xrt_curves/00158855/thumb2.gif' alt='XRT Light curve of GRB 051008'/></a></td>
<td><p class='grb'>GRB 051012</p><a href='/xrt_curves/00020017/'><img src='/xrt_curves/00020017/thumb2.gif' alt='XRT Light curve of GRB 051012'/></a></td>
<td><p class='grb'>GRB 051016A</p><a href='/xrt_curves/00159913/'><img src='/xrt_curves/00159913/thumb2.gif' alt='XRT Light curve of GRB 051016A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 051016B</p><a href='/xrt_curves/00159994/'><img src='/xrt_curves/00159994/thumb2.gif' alt='XRT Light curve of GRB 051016B'/></a></td>
<td><p class='grb'>GRB 051021A</p><a href='/xrt_curves/00020018/'><img src='/xrt_curves/00020018/thumb2.gif' alt='XRT Light curve of GRB 051021A'/></a></td>
<td><p class='grb'>GRB 051021B</p><a href='/xrt_curves/00160672/'><img src='/xrt_curves/00160672/thumb2.gif' alt='XRT Light curve of GRB 051021B'/></a></td>
<td><p class='grb'>GRB 051022</p><a href='/xrt_curves/00020019/'><img src='/xrt_curves/00020019/thumb2.gif' alt='XRT Light curve of GRB 051022'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 051028</p><a href='/xrt_curves/00020020/'><img src='/xrt_curves/00020020/thumb2.gif' alt='XRT Light curve of GRB 051028'/></a></td>
<td><p class='grb'>GRB 051109A</p><a href='/xrt_curves/00163136/'><img src='/xrt_curves/00163136/thumb2.gif' alt='XRT Light curve of GRB 051109A'/></a></td>
<td><p class='grb'>GRB 051109B</p><a href='/xrt_curves/00163170/'><img src='/xrt_curves/00163170/thumb2.gif' alt='XRT Light curve of GRB 051109B'/></a></td>
<td><p class='grb'>GRB 051111</p><a href='/xrt_curves/00163438/'><img src='/xrt_curves/00163438/thumb2.gif' alt='XRT Light curve of GRB 051111'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 051117A</p><a href='/xrt_curves/00164268/'><img src='/xrt_curves/00164268/thumb2.gif' alt='XRT Light curve of GRB 051117A'/></a></td>
<td><p class='grb'>GRB 051117B</p><a href='/xrt_curves/00164279/'><img src='/xrt_curves/00164279/thumb2.gif' alt='XRT Light curve of GRB 051117B'/></a></td>
<td><p class='grb'>GRB 051210</p><a href='/xrt_curves/00171931/'><img src='/xrt_curves/00171931/thumb2.gif' alt='XRT Light curve of GRB 051210'/></a></td>
<td><p class='grb'>GRB 051211B</p><a href='/xrt_curves/00020025/'><img src='/xrt_curves/00020025/thumb2.gif' alt='XRT Light curve of GRB 051211B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 051221A</p><a href='/xrt_curves/00173780/'><img src='/xrt_curves/00173780/thumb2.gif' alt='XRT Light curve of GRB 051221A'/></a></td>
<td><p class='grb'>GRB 051221B</p><a href='/xrt_curves/00173904/'><img src='/xrt_curves/00173904/thumb2.gif' alt='XRT Light curve of GRB 051221B'/></a></td>
<td><p class='grb'>GRB 051227</p><a href='/xrt_curves/00174738/'><img src='/xrt_curves/00174738/thumb2.gif' alt='XRT Light curve of GRB 051227'/></a></td>
<td><p class='grb'>GRB 060105</p><a href='/xrt_curves/00175942/'><img src='/xrt_curves/00175942/thumb2.gif' alt='XRT Light curve of GRB 060105'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060108</p><a href='/xrt_curves/00176453/'><img src='/xrt_curves/00176453/thumb2.gif' alt='XRT Light curve of GRB 060108'/></a></td>
<td><p class='grb'>GRB 060109</p><a href='/xrt_curves/00176620/'><img src='/xrt_curves/00176620/thumb2.gif' alt='XRT Light curve of GRB 060109'/></a></td>
<td><p class='grb'>GRB 060110</p><a href='/xrt_curves/00176702/'><img src='/xrt_curves/00176702/thumb2.gif' alt='XRT Light curve of GRB 060110'/></a></td>
<td><p class='grb'>GRB 060111A</p><a href='/xrt_curves/00176818/'><img src='/xrt_curves/00176818/thumb2.gif' alt='XRT Light curve of GRB 060111A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060111B</p><a href='/xrt_curves/00176918/'><img src='/xrt_curves/00176918/thumb2.gif' alt='XRT Light curve of GRB 060111B'/></a></td>
<td><p class='grb'>GRB 060115</p><a href='/xrt_curves/00177408/'><img src='/xrt_curves/00177408/thumb2.gif' alt='XRT Light curve of GRB 060115'/></a></td>
<td><p class='grb'>GRB 060116</p><a href='/xrt_curves/00177533/'><img src='/xrt_curves/00177533/thumb2.gif' alt='XRT Light curve of GRB 060116'/></a></td>
<td><p class='grb'>GRB 060121</p><a href='/xrt_curves/00020027/'><img src='/xrt_curves/00020027/thumb2.gif' alt='XRT Light curve of GRB 060121'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060123</p><a href='/xrt_curves/00020028/'><img src='/xrt_curves/00020028/thumb2.gif' alt='XRT Light curve of GRB 060123'/></a></td>
<td><p class='grb'>GRB 060124</p><a href='/xrt_curves/00178750/'><img src='/xrt_curves/00178750/thumb2.gif' alt='XRT Light curve of GRB 060124'/></a></td>
<td><p class='grb'>GRB 060202</p><a href='/xrt_curves/00179968/'><img src='/xrt_curves/00179968/thumb2.gif' alt='XRT Light curve of GRB 060202'/></a></td>
<td><p class='grb'>GRB 060203</p><a href='/xrt_curves/00180151/'><img src='/xrt_curves/00180151/thumb2.gif' alt='XRT Light curve of GRB 060203'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060204B</p><a href='/xrt_curves/00180241/'><img src='/xrt_curves/00180241/thumb2.gif' alt='XRT Light curve of GRB 060204B'/></a></td>
<td><p class='grb'>GRB 060206</p><a href='/xrt_curves/00180455/'><img src='/xrt_curves/00180455/thumb2.gif' alt='XRT Light curve of GRB 060206'/></a></td>
<td><p class='grb'>GRB 060210</p><a href='/xrt_curves/00180977/'><img src='/xrt_curves/00180977/thumb2.gif' alt='XRT Light curve of GRB 060210'/></a></td>
<td><p class='grb'>GRB 060211A</p><a href='/xrt_curves/00181126/'><img src='/xrt_curves/00181126/thumb2.gif' alt='XRT Light curve of GRB 060211A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060211B</p><a href='/xrt_curves/00181156/'><img src='/xrt_curves/00181156/thumb2.gif' alt='XRT Light curve of GRB 060211B'/></a></td>
<td><p class='grb'>GRB 060218</p><a href='/xrt_curves/00191157/'><img src='/xrt_curves/00191157/thumb2.gif' alt='XRT Light curve of GRB 060218'/></a></td>
<td><p class='grb'>GRB 060219</p><a href='/xrt_curves/00191512/'><img src='/xrt_curves/00191512/thumb2.gif' alt='XRT Light curve of GRB 060219'/></a></td>
<td><p class='grb'>GRB 060223A</p><a href='/xrt_curves/00192059/'><img src='/xrt_curves/00192059/thumb2.gif' alt='XRT Light curve of GRB 060223A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060306</p><a href='/xrt_curves/00200638/'><img src='/xrt_curves/00200638/thumb2.gif' alt='XRT Light curve of GRB 060306'/></a></td>
<td><p class='grb'>GRB 060312</p><a href='/xrt_curves/00201391/'><img src='/xrt_curves/00201391/thumb2.gif' alt='XRT Light curve of GRB 060312'/></a></td>
<td><p class='grb'>GRB 060313</p><a href='/xrt_curves/00201487/'><img src='/xrt_curves/00201487/thumb2.gif' alt='XRT Light curve of GRB 060313'/></a></td>
<td><p class='grb'>GRB 060319</p><a href='/xrt_curves/00202035/'><img src='/xrt_curves/00202035/thumb2.gif' alt='XRT Light curve of GRB 060319'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060322</p><a href='/xrt_curves/00202442/'><img src='/xrt_curves/00202442/thumb2.gif' alt='XRT Light curve of GRB 060322'/></a></td>
<td><p class='grb'>GRB 060323</p><a href='/xrt_curves/00202505/'><img src='/xrt_curves/00202505/thumb2.gif' alt='XRT Light curve of GRB 060323'/></a></td>
<td><p class='grb'>GRB 060403</p><a href='/xrt_curves/00203755/'><img src='/xrt_curves/00203755/thumb2.gif' alt='XRT Light curve of GRB 060403'/></a></td>
<td><p class='grb'>GRB 060413</p><a href='/xrt_curves/00205096/'><img src='/xrt_curves/00205096/thumb2.gif' alt='XRT Light curve of GRB 060413'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060418</p><a href='/xrt_curves/00205851/'><img src='/xrt_curves/00205851/thumb2.gif' alt='XRT Light curve of GRB 060418'/></a></td>
<td><p class='grb'>GRB 060421</p><a href='/xrt_curves/00206257/'><img src='/xrt_curves/00206257/thumb2.gif' alt='XRT Light curve of GRB 060421'/></a></td>
<td><p class='grb'>GRB 060427</p><a href='/xrt_curves/00207281/'><img src='/xrt_curves/00207281/thumb2.gif' alt='XRT Light curve of GRB 060427'/></a></td>
<td><p class='grb'>GRB 060428A</p><a href='/xrt_curves/00207364/'><img src='/xrt_curves/00207364/thumb2.gif' alt='XRT Light curve of GRB 060428A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060428B</p><a href='/xrt_curves/00207399/'><img src='/xrt_curves/00207399/thumb2.gif' alt='XRT Light curve of GRB 060428B'/></a></td>
<td><p class='grb'>GRB 060501</p><a href='/xrt_curves/00208050/'><img src='/xrt_curves/00208050/thumb2.gif' alt='XRT Light curve of GRB 060501'/></a></td>
<td><p class='grb'>GRB 060502A</p><a href='/xrt_curves/00208169/'><img src='/xrt_curves/00208169/thumb2.gif' alt='XRT Light curve of GRB 060502A'/></a></td>
<td><p class='grb'>GRB 060502B</p><a href='/xrt_curves/00208275/'><img src='/xrt_curves/00208275/thumb2.gif' alt='XRT Light curve of GRB 060502B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060505</p><a href='/xrt_curves/00208654/'><img src='/xrt_curves/00208654/thumb2.gif' alt='XRT Light curve of GRB 060505'/></a></td>
<td><p class='grb'>GRB 060507</p><a href='/xrt_curves/00208870/'><img src='/xrt_curves/00208870/thumb2.gif' alt='XRT Light curve of GRB 060507'/></a></td>
<td><p class='grb'>GRB 060510A</p><a href='/xrt_curves/00209351/'><img src='/xrt_curves/00209351/thumb2.gif' alt='XRT Light curve of GRB 060510A'/></a></td>
<td><p class='grb'>GRB 060510B</p><a href='/xrt_curves/00209352/'><img src='/xrt_curves/00209352/thumb2.gif' alt='XRT Light curve of GRB 060510B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060512</p><a href='/xrt_curves/00209755/'><img src='/xrt_curves/00209755/thumb2.gif' alt='XRT Light curve of GRB 060512'/></a></td>
<td><p class='grb'>GRB 060515</p><a href='/xrt_curves/00210084/'><img src='/xrt_curves/00210084/thumb2.gif' alt='XRT Light curve of GRB 060515'/></a></td>
<td><p class='grb'>GRB 060522</p><a href='/xrt_curves/00211117/'><img src='/xrt_curves/00211117/thumb2.gif' alt='XRT Light curve of GRB 060522'/></a></td>
<td><p class='grb'>GRB 060526</p><a href='/xrt_curves/00211957/'><img src='/xrt_curves/00211957/thumb2.gif' alt='XRT Light curve of GRB 060526'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060602A</p><a href='/xrt_curves/00213180/'><img src='/xrt_curves/00213180/thumb2.gif' alt='XRT Light curve of GRB 060602A'/></a></td>
<td><p class='grb'>GRB 060602B</p><a href='/xrt_curves/00213190/'><img src='/xrt_curves/00213190/thumb2.gif' alt='XRT Light curve of GRB 060602B'/></a></td>
<td><p class='grb'>GRB 060604</p><a href='/xrt_curves/00213486/'><img src='/xrt_curves/00213486/thumb2.gif' alt='XRT Light curve of GRB 060604'/></a></td>
<td><p class='grb'>GRB 060605</p><a href='/xrt_curves/00213630/'><img src='/xrt_curves/00213630/thumb2.gif' alt='XRT Light curve of GRB 060605'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060607A</p><a href='/xrt_curves/00213823/'><img src='/xrt_curves/00213823/thumb2.gif' alt='XRT Light curve of GRB 060607A'/></a></td>
<td><p class='grb'>GRB 060614</p><a href='/xrt_curves/00214805/'><img src='/xrt_curves/00214805/thumb2.gif' alt='XRT Light curve of GRB 060614'/></a></td>
<td><p class='grb'>GRB 060707</p><a href='/xrt_curves/00217704/'><img src='/xrt_curves/00217704/thumb2.gif' alt='XRT Light curve of GRB 060707'/></a></td>
<td><p class='grb'>GRB 060708</p><a href='/xrt_curves/00217805/'><img src='/xrt_curves/00217805/thumb2.gif' alt='XRT Light curve of GRB 060708'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060712</p><a href='/xrt_curves/00218582/'><img src='/xrt_curves/00218582/thumb2.gif' alt='XRT Light curve of GRB 060712'/></a></td>
<td><p class='grb'>GRB 060714</p><a href='/xrt_curves/00219101/'><img src='/xrt_curves/00219101/thumb2.gif' alt='XRT Light curve of GRB 060714'/></a></td>
<td><p class='grb'>GRB 060717</p><a href='/xrt_curves/00219646/'><img src='/xrt_curves/00219646/thumb2.gif' alt='XRT Light curve of GRB 060717'/></a></td>
<td><p class='grb'>GRB 060719</p><a href='/xrt_curves/00220020/'><img src='/xrt_curves/00220020/thumb2.gif' alt='XRT Light curve of GRB 060719'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060729</p><a href='/xrt_curves/00221755/'><img src='/xrt_curves/00221755/thumb2.gif' alt='XRT Light curve of GRB 060729'/></a></td>
<td><p class='grb'>GRB 060801</p><a href='/xrt_curves/00222154/'><img src='/xrt_curves/00222154/thumb2.gif' alt='XRT Light curve of GRB 060801'/></a></td>
<td><p class='grb'>GRB 060804</p><a href='/xrt_curves/00222546/'><img src='/xrt_curves/00222546/thumb2.gif' alt='XRT Light curve of GRB 060804'/></a></td>
<td><p class='grb'>GRB 060805A</p><a href='/xrt_curves/00222683/'><img src='/xrt_curves/00222683/thumb2.gif' alt='XRT Light curve of GRB 060805A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060805B</p><a href='/xrt_curves/00020037/'><img src='/xrt_curves/00020037/thumb2.gif' alt='XRT Light curve of GRB 060805B'/></a></td>
<td><p class='grb'>GRB 060807</p><a href='/xrt_curves/00223217/'><img src='/xrt_curves/00223217/thumb2.gif' alt='XRT Light curve of GRB 060807'/></a></td>
<td><p class='grb'>GRB 060813</p><a href='/xrt_curves/00224364/'><img src='/xrt_curves/00224364/thumb2.gif' alt='XRT Light curve of GRB 060813'/></a></td>
<td><p class='grb'>GRB 060814</p><a href='/xrt_curves/00224552/'><img src='/xrt_curves/00224552/thumb2.gif' alt='XRT Light curve of GRB 060814'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060825</p><a href='/xrt_curves/00226382/'><img src='/xrt_curves/00226382/thumb2.gif' alt='XRT Light curve of GRB 060825'/></a></td>
<td><p class='grb'>GRB 060901</p><a href='/xrt_curves/00020039/'><img src='/xrt_curves/00020039/thumb2.gif' alt='XRT Light curve of GRB 060901'/></a></td>
<td><p class='grb'>GRB 060904A</p><a href='/xrt_curves/00227996/'><img src='/xrt_curves/00227996/thumb2.gif' alt='XRT Light curve of GRB 060904A'/></a></td>
<td><p class='grb'>GRB 060904B</p><a href='/xrt_curves/00228006/'><img src='/xrt_curves/00228006/thumb2.gif' alt='XRT Light curve of GRB 060904B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060906</p><a href='/xrt_curves/00228316/'><img src='/xrt_curves/00228316/thumb2.gif' alt='XRT Light curve of GRB 060906'/></a></td>
<td><p class='grb'>GRB 060908</p><a href='/xrt_curves/00228581/'><img src='/xrt_curves/00228581/thumb2.gif' alt='XRT Light curve of GRB 060908'/></a></td>
<td><p class='grb'>GRB 060912A</p><a href='/xrt_curves/00229185/'><img src='/xrt_curves/00229185/thumb2.gif' alt='XRT Light curve of GRB 060912A'/></a></td>
<td><p class='grb'>GRB 060919</p><a href='/xrt_curves/00230115/'><img src='/xrt_curves/00230115/thumb2.gif' alt='XRT Light curve of GRB 060919'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060923A</p><a href='/xrt_curves/00230662/'><img src='/xrt_curves/00230662/thumb2.gif' alt='XRT Light curve of GRB 060923A'/></a></td>
<td><p class='grb'>GRB 060923B</p><a href='/xrt_curves/00230702/'><img src='/xrt_curves/00230702/thumb2.gif' alt='XRT Light curve of GRB 060923B'/></a></td>
<td><p class='grb'>GRB 060923C</p><a href='/xrt_curves/00230711/'><img src='/xrt_curves/00230711/thumb2.gif' alt='XRT Light curve of GRB 060923C'/></a></td>
<td><p class='grb'>GRB 060926</p><a href='/xrt_curves/00231231/'><img src='/xrt_curves/00231231/thumb2.gif' alt='XRT Light curve of GRB 060926'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 060927</p><a href='/xrt_curves/00231362/'><img src='/xrt_curves/00231362/thumb2.gif' alt='XRT Light curve of GRB 060927'/></a></td>
<td><p class='grb'>GRB 060928</p><a href='/xrt_curves/00020042/'><img src='/xrt_curves/00020042/thumb2.gif' alt='XRT Light curve of GRB 060928'/></a></td>
<td><p class='grb'>GRB 060929</p><a href='/xrt_curves/00231702/'><img src='/xrt_curves/00231702/thumb2.gif' alt='XRT Light curve of GRB 060929'/></a></td>
<td><p class='grb'>GRB 061002</p><a href='/xrt_curves/00231974/'><img src='/xrt_curves/00231974/thumb2.gif' alt='XRT Light curve of GRB 061002'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 061004</p><a href='/xrt_curves/00232339/'><img src='/xrt_curves/00232339/thumb2.gif' alt='XRT Light curve of GRB 061004'/></a></td>
<td><p class='grb'>GRB 061006</p><a href='/xrt_curves/00232585/'><img src='/xrt_curves/00232585/thumb2.gif' alt='XRT Light curve of GRB 061006'/></a></td>
<td><p class='grb'>GRB 061007</p><a href='/xrt_curves/00232683/'><img src='/xrt_curves/00232683/thumb2.gif' alt='XRT Light curve of GRB 061007'/></a></td>
<td><p class='grb'>GRB 061019</p><a href='/xrt_curves/00234516/'><img src='/xrt_curves/00234516/thumb2.gif' alt='XRT Light curve of GRB 061019'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 061021</p><a href='/xrt_curves/00234905/'><img src='/xrt_curves/00234905/thumb2.gif' alt='XRT Light curve of GRB 061021'/></a></td>
<td><p class='grb'>GRB 061025</p><a href='/xrt_curves/00020043/'><img src='/xrt_curves/00020043/thumb2.gif' alt='XRT Light curve of GRB 061025'/></a></td>
<td><p class='grb'>GRB 061028</p><a href='/xrt_curves/00235715/'><img src='/xrt_curves/00235715/thumb2.gif' alt='XRT Light curve of GRB 061028'/></a></td>
<td><p class='grb'>GRB 061102</p><a href='/xrt_curves/00236430/'><img src='/xrt_curves/00236430/thumb2.gif' alt='XRT Light curve of GRB 061102'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 061110A</p><a href='/xrt_curves/00238108/'><img src='/xrt_curves/00238108/thumb2.gif' alt='XRT Light curve of GRB 061110A'/></a></td>
<td><p class='grb'>GRB 061110B</p><a href='/xrt_curves/00238174/'><img src='/xrt_curves/00238174/thumb2.gif' alt='XRT Light curve of GRB 061110B'/></a></td>
<td><p class='grb'>GRB 061121</p><a href='/xrt_curves/00239899/'><img src='/xrt_curves/00239899/thumb2.gif' alt='XRT Light curve of GRB 061121'/></a></td>
<td><p class='grb'>GRB 061122</p><a href='/xrt_curves/00020044/'><img src='/xrt_curves/00020044/thumb2.gif' alt='XRT Light curve of GRB 061122'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 061126</p><a href='/xrt_curves/00240766/'><img src='/xrt_curves/00240766/thumb2.gif' alt='XRT Light curve of GRB 061126'/></a></td>
<td><p class='grb'>GRB 061201</p><a href='/xrt_curves/00241840/'><img src='/xrt_curves/00241840/thumb2.gif' alt='XRT Light curve of GRB 061201'/></a></td>
<td><p class='grb'>GRB 061202</p><a href='/xrt_curves/00241963/'><img src='/xrt_curves/00241963/thumb2.gif' alt='XRT Light curve of GRB 061202'/></a></td>
<td><p class='grb'>GRB 061210</p><a href='/xrt_curves/00243690/'><img src='/xrt_curves/00243690/thumb2.gif' alt='XRT Light curve of GRB 061210'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 061217</p><a href='/xrt_curves/00251634/'><img src='/xrt_curves/00251634/thumb2.gif' alt='XRT Light curve of GRB 061217'/></a></td>
<td><p class='grb'>GRB 061222A</p><a href='/xrt_curves/00252588/'><img src='/xrt_curves/00252588/thumb2.gif' alt='XRT Light curve of GRB 061222A'/></a></td>
<td><p class='grb'>GRB 061222B</p><a href='/xrt_curves/00252593/'><img src='/xrt_curves/00252593/thumb2.gif' alt='XRT Light curve of GRB 061222B'/></a></td>
<td><p class='grb'>GRB 070103</p><a href='/xrt_curves/00254532/'><img src='/xrt_curves/00254532/thumb2.gif' alt='XRT Light curve of GRB 070103'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070107</p><a href='/xrt_curves/00255029/'><img src='/xrt_curves/00255029/thumb2.gif' alt='XRT Light curve of GRB 070107'/></a></td>
<td><p class='grb'>GRB 070110</p><a href='/xrt_curves/00255445/'><img src='/xrt_curves/00255445/thumb2.gif' alt='XRT Light curve of GRB 070110'/></a></td>
<td><p class='grb'>GRB 070125</p><a href='/xrt_curves/00020047/'><img src='/xrt_curves/00020047/thumb2.gif' alt='XRT Light curve of GRB 070125'/></a></td>
<td><p class='grb'>GRB 070129</p><a href='/xrt_curves/00258408/'><img src='/xrt_curves/00258408/thumb2.gif' alt='XRT Light curve of GRB 070129'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070208</p><a href='/xrt_curves/00259714/'><img src='/xrt_curves/00259714/thumb2.gif' alt='XRT Light curve of GRB 070208'/></a></td>
<td><p class='grb'>GRB 070219</p><a href='/xrt_curves/00261132/'><img src='/xrt_curves/00261132/thumb2.gif' alt='XRT Light curve of GRB 070219'/></a></td>
<td><p class='grb'>GRB 070220</p><a href='/xrt_curves/00261299/'><img src='/xrt_curves/00261299/thumb2.gif' alt='XRT Light curve of GRB 070220'/></a></td>
<td><p class='grb'>GRB 070223</p><a href='/xrt_curves/00261664/'><img src='/xrt_curves/00261664/thumb2.gif' alt='XRT Light curve of GRB 070223'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070224</p><a href='/xrt_curves/00261880/'><img src='/xrt_curves/00261880/thumb2.gif' alt='XRT Light curve of GRB 070224'/></a></td>
<td><p class='grb'>GRB 070227</p><a href='/xrt_curves/00262347/'><img src='/xrt_curves/00262347/thumb2.gif' alt='XRT Light curve of GRB 070227'/></a></td>
<td><p class='grb'>GRB 070306</p><a href='/xrt_curves/00263361/'><img src='/xrt_curves/00263361/thumb2.gif' alt='XRT Light curve of GRB 070306'/></a></td>
<td><p class='grb'>GRB 070309</p><a href='/xrt_curves/00020050/'><img src='/xrt_curves/00020050/thumb2.gif' alt='XRT Light curve of GRB 070309'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070311</p><a href='/xrt_curves/00020052/'><img src='/xrt_curves/00020052/thumb2.gif' alt='XRT Light curve of GRB 070311'/></a></td>
<td><p class='grb'>GRB 070318</p><a href='/xrt_curves/00271019/'><img src='/xrt_curves/00271019/thumb2.gif' alt='XRT Light curve of GRB 070318'/></a></td>
<td><p class='grb'>GRB 070328</p><a href='/xrt_curves/00272773/'><img src='/xrt_curves/00272773/thumb2.gif' alt='XRT Light curve of GRB 070328'/></a></td>
<td><p class='grb'>GRB 070330</p><a href='/xrt_curves/00273180/'><img src='/xrt_curves/00273180/thumb2.gif' alt='XRT Light curve of GRB 070330'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070411</p><a href='/xrt_curves/00275087/'><img src='/xrt_curves/00275087/thumb2.gif' alt='XRT Light curve of GRB 070411'/></a></td>
<td><p class='grb'>GRB 070412</p><a href='/xrt_curves/00275119/'><img src='/xrt_curves/00275119/thumb2.gif' alt='XRT Light curve of GRB 070412'/></a></td>
<td><p class='grb'>GRB 070419A</p><a href='/xrt_curves/00276205/'><img src='/xrt_curves/00276205/thumb2.gif' alt='XRT Light curve of GRB 070419A'/></a></td>
<td><p class='grb'>GRB 070419B</p><a href='/xrt_curves/00276212/'><img src='/xrt_curves/00276212/thumb2.gif' alt='XRT Light curve of GRB 070419B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070420</p><a href='/xrt_curves/00276321/'><img src='/xrt_curves/00276321/thumb2.gif' alt='XRT Light curve of GRB 070420'/></a></td>
<td><p class='grb'>GRB 070429A</p><a href='/xrt_curves/00277571/'><img src='/xrt_curves/00277571/thumb2.gif' alt='XRT Light curve of GRB 070429A'/></a></td>
<td><p class='grb'>GRB 070429B</p><a href='/xrt_curves/00277582/'><img src='/xrt_curves/00277582/thumb2.gif' alt='XRT Light curve of GRB 070429B'/></a></td>
<td><p class='grb'>GRB 070506</p><a href='/xrt_curves/00278693/'><img src='/xrt_curves/00278693/thumb2.gif' alt='XRT Light curve of GRB 070506'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070508</p><a href='/xrt_curves/00278854/'><img src='/xrt_curves/00278854/thumb2.gif' alt='XRT Light curve of GRB 070508'/></a></td>
<td><p class='grb'>GRB 070509</p><a href='/xrt_curves/00278903/'><img src='/xrt_curves/00278903/thumb2.gif' alt='XRT Light curve of GRB 070509'/></a></td>
<td><p class='grb'>GRB 070517</p><a href='/xrt_curves/00279494/'><img src='/xrt_curves/00279494/thumb2.gif' alt='XRT Light curve of GRB 070517'/></a></td>
<td><p class='grb'>GRB 070518</p><a href='/xrt_curves/00279592/'><img src='/xrt_curves/00279592/thumb2.gif' alt='XRT Light curve of GRB 070518'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070520A</p><a href='/xrt_curves/00279817/'><img src='/xrt_curves/00279817/thumb2.gif' alt='XRT Light curve of GRB 070520A'/></a></td>
<td><p class='grb'>GRB 070520B</p><a href='/xrt_curves/00279898/'><img src='/xrt_curves/00279898/thumb2.gif' alt='XRT Light curve of GRB 070520B'/></a></td>
<td><p class='grb'>GRB 070521</p><a href='/xrt_curves/00279935/'><img src='/xrt_curves/00279935/thumb2.gif' alt='XRT Light curve of GRB 070521'/></a></td>
<td><p class='grb'>GRB 070529</p><a href='/xrt_curves/00280706/'><img src='/xrt_curves/00280706/thumb2.gif' alt='XRT Light curve of GRB 070529'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070531</p><a href='/xrt_curves/00280958/'><img src='/xrt_curves/00280958/thumb2.gif' alt='XRT Light curve of GRB 070531'/></a></td>
<td><p class='grb'>GRB 070611</p><a href='/xrt_curves/00282003/'><img src='/xrt_curves/00282003/thumb2.gif' alt='XRT Light curve of GRB 070611'/></a></td>
<td><p class='grb'>GRB 070612B</p><a href='/xrt_curves/00282073/'><img src='/xrt_curves/00282073/thumb2.gif' alt='XRT Light curve of GRB 070612B'/></a></td>
<td><p class='grb'>GRB 070615</p><a href='/xrt_curves/00020053/'><img src='/xrt_curves/00020053/thumb2.gif' alt='XRT Light curve of GRB 070615'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070616</p><a href='/xrt_curves/00282445/'><img src='/xrt_curves/00282445/thumb2.gif' alt='XRT Light curve of GRB 070616'/></a></td>
<td><p class='grb'>GRB 070621</p><a href='/xrt_curves/00282808/'><img src='/xrt_curves/00282808/thumb2.gif' alt='XRT Light curve of GRB 070621'/></a></td>
<td><p class='grb'>GRB 070628</p><a href='/xrt_curves/00283320/'><img src='/xrt_curves/00283320/thumb2.gif' alt='XRT Light curve of GRB 070628'/></a></td>
<td><p class='grb'>GRB 070704</p><a href='/xrt_curves/00283791/'><img src='/xrt_curves/00283791/thumb2.gif' alt='XRT Light curve of GRB 070704'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070707</p><a href='/xrt_curves/00020054/'><img src='/xrt_curves/00020054/thumb2.gif' alt='XRT Light curve of GRB 070707'/></a></td>
<td><p class='grb'>GRB 070714A</p><a href='/xrt_curves/00284850/'><img src='/xrt_curves/00284850/thumb2.gif' alt='XRT Light curve of GRB 070714A'/></a></td>
<td><p class='grb'>GRB 070714B</p><a href='/xrt_curves/00284856/'><img src='/xrt_curves/00284856/thumb2.gif' alt='XRT Light curve of GRB 070714B'/></a></td>
<td><p class='grb'>GRB 070721A</p><a href='/xrt_curves/00285653/'><img src='/xrt_curves/00285653/thumb2.gif' alt='XRT Light curve of GRB 070721A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070721B</p><a href='/xrt_curves/00285654/'><img src='/xrt_curves/00285654/thumb2.gif' alt='XRT Light curve of GRB 070721B'/></a></td>
<td><p class='grb'>GRB 070724A</p><a href='/xrt_curves/00285948/'><img src='/xrt_curves/00285948/thumb2.gif' alt='XRT Light curve of GRB 070724A'/></a></td>
<td><p class='grb'>GRB 070724B</p><a href='/xrt_curves/00020055/'><img src='/xrt_curves/00020055/thumb2.gif' alt='XRT Light curve of GRB 070724B'/></a></td>
<td><p class='grb'>GRB 070729</p><a href='/xrt_curves/00286373/'><img src='/xrt_curves/00286373/thumb2.gif' alt='XRT Light curve of GRB 070729'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070802</p><a href='/xrt_curves/00286809/'><img src='/xrt_curves/00286809/thumb2.gif' alt='XRT Light curve of GRB 070802'/></a></td>
<td><p class='grb'>GRB 070808</p><a href='/xrt_curves/00287260/'><img src='/xrt_curves/00287260/thumb2.gif' alt='XRT Light curve of GRB 070808'/></a></td>
<td><p class='grb'>GRB 070809</p><a href='/xrt_curves/00287344/'><img src='/xrt_curves/00287344/thumb2.gif' alt='XRT Light curve of GRB 070809'/></a></td>
<td><p class='grb'>GRB 070810A</p><a href='/xrt_curves/00287364/'><img src='/xrt_curves/00287364/thumb2.gif' alt='XRT Light curve of GRB 070810A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070911</p><a href='/xrt_curves/00290624/'><img src='/xrt_curves/00290624/thumb2.gif' alt='XRT Light curve of GRB 070911'/></a></td>
<td><p class='grb'>GRB 070913</p><a href='/xrt_curves/00290843/'><img src='/xrt_curves/00290843/thumb2.gif' alt='XRT Light curve of GRB 070913'/></a></td>
<td><p class='grb'>GRB 070917</p><a href='/xrt_curves/00291292/'><img src='/xrt_curves/00291292/thumb2.gif' alt='XRT Light curve of GRB 070917'/></a></td>
<td><p class='grb'>GRB 070920B</p><a href='/xrt_curves/00291728/'><img src='/xrt_curves/00291728/thumb2.gif' alt='XRT Light curve of GRB 070920B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 070925</p><a href='/xrt_curves/00020056/'><img src='/xrt_curves/00020056/thumb2.gif' alt='XRT Light curve of GRB 070925'/></a></td>
<td><p class='grb'>GRB 071003</p><a href='/xrt_curves/00292934/'><img src='/xrt_curves/00292934/thumb2.gif' alt='XRT Light curve of GRB 071003'/></a></td>
<td><p class='grb'>GRB 071008</p><a href='/xrt_curves/00293587/'><img src='/xrt_curves/00293587/thumb2.gif' alt='XRT Light curve of GRB 071008'/></a></td>
<td><p class='grb'>GRB 071010A</p><a href='/xrt_curves/00293707/'><img src='/xrt_curves/00293707/thumb2.gif' alt='XRT Light curve of GRB 071010A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 071010B</p><a href='/xrt_curves/00293795/'><img src='/xrt_curves/00293795/thumb2.gif' alt='XRT Light curve of GRB 071010B'/></a></td>
<td><p class='grb'>GRB 071011</p><a href='/xrt_curves/00293924/'><img src='/xrt_curves/00293924/thumb2.gif' alt='XRT Light curve of GRB 071011'/></a></td>
<td><p class='grb'>GRB 071020</p><a href='/xrt_curves/00294835/'><img src='/xrt_curves/00294835/thumb2.gif' alt='XRT Light curve of GRB 071020'/></a></td>
<td><p class='grb'>GRB 071021</p><a href='/xrt_curves/00294974/'><img src='/xrt_curves/00294974/thumb2.gif' alt='XRT Light curve of GRB 071021'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 071025</p><a href='/xrt_curves/00295301/'><img src='/xrt_curves/00295301/thumb2.gif' alt='XRT Light curve of GRB 071025'/></a></td>
<td><p class='grb'>GRB 071028A</p><a href='/xrt_curves/00295527/'><img src='/xrt_curves/00295527/thumb2.gif' alt='XRT Light curve of GRB 071028A'/></a></td>
<td><p class='grb'>GRB 071028B</p><a href='/xrt_curves/00295492/'><img src='/xrt_curves/00295492/thumb2.gif' alt='XRT Light curve of GRB 071028B'/></a></td>
<td><p class='grb'>GRB 071031</p><a href='/xrt_curves/00295670/'><img src='/xrt_curves/00295670/thumb2.gif' alt='XRT Light curve of GRB 071031'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 071101</p><a href='/xrt_curves/00295779/'><img src='/xrt_curves/00295779/thumb2.gif' alt='XRT Light curve of GRB 071101'/></a></td>
<td><p class='grb'>GRB 071104</p><a href='/xrt_curves/00020058/'><img src='/xrt_curves/00020058/thumb2.gif' alt='XRT Light curve of GRB 071104'/></a></td>
<td><p class='grb'>GRB 071112C</p><a href='/xrt_curves/00296504/'><img src='/xrt_curves/00296504/thumb2.gif' alt='XRT Light curve of GRB 071112C'/></a></td>
<td><p class='grb'>GRB 071117</p><a href='/xrt_curves/00296805/'><img src='/xrt_curves/00296805/thumb2.gif' alt='XRT Light curve of GRB 071117'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 071118</p><a href='/xrt_curves/00296856/'><img src='/xrt_curves/00296856/thumb2.gif' alt='XRT Light curve of GRB 071118'/></a></td>
<td><p class='grb'>GRB 071122</p><a href='/xrt_curves/00297114/'><img src='/xrt_curves/00297114/thumb2.gif' alt='XRT Light curve of GRB 071122'/></a></td>
<td><p class='grb'>GRB 071227</p><a href='/xrt_curves/00299787/'><img src='/xrt_curves/00299787/thumb2.gif' alt='XRT Light curve of GRB 071227'/></a></td>
<td><p class='grb'>GRB 080120</p><a href='/xrt_curves/00020060/'><img src='/xrt_curves/00020060/thumb2.gif' alt='XRT Light curve of GRB 080120'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080123</p><a href='/xrt_curves/00301578/'><img src='/xrt_curves/00301578/thumb2.gif' alt='XRT Light curve of GRB 080123'/></a></td>
<td><p class='grb'>GRB 080129</p><a href='/xrt_curves/00301981/'><img src='/xrt_curves/00301981/thumb2.gif' alt='XRT Light curve of GRB 080129'/></a></td>
<td><p class='grb'>GRB 080130</p><a href='/xrt_curves/00020062/'><img src='/xrt_curves/00020062/thumb2.gif' alt='XRT Light curve of GRB 080130'/></a></td>
<td><p class='grb'>GRB 080205</p><a href='/xrt_curves/00302506/'><img src='/xrt_curves/00302506/thumb2.gif' alt='XRT Light curve of GRB 080205'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080207</p><a href='/xrt_curves/00302728/'><img src='/xrt_curves/00302728/thumb2.gif' alt='XRT Light curve of GRB 080207'/></a></td>
<td><p class='grb'>GRB 080210</p><a href='/xrt_curves/00302888/'><img src='/xrt_curves/00302888/thumb2.gif' alt='XRT Light curve of GRB 080210'/></a></td>
<td><p class='grb'>GRB 080212</p><a href='/xrt_curves/00303105/'><img src='/xrt_curves/00303105/thumb2.gif' alt='XRT Light curve of GRB 080212'/></a></td>
<td><p class='grb'>GRB 080218B</p><a href='/xrt_curves/00303631/'><img src='/xrt_curves/00303631/thumb2.gif' alt='XRT Light curve of GRB 080218B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080229A</p><a href='/xrt_curves/00304379/'><img src='/xrt_curves/00304379/thumb2.gif' alt='XRT Light curve of GRB 080229A'/></a></td>
<td><p class='grb'>GRB 080229B</p><a href='/xrt_curves/00020064/'><img src='/xrt_curves/00020064/thumb2.gif' alt='XRT Light curve of GRB 080229B'/></a></td>
<td><p class='grb'>GRB 080303</p><a href='/xrt_curves/00304549/'><img src='/xrt_curves/00304549/thumb2.gif' alt='XRT Light curve of GRB 080303'/></a></td>
<td><p class='grb'>GRB 080307</p><a href='/xrt_curves/00305011/'><img src='/xrt_curves/00305011/thumb2.gif' alt='XRT Light curve of GRB 080307'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080310</p><a href='/xrt_curves/00305288/'><img src='/xrt_curves/00305288/thumb2.gif' alt='XRT Light curve of GRB 080310'/></a></td>
<td><p class='grb'>GRB 080319A</p><a href='/xrt_curves/00306754/'><img src='/xrt_curves/00306754/thumb2.gif' alt='XRT Light curve of GRB 080319A'/></a></td>
<td><p class='grb'>GRB 080319B</p><a href='/xrt_curves/00306757/'><img src='/xrt_curves/00306757/thumb2.gif' alt='XRT Light curve of GRB 080319B'/></a></td>
<td><p class='grb'>GRB 080319C</p><a href='/xrt_curves/00306778/'><img src='/xrt_curves/00306778/thumb2.gif' alt='XRT Light curve of GRB 080319C'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080319D</p><a href='/xrt_curves/00306793/'><img src='/xrt_curves/00306793/thumb2.gif' alt='XRT Light curve of GRB 080319D'/></a></td>
<td><p class='grb'>GRB 080320</p><a href='/xrt_curves/00306858/'><img src='/xrt_curves/00306858/thumb2.gif' alt='XRT Light curve of GRB 080320'/></a></td>
<td><p class='grb'>GRB 080325</p><a href='/xrt_curves/00307604/'><img src='/xrt_curves/00307604/thumb2.gif' alt='XRT Light curve of GRB 080325'/></a></td>
<td><p class='grb'>GRB 080328</p><a href='/xrt_curves/00307931/'><img src='/xrt_curves/00307931/thumb2.gif' alt='XRT Light curve of GRB 080328'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080330</p><a href='/xrt_curves/00308041/'><img src='/xrt_curves/00308041/thumb2.gif' alt='XRT Light curve of GRB 080330'/></a></td>
<td><p class='grb'>GRB 080405</p><a href='/xrt_curves/00020065/'><img src='/xrt_curves/00020065/thumb2.gif' alt='XRT Light curve of GRB 080405'/></a></td>
<td><p class='grb'>GRB 080409</p><a href='/xrt_curves/00308812/'><img src='/xrt_curves/00308812/thumb2.gif' alt='XRT Light curve of GRB 080409'/></a></td>
<td><p class='grb'>GRB 080411</p><a href='/xrt_curves/00309010/'><img src='/xrt_curves/00309010/thumb2.gif' alt='XRT Light curve of GRB 080411'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080413A</p><a href='/xrt_curves/00309096/'><img src='/xrt_curves/00309096/thumb2.gif' alt='XRT Light curve of GRB 080413A'/></a></td>
<td><p class='grb'>GRB 080413B</p><a href='/xrt_curves/00309111/'><img src='/xrt_curves/00309111/thumb2.gif' alt='XRT Light curve of GRB 080413B'/></a></td>
<td><p class='grb'>GRB 080426</p><a href='/xrt_curves/00310219/'><img src='/xrt_curves/00310219/thumb2.gif' alt='XRT Light curve of GRB 080426'/></a></td>
<td><p class='grb'>GRB 080430</p><a href='/xrt_curves/00310613/'><img src='/xrt_curves/00310613/thumb2.gif' alt='XRT Light curve of GRB 080430'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080503</p><a href='/xrt_curves/00310785/'><img src='/xrt_curves/00310785/thumb2.gif' alt='XRT Light curve of GRB 080503'/></a></td>
<td><p class='grb'>GRB 080506</p><a href='/xrt_curves/00311159/'><img src='/xrt_curves/00311159/thumb2.gif' alt='XRT Light curve of GRB 080506'/></a></td>
<td><p class='grb'>GRB 080507</p><a href='/xrt_curves/00020068/'><img src='/xrt_curves/00020068/thumb2.gif' alt='XRT Light curve of GRB 080507'/></a></td>
<td><p class='grb'>GRB 080514B</p><a href='/xrt_curves/00020069/'><img src='/xrt_curves/00020069/thumb2.gif' alt='XRT Light curve of GRB 080514B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080515</p><a href='/xrt_curves/00311658/'><img src='/xrt_curves/00311658/thumb2.gif' alt='XRT Light curve of GRB 080515'/></a></td>
<td><p class='grb'>GRB 080516</p><a href='/xrt_curves/00311762/'><img src='/xrt_curves/00311762/thumb2.gif' alt='XRT Light curve of GRB 080516'/></a></td>
<td><p class='grb'>GRB 080517</p><a href='/xrt_curves/00311874/'><img src='/xrt_curves/00311874/thumb2.gif' alt='XRT Light curve of GRB 080517'/></a></td>
<td><p class='grb'>GRB 080520</p><a href='/xrt_curves/00312047/'><img src='/xrt_curves/00312047/thumb2.gif' alt='XRT Light curve of GRB 080520'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080523</p><a href='/xrt_curves/00312242/'><img src='/xrt_curves/00312242/thumb2.gif' alt='XRT Light curve of GRB 080523'/></a></td>
<td><p class='grb'>GRB 080602</p><a href='/xrt_curves/00312958/'><img src='/xrt_curves/00312958/thumb2.gif' alt='XRT Light curve of GRB 080602'/></a></td>
<td><p class='grb'>GRB 080603A</p><a href='/xrt_curves/00020074/'><img src='/xrt_curves/00020074/thumb2.gif' alt='XRT Light curve of GRB 080603A'/></a></td>
<td><p class='grb'>GRB 080603B</p><a href='/xrt_curves/00313087/'><img src='/xrt_curves/00313087/thumb2.gif' alt='XRT Light curve of GRB 080603B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080604</p><a href='/xrt_curves/00313116/'><img src='/xrt_curves/00313116/thumb2.gif' alt='XRT Light curve of GRB 080604'/></a></td>
<td><p class='grb'>GRB 080605</p><a href='/xrt_curves/00313299/'><img src='/xrt_curves/00313299/thumb2.gif' alt='XRT Light curve of GRB 080605'/></a></td>
<td><p class='grb'>GRB 080607</p><a href='/xrt_curves/00313417/'><img src='/xrt_curves/00313417/thumb2.gif' alt='XRT Light curve of GRB 080607'/></a></td>
<td><p class='grb'>GRB 080613A</p><a href='/xrt_curves/00020075/'><img src='/xrt_curves/00020075/thumb2.gif' alt='XRT Light curve of GRB 080613A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080613B</p><a href='/xrt_curves/00313954/'><img src='/xrt_curves/00313954/thumb2.gif' alt='XRT Light curve of GRB 080613B'/></a></td>
<td><p class='grb'>GRB 080623</p><a href='/xrt_curves/00315080/'><img src='/xrt_curves/00315080/thumb2.gif' alt='XRT Light curve of GRB 080623'/></a></td>
<td><p class='grb'>GRB 080625</p><a href='/xrt_curves/00020076/'><img src='/xrt_curves/00020076/thumb2.gif' alt='XRT Light curve of GRB 080625'/></a></td>
<td><p class='grb'>GRB 080701</p><a href='/xrt_curves/00315615/'><img src='/xrt_curves/00315615/thumb2.gif' alt='XRT Light curve of GRB 080701'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080702A</p><a href='/xrt_curves/00315710/'><img src='/xrt_curves/00315710/thumb2.gif' alt='XRT Light curve of GRB 080702A'/></a></td>
<td><p class='grb'>GRB 080702B</p><a href='/xrt_curves/00020077/'><img src='/xrt_curves/00020077/thumb2.gif' alt='XRT Light curve of GRB 080702B'/></a></td>
<td><p class='grb'>GRB 080703</p><a href='/xrt_curves/00315819/'><img src='/xrt_curves/00315819/thumb2.gif' alt='XRT Light curve of GRB 080703'/></a></td>
<td><p class='grb'>GRB 080707</p><a href='/xrt_curves/00316204/'><img src='/xrt_curves/00316204/thumb2.gif' alt='XRT Light curve of GRB 080707'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080710</p><a href='/xrt_curves/00316534/'><img src='/xrt_curves/00316534/thumb2.gif' alt='XRT Light curve of GRB 080710'/></a></td>
<td><p class='grb'>GRB 080714</p><a href='/xrt_curves/00316910/'><img src='/xrt_curves/00316910/thumb2.gif' alt='XRT Light curve of GRB 080714'/></a></td>
<td><p class='grb'>GRB 080721</p><a href='/xrt_curves/00317508/'><img src='/xrt_curves/00317508/thumb2.gif' alt='XRT Light curve of GRB 080721'/></a></td>
<td><p class='grb'>GRB 080723A</p><a href='/xrt_curves/00317662/'><img src='/xrt_curves/00317662/thumb2.gif' alt='XRT Light curve of GRB 080723A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080723B</p><a href='/xrt_curves/00020079/'><img src='/xrt_curves/00020079/thumb2.gif' alt='XRT Light curve of GRB 080723B'/></a></td>
<td><p class='grb'>GRB 080727A</p><a href='/xrt_curves/00318094/'><img src='/xrt_curves/00318094/thumb2.gif' alt='XRT Light curve of GRB 080727A'/></a></td>
<td><p class='grb'>GRB 080727B</p><a href='/xrt_curves/00318101/'><img src='/xrt_curves/00318101/thumb2.gif' alt='XRT Light curve of GRB 080727B'/></a></td>
<td><p class='grb'>GRB 080727C</p><a href='/xrt_curves/00318170/'><img src='/xrt_curves/00318170/thumb2.gif' alt='XRT Light curve of GRB 080727C'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080802</p><a href='/xrt_curves/00318832/'><img src='/xrt_curves/00318832/thumb2.gif' alt='XRT Light curve of GRB 080802'/></a></td>
<td><p class='grb'>GRB 080804</p><a href='/xrt_curves/00319016/'><img src='/xrt_curves/00319016/thumb2.gif' alt='XRT Light curve of GRB 080804'/></a></td>
<td><p class='grb'>GRB 080805</p><a href='/xrt_curves/00319036/'><img src='/xrt_curves/00319036/thumb2.gif' alt='XRT Light curve of GRB 080805'/></a></td>
<td><p class='grb'>GRB 080810</p><a href='/xrt_curves/00319584/'><img src='/xrt_curves/00319584/thumb2.gif' alt='XRT Light curve of GRB 080810'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080825</p><a href='/xrt_curves/00020080/'><img src='/xrt_curves/00020080/thumb2.gif' alt='XRT Light curve of GRB 080825'/></a></td>
<td><p class='grb'>GRB 080828</p><a href='/xrt_curves/00020081/'><img src='/xrt_curves/00020081/thumb2.gif' alt='XRT Light curve of GRB 080828'/></a></td>
<td><p class='grb'>GRB 080903</p><a href='/xrt_curves/00323542/'><img src='/xrt_curves/00323542/thumb2.gif' alt='XRT Light curve of GRB 080903'/></a></td>
<td><p class='grb'>GRB 080905A</p><a href='/xrt_curves/00323870/'><img src='/xrt_curves/00323870/thumb2.gif' alt='XRT Light curve of GRB 080905A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080905B</p><a href='/xrt_curves/00323898/'><img src='/xrt_curves/00323898/thumb2.gif' alt='XRT Light curve of GRB 080905B'/></a></td>
<td><p class='grb'>GRB 080906</p><a href='/xrt_curves/00323984/'><img src='/xrt_curves/00323984/thumb2.gif' alt='XRT Light curve of GRB 080906'/></a></td>
<td><p class='grb'>GRB 080913</p><a href='/xrt_curves/00324561/'><img src='/xrt_curves/00324561/thumb2.gif' alt='XRT Light curve of GRB 080913'/></a></td>
<td><p class='grb'>GRB 080915A</p><a href='/xrt_curves/00324744/'><img src='/xrt_curves/00324744/thumb2.gif' alt='XRT Light curve of GRB 080915A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080916A</p><a href='/xrt_curves/00324895/'><img src='/xrt_curves/00324895/thumb2.gif' alt='XRT Light curve of GRB 080916A'/></a></td>
<td><p class='grb'>GRB 080916B</p><a href='/xrt_curves/00324907/'><img src='/xrt_curves/00324907/thumb2.gif' alt='XRT Light curve of GRB 080916B'/></a></td>
<td><p class='grb'>GRB 080916C</p><a href='/xrt_curves/00020082/'><img src='/xrt_curves/00020082/thumb2.gif' alt='XRT Light curve of GRB 080916C'/></a></td>
<td><p class='grb'>GRB 080919</p><a href='/xrt_curves/00325268/'><img src='/xrt_curves/00325268/thumb2.gif' alt='XRT Light curve of GRB 080919'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 080928</p><a href='/xrt_curves/00326115/'><img src='/xrt_curves/00326115/thumb2.gif' alt='XRT Light curve of GRB 080928'/></a></td>
<td><p class='grb'>GRB 081001</p><a href='/xrt_curves/00020084/'><img src='/xrt_curves/00020084/thumb2.gif' alt='XRT Light curve of GRB 081001'/></a></td>
<td><p class='grb'>GRB 081003A</p><a href='/xrt_curves/00020085/'><img src='/xrt_curves/00020085/thumb2.gif' alt='XRT Light curve of GRB 081003A'/></a></td>
<td><p class='grb'>GRB 081007</p><a href='/xrt_curves/00330856/'><img src='/xrt_curves/00330856/thumb2.gif' alt='XRT Light curve of GRB 081007'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081008</p><a href='/xrt_curves/00331093/'><img src='/xrt_curves/00331093/thumb2.gif' alt='XRT Light curve of GRB 081008'/></a></td>
<td><p class='grb'>GRB 081011</p><a href='/xrt_curves/00331332/'><img src='/xrt_curves/00331332/thumb2.gif' alt='XRT Light curve of GRB 081011'/></a></td>
<td><p class='grb'>GRB 081012</p><a href='/xrt_curves/00331475/'><img src='/xrt_curves/00331475/thumb2.gif' alt='XRT Light curve of GRB 081012'/></a></td>
<td><p class='grb'>GRB 081016A</p><a href='/xrt_curves/00020087/'><img src='/xrt_curves/00020087/thumb2.gif' alt='XRT Light curve of GRB 081016A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081016B</p><a href='/xrt_curves/00331856/'><img src='/xrt_curves/00331856/thumb2.gif' alt='XRT Light curve of GRB 081016B'/></a></td>
<td><p class='grb'>GRB 081024A</p><a href='/xrt_curves/00332516/'><img src='/xrt_curves/00332516/thumb2.gif' alt='XRT Light curve of GRB 081024A'/></a></td>
<td><p class='grb'>GRB 081025</p><a href='/xrt_curves/00020089/'><img src='/xrt_curves/00020089/thumb2.gif' alt='XRT Light curve of GRB 081025'/></a></td>
<td><p class='grb'>GRB 081028</p><a href='/xrt_curves/00332851/'><img src='/xrt_curves/00332851/thumb2.gif' alt='XRT Light curve of GRB 081028'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081029</p><a href='/xrt_curves/00332931/'><img src='/xrt_curves/00332931/thumb2.gif' alt='XRT Light curve of GRB 081029'/></a></td>
<td><p class='grb'>GRB 081102</p><a href='/xrt_curves/00333427/'><img src='/xrt_curves/00333427/thumb2.gif' alt='XRT Light curve of GRB 081102'/></a></td>
<td><p class='grb'>GRB 081104</p><a href='/xrt_curves/00333666/'><img src='/xrt_curves/00333666/thumb2.gif' alt='XRT Light curve of GRB 081104'/></a></td>
<td><p class='grb'>GRB 081105</p><a href='/xrt_curves/00333811/'><img src='/xrt_curves/00333811/thumb2.gif' alt='XRT Light curve of GRB 081105'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081109</p><a href='/xrt_curves/00334112/'><img src='/xrt_curves/00334112/thumb2.gif' alt='XRT Light curve of GRB 081109'/></a></td>
<td><p class='grb'>GRB 081118</p><a href='/xrt_curves/00334877/'><img src='/xrt_curves/00334877/thumb2.gif' alt='XRT Light curve of GRB 081118'/></a></td>
<td><p class='grb'>GRB 081121</p><a href='/xrt_curves/00335105/'><img src='/xrt_curves/00335105/thumb2.gif' alt='XRT Light curve of GRB 081121'/></a></td>
<td><p class='grb'>GRB 081126</p><a href='/xrt_curves/00335647/'><img src='/xrt_curves/00335647/thumb2.gif' alt='XRT Light curve of GRB 081126'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081127</p><a href='/xrt_curves/00335715/'><img src='/xrt_curves/00335715/thumb2.gif' alt='XRT Light curve of GRB 081127'/></a></td>
<td><p class='grb'>GRB 081128</p><a href='/xrt_curves/00335895/'><img src='/xrt_curves/00335895/thumb2.gif' alt='XRT Light curve of GRB 081128'/></a></td>
<td><p class='grb'>GRB 081203A</p><a href='/xrt_curves/00336489/'><img src='/xrt_curves/00336489/thumb2.gif' alt='XRT Light curve of GRB 081203A'/></a></td>
<td><p class='grb'>GRB 081203B</p><a href='/xrt_curves/00020091/'><img src='/xrt_curves/00020091/thumb2.gif' alt='XRT Light curve of GRB 081203B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081204</p><a href='/xrt_curves/00020092/'><img src='/xrt_curves/00020092/thumb2.gif' alt='XRT Light curve of GRB 081204'/></a></td>
<td><p class='grb'>GRB 081210</p><a href='/xrt_curves/00337073/'><img src='/xrt_curves/00337073/thumb2.gif' alt='XRT Light curve of GRB 081210'/></a></td>
<td><p class='grb'>GRB 081211</p><a href='/xrt_curves/00337115/'><img src='/xrt_curves/00337115/thumb2.gif' alt='XRT Light curve of GRB 081211'/></a></td>
<td><p class='grb'>GRB 081211B</p><a href='/xrt_curves/00020093/'><img src='/xrt_curves/00020093/thumb2.gif' alt='XRT Light curve of GRB 081211B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081221</p><a href='/xrt_curves/00337889/'><img src='/xrt_curves/00337889/thumb2.gif' alt='XRT Light curve of GRB 081221'/></a></td>
<td><p class='grb'>GRB 081222</p><a href='/xrt_curves/00337914/'><img src='/xrt_curves/00337914/thumb2.gif' alt='XRT Light curve of GRB 081222'/></a></td>
<td><p class='grb'>GRB 081224</p><a href='/xrt_curves/00020094/'><img src='/xrt_curves/00020094/thumb2.gif' alt='XRT Light curve of GRB 081224'/></a></td>
<td><p class='grb'>GRB 081226A</p><a href='/xrt_curves/00338177/'><img src='/xrt_curves/00338177/thumb2.gif' alt='XRT Light curve of GRB 081226A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 081228</p><a href='/xrt_curves/00338338/'><img src='/xrt_curves/00338338/thumb2.gif' alt='XRT Light curve of GRB 081228'/></a></td>
<td><p class='grb'>GRB 081230</p><a href='/xrt_curves/00338633/'><img src='/xrt_curves/00338633/thumb2.gif' alt='XRT Light curve of GRB 081230'/></a></td>
<td><p class='grb'>GRB 090102</p><a href='/xrt_curves/00338895/'><img src='/xrt_curves/00338895/thumb2.gif' alt='XRT Light curve of GRB 090102'/></a></td>
<td><p class='grb'>GRB 090107B</p><a href='/xrt_curves/00020096/'><img src='/xrt_curves/00020096/thumb2.gif' alt='XRT Light curve of GRB 090107B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090111</p><a href='/xrt_curves/00339696/'><img src='/xrt_curves/00339696/thumb2.gif' alt='XRT Light curve of GRB 090111'/></a></td>
<td><p class='grb'>GRB 090113</p><a href='/xrt_curves/00339852/'><img src='/xrt_curves/00339852/thumb2.gif' alt='XRT Light curve of GRB 090113'/></a></td>
<td><p class='grb'>GRB 090117</p><a href='/xrt_curves/00020097/'><img src='/xrt_curves/00020097/thumb2.gif' alt='XRT Light curve of GRB 090117'/></a></td>
<td><p class='grb'>GRB 090118</p><a href='/xrt_curves/00020098/'><img src='/xrt_curves/00020098/thumb2.gif' alt='XRT Light curve of GRB 090118'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090123</p><a href='/xrt_curves/00340895/'><img src='/xrt_curves/00340895/thumb2.gif' alt='XRT Light curve of GRB 090123'/></a></td>
<td><p class='grb'>GRB 090126A</p><a href='/xrt_curves/00020099/'><img src='/xrt_curves/00020099/thumb2.gif' alt='XRT Light curve of GRB 090126A'/></a></td>
<td><p class='grb'>GRB 090201</p><a href='/xrt_curves/00341749/'><img src='/xrt_curves/00341749/thumb2.gif' alt='XRT Light curve of GRB 090201'/></a></td>
<td><p class='grb'>GRB 090205</p><a href='/xrt_curves/00342121/'><img src='/xrt_curves/00342121/thumb2.gif' alt='XRT Light curve of GRB 090205'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090306B</p><a href='/xrt_curves/00020101/'><img src='/xrt_curves/00020101/thumb2.gif' alt='XRT Light curve of GRB 090306B'/></a></td>
<td><p class='grb'>GRB 090307</p><a href='/xrt_curves/00345551/'><img src='/xrt_curves/00345551/thumb2.gif' alt='XRT Light curve of GRB 090307'/></a></td>
<td><p class='grb'>GRB 090308</p><a href='/xrt_curves/00345777/'><img src='/xrt_curves/00345777/thumb2.gif' alt='XRT Light curve of GRB 090308'/></a></td>
<td><p class='grb'>GRB 090309</p><a href='/xrt_curves/00345945/'><img src='/xrt_curves/00345945/thumb2.gif' alt='XRT Light curve of GRB 090309'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090313</p><a href='/xrt_curves/00346386/'><img src='/xrt_curves/00346386/thumb2.gif' alt='XRT Light curve of GRB 090313'/></a></td>
<td><p class='grb'>GRB 090323</p><a href='/xrt_curves/00020102/'><img src='/xrt_curves/00020102/thumb2.gif' alt='XRT Light curve of GRB 090323'/></a></td>
<td><p class='grb'>GRB 090328A</p><a href='/xrt_curves/00020103/'><img src='/xrt_curves/00020103/thumb2.gif' alt='XRT Light curve of GRB 090328A'/></a></td>
<td><p class='grb'>GRB 090401B</p><a href='/xrt_curves/00348152/'><img src='/xrt_curves/00348152/thumb2.gif' alt='XRT Light curve of GRB 090401B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090404</p><a href='/xrt_curves/00348428/'><img src='/xrt_curves/00348428/thumb2.gif' alt='XRT Light curve of GRB 090404'/></a></td>
<td><p class='grb'>GRB 090407</p><a href='/xrt_curves/00348650/'><img src='/xrt_curves/00348650/thumb2.gif' alt='XRT Light curve of GRB 090407'/></a></td>
<td><p class='grb'>GRB 090417B</p><a href='/xrt_curves/00349450/'><img src='/xrt_curves/00349450/thumb2.gif' alt='XRT Light curve of GRB 090417B'/></a></td>
<td><p class='grb'>GRB 090418A</p><a href='/xrt_curves/00349510/'><img src='/xrt_curves/00349510/thumb2.gif' alt='XRT Light curve of GRB 090418A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090419</p><a href='/xrt_curves/00349592/'><img src='/xrt_curves/00349592/thumb2.gif' alt='XRT Light curve of GRB 090419'/></a></td>
<td><p class='grb'>GRB 090422</p><a href='/xrt_curves/00349931/'><img src='/xrt_curves/00349931/thumb2.gif' alt='XRT Light curve of GRB 090422'/></a></td>
<td><p class='grb'>GRB 090423</p><a href='/xrt_curves/00350184/'><img src='/xrt_curves/00350184/thumb2.gif' alt='XRT Light curve of GRB 090423'/></a></td>
<td><p class='grb'>GRB 090424</p><a href='/xrt_curves/00350311/'><img src='/xrt_curves/00350311/thumb2.gif' alt='XRT Light curve of GRB 090424'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090426</p><a href='/xrt_curves/00350479/'><img src='/xrt_curves/00350479/thumb2.gif' alt='XRT Light curve of GRB 090426'/></a></td>
<td><p class='grb'>GRB 090429A</p><a href='/xrt_curves/00350853/'><img src='/xrt_curves/00350853/thumb2.gif' alt='XRT Light curve of GRB 090429A'/></a></td>
<td><p class='grb'>GRB 090429B</p><a href='/xrt_curves/00350854/'><img src='/xrt_curves/00350854/thumb2.gif' alt='XRT Light curve of GRB 090429B'/></a></td>
<td><p class='grb'>GRB 090510</p><a href='/xrt_curves/00351588/'><img src='/xrt_curves/00351588/thumb2.gif' alt='XRT Light curve of GRB 090510'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090515</p><a href='/xrt_curves/00352108/'><img src='/xrt_curves/00352108/thumb2.gif' alt='XRT Light curve of GRB 090515'/></a></td>
<td><p class='grb'>GRB 090516</p><a href='/xrt_curves/00352190/'><img src='/xrt_curves/00352190/thumb2.gif' alt='XRT Light curve of GRB 090516'/></a></td>
<td><p class='grb'>GRB 090518</p><a href='/xrt_curves/00352420/'><img src='/xrt_curves/00352420/thumb2.gif' alt='XRT Light curve of GRB 090518'/></a></td>
<td><p class='grb'>GRB 090519</p><a href='/xrt_curves/00352648/'><img src='/xrt_curves/00352648/thumb2.gif' alt='XRT Light curve of GRB 090519'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090529</p><a href='/xrt_curves/00353540/'><img src='/xrt_curves/00353540/thumb2.gif' alt='XRT Light curve of GRB 090529'/></a></td>
<td><p class='grb'>GRB 090530</p><a href='/xrt_curves/00353567/'><img src='/xrt_curves/00353567/thumb2.gif' alt='XRT Light curve of GRB 090530'/></a></td>
<td><p class='grb'>GRB 090531A</p><a href='/xrt_curves/00353627/'><img src='/xrt_curves/00353627/thumb2.gif' alt='XRT Light curve of GRB 090531A'/></a></td>
<td><p class='grb'>GRB 090531B</p><a href='/xrt_curves/00353728/'><img src='/xrt_curves/00353728/thumb2.gif' alt='XRT Light curve of GRB 090531B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090607</p><a href='/xrt_curves/00354299/'><img src='/xrt_curves/00354299/thumb2.gif' alt='XRT Light curve of GRB 090607'/></a></td>
<td><p class='grb'>GRB 090618</p><a href='/xrt_curves/00355083/'><img src='/xrt_curves/00355083/thumb2.gif' alt='XRT Light curve of GRB 090618'/></a></td>
<td><p class='grb'>GRB 090621A</p><a href='/xrt_curves/00355303/'><img src='/xrt_curves/00355303/thumb2.gif' alt='XRT Light curve of GRB 090621A'/></a></td>
<td><p class='grb'>GRB 090621B</p><a href='/xrt_curves/00355359/'><img src='/xrt_curves/00355359/thumb2.gif' alt='XRT Light curve of GRB 090621B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090625B</p><a href='/xrt_curves/00020105/'><img src='/xrt_curves/00020105/thumb2.gif' alt='XRT Light curve of GRB 090625B'/></a></td>
<td><p class='grb'>GRB 090628</p><a href='/xrt_curves/00355942/'><img src='/xrt_curves/00355942/thumb2.gif' alt='XRT Light curve of GRB 090628'/></a></td>
<td><p class='grb'>GRB 090702</p><a href='/xrt_curves/00020106/'><img src='/xrt_curves/00020106/thumb2.gif' alt='XRT Light curve of GRB 090702'/></a></td>
<td><p class='grb'>GRB 090709A</p><a href='/xrt_curves/00356890/'><img src='/xrt_curves/00356890/thumb2.gif' alt='XRT Light curve of GRB 090709A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090715B</p><a href='/xrt_curves/00357512/'><img src='/xrt_curves/00357512/thumb2.gif' alt='XRT Light curve of GRB 090715B'/></a></td>
<td><p class='grb'>GRB 090720</p><a href='/xrt_curves/00357811/'><img src='/xrt_curves/00357811/thumb2.gif' alt='XRT Light curve of GRB 090720'/></a></td>
<td><p class='grb'>GRB 090726</p><a href='/xrt_curves/00358422/'><img src='/xrt_curves/00358422/thumb2.gif' alt='XRT Light curve of GRB 090726'/></a></td>
<td><p class='grb'>GRB 090727</p><a href='/xrt_curves/00358520/'><img src='/xrt_curves/00358520/thumb2.gif' alt='XRT Light curve of GRB 090727'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090728</p><a href='/xrt_curves/00358574/'><img src='/xrt_curves/00358574/thumb2.gif' alt='XRT Light curve of GRB 090728'/></a></td>
<td><p class='grb'>GRB 090807</p><a href='/xrt_curves/00359378/'><img src='/xrt_curves/00359378/thumb2.gif' alt='XRT Light curve of GRB 090807'/></a></td>
<td><p class='grb'>GRB 090809</p><a href='/xrt_curves/00359530/'><img src='/xrt_curves/00359530/thumb2.gif' alt='XRT Light curve of GRB 090809'/></a></td>
<td><p class='grb'>GRB 090812</p><a href='/xrt_curves/00359711/'><img src='/xrt_curves/00359711/thumb2.gif' alt='XRT Light curve of GRB 090812'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090813</p><a href='/xrt_curves/00359884/'><img src='/xrt_curves/00359884/thumb2.gif' alt='XRT Light curve of GRB 090813'/></a></td>
<td><p class='grb'>GRB 090814A</p><a href='/xrt_curves/00359951/'><img src='/xrt_curves/00359951/thumb2.gif' alt='XRT Light curve of GRB 090814A'/></a></td>
<td><p class='grb'>GRB 090814B</p><a href='/xrt_curves/00020107/'><img src='/xrt_curves/00020107/thumb2.gif' alt='XRT Light curve of GRB 090814B'/></a></td>
<td><p class='grb'>GRB 090817</p><a href='/xrt_curves/00020108/'><img src='/xrt_curves/00020108/thumb2.gif' alt='XRT Light curve of GRB 090817'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090823</p><a href='/xrt_curves/00020109/'><img src='/xrt_curves/00020109/thumb2.gif' alt='XRT Light curve of GRB 090823'/></a></td>
<td><p class='grb'>GRB 090827</p><a href='/xrt_curves/00020110/'><img src='/xrt_curves/00020110/thumb2.gif' alt='XRT Light curve of GRB 090827'/></a></td>
<td><p class='grb'>GRB 090831C</p><a href='/xrt_curves/00361489/'><img src='/xrt_curves/00361489/thumb2.gif' alt='XRT Light curve of GRB 090831C'/></a></td>
<td><p class='grb'>GRB 090902B</p><a href='/xrt_curves/00020111/'><img src='/xrt_curves/00020111/thumb2.gif' alt='XRT Light curve of GRB 090902B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090904A</p><a href='/xrt_curves/00361830/'><img src='/xrt_curves/00361830/thumb2.gif' alt='XRT Light curve of GRB 090904A'/></a></td>
<td><p class='grb'>GRB 090904B</p><a href='/xrt_curves/00361831/'><img src='/xrt_curves/00361831/thumb2.gif' alt='XRT Light curve of GRB 090904B'/></a></td>
<td><p class='grb'>GRB 090912</p><a href='/xrt_curves/00362633/'><img src='/xrt_curves/00362633/thumb2.gif' alt='XRT Light curve of GRB 090912'/></a></td>
<td><p class='grb'>GRB 090915</p><a href='/xrt_curves/00020112/'><img src='/xrt_curves/00020112/thumb2.gif' alt='XRT Light curve of GRB 090915'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 090926A</p><a href='/xrt_curves/00020113/'><img src='/xrt_curves/00020113/thumb2.gif' alt='XRT Light curve of GRB 090926A'/></a></td>
<td><p class='grb'>GRB 090926B</p><a href='/xrt_curves/00370791/'><img src='/xrt_curves/00370791/thumb2.gif' alt='XRT Light curve of GRB 090926B'/></a></td>
<td><p class='grb'>GRB 090927</p><a href='/xrt_curves/00370846/'><img src='/xrt_curves/00370846/thumb2.gif' alt='XRT Light curve of GRB 090927'/></a></td>
<td><p class='grb'>GRB 090929B</p><a href='/xrt_curves/00371050/'><img src='/xrt_curves/00371050/thumb2.gif' alt='XRT Light curve of GRB 090929B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 091003</p><a href='/xrt_curves/00020115/'><img src='/xrt_curves/00020115/thumb2.gif' alt='XRT Light curve of GRB 091003'/></a></td>
<td><p class='grb'>GRB 091010</p><a href='/xrt_curves/00020116/'><img src='/xrt_curves/00020116/thumb2.gif' alt='XRT Light curve of GRB 091010'/></a></td>
<td><p class='grb'>GRB 091018</p><a href='/xrt_curves/00373172/'><img src='/xrt_curves/00373172/thumb2.gif' alt='XRT Light curve of GRB 091018'/></a></td>
<td><p class='grb'>GRB 091020</p><a href='/xrt_curves/00373458/'><img src='/xrt_curves/00373458/thumb2.gif' alt='XRT Light curve of GRB 091020'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 091024</p><a href='/xrt_curves/00373674/'><img src='/xrt_curves/00373674/thumb2.gif' alt='XRT Light curve of GRB 091024'/></a></td>
<td><p class='grb'>GRB 091026</p><a href='/xrt_curves/00373871/'><img src='/xrt_curves/00373871/thumb2.gif' alt='XRT Light curve of GRB 091026'/></a></td>
<td><p class='grb'>GRB 091029</p><a href='/xrt_curves/00374210/'><img src='/xrt_curves/00374210/thumb2.gif' alt='XRT Light curve of GRB 091029'/></a></td>
<td><p class='grb'>GRB 091102</p><a href='/xrt_curves/00374598/'><img src='/xrt_curves/00374598/thumb2.gif' alt='XRT Light curve of GRB 091102'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 091104</p><a href='/xrt_curves/00374875/'><img src='/xrt_curves/00374875/thumb2.gif' alt='XRT Light curve of GRB 091104'/></a></td>
<td><p class='grb'>GRB 091109A</p><a href='/xrt_curves/00375246/'><img src='/xrt_curves/00375246/thumb2.gif' alt='XRT Light curve of GRB 091109A'/></a></td>
<td><p class='grb'>GRB 091109B</p><a href='/xrt_curves/00375409/'><img src='/xrt_curves/00375409/thumb2.gif' alt='XRT Light curve of GRB 091109B'/></a></td>
<td><p class='grb'>GRB 091111</p><a href='/xrt_curves/00020120/'><img src='/xrt_curves/00020120/thumb2.gif' alt='XRT Light curve of GRB 091111'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 091127</p><a href='/xrt_curves/00377179/'><img src='/xrt_curves/00377179/thumb2.gif' alt='XRT Light curve of GRB 091127'/></a></td>
<td><p class='grb'>GRB 091130B</p><a href='/xrt_curves/00377487/'><img src='/xrt_curves/00377487/thumb2.gif' alt='XRT Light curve of GRB 091130B'/></a></td>
<td><p class='grb'>GRB 091202</p><a href='/xrt_curves/00020123/'><img src='/xrt_curves/00020123/thumb2.gif' alt='XRT Light curve of GRB 091202'/></a></td>
<td><p class='grb'>GRB 091208B</p><a href='/xrt_curves/00378559/'><img src='/xrt_curves/00378559/thumb2.gif' alt='XRT Light curve of GRB 091208B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 091221</p><a href='/xrt_curves/00380311/'><img src='/xrt_curves/00380311/thumb2.gif' alt='XRT Light curve of GRB 091221'/></a></td>
<td><p class='grb'>GRB 091230</p><a href='/xrt_curves/00020124/'><img src='/xrt_curves/00020124/thumb2.gif' alt='XRT Light curve of GRB 091230'/></a></td>
<td><p class='grb'>GRB 100103A</p><a href='/xrt_curves/00020125/'><img src='/xrt_curves/00020125/thumb2.gif' alt='XRT Light curve of GRB 100103A'/></a></td>
<td><p class='grb'>GRB 100111A</p><a href='/xrt_curves/00382399/'><img src='/xrt_curves/00382399/thumb2.gif' alt='XRT Light curve of GRB 100111A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100115A</p><a href='/xrt_curves/00020126/'><img src='/xrt_curves/00020126/thumb2.gif' alt='XRT Light curve of GRB 100115A'/></a></td>
<td><p class='grb'>GRB 100117A</p><a href='/xrt_curves/00382941/'><img src='/xrt_curves/00382941/thumb2.gif' alt='XRT Light curve of GRB 100117A'/></a></td>
<td><p class='grb'>GRB 100205A</p><a href='/xrt_curves/00411248/'><img src='/xrt_curves/00411248/thumb2.gif' alt='XRT Light curve of GRB 100205A'/></a></td>
<td><p class='grb'>GRB 100206A</p><a href='/xrt_curves/00411412/'><img src='/xrt_curves/00411412/thumb2.gif' alt='XRT Light curve of GRB 100206A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100212A</p><a href='/xrt_curves/00412081/'><img src='/xrt_curves/00412081/thumb2.gif' alt='XRT Light curve of GRB 100212A'/></a></td>
<td><p class='grb'>GRB 100213A</p><a href='/xrt_curves/00412217/'><img src='/xrt_curves/00412217/thumb2.gif' alt='XRT Light curve of GRB 100213A'/></a></td>
<td><p class='grb'>GRB 100213B</p><a href='/xrt_curves/00412220/'><img src='/xrt_curves/00412220/thumb2.gif' alt='XRT Light curve of GRB 100213B'/></a></td>
<td><p class='grb'>GRB 100219A</p><a href='/xrt_curves/00412982/'><img src='/xrt_curves/00412982/thumb2.gif' alt='XRT Light curve of GRB 100219A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100302A</p><a href='/xrt_curves/00414592/'><img src='/xrt_curves/00414592/thumb2.gif' alt='XRT Light curve of GRB 100302A'/></a></td>
<td><p class='grb'>GRB 100305A</p><a href='/xrt_curves/00414905/'><img src='/xrt_curves/00414905/thumb2.gif' alt='XRT Light curve of GRB 100305A'/></a></td>
<td><p class='grb'>GRB 100316A</p><a href='/xrt_curves/00416076/'><img src='/xrt_curves/00416076/thumb2.gif' alt='XRT Light curve of GRB 100316A'/></a></td>
<td><p class='grb'>GRB 100316B</p><a href='/xrt_curves/00416103/'><img src='/xrt_curves/00416103/thumb2.gif' alt='XRT Light curve of GRB 100316B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100316C</p><a href='/xrt_curves/00416115/'><img src='/xrt_curves/00416115/thumb2.gif' alt='XRT Light curve of GRB 100316C'/></a></td>
<td><p class='grb'>GRB 100316D</p><a href='/xrt_curves/00416135/'><img src='/xrt_curves/00416135/thumb2.gif' alt='XRT Light curve of GRB 100316D'/></a></td>
<td><p class='grb'>GRB 100331B</p><a href='/xrt_curves/00020132/'><img src='/xrt_curves/00020132/thumb2.gif' alt='XRT Light curve of GRB 100331B'/></a></td>
<td><p class='grb'>GRB 100413A</p><a href='/xrt_curves/00419404/'><img src='/xrt_curves/00419404/thumb2.gif' alt='XRT Light curve of GRB 100413A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100414A</p><a href='/xrt_curves/00020136/'><img src='/xrt_curves/00020136/thumb2.gif' alt='XRT Light curve of GRB 100414A'/></a></td>
<td><p class='grb'>GRB 100418A</p><a href='/xrt_curves/00419797/'><img src='/xrt_curves/00419797/thumb2.gif' alt='XRT Light curve of GRB 100418A'/></a></td>
<td><p class='grb'>GRB 100420A</p><a href='/xrt_curves/00419932/'><img src='/xrt_curves/00419932/thumb2.gif' alt='XRT Light curve of GRB 100420A'/></a></td>
<td><p class='grb'>GRB 100424A</p><a href='/xrt_curves/00420367/'><img src='/xrt_curves/00420367/thumb2.gif' alt='XRT Light curve of GRB 100424A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100425A</p><a href='/xrt_curves/00420398/'><img src='/xrt_curves/00420398/thumb2.gif' alt='XRT Light curve of GRB 100425A'/></a></td>
<td><p class='grb'>GRB 100504A</p><a href='/xrt_curves/00421124/'><img src='/xrt_curves/00421124/thumb2.gif' alt='XRT Light curve of GRB 100504A'/></a></td>
<td><p class='grb'>GRB 100508A</p><a href='/xrt_curves/00421386/'><img src='/xrt_curves/00421386/thumb2.gif' alt='XRT Light curve of GRB 100508A'/></a></td>
<td><p class='grb'>GRB 100513A</p><a href='/xrt_curves/00421814/'><img src='/xrt_curves/00421814/thumb2.gif' alt='XRT Light curve of GRB 100513A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100514A</p><a href='/xrt_curves/00421962/'><img src='/xrt_curves/00421962/thumb2.gif' alt='XRT Light curve of GRB 100514A'/></a></td>
<td><p class='grb'>GRB 100518A</p><a href='/xrt_curves/00020138/'><img src='/xrt_curves/00020138/thumb2.gif' alt='XRT Light curve of GRB 100518A'/></a></td>
<td><p class='grb'>GRB 100522A</p><a href='/xrt_curves/00422783/'><img src='/xrt_curves/00422783/thumb2.gif' alt='XRT Light curve of GRB 100522A'/></a></td>
<td><p class='grb'>GRB 100526A</p><a href='/xrt_curves/00423181/'><img src='/xrt_curves/00423181/thumb2.gif' alt='XRT Light curve of GRB 100526A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100526B</p><a href='/xrt_curves/00423184/'><img src='/xrt_curves/00423184/thumb2.gif' alt='XRT Light curve of GRB 100526B'/></a></td>
<td><p class='grb'>GRB 100528A</p><a href='/xrt_curves/00020139/'><img src='/xrt_curves/00020139/thumb2.gif' alt='XRT Light curve of GRB 100528A'/></a></td>
<td><p class='grb'>GRB 100606A</p><a href='/xrt_curves/00424031/'><img src='/xrt_curves/00424031/thumb2.gif' alt='XRT Light curve of GRB 100606A'/></a></td>
<td><p class='grb'>GRB 100614A</p><a href='/xrt_curves/00424716/'><img src='/xrt_curves/00424716/thumb2.gif' alt='XRT Light curve of GRB 100614A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100615A</p><a href='/xrt_curves/00424733/'><img src='/xrt_curves/00424733/thumb2.gif' alt='XRT Light curve of GRB 100615A'/></a></td>
<td><p class='grb'>GRB 100619A</p><a href='/xrt_curves/00424998/'><img src='/xrt_curves/00424998/thumb2.gif' alt='XRT Light curve of GRB 100619A'/></a></td>
<td><p class='grb'>GRB 100621A</p><a href='/xrt_curves/00425151/'><img src='/xrt_curves/00425151/thumb2.gif' alt='XRT Light curve of GRB 100621A'/></a></td>
<td><p class='grb'>GRB 100625A</p><a href='/xrt_curves/00425647/'><img src='/xrt_curves/00425647/thumb2.gif' alt='XRT Light curve of GRB 100625A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100628A</p><a href='/xrt_curves/00426114/'><img src='/xrt_curves/00426114/thumb2.gif' alt='XRT Light curve of GRB 100628A'/></a></td>
<td><p class='grb'>GRB 100702A</p><a href='/xrt_curves/00426438/'><img src='/xrt_curves/00426438/thumb2.gif' alt='XRT Light curve of GRB 100702A'/></a></td>
<td><p class='grb'>GRB 100704A</p><a href='/xrt_curves/00426722/'><img src='/xrt_curves/00426722/thumb2.gif' alt='XRT Light curve of GRB 100704A'/></a></td>
<td><p class='grb'>GRB 100713A</p><a href='/xrt_curves/00020143/'><img src='/xrt_curves/00020143/thumb2.gif' alt='XRT Light curve of GRB 100713A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100724A</p><a href='/xrt_curves/00429868/'><img src='/xrt_curves/00429868/thumb2.gif' alt='XRT Light curve of GRB 100724A'/></a></td>
<td><p class='grb'>GRB 100725A</p><a href='/xrt_curves/00429954/'><img src='/xrt_curves/00429954/thumb2.gif' alt='XRT Light curve of GRB 100725A'/></a></td>
<td><p class='grb'>GRB 100725B</p><a href='/xrt_curves/00429969/'><img src='/xrt_curves/00429969/thumb2.gif' alt='XRT Light curve of GRB 100725B'/></a></td>
<td><p class='grb'>GRB 100727A</p><a href='/xrt_curves/00430094/'><img src='/xrt_curves/00430094/thumb2.gif' alt='XRT Light curve of GRB 100727A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100728A</p><a href='/xrt_curves/00430151/'><img src='/xrt_curves/00430151/thumb2.gif' alt='XRT Light curve of GRB 100728A'/></a></td>
<td><p class='grb'>GRB 100728B</p><a href='/xrt_curves/00430172/'><img src='/xrt_curves/00430172/thumb2.gif' alt='XRT Light curve of GRB 100728B'/></a></td>
<td><p class='grb'>GRB 100802A</p><a href='/xrt_curves/00430603/'><img src='/xrt_curves/00430603/thumb2.gif' alt='XRT Light curve of GRB 100802A'/></a></td>
<td><p class='grb'>GRB 100805A</p><a href='/xrt_curves/00430957/'><img src='/xrt_curves/00430957/thumb2.gif' alt='XRT Light curve of GRB 100805A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100807A</p><a href='/xrt_curves/00431128/'><img src='/xrt_curves/00431128/thumb2.gif' alt='XRT Light curve of GRB 100807A'/></a></td>
<td><p class='grb'>GRB 100814A</p><a href='/xrt_curves/00431605/'><img src='/xrt_curves/00431605/thumb2.gif' alt='XRT Light curve of GRB 100814A'/></a></td>
<td><p class='grb'>GRB 100816A</p><a href='/xrt_curves/00431764/'><img src='/xrt_curves/00431764/thumb2.gif' alt='XRT Light curve of GRB 100816A'/></a></td>
<td><p class='grb'>GRB 100823A</p><a href='/xrt_curves/00432420/'><img src='/xrt_curves/00432420/thumb2.gif' alt='XRT Light curve of GRB 100823A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100901A</p><a href='/xrt_curves/00433065/'><img src='/xrt_curves/00433065/thumb2.gif' alt='XRT Light curve of GRB 100901A'/></a></td>
<td><p class='grb'>GRB 100902A</p><a href='/xrt_curves/00433160/'><img src='/xrt_curves/00433160/thumb2.gif' alt='XRT Light curve of GRB 100902A'/></a></td>
<td><p class='grb'>GRB 100905A</p><a href='/xrt_curves/00433442/'><img src='/xrt_curves/00433442/thumb2.gif' alt='XRT Light curve of GRB 100905A'/></a></td>
<td><p class='grb'>GRB 100906A</p><a href='/xrt_curves/00433509/'><img src='/xrt_curves/00433509/thumb2.gif' alt='XRT Light curve of GRB 100906A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 100909A</p><a href='/xrt_curves/00020147/'><img src='/xrt_curves/00020147/thumb2.gif' alt='XRT Light curve of GRB 100909A'/></a></td>
<td><p class='grb'>GRB 100915A</p><a href='/xrt_curves/00434178/'><img src='/xrt_curves/00434178/thumb2.gif' alt='XRT Light curve of GRB 100915A'/></a></td>
<td><p class='grb'>GRB 101008A</p><a href='/xrt_curves/00435903/'><img src='/xrt_curves/00435903/thumb2.gif' alt='XRT Light curve of GRB 101008A'/></a></td>
<td><p class='grb'>GRB 101011A</p><a href='/xrt_curves/00436094/'><img src='/xrt_curves/00436094/thumb2.gif' alt='XRT Light curve of GRB 101011A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 101017A</p><a href='/xrt_curves/00436429/'><img src='/xrt_curves/00436429/thumb2.gif' alt='XRT Light curve of GRB 101017A'/></a></td>
<td><p class='grb'>GRB 101023A</p><a href='/xrt_curves/00436981/'><img src='/xrt_curves/00436981/thumb2.gif' alt='XRT Light curve of GRB 101023A'/></a></td>
<td><p class='grb'>GRB 101024A</p><a href='/xrt_curves/00437016/'><img src='/xrt_curves/00437016/thumb2.gif' alt='XRT Light curve of GRB 101024A'/></a></td>
<td><p class='grb'>GRB 101030A</p><a href='/xrt_curves/00437408/'><img src='/xrt_curves/00437408/thumb2.gif' alt='XRT Light curve of GRB 101030A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 101112A</p><a href='/xrt_curves/00020149/'><img src='/xrt_curves/00020149/thumb2.gif' alt='XRT Light curve of GRB 101112A'/></a></td>
<td><p class='grb'>GRB 101114A</p><a href='/xrt_curves/00020150/'><img src='/xrt_curves/00020150/thumb2.gif' alt='XRT Light curve of GRB 101114A'/></a></td>
<td><p class='grb'>GRB 101117B</p><a href='/xrt_curves/00438675/'><img src='/xrt_curves/00438675/thumb2.gif' alt='XRT Light curve of GRB 101117B'/></a></td>
<td><p class='grb'>GRB 101201A</p><a href='/xrt_curves/00020152/'><img src='/xrt_curves/00020152/thumb2.gif' alt='XRT Light curve of GRB 101201A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 101204A</p><a href='/xrt_curves/00020153/'><img src='/xrt_curves/00020153/thumb2.gif' alt='XRT Light curve of GRB 101204A'/></a></td>
<td><p class='grb'>GRB 101213A</p><a href='/xrt_curves/00440285/'><img src='/xrt_curves/00440285/thumb2.gif' alt='XRT Light curve of GRB 101213A'/></a></td>
<td><p class='grb'>GRB 101219A</p><a href='/xrt_curves/00440606/'><img src='/xrt_curves/00440606/thumb2.gif' alt='XRT Light curve of GRB 101219A'/></a></td>
<td><p class='grb'>GRB 101219B</p><a href='/xrt_curves/00440635/'><img src='/xrt_curves/00440635/thumb2.gif' alt='XRT Light curve of GRB 101219B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 101224A</p><a href='/xrt_curves/00440955/'><img src='/xrt_curves/00440955/thumb2.gif' alt='XRT Light curve of GRB 101224A'/></a></td>
<td><p class='grb'>GRB 101225A</p><a href='/xrt_curves/00441015/'><img src='/xrt_curves/00441015/thumb2.gif' alt='XRT Light curve of GRB 101225A'/></a></td>
<td><p class='grb'>GRB 110102A</p><a href='/xrt_curves/00441454/'><img src='/xrt_curves/00441454/thumb2.gif' alt='XRT Light curve of GRB 110102A'/></a></td>
<td><p class='grb'>GRB 110106A</p><a href='/xrt_curves/00441664/'><img src='/xrt_curves/00441664/thumb2.gif' alt='XRT Light curve of GRB 110106A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110106B</p><a href='/xrt_curves/00441676/'><img src='/xrt_curves/00441676/thumb2.gif' alt='XRT Light curve of GRB 110106B'/></a></td>
<td><p class='grb'>GRB 110107A</p><a href='/xrt_curves/00020154/'><img src='/xrt_curves/00020154/thumb2.gif' alt='XRT Light curve of GRB 110107A'/></a></td>
<td><p class='grb'>GRB 110112A</p><a href='/xrt_curves/00442039/'><img src='/xrt_curves/00442039/thumb2.gif' alt='XRT Light curve of GRB 110112A'/></a></td>
<td><p class='grb'>GRB 110119A</p><a href='/xrt_curves/00442978/'><img src='/xrt_curves/00442978/thumb2.gif' alt='XRT Light curve of GRB 110119A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110128A</p><a href='/xrt_curves/00443861/'><img src='/xrt_curves/00443861/thumb2.gif' alt='XRT Light curve of GRB 110128A'/></a></td>
<td><p class='grb'>GRB 110201A</p><a href='/xrt_curves/00444230/'><img src='/xrt_curves/00444230/thumb2.gif' alt='XRT Light curve of GRB 110201A'/></a></td>
<td><p class='grb'>GRB 110205A</p><a href='/xrt_curves/00444643/'><img src='/xrt_curves/00444643/thumb2.gif' alt='XRT Light curve of GRB 110205A'/></a></td>
<td><p class='grb'>GRB 110206A</p><a href='/xrt_curves/00020156/'><img src='/xrt_curves/00020156/thumb2.gif' alt='XRT Light curve of GRB 110206A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110208A</p><a href='/xrt_curves/00445038/'><img src='/xrt_curves/00445038/thumb2.gif' alt='XRT Light curve of GRB 110208A'/></a></td>
<td><p class='grb'>GRB 110210A</p><a href='/xrt_curves/00445141/'><img src='/xrt_curves/00445141/thumb2.gif' alt='XRT Light curve of GRB 110210A'/></a></td>
<td><p class='grb'>GRB 110213A</p><a href='/xrt_curves/00445414/'><img src='/xrt_curves/00445414/thumb2.gif' alt='XRT Light curve of GRB 110213A'/></a></td>
<td><p class='grb'>GRB 110213B</p><a href='/xrt_curves/00020157/'><img src='/xrt_curves/00020157/thumb2.gif' alt='XRT Light curve of GRB 110213B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110223A</p><a href='/xrt_curves/00446674/'><img src='/xrt_curves/00446674/thumb2.gif' alt='XRT Light curve of GRB 110223A'/></a></td>
<td><p class='grb'>GRB 110223B</p><a href='/xrt_curves/00446677/'><img src='/xrt_curves/00446677/thumb2.gif' alt='XRT Light curve of GRB 110223B'/></a></td>
<td><p class='grb'>GRB 110305A</p><a href='/xrt_curves/00448229/'><img src='/xrt_curves/00448229/thumb2.gif' alt='XRT Light curve of GRB 110305A'/></a></td>
<td><p class='grb'>GRB 110312A</p><a href='/xrt_curves/00449074/'><img src='/xrt_curves/00449074/thumb2.gif' alt='XRT Light curve of GRB 110312A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110315A</p><a href='/xrt_curves/00449399/'><img src='/xrt_curves/00449399/thumb2.gif' alt='XRT Light curve of GRB 110315A'/></a></td>
<td><p class='grb'>GRB 110318B</p><a href='/xrt_curves/00449549/'><img src='/xrt_curves/00449549/thumb2.gif' alt='XRT Light curve of GRB 110318B'/></a></td>
<td><p class='grb'>GRB 110319A</p><a href='/xrt_curves/00449578/'><img src='/xrt_curves/00449578/thumb2.gif' alt='XRT Light curve of GRB 110319A'/></a></td>
<td><p class='grb'>GRB 110319B</p><a href='/xrt_curves/00020158/'><img src='/xrt_curves/00020158/thumb2.gif' alt='XRT Light curve of GRB 110319B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110402A</p><a href='/xrt_curves/00450545/'><img src='/xrt_curves/00450545/thumb2.gif' alt='XRT Light curve of GRB 110402A'/></a></td>
<td><p class='grb'>GRB 110407A</p><a href='/xrt_curves/00450884/'><img src='/xrt_curves/00450884/thumb2.gif' alt='XRT Light curve of GRB 110407A'/></a></td>
<td><p class='grb'>GRB 110411A</p><a href='/xrt_curves/00451165/'><img src='/xrt_curves/00451165/thumb2.gif' alt='XRT Light curve of GRB 110411A'/></a></td>
<td><p class='grb'>GRB 110414A</p><a href='/xrt_curves/00451343/'><img src='/xrt_curves/00451343/thumb2.gif' alt='XRT Light curve of GRB 110414A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110420A</p><a href='/xrt_curves/00451757/'><img src='/xrt_curves/00451757/thumb2.gif' alt='XRT Light curve of GRB 110420A'/></a></td>
<td><p class='grb'>GRB 110422A</p><a href='/xrt_curves/00451901/'><img src='/xrt_curves/00451901/thumb2.gif' alt='XRT Light curve of GRB 110422A'/></a></td>
<td><p class='grb'>GRB 110428A</p><a href='/xrt_curves/00020161/'><img src='/xrt_curves/00020161/thumb2.gif' alt='XRT Light curve of GRB 110428A'/></a></td>
<td><p class='grb'>GRB 110503A</p><a href='/xrt_curves/00452685/'><img src='/xrt_curves/00452685/thumb2.gif' alt='XRT Light curve of GRB 110503A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110520A</p><a href='/xrt_curves/00453747/'><img src='/xrt_curves/00453747/thumb2.gif' alt='XRT Light curve of GRB 110520A'/></a></td>
<td><p class='grb'>GRB 110521A</p><a href='/xrt_curves/00453788/'><img src='/xrt_curves/00453788/thumb2.gif' alt='XRT Light curve of GRB 110521A'/></a></td>
<td><p class='grb'>GRB 110530A</p><a href='/xrt_curves/00454473/'><img src='/xrt_curves/00454473/thumb2.gif' alt='XRT Light curve of GRB 110530A'/></a></td>
<td><p class='grb'>GRB 110604A</p><a href='/xrt_curves/00020162/'><img src='/xrt_curves/00020162/thumb2.gif' alt='XRT Light curve of GRB 110604A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110610A</p><a href='/xrt_curves/00455155/'><img src='/xrt_curves/00455155/thumb2.gif' alt='XRT Light curve of GRB 110610A'/></a></td>
<td><p class='grb'>GRB 110625A</p><a href='/xrt_curves/00456073/'><img src='/xrt_curves/00456073/thumb2.gif' alt='XRT Light curve of GRB 110625A'/></a></td>
<td><p class='grb'>GRB 110709A</p><a href='/xrt_curves/00456939/'><img src='/xrt_curves/00456939/thumb2.gif' alt='XRT Light curve of GRB 110709A'/></a></td>
<td><p class='grb'>GRB 110709B</p><a href='/xrt_curves/00456967/'><img src='/xrt_curves/00456967/thumb2.gif' alt='XRT Light curve of GRB 110709B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110715A</p><a href='/xrt_curves/00457330/'><img src='/xrt_curves/00457330/thumb2.gif' alt='XRT Light curve of GRB 110715A'/></a></td>
<td><p class='grb'>GRB 110719A</p><a href='/xrt_curves/00457553/'><img src='/xrt_curves/00457553/thumb2.gif' alt='XRT Light curve of GRB 110719A'/></a></td>
<td><p class='grb'>GRB 110726A</p><a href='/xrt_curves/00458059/'><img src='/xrt_curves/00458059/thumb2.gif' alt='XRT Light curve of GRB 110726A'/></a></td>
<td><p class='grb'>GRB 110731A</p><a href='/xrt_curves/00458448/'><img src='/xrt_curves/00458448/thumb2.gif' alt='XRT Light curve of GRB 110731A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110801A</p><a href='/xrt_curves/00458521/'><img src='/xrt_curves/00458521/thumb2.gif' alt='XRT Light curve of GRB 110801A'/></a></td>
<td><p class='grb'>GRB 110802A</p><a href='/xrt_curves/00020175/'><img src='/xrt_curves/00020175/thumb2.gif' alt='XRT Light curve of GRB 110802A'/></a></td>
<td><p class='grb'>GRB 110808A</p><a href='/xrt_curves/00458918/'><img src='/xrt_curves/00458918/thumb2.gif' alt='XRT Light curve of GRB 110808A'/></a></td>
<td><p class='grb'>GRB 110818A</p><a href='/xrt_curves/00500914/'><img src='/xrt_curves/00500914/thumb2.gif' alt='XRT Light curve of GRB 110818A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110820A</p><a href='/xrt_curves/00501095/'><img src='/xrt_curves/00501095/thumb2.gif' alt='XRT Light curve of GRB 110820A'/></a></td>
<td><p class='grb'>GRB 110825A</p><a href='/xrt_curves/00020183/'><img src='/xrt_curves/00020183/thumb2.gif' alt='XRT Light curve of GRB 110825A'/></a></td>
<td><p class='grb'>GRB 110903A</p><a href='/xrt_curves/00020184/'><img src='/xrt_curves/00020184/thumb2.gif' alt='XRT Light curve of GRB 110903A'/></a></td>
<td><p class='grb'>GRB 110915A</p><a href='/xrt_curves/00503219/'><img src='/xrt_curves/00503219/thumb2.gif' alt='XRT Light curve of GRB 110915A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 110915B</p><a href='/xrt_curves/00020185/'><img src='/xrt_curves/00020185/thumb2.gif' alt='XRT Light curve of GRB 110915B'/></a></td>
<td><p class='grb'>GRB 110918A</p><a href='/xrt_curves/00020186/'><img src='/xrt_curves/00020186/thumb2.gif' alt='XRT Light curve of GRB 110918A'/></a></td>
<td><p class='grb'>GRB 110921A</p><a href='/xrt_curves/00503652/'><img src='/xrt_curves/00503652/thumb2.gif' alt='XRT Light curve of GRB 110921A'/></a></td>
<td><p class='grb'>GRB 110928A</p><a href='/xrt_curves/00504215/'><img src='/xrt_curves/00504215/thumb2.gif' alt='XRT Light curve of GRB 110928A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111008A</p><a href='/xrt_curves/00505054/'><img src='/xrt_curves/00505054/thumb2.gif' alt='XRT Light curve of GRB 111008A'/></a></td>
<td><p class='grb'>GRB 111016A</p><a href='/xrt_curves/00505646/'><img src='/xrt_curves/00505646/thumb2.gif' alt='XRT Light curve of GRB 111016A'/></a></td>
<td><p class='grb'>GRB 111018A</p><a href='/xrt_curves/00505801/'><img src='/xrt_curves/00505801/thumb2.gif' alt='XRT Light curve of GRB 111018A'/></a></td>
<td><p class='grb'>GRB 111020A</p><a href='/xrt_curves/00505926/'><img src='/xrt_curves/00505926/thumb2.gif' alt='XRT Light curve of GRB 111020A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111022A</p><a href='/xrt_curves/00506070/'><img src='/xrt_curves/00506070/thumb2.gif' alt='XRT Light curve of GRB 111022A'/></a></td>
<td><p class='grb'>GRB 111022B</p><a href='/xrt_curves/00506074/'><img src='/xrt_curves/00506074/thumb2.gif' alt='XRT Light curve of GRB 111022B'/></a></td>
<td><p class='grb'>GRB 111029A</p><a href='/xrt_curves/00506519/'><img src='/xrt_curves/00506519/thumb2.gif' alt='XRT Light curve of GRB 111029A'/></a></td>
<td><p class='grb'>GRB 111103B</p><a href='/xrt_curves/00506903/'><img src='/xrt_curves/00506903/thumb2.gif' alt='XRT Light curve of GRB 111103B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111107A</p><a href='/xrt_curves/00507185/'><img src='/xrt_curves/00507185/thumb2.gif' alt='XRT Light curve of GRB 111107A'/></a></td>
<td><p class='grb'>GRB 111109A</p><a href='/xrt_curves/00507342/'><img src='/xrt_curves/00507342/thumb2.gif' alt='XRT Light curve of GRB 111109A'/></a></td>
<td><p class='grb'>GRB 111117A</p><a href='/xrt_curves/00507901/'><img src='/xrt_curves/00507901/thumb2.gif' alt='XRT Light curve of GRB 111117A'/></a></td>
<td><p class='grb'>GRB 111121A</p><a href='/xrt_curves/00508161/'><img src='/xrt_curves/00508161/thumb2.gif' alt='XRT Light curve of GRB 111121A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111123A</p><a href='/xrt_curves/00508319/'><img src='/xrt_curves/00508319/thumb2.gif' alt='XRT Light curve of GRB 111123A'/></a></td>
<td><p class='grb'>GRB 111129A</p><a href='/xrt_curves/00508712/'><img src='/xrt_curves/00508712/thumb2.gif' alt='XRT Light curve of GRB 111129A'/></a></td>
<td><p class='grb'>GRB 111201A</p><a href='/xrt_curves/00020188/'><img src='/xrt_curves/00020188/thumb2.gif' alt='XRT Light curve of GRB 111201A'/></a></td>
<td><p class='grb'>GRB 111204A</p><a href='/xrt_curves/00509018/'><img src='/xrt_curves/00509018/thumb2.gif' alt='XRT Light curve of GRB 111204A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111205A</p><a href='/xrt_curves/00020189/'><img src='/xrt_curves/00020189/thumb2.gif' alt='XRT Light curve of GRB 111205A'/></a></td>
<td><p class='grb'>GRB 111208A</p><a href='/xrt_curves/00020190/'><img src='/xrt_curves/00020190/thumb2.gif' alt='XRT Light curve of GRB 111208A'/></a></td>
<td><p class='grb'>GRB 111209A</p><a href='/xrt_curves/00509336/'><img src='/xrt_curves/00509336/thumb2.gif' alt='XRT Light curve of GRB 111209A'/></a></td>
<td><p class='grb'>GRB 111210A</p><a href='/xrt_curves/00509419/'><img src='/xrt_curves/00509419/thumb2.gif' alt='XRT Light curve of GRB 111210A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111211A</p><a href='/xrt_curves/00020192/'><img src='/xrt_curves/00020192/thumb2.gif' alt='XRT Light curve of GRB 111211A'/></a></td>
<td><p class='grb'>GRB 111212A</p><a href='/xrt_curves/00509543/'><img src='/xrt_curves/00509543/thumb2.gif' alt='XRT Light curve of GRB 111212A'/></a></td>
<td><p class='grb'>GRB 111215A</p><a href='/xrt_curves/00509717/'><img src='/xrt_curves/00509717/thumb2.gif' alt='XRT Light curve of GRB 111215A'/></a></td>
<td><p class='grb'>GRB 111215B</p><a href='/xrt_curves/00020193/'><img src='/xrt_curves/00020193/thumb2.gif' alt='XRT Light curve of GRB 111215B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 111222A</p><a href='/xrt_curves/00020194/'><img src='/xrt_curves/00020194/thumb2.gif' alt='XRT Light curve of GRB 111222A'/></a></td>
<td><p class='grb'>GRB 111225A</p><a href='/xrt_curves/00510341/'><img src='/xrt_curves/00510341/thumb2.gif' alt='XRT Light curve of GRB 111225A'/></a></td>
<td><p class='grb'>GRB 111228A</p><a href='/xrt_curves/00510649/'><img src='/xrt_curves/00510649/thumb2.gif' alt='XRT Light curve of GRB 111228A'/></a></td>
<td><p class='grb'>GRB 111229A</p><a href='/xrt_curves/00510736/'><img src='/xrt_curves/00510736/thumb2.gif' alt='XRT Light curve of GRB 111229A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120102A</p><a href='/xrt_curves/00510922/'><img src='/xrt_curves/00510922/thumb2.gif' alt='XRT Light curve of GRB 120102A'/></a></td>
<td><p class='grb'>GRB 120106A</p><a href='/xrt_curves/00511235/'><img src='/xrt_curves/00511235/thumb2.gif' alt='XRT Light curve of GRB 120106A'/></a></td>
<td><p class='grb'>GRB 120116A</p><a href='/xrt_curves/00511866/'><img src='/xrt_curves/00511866/thumb2.gif' alt='XRT Light curve of GRB 120116A'/></a></td>
<td><p class='grb'>GRB 120118B</p><a href='/xrt_curves/00512003/'><img src='/xrt_curves/00512003/thumb2.gif' alt='XRT Light curve of GRB 120118B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120119A</p><a href='/xrt_curves/00512035/'><img src='/xrt_curves/00512035/thumb2.gif' alt='XRT Light curve of GRB 120119A'/></a></td>
<td><p class='grb'>GRB 120121A</p><a href='/xrt_curves/00512164/'><img src='/xrt_curves/00512164/thumb2.gif' alt='XRT Light curve of GRB 120121A'/></a></td>
<td><p class='grb'>GRB 120202A</p><a href='/xrt_curves/00020206/'><img src='/xrt_curves/00020206/thumb2.gif' alt='XRT Light curve of GRB 120202A'/></a></td>
<td><p class='grb'>GRB 120211A</p><a href='/xrt_curves/00514586/'><img src='/xrt_curves/00514586/thumb2.gif' alt='XRT Light curve of GRB 120211A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120212A</p><a href='/xrt_curves/00514709/'><img src='/xrt_curves/00514709/thumb2.gif' alt='XRT Light curve of GRB 120212A'/></a></td>
<td><p class='grb'>GRB 120213A</p><a href='/xrt_curves/00514767/'><img src='/xrt_curves/00514767/thumb2.gif' alt='XRT Light curve of GRB 120213A'/></a></td>
<td><p class='grb'>GRB 120215A</p><a href='/xrt_curves/00515015/'><img src='/xrt_curves/00515015/thumb2.gif' alt='XRT Light curve of GRB 120215A'/></a></td>
<td><p class='grb'>GRB 120219A</p><a href='/xrt_curves/00515375/'><img src='/xrt_curves/00515375/thumb2.gif' alt='XRT Light curve of GRB 120219A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120224A</p><a href='/xrt_curves/00515976/'><img src='/xrt_curves/00515976/thumb2.gif' alt='XRT Light curve of GRB 120224A'/></a></td>
<td><p class='grb'>GRB 120302A</p><a href='/xrt_curves/00020214/'><img src='/xrt_curves/00020214/thumb2.gif' alt='XRT Light curve of GRB 120302A'/></a></td>
<td><p class='grb'>GRB 120305A</p><a href='/xrt_curves/00516997/'><img src='/xrt_curves/00516997/thumb2.gif' alt='XRT Light curve of GRB 120305A'/></a></td>
<td><p class='grb'>GRB 120308A</p><a href='/xrt_curves/00517234/'><img src='/xrt_curves/00517234/thumb2.gif' alt='XRT Light curve of GRB 120308A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120311A</p><a href='/xrt_curves/00517469/'><img src='/xrt_curves/00517469/thumb2.gif' alt='XRT Light curve of GRB 120311A'/></a></td>
<td><p class='grb'>GRB 120311B</p><a href='/xrt_curves/00517489/'><img src='/xrt_curves/00517489/thumb2.gif' alt='XRT Light curve of GRB 120311B'/></a></td>
<td><p class='grb'>GRB 120312A</p><a href='/xrt_curves/00517566/'><img src='/xrt_curves/00517566/thumb2.gif' alt='XRT Light curve of GRB 120312A'/></a></td>
<td><p class='grb'>GRB 120320A</p><a href='/xrt_curves/00518200/'><img src='/xrt_curves/00518200/thumb2.gif' alt='XRT Light curve of GRB 120320A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120324A</p><a href='/xrt_curves/00518507/'><img src='/xrt_curves/00518507/thumb2.gif' alt='XRT Light curve of GRB 120324A'/></a></td>
<td><p class='grb'>GRB 120326A</p><a href='/xrt_curves/00518626/'><img src='/xrt_curves/00518626/thumb2.gif' alt='XRT Light curve of GRB 120326A'/></a></td>
<td><p class='grb'>GRB 120327A</p><a href='/xrt_curves/00518731/'><img src='/xrt_curves/00518731/thumb2.gif' alt='XRT Light curve of GRB 120327A'/></a></td>
<td><p class='grb'>GRB 120328A</p><a href='/xrt_curves/00518792/'><img src='/xrt_curves/00518792/thumb2.gif' alt='XRT Light curve of GRB 120328A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120401A</p><a href='/xrt_curves/00519043/'><img src='/xrt_curves/00519043/thumb2.gif' alt='XRT Light curve of GRB 120401A'/></a></td>
<td><p class='grb'>GRB 120403B</p><a href='/xrt_curves/00519256/'><img src='/xrt_curves/00519256/thumb2.gif' alt='XRT Light curve of GRB 120403B'/></a></td>
<td><p class='grb'>GRB 120404A</p><a href='/xrt_curves/00519380/'><img src='/xrt_curves/00519380/thumb2.gif' alt='XRT Light curve of GRB 120404A'/></a></td>
<td><p class='grb'>GRB 120419A</p><a href='/xrt_curves/00020215/'><img src='/xrt_curves/00020215/thumb2.gif' alt='XRT Light curve of GRB 120419A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120422A</p><a href='/xrt_curves/00520658/'><img src='/xrt_curves/00520658/thumb2.gif' alt='XRT Light curve of GRB 120422A'/></a></td>
<td><p class='grb'>GRB 120514A</p><a href='/xrt_curves/00522197/'><img src='/xrt_curves/00522197/thumb2.gif' alt='XRT Light curve of GRB 120514A'/></a></td>
<td><p class='grb'>GRB 120521A</p><a href='/xrt_curves/00522578/'><img src='/xrt_curves/00522578/thumb2.gif' alt='XRT Light curve of GRB 120521A'/></a></td>
<td><p class='grb'>GRB 120521B</p><a href='/xrt_curves/00522586/'><img src='/xrt_curves/00522586/thumb2.gif' alt='XRT Light curve of GRB 120521B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120521C</p><a href='/xrt_curves/00522656/'><img src='/xrt_curves/00522656/thumb2.gif' alt='XRT Light curve of GRB 120521C'/></a></td>
<td><p class='grb'>GRB 120612A</p><a href='/xrt_curves/00524128/'><img src='/xrt_curves/00524128/thumb2.gif' alt='XRT Light curve of GRB 120612A'/></a></td>
<td><p class='grb'>GRB 120624B</p><a href='/xrt_curves/00525068/'><img src='/xrt_curves/00525068/thumb2.gif' alt='XRT Light curve of GRB 120624B'/></a></td>
<td><p class='grb'>GRB 120630A</p><a href='/xrt_curves/00525451/'><img src='/xrt_curves/00525451/thumb2.gif' alt='XRT Light curve of GRB 120630A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120701A</p><a href='/xrt_curves/00525477/'><img src='/xrt_curves/00525477/thumb2.gif' alt='XRT Light curve of GRB 120701A'/></a></td>
<td><p class='grb'>GRB 120703A</p><a href='/xrt_curves/00525671/'><img src='/xrt_curves/00525671/thumb2.gif' alt='XRT Light curve of GRB 120703A'/></a></td>
<td><p class='grb'>GRB 120711A</p><a href='/xrt_curves/00020223/'><img src='/xrt_curves/00020223/thumb2.gif' alt='XRT Light curve of GRB 120711A'/></a></td>
<td><p class='grb'>GRB 120711B</p><a href='/xrt_curves/00526270/'><img src='/xrt_curves/00526270/thumb2.gif' alt='XRT Light curve of GRB 120711B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120712A</p><a href='/xrt_curves/00526351/'><img src='/xrt_curves/00526351/thumb2.gif' alt='XRT Light curve of GRB 120712A'/></a></td>
<td><p class='grb'>GRB 120714A</p><a href='/xrt_curves/00526593/'><img src='/xrt_curves/00526593/thumb2.gif' alt='XRT Light curve of GRB 120714A'/></a></td>
<td><p class='grb'>GRB 120714B</p><a href='/xrt_curves/00526642/'><img src='/xrt_curves/00526642/thumb2.gif' alt='XRT Light curve of GRB 120714B'/></a></td>
<td><p class='grb'>GRB 120716A</p><a href='/xrt_curves/00020225/'><img src='/xrt_curves/00020225/thumb2.gif' alt='XRT Light curve of GRB 120716A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120722A</p><a href='/xrt_curves/00528195/'><img src='/xrt_curves/00528195/thumb2.gif' alt='XRT Light curve of GRB 120722A'/></a></td>
<td><p class='grb'>GRB 120724A</p><a href='/xrt_curves/00528443/'><img src='/xrt_curves/00528443/thumb2.gif' alt='XRT Light curve of GRB 120724A'/></a></td>
<td><p class='grb'>GRB 120728A</p><a href='/xrt_curves/00529021/'><img src='/xrt_curves/00529021/thumb2.gif' alt='XRT Light curve of GRB 120728A'/></a></td>
<td><p class='grb'>GRB 120729A</p><a href='/xrt_curves/00529095/'><img src='/xrt_curves/00529095/thumb2.gif' alt='XRT Light curve of GRB 120729A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120802A</p><a href='/xrt_curves/00529486/'><img src='/xrt_curves/00529486/thumb2.gif' alt='XRT Light curve of GRB 120802A'/></a></td>
<td><p class='grb'>GRB 120803A</p><a href='/xrt_curves/00529582/'><img src='/xrt_curves/00529582/thumb2.gif' alt='XRT Light curve of GRB 120803A'/></a></td>
<td><p class='grb'>GRB 120803B</p><a href='/xrt_curves/00529606/'><img src='/xrt_curves/00529606/thumb2.gif' alt='XRT Light curve of GRB 120803B'/></a></td>
<td><p class='grb'>GRB 120804A</p><a href='/xrt_curves/00529686/'><img src='/xrt_curves/00529686/thumb2.gif' alt='XRT Light curve of GRB 120804A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120805A</p><a href='/xrt_curves/00530031/'><img src='/xrt_curves/00530031/thumb2.gif' alt='XRT Light curve of GRB 120805A'/></a></td>
<td><p class='grb'>GRB 120807A</p><a href='/xrt_curves/00530267/'><img src='/xrt_curves/00530267/thumb2.gif' alt='XRT Light curve of GRB 120807A'/></a></td>
<td><p class='grb'>GRB 120811A</p><a href='/xrt_curves/00530581/'><img src='/xrt_curves/00530581/thumb2.gif' alt='XRT Light curve of GRB 120811A'/></a></td>
<td><p class='grb'>GRB 120811C</p><a href='/xrt_curves/00530689/'><img src='/xrt_curves/00530689/thumb2.gif' alt='XRT Light curve of GRB 120811C'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120815A</p><a href='/xrt_curves/00531003/'><img src='/xrt_curves/00531003/thumb2.gif' alt='XRT Light curve of GRB 120815A'/></a></td>
<td><p class='grb'>GRB 120816A</p><a href='/xrt_curves/00531223/'><img src='/xrt_curves/00531223/thumb2.gif' alt='XRT Light curve of GRB 120816A'/></a></td>
<td><p class='grb'>GRB 120817A</p><a href='/xrt_curves/00531267/'><img src='/xrt_curves/00531267/thumb2.gif' alt='XRT Light curve of GRB 120817A'/></a></td>
<td><p class='grb'>GRB 120819A</p><a href='/xrt_curves/00531428/'><img src='/xrt_curves/00531428/thumb2.gif' alt='XRT Light curve of GRB 120819A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120907A</p><a href='/xrt_curves/00532871/'><img src='/xrt_curves/00532871/thumb2.gif' alt='XRT Light curve of GRB 120907A'/></a></td>
<td><p class='grb'>GRB 120909A</p><a href='/xrt_curves/00533060/'><img src='/xrt_curves/00533060/thumb2.gif' alt='XRT Light curve of GRB 120909A'/></a></td>
<td><p class='grb'>GRB 120911A</p><a href='/xrt_curves/00533268/'><img src='/xrt_curves/00533268/thumb2.gif' alt='XRT Light curve of GRB 120911A'/></a></td>
<td><p class='grb'>GRB 120919A</p><a href='/xrt_curves/00020232/'><img src='/xrt_curves/00020232/thumb2.gif' alt='XRT Light curve of GRB 120919A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 120922A</p><a href='/xrt_curves/00534394/'><img src='/xrt_curves/00534394/thumb2.gif' alt='XRT Light curve of GRB 120922A'/></a></td>
<td><p class='grb'>GRB 120923A</p><a href='/xrt_curves/00534402/'><img src='/xrt_curves/00534402/thumb2.gif' alt='XRT Light curve of GRB 120923A'/></a></td>
<td><p class='grb'>GRB 120927A</p><a href='/xrt_curves/00534815/'><img src='/xrt_curves/00534815/thumb2.gif' alt='XRT Light curve of GRB 120927A'/></a></td>
<td><p class='grb'>GRB 121001A</p><a href='/xrt_curves/00535026/'><img src='/xrt_curves/00535026/thumb2.gif' alt='XRT Light curve of GRB 121001A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121011A</p><a href='/xrt_curves/00535764/'><img src='/xrt_curves/00535764/thumb2.gif' alt='XRT Light curve of GRB 121011A'/></a></td>
<td><p class='grb'>GRB 121017A</p><a href='/xrt_curves/00536172/'><img src='/xrt_curves/00536172/thumb2.gif' alt='XRT Light curve of GRB 121017A'/></a></td>
<td><p class='grb'>GRB 121024A</p><a href='/xrt_curves/00536580/'><img src='/xrt_curves/00536580/thumb2.gif' alt='XRT Light curve of GRB 121024A'/></a></td>
<td><p class='grb'>GRB 121025A</p><a href='/xrt_curves/00032612/'><img src='/xrt_curves/00032612/thumb2.gif' alt='XRT Light curve of GRB 121025A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121027A</p><a href='/xrt_curves/00536831/'><img src='/xrt_curves/00536831/thumb2.gif' alt='XRT Light curve of GRB 121027A'/></a></td>
<td><p class='grb'>GRB 121028A</p><a href='/xrt_curves/00536897/'><img src='/xrt_curves/00536897/thumb2.gif' alt='XRT Light curve of GRB 121028A'/></a></td>
<td><p class='grb'>GRB 121031A</p><a href='/xrt_curves/00537195/'><img src='/xrt_curves/00537195/thumb2.gif' alt='XRT Light curve of GRB 121031A'/></a></td>
<td><p class='grb'>GRB 121102A</p><a href='/xrt_curves/00537266/'><img src='/xrt_curves/00537266/thumb2.gif' alt='XRT Light curve of GRB 121102A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121108A</p><a href='/xrt_curves/00537921/'><img src='/xrt_curves/00537921/thumb2.gif' alt='XRT Light curve of GRB 121108A'/></a></td>
<td><p class='grb'>GRB 121117A</p><a href='/xrt_curves/00538696/'><img src='/xrt_curves/00538696/thumb2.gif' alt='XRT Light curve of GRB 121117A'/></a></td>
<td><p class='grb'>GRB 121123A</p><a href='/xrt_curves/00539358/'><img src='/xrt_curves/00539358/thumb2.gif' alt='XRT Light curve of GRB 121123A'/></a></td>
<td><p class='grb'>GRB 121125A</p><a href='/xrt_curves/00539563/'><img src='/xrt_curves/00539563/thumb2.gif' alt='XRT Light curve of GRB 121125A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121128A</p><a href='/xrt_curves/00539866/'><img src='/xrt_curves/00539866/thumb2.gif' alt='XRT Light curve of GRB 121128A'/></a></td>
<td><p class='grb'>GRB 121201A</p><a href='/xrt_curves/00540178/'><img src='/xrt_curves/00540178/thumb2.gif' alt='XRT Light curve of GRB 121201A'/></a></td>
<td><p class='grb'>GRB 121202A</p><a href='/xrt_curves/00540255/'><img src='/xrt_curves/00540255/thumb2.gif' alt='XRT Light curve of GRB 121202A'/></a></td>
<td><p class='grb'>GRB 121209A</p><a href='/xrt_curves/00540964/'><img src='/xrt_curves/00540964/thumb2.gif' alt='XRT Light curve of GRB 121209A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121211A</p><a href='/xrt_curves/00541200/'><img src='/xrt_curves/00541200/thumb2.gif' alt='XRT Light curve of GRB 121211A'/></a></td>
<td><p class='grb'>GRB 121212A</p><a href='/xrt_curves/00541371/'><img src='/xrt_curves/00541371/thumb2.gif' alt='XRT Light curve of GRB 121212A'/></a></td>
<td><p class='grb'>GRB 121217A</p><a href='/xrt_curves/00542441/'><img src='/xrt_curves/00542441/thumb2.gif' alt='XRT Light curve of GRB 121217A'/></a></td>
<td><p class='grb'>GRB 121226A</p><a href='/xrt_curves/00544027/'><img src='/xrt_curves/00544027/thumb2.gif' alt='XRT Light curve of GRB 121226A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 121229A</p><a href='/xrt_curves/00544347/'><img src='/xrt_curves/00544347/thumb2.gif' alt='XRT Light curve of GRB 121229A'/></a></td>
<td><p class='grb'>GRB 130102A</p><a href='/xrt_curves/00544784/'><img src='/xrt_curves/00544784/thumb2.gif' alt='XRT Light curve of GRB 130102A'/></a></td>
<td><p class='grb'>GRB 130122A</p><a href='/xrt_curves/00546731/'><img src='/xrt_curves/00546731/thumb2.gif' alt='XRT Light curve of GRB 130122A'/></a></td>
<td><p class='grb'>GRB 130131A</p><a href='/xrt_curves/00547407/'><img src='/xrt_curves/00547407/thumb2.gif' alt='XRT Light curve of GRB 130131A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130131B</p><a href='/xrt_curves/00547420/'><img src='/xrt_curves/00547420/thumb2.gif' alt='XRT Light curve of GRB 130131B'/></a></td>
<td><p class='grb'>GRB 130206A</p><a href='/xrt_curves/00547918/'><img src='/xrt_curves/00547918/thumb2.gif' alt='XRT Light curve of GRB 130206A'/></a></td>
<td><p class='grb'>GRB 130211A</p><a href='/xrt_curves/00548276/'><img src='/xrt_curves/00548276/thumb2.gif' alt='XRT Light curve of GRB 130211A'/></a></td>
<td><p class='grb'>GRB 130305A</p><a href='/xrt_curves/00020234/'><img src='/xrt_curves/00020234/thumb2.gif' alt='XRT Light curve of GRB 130305A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130306A</p><a href='/xrt_curves/00550457/'><img src='/xrt_curves/00550457/thumb2.gif' alt='XRT Light curve of GRB 130306A'/></a></td>
<td><p class='grb'>GRB 130313A</p><a href='/xrt_curves/00550906/'><img src='/xrt_curves/00550906/thumb2.gif' alt='XRT Light curve of GRB 130313A'/></a></td>
<td><p class='grb'>GRB 130315A</p><a href='/xrt_curves/00551126/'><img src='/xrt_curves/00551126/thumb2.gif' alt='XRT Light curve of GRB 130315A'/></a></td>
<td><p class='grb'>GRB 130327A</p><a href='/xrt_curves/00552063/'><img src='/xrt_curves/00552063/thumb2.gif' alt='XRT Light curve of GRB 130327A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130327B</p><a href='/xrt_curves/00020249/'><img src='/xrt_curves/00020249/thumb2.gif' alt='XRT Light curve of GRB 130327B'/></a></td>
<td><p class='grb'>GRB 130408A</p><a href='/xrt_curves/00553132/'><img src='/xrt_curves/00553132/thumb2.gif' alt='XRT Light curve of GRB 130408A'/></a></td>
<td><p class='grb'>GRB 130418A</p><a href='/xrt_curves/00553847/'><img src='/xrt_curves/00553847/thumb2.gif' alt='XRT Light curve of GRB 130418A'/></a></td>
<td><p class='grb'>GRB 130420A</p><a href='/xrt_curves/00553977/'><img src='/xrt_curves/00553977/thumb2.gif' alt='XRT Light curve of GRB 130420A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130420B</p><a href='/xrt_curves/00553996/'><img src='/xrt_curves/00553996/thumb2.gif' alt='XRT Light curve of GRB 130420B'/></a></td>
<td><p class='grb'>GRB 130427A</p><a href='/xrt_curves/00554620/'><img src='/xrt_curves/00554620/thumb2.gif' alt='XRT Light curve of GRB 130427A'/></a></td>
<td><p class='grb'>GRB 130427B</p><a href='/xrt_curves/00554635/'><img src='/xrt_curves/00554635/thumb2.gif' alt='XRT Light curve of GRB 130427B'/></a></td>
<td><p class='grb'>GRB 130502A</p><a href='/xrt_curves/00554996/'><img src='/xrt_curves/00554996/thumb2.gif' alt='XRT Light curve of GRB 130502A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130502B</p><a href='/xrt_curves/00020266/'><img src='/xrt_curves/00020266/thumb2.gif' alt='XRT Light curve of GRB 130502B'/></a></td>
<td><p class='grb'>GRB 130504A</p><a href='/xrt_curves/00555096/'><img src='/xrt_curves/00555096/thumb2.gif' alt='XRT Light curve of GRB 130504A'/></a></td>
<td><p class='grb'>GRB 130504C</p><a href='/xrt_curves/00020267/'><img src='/xrt_curves/00020267/thumb2.gif' alt='XRT Light curve of GRB 130504C'/></a></td>
<td><p class='grb'>GRB 130505A</p><a href='/xrt_curves/00555163/'><img src='/xrt_curves/00555163/thumb2.gif' alt='XRT Light curve of GRB 130505A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130508A</p><a href='/xrt_curves/00555413/'><img src='/xrt_curves/00555413/thumb2.gif' alt='XRT Light curve of GRB 130508A'/></a></td>
<td><p class='grb'>GRB 130511A</p><a href='/xrt_curves/00555600/'><img src='/xrt_curves/00555600/thumb2.gif' alt='XRT Light curve of GRB 130511A'/></a></td>
<td><p class='grb'>GRB 130513A</p><a href='/xrt_curves/00020274/'><img src='/xrt_curves/00020274/thumb2.gif' alt='XRT Light curve of GRB 130513A'/></a></td>
<td><p class='grb'>GRB 130514A</p><a href='/xrt_curves/00555821/'><img src='/xrt_curves/00555821/thumb2.gif' alt='XRT Light curve of GRB 130514A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130514B</p><a href='/xrt_curves/00020275/'><img src='/xrt_curves/00020275/thumb2.gif' alt='XRT Light curve of GRB 130514B'/></a></td>
<td><p class='grb'>GRB 130515A</p><a href='/xrt_curves/00555880/'><img src='/xrt_curves/00555880/thumb2.gif' alt='XRT Light curve of GRB 130515A'/></a></td>
<td><p class='grb'>GRB 130527A</p><a href='/xrt_curves/00556753/'><img src='/xrt_curves/00556753/thumb2.gif' alt='XRT Light curve of GRB 130527A'/></a></td>
<td><p class='grb'>GRB 130528A</p><a href='/xrt_curves/00556870/'><img src='/xrt_curves/00556870/thumb2.gif' alt='XRT Light curve of GRB 130528A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130529A</p><a href='/xrt_curves/00556930/'><img src='/xrt_curves/00556930/thumb2.gif' alt='XRT Light curve of GRB 130529A'/></a></td>
<td><p class='grb'>GRB 130603A</p><a href='/xrt_curves/00557274/'><img src='/xrt_curves/00557274/thumb2.gif' alt='XRT Light curve of GRB 130603A'/></a></td>
<td><p class='grb'>GRB 130603B</p><a href='/xrt_curves/00557310/'><img src='/xrt_curves/00557310/thumb2.gif' alt='XRT Light curve of GRB 130603B'/></a></td>
<td><p class='grb'>GRB 130604A</p><a href='/xrt_curves/00557354/'><img src='/xrt_curves/00557354/thumb2.gif' alt='XRT Light curve of GRB 130604A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130605A</p><a href='/xrt_curves/00557508/'><img src='/xrt_curves/00557508/thumb2.gif' alt='XRT Light curve of GRB 130605A'/></a></td>
<td><p class='grb'>GRB 130606A</p><a href='/xrt_curves/00557589/'><img src='/xrt_curves/00557589/thumb2.gif' alt='XRT Light curve of GRB 130606A'/></a></td>
<td><p class='grb'>GRB 130606B</p><a href='/xrt_curves/00020283/'><img src='/xrt_curves/00020283/thumb2.gif' alt='XRT Light curve of GRB 130606B'/></a></td>
<td><p class='grb'>GRB 130608A</p><a href='/xrt_curves/00557771/'><img src='/xrt_curves/00557771/thumb2.gif' alt='XRT Light curve of GRB 130608A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130609A</p><a href='/xrt_curves/00557782/'><img src='/xrt_curves/00557782/thumb2.gif' alt='XRT Light curve of GRB 130609A'/></a></td>
<td><p class='grb'>GRB 130609B</p><a href='/xrt_curves/00557828/'><img src='/xrt_curves/00557828/thumb2.gif' alt='XRT Light curve of GRB 130609B'/></a></td>
<td><p class='grb'>GRB 130610A</p><a href='/xrt_curves/00557845/'><img src='/xrt_curves/00557845/thumb2.gif' alt='XRT Light curve of GRB 130610A'/></a></td>
<td><p class='grb'>GRB 130612A</p><a href='/xrt_curves/00557976/'><img src='/xrt_curves/00557976/thumb2.gif' alt='XRT Light curve of GRB 130612A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130615A</p><a href='/xrt_curves/00558271/'><img src='/xrt_curves/00558271/thumb2.gif' alt='XRT Light curve of GRB 130615A'/></a></td>
<td><p class='grb'>GRB 130623A</p><a href='/xrt_curves/00020284/'><img src='/xrt_curves/00020284/thumb2.gif' alt='XRT Light curve of GRB 130623A'/></a></td>
<td><p class='grb'>GRB 130625A</p><a href='/xrt_curves/00558982/'><img src='/xrt_curves/00558982/thumb2.gif' alt='XRT Light curve of GRB 130625A'/></a></td>
<td><p class='grb'>GRB 130627A</p><a href='/xrt_curves/00559132/'><img src='/xrt_curves/00559132/thumb2.gif' alt='XRT Light curve of GRB 130627A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130627B</p><a href='/xrt_curves/00559139/'><img src='/xrt_curves/00559139/thumb2.gif' alt='XRT Light curve of GRB 130627B'/></a></td>
<td><p class='grb'>GRB 130701A</p><a href='/xrt_curves/00559482/'><img src='/xrt_curves/00559482/thumb2.gif' alt='XRT Light curve of GRB 130701A'/></a></td>
<td><p class='grb'>GRB 130702A</p><a href='/xrt_curves/00032876/'><img src='/xrt_curves/00032876/thumb2.gif' alt='XRT Light curve of GRB 130702A'/></a></td>
<td><p class='grb'>GRB 130716A</p><a href='/xrt_curves/00561974/'><img src='/xrt_curves/00561974/thumb2.gif' alt='XRT Light curve of GRB 130716A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130722A</p><a href='/xrt_curves/00563213/'><img src='/xrt_curves/00563213/thumb2.gif' alt='XRT Light curve of GRB 130722A'/></a></td>
<td><p class='grb'>GRB 130725A</p><a href='/xrt_curves/00563980/'><img src='/xrt_curves/00563980/thumb2.gif' alt='XRT Light curve of GRB 130725A'/></a></td>
<td><p class='grb'>GRB 130725B</p><a href='/xrt_curves/00564028/'><img src='/xrt_curves/00564028/thumb2.gif' alt='XRT Light curve of GRB 130725B'/></a></td>
<td><p class='grb'>GRB 130727A</p><a href='/xrt_curves/00564342/'><img src='/xrt_curves/00564342/thumb2.gif' alt='XRT Light curve of GRB 130727A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130803A</p><a href='/xrt_curves/00565263/'><img src='/xrt_curves/00565263/thumb2.gif' alt='XRT Light curve of GRB 130803A'/></a></td>
<td><p class='grb'>GRB 130806A</p><a href='/xrt_curves/00565562/'><img src='/xrt_curves/00565562/thumb2.gif' alt='XRT Light curve of GRB 130806A'/></a></td>
<td><p class='grb'>GRB 130807A</p><a href='/xrt_curves/00565651/'><img src='/xrt_curves/00565651/thumb2.gif' alt='XRT Light curve of GRB 130807A'/></a></td>
<td><p class='grb'>GRB 130812A</p><a href='/xrt_curves/00566228/'><img src='/xrt_curves/00566228/thumb2.gif' alt='XRT Light curve of GRB 130812A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130816A</p><a href='/xrt_curves/00566545/'><img src='/xrt_curves/00566545/thumb2.gif' alt='XRT Light curve of GRB 130816A'/></a></td>
<td><p class='grb'>GRB 130816B</p><a href='/xrt_curves/00566561/'><img src='/xrt_curves/00566561/thumb2.gif' alt='XRT Light curve of GRB 130816B'/></a></td>
<td><p class='grb'>GRB 130822A</p><a href='/xrt_curves/00567163/'><img src='/xrt_curves/00567163/thumb2.gif' alt='XRT Light curve of GRB 130822A'/></a></td>
<td><p class='grb'>GRB 130831A</p><a href='/xrt_curves/00568849/'><img src='/xrt_curves/00568849/thumb2.gif' alt='XRT Light curve of GRB 130831A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130831B</p><a href='/xrt_curves/00568855/'><img src='/xrt_curves/00568855/thumb2.gif' alt='XRT Light curve of GRB 130831B'/></a></td>
<td><p class='grb'>GRB 130903A</p><a href='/xrt_curves/00020294/'><img src='/xrt_curves/00020294/thumb2.gif' alt='XRT Light curve of GRB 130903A'/></a></td>
<td><p class='grb'>GRB 130907A</p><a href='/xrt_curves/00569992/'><img src='/xrt_curves/00569992/thumb2.gif' alt='XRT Light curve of GRB 130907A'/></a></td>
<td><p class='grb'>GRB 130912A</p><a href='/xrt_curves/00570465/'><img src='/xrt_curves/00570465/thumb2.gif' alt='XRT Light curve of GRB 130912A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 130925A</p><a href='/xrt_curves/00571830/'><img src='/xrt_curves/00571830/thumb2.gif' alt='XRT Light curve of GRB 130925A'/></a></td>
<td><p class='grb'>GRB 130929A</p><a href='/xrt_curves/00572308/'><img src='/xrt_curves/00572308/thumb2.gif' alt='XRT Light curve of GRB 130929A'/></a></td>
<td><p class='grb'>GRB 131002A</p><a href='/xrt_curves/00572721/'><img src='/xrt_curves/00572721/thumb2.gif' alt='XRT Light curve of GRB 131002A'/></a></td>
<td><p class='grb'>GRB 131002B</p><a href='/xrt_curves/00572742/'><img src='/xrt_curves/00572742/thumb2.gif' alt='XRT Light curve of GRB 131002B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 131004A</p><a href='/xrt_curves/00573190/'><img src='/xrt_curves/00573190/thumb2.gif' alt='XRT Light curve of GRB 131004A'/></a></td>
<td><p class='grb'>GRB 131011A</p><a href='/xrt_curves/00020298/'><img src='/xrt_curves/00020298/thumb2.gif' alt='XRT Light curve of GRB 131011A'/></a></td>
<td><p class='grb'>GRB 131018A</p><a href='/xrt_curves/00574935/'><img src='/xrt_curves/00574935/thumb2.gif' alt='XRT Light curve of GRB 131018A'/></a></td>
<td><p class='grb'>GRB 131018B</p><a href='/xrt_curves/00020308/'><img src='/xrt_curves/00020308/thumb2.gif' alt='XRT Light curve of GRB 131018B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 131024A</p><a href='/xrt_curves/00575707/'><img src='/xrt_curves/00575707/thumb2.gif' alt='XRT Light curve of GRB 131024A'/></a></td>
<td><p class='grb'>GRB 131024B</p><a href='/xrt_curves/00575754/'><img src='/xrt_curves/00575754/thumb2.gif' alt='XRT Light curve of GRB 131024B'/></a></td>
<td><p class='grb'>GRB 131030A</p><a href='/xrt_curves/00576238/'><img src='/xrt_curves/00576238/thumb2.gif' alt='XRT Light curve of GRB 131030A'/></a></td>
<td><p class='grb'>GRB 131031A</p><a href='/xrt_curves/00020317/'><img src='/xrt_curves/00020317/thumb2.gif' alt='XRT Light curve of GRB 131031A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 131103A</p><a href='/xrt_curves/00576562/'><img src='/xrt_curves/00576562/thumb2.gif' alt='XRT Light curve of GRB 131103A'/></a></td>
<td><p class='grb'>GRB 131105A</p><a href='/xrt_curves/00576738/'><img src='/xrt_curves/00576738/thumb2.gif' alt='XRT Light curve of GRB 131105A'/></a></td>
<td><p class='grb'>GRB 131117A</p><a href='/xrt_curves/00577968/'><img src='/xrt_curves/00577968/thumb2.gif' alt='XRT Light curve of GRB 131117A'/></a></td>
<td><p class='grb'>GRB 131122A</p><a href='/xrt_curves/00020328/'><img src='/xrt_curves/00020328/thumb2.gif' alt='XRT Light curve of GRB 131122A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 131127A</p><a href='/xrt_curves/00579571/'><img src='/xrt_curves/00579571/thumb2.gif' alt='XRT Light curve of GRB 131127A'/></a></td>
<td><p class='grb'>GRB 131128A</p><a href='/xrt_curves/00579683/'><img src='/xrt_curves/00579683/thumb2.gif' alt='XRT Light curve of GRB 131128A'/></a></td>
<td><p class='grb'>GRB 131202A</p><a href='/xrt_curves/00579982/'><img src='/xrt_curves/00579982/thumb2.gif' alt='XRT Light curve of GRB 131202A'/></a></td>
<td><p class='grb'>GRB 131205A</p><a href='/xrt_curves/00580267/'><img src='/xrt_curves/00580267/thumb2.gif' alt='XRT Light curve of GRB 131205A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 131227A</p><a href='/xrt_curves/00582184/'><img src='/xrt_curves/00582184/thumb2.gif' alt='XRT Light curve of GRB 131227A'/></a></td>
<td><p class='grb'>GRB 131229A</p><a href='/xrt_curves/00582374/'><img src='/xrt_curves/00582374/thumb2.gif' alt='XRT Light curve of GRB 131229A'/></a></td>
<td><p class='grb'>GRB 131231A</p><a href='/xrt_curves/00020336/'><img src='/xrt_curves/00020336/thumb2.gif' alt='XRT Light curve of GRB 131231A'/></a></td>
<td><p class='grb'>GRB 140102A</p><a href='/xrt_curves/00582760/'><img src='/xrt_curves/00582760/thumb2.gif' alt='XRT Light curve of GRB 140102A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140103A</p><a href='/xrt_curves/00582773/'><img src='/xrt_curves/00582773/thumb2.gif' alt='XRT Light curve of GRB 140103A'/></a></td>
<td><p class='grb'>GRB 140104B</p><a href='/xrt_curves/00020337/'><img src='/xrt_curves/00020337/thumb2.gif' alt='XRT Light curve of GRB 140104B'/></a></td>
<td><p class='grb'>GRB 140108A</p><a href='/xrt_curves/00583338/'><img src='/xrt_curves/00583338/thumb2.gif' alt='XRT Light curve of GRB 140108A'/></a></td>
<td><p class='grb'>GRB 140114A</p><a href='/xrt_curves/00583861/'><img src='/xrt_curves/00583861/thumb2.gif' alt='XRT Light curve of GRB 140114A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140129A</p><a href='/xrt_curves/00585128/'><img src='/xrt_curves/00585128/thumb2.gif' alt='XRT Light curve of GRB 140129A'/></a></td>
<td><p class='grb'>GRB 140129B</p><a href='/xrt_curves/00585149/'><img src='/xrt_curves/00585149/thumb2.gif' alt='XRT Light curve of GRB 140129B'/></a></td>
<td><p class='grb'>GRB 140206A</p><a href='/xrt_curves/00585834/'><img src='/xrt_curves/00585834/thumb2.gif' alt='XRT Light curve of GRB 140206A'/></a></td>
<td><p class='grb'>GRB 140209A</p><a href='/xrt_curves/00586071/'><img src='/xrt_curves/00586071/thumb2.gif' alt='XRT Light curve of GRB 140209A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140211A</p><a href='/xrt_curves/00586289/'><img src='/xrt_curves/00586289/thumb2.gif' alt='XRT Light curve of GRB 140211A'/></a></td>
<td><p class='grb'>GRB 140213A</p><a href='/xrt_curves/00586569/'><img src='/xrt_curves/00586569/thumb2.gif' alt='XRT Light curve of GRB 140213A'/></a></td>
<td><p class='grb'>GRB 140215A</p><a href='/xrt_curves/00586680/'><img src='/xrt_curves/00586680/thumb2.gif' alt='XRT Light curve of GRB 140215A'/></a></td>
<td><p class='grb'>GRB 140226A</p><a href='/xrt_curves/00033157/'><img src='/xrt_curves/00033157/thumb2.gif' alt='XRT Light curve of GRB 140226A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140301A</p><a href='/xrt_curves/00589590/'><img src='/xrt_curves/00589590/thumb2.gif' alt='XRT Light curve of GRB 140301A'/></a></td>
<td><p class='grb'>GRB 140302A</p><a href='/xrt_curves/00589685/'><img src='/xrt_curves/00589685/thumb2.gif' alt='XRT Light curve of GRB 140302A'/></a></td>
<td><p class='grb'>GRB 140304A</p><a href='/xrt_curves/00590206/'><img src='/xrt_curves/00590206/thumb2.gif' alt='XRT Light curve of GRB 140304A'/></a></td>
<td><p class='grb'>GRB 140311A</p><a href='/xrt_curves/00591390/'><img src='/xrt_curves/00591390/thumb2.gif' alt='XRT Light curve of GRB 140311A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140311B</p><a href='/xrt_curves/00591392/'><img src='/xrt_curves/00591392/thumb2.gif' alt='XRT Light curve of GRB 140311B'/></a></td>
<td><p class='grb'>GRB 140318A</p><a href='/xrt_curves/00592204/'><img src='/xrt_curves/00592204/thumb2.gif' alt='XRT Light curve of GRB 140318A'/></a></td>
<td><p class='grb'>GRB 140320A</p><a href='/xrt_curves/00592544/'><img src='/xrt_curves/00592544/thumb2.gif' alt='XRT Light curve of GRB 140320A'/></a></td>
<td><p class='grb'>GRB 140320B</p><a href='/xrt_curves/00020370/'><img src='/xrt_curves/00020370/thumb2.gif' alt='XRT Light curve of GRB 140320B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140320C</p><a href='/xrt_curves/00020371/'><img src='/xrt_curves/00020371/thumb2.gif' alt='XRT Light curve of GRB 140320C'/></a></td>
<td><p class='grb'>GRB 140323A</p><a href='/xrt_curves/00592916/'><img src='/xrt_curves/00592916/thumb2.gif' alt='XRT Light curve of GRB 140323A'/></a></td>
<td><p class='grb'>GRB 140330A</p><a href='/xrt_curves/00020372/'><img src='/xrt_curves/00020372/thumb2.gif' alt='XRT Light curve of GRB 140330A'/></a></td>
<td><p class='grb'>GRB 140331A</p><a href='/xrt_curves/00594081/'><img src='/xrt_curves/00594081/thumb2.gif' alt='XRT Light curve of GRB 140331A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140402A</p><a href='/xrt_curves/00020373/'><img src='/xrt_curves/00020373/thumb2.gif' alt='XRT Light curve of GRB 140402A'/></a></td>
<td><p class='grb'>GRB 140408A</p><a href='/xrt_curves/00595141/'><img src='/xrt_curves/00595141/thumb2.gif' alt='XRT Light curve of GRB 140408A'/></a></td>
<td><p class='grb'>GRB 140412A</p><a href='/xrt_curves/00595608/'><img src='/xrt_curves/00595608/thumb2.gif' alt='XRT Light curve of GRB 140412A'/></a></td>
<td><p class='grb'>GRB 140413A</p><a href='/xrt_curves/00595616/'><img src='/xrt_curves/00595616/thumb2.gif' alt='XRT Light curve of GRB 140413A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140419A</p><a href='/xrt_curves/00596426/'><img src='/xrt_curves/00596426/thumb2.gif' alt='XRT Light curve of GRB 140419A'/></a></td>
<td><p class='grb'>GRB 140423A</p><a href='/xrt_curves/00596901/'><img src='/xrt_curves/00596901/thumb2.gif' alt='XRT Light curve of GRB 140423A'/></a></td>
<td><p class='grb'>GRB 140428A</p><a href='/xrt_curves/00597519/'><img src='/xrt_curves/00597519/thumb2.gif' alt='XRT Light curve of GRB 140428A'/></a></td>
<td><p class='grb'>GRB 140430A</p><a href='/xrt_curves/00597722/'><img src='/xrt_curves/00597722/thumb2.gif' alt='XRT Light curve of GRB 140430A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140502A</p><a href='/xrt_curves/00597841/'><img src='/xrt_curves/00597841/thumb2.gif' alt='XRT Light curve of GRB 140502A'/></a></td>
<td><p class='grb'>GRB 140506A</p><a href='/xrt_curves/00598284/'><img src='/xrt_curves/00598284/thumb2.gif' alt='XRT Light curve of GRB 140506A'/></a></td>
<td><p class='grb'>GRB 140508A</p><a href='/xrt_curves/00020376/'><img src='/xrt_curves/00020376/thumb2.gif' alt='XRT Light curve of GRB 140508A'/></a></td>
<td><p class='grb'>GRB 140509A</p><a href='/xrt_curves/00598497/'><img src='/xrt_curves/00598497/thumb2.gif' alt='XRT Light curve of GRB 140509A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140512A</p><a href='/xrt_curves/00598819/'><img src='/xrt_curves/00598819/thumb2.gif' alt='XRT Light curve of GRB 140512A'/></a></td>
<td><p class='grb'>GRB 140515A</p><a href='/xrt_curves/00599037/'><img src='/xrt_curves/00599037/thumb2.gif' alt='XRT Light curve of GRB 140515A'/></a></td>
<td><p class='grb'>GRB 140516A</p><a href='/xrt_curves/00599188/'><img src='/xrt_curves/00599188/thumb2.gif' alt='XRT Light curve of GRB 140516A'/></a></td>
<td><p class='grb'>GRB 140518A</p><a href='/xrt_curves/00599287/'><img src='/xrt_curves/00599287/thumb2.gif' alt='XRT Light curve of GRB 140518A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140529A</p><a href='/xrt_curves/00020383/'><img src='/xrt_curves/00020383/thumb2.gif' alt='XRT Light curve of GRB 140529A'/></a></td>
<td><p class='grb'>GRB 140606B</p><a href='/xrt_curves/00020384/'><img src='/xrt_curves/00020384/thumb2.gif' alt='XRT Light curve of GRB 140606B'/></a></td>
<td><p class='grb'>GRB 140610A</p><a href='/xrt_curves/00601259/'><img src='/xrt_curves/00601259/thumb2.gif' alt='XRT Light curve of GRB 140610A'/></a></td>
<td><p class='grb'>GRB 140611A</p><a href='/xrt_curves/00020385/'><img src='/xrt_curves/00020385/thumb2.gif' alt='XRT Light curve of GRB 140611A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140614A</p><a href='/xrt_curves/00601646/'><img src='/xrt_curves/00601646/thumb2.gif' alt='XRT Light curve of GRB 140614A'/></a></td>
<td><p class='grb'>GRB 140614B</p><a href='/xrt_curves/00601662/'><img src='/xrt_curves/00601662/thumb2.gif' alt='XRT Light curve of GRB 140614B'/></a></td>
<td><p class='grb'>GRB 140619A</p><a href='/xrt_curves/00602080/'><img src='/xrt_curves/00602080/thumb2.gif' alt='XRT Light curve of GRB 140619A'/></a></td>
<td><p class='grb'>GRB 140620A</p><a href='/xrt_curves/00020387/'><img src='/xrt_curves/00020387/thumb2.gif' alt='XRT Light curve of GRB 140620A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140622A</p><a href='/xrt_curves/00602278/'><img src='/xrt_curves/00602278/thumb2.gif' alt='XRT Light curve of GRB 140622A'/></a></td>
<td><p class='grb'>GRB 140626A</p><a href='/xrt_curves/00602604/'><img src='/xrt_curves/00602604/thumb2.gif' alt='XRT Light curve of GRB 140626A'/></a></td>
<td><p class='grb'>GRB 140628A</p><a href='/xrt_curves/00602803/'><img src='/xrt_curves/00602803/thumb2.gif' alt='XRT Light curve of GRB 140628A'/></a></td>
<td><p class='grb'>GRB 140629A</p><a href='/xrt_curves/00602884/'><img src='/xrt_curves/00602884/thumb2.gif' alt='XRT Light curve of GRB 140629A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140703A</p><a href='/xrt_curves/00603243/'><img src='/xrt_curves/00603243/thumb2.gif' alt='XRT Light curve of GRB 140703A'/></a></td>
<td><p class='grb'>GRB 140706A</p><a href='/xrt_curves/00603587/'><img src='/xrt_curves/00603587/thumb2.gif' alt='XRT Light curve of GRB 140706A'/></a></td>
<td><p class='grb'>GRB 140709A</p><a href='/xrt_curves/00603810/'><img src='/xrt_curves/00603810/thumb2.gif' alt='XRT Light curve of GRB 140709A'/></a></td>
<td><p class='grb'>GRB 140709B</p><a href='/xrt_curves/00603866/'><img src='/xrt_curves/00603866/thumb2.gif' alt='XRT Light curve of GRB 140709B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140710A</p><a href='/xrt_curves/00603954/'><img src='/xrt_curves/00603954/thumb2.gif' alt='XRT Light curve of GRB 140710A'/></a></td>
<td><p class='grb'>GRB 140713A</p><a href='/xrt_curves/00604232/'><img src='/xrt_curves/00604232/thumb2.gif' alt='XRT Light curve of GRB 140713A'/></a></td>
<td><p class='grb'>GRB 140716A</p><a href='/xrt_curves/00020390/'><img src='/xrt_curves/00020390/thumb2.gif' alt='XRT Light curve of GRB 140716A'/></a></td>
<td><p class='grb'>GRB 140719A</p><a href='/xrt_curves/00605612/'><img src='/xrt_curves/00605612/thumb2.gif' alt='XRT Light curve of GRB 140719A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140730A</p><a href='/xrt_curves/00607742/'><img src='/xrt_curves/00607742/thumb2.gif' alt='XRT Light curve of GRB 140730A'/></a></td>
<td><p class='grb'>GRB 140801A</p><a href='/xrt_curves/00020402/'><img src='/xrt_curves/00020402/thumb2.gif' alt='XRT Light curve of GRB 140801A'/></a></td>
<td><p class='grb'>GRB 140808A</p><a href='/xrt_curves/00020403/'><img src='/xrt_curves/00020403/thumb2.gif' alt='XRT Light curve of GRB 140808A'/></a></td>
<td><p class='grb'>GRB 140815A</p><a href='/xrt_curves/00020406/'><img src='/xrt_curves/00020406/thumb2.gif' alt='XRT Light curve of GRB 140815A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140817A</p><a href='/xrt_curves/00609736/'><img src='/xrt_curves/00609736/thumb2.gif' alt='XRT Light curve of GRB 140817A'/></a></td>
<td><p class='grb'>GRB 140818B</p><a href='/xrt_curves/00609885/'><img src='/xrt_curves/00609885/thumb2.gif' alt='XRT Light curve of GRB 140818B'/></a></td>
<td><p class='grb'>GRB 140824A</p><a href='/xrt_curves/00610501/'><img src='/xrt_curves/00610501/thumb2.gif' alt='XRT Light curve of GRB 140824A'/></a></td>
<td><p class='grb'>GRB 140903A</p><a href='/xrt_curves/00611599/'><img src='/xrt_curves/00611599/thumb2.gif' alt='XRT Light curve of GRB 140903A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140907A</p><a href='/xrt_curves/00611933/'><img src='/xrt_curves/00611933/thumb2.gif' alt='XRT Light curve of GRB 140907A'/></a></td>
<td><p class='grb'>GRB 140909A</p><a href='/xrt_curves/00020417/'><img src='/xrt_curves/00020417/thumb2.gif' alt='XRT Light curve of GRB 140909A'/></a></td>
<td><p class='grb'>GRB 140916A</p><a href='/xrt_curves/00612804/'><img src='/xrt_curves/00612804/thumb2.gif' alt='XRT Light curve of GRB 140916A'/></a></td>
<td><p class='grb'>GRB 140919A</p><a href='/xrt_curves/00613160/'><img src='/xrt_curves/00613160/thumb2.gif' alt='XRT Light curve of GRB 140919A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 140927A</p><a href='/xrt_curves/00613775/'><img src='/xrt_curves/00613775/thumb2.gif' alt='XRT Light curve of GRB 140927A'/></a></td>
<td><p class='grb'>GRB 140928A</p><a href='/xrt_curves/00020418/'><img src='/xrt_curves/00020418/thumb2.gif' alt='XRT Light curve of GRB 140928A'/></a></td>
<td><p class='grb'>GRB 140930B</p><a href='/xrt_curves/00614094/'><img src='/xrt_curves/00614094/thumb2.gif' alt='XRT Light curve of GRB 140930B'/></a></td>
<td><p class='grb'>GRB 141004A</p><a href='/xrt_curves/00614390/'><img src='/xrt_curves/00614390/thumb2.gif' alt='XRT Light curve of GRB 141004A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 141005A</p><a href='/xrt_curves/00614415/'><img src='/xrt_curves/00614415/thumb2.gif' alt='XRT Light curve of GRB 141005A'/></a></td>
<td><p class='grb'>GRB 141015A</p><a href='/xrt_curves/00615399/'><img src='/xrt_curves/00615399/thumb2.gif' alt='XRT Light curve of GRB 141015A'/></a></td>
<td><p class='grb'>GRB 141017A</p><a href='/xrt_curves/00615672/'><img src='/xrt_curves/00615672/thumb2.gif' alt='XRT Light curve of GRB 141017A'/></a></td>
<td><p class='grb'>GRB 141020A</p><a href='/xrt_curves/00615873/'><img src='/xrt_curves/00615873/thumb2.gif' alt='XRT Light curve of GRB 141020A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 141022A</p><a href='/xrt_curves/00616061/'><img src='/xrt_curves/00616061/thumb2.gif' alt='XRT Light curve of GRB 141022A'/></a></td>
<td><p class='grb'>GRB 141026A</p><a href='/xrt_curves/00616502/'><img src='/xrt_curves/00616502/thumb2.gif' alt='XRT Light curve of GRB 141026A'/></a></td>
<td><p class='grb'>GRB 141031A</p><a href='/xrt_curves/00617110/'><img src='/xrt_curves/00617110/thumb2.gif' alt='XRT Light curve of GRB 141031A'/></a></td>
<td><p class='grb'>GRB 141031B</p><a href='/xrt_curves/00617149/'><img src='/xrt_curves/00617149/thumb2.gif' alt='XRT Light curve of GRB 141031B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 141109A</p><a href='/xrt_curves/00618024/'><img src='/xrt_curves/00618024/thumb2.gif' alt='XRT Light curve of GRB 141109A'/></a></td>
<td><p class='grb'>GRB 141109B</p><a href='/xrt_curves/00618032/'><img src='/xrt_curves/00618032/thumb2.gif' alt='XRT Light curve of GRB 141109B'/></a></td>
<td><p class='grb'>GRB 141121A</p><a href='/xrt_curves/00619182/'><img src='/xrt_curves/00619182/thumb2.gif' alt='XRT Light curve of GRB 141121A'/></a></td>
<td><p class='grb'>GRB 141130A</p><a href='/xrt_curves/00620090/'><img src='/xrt_curves/00620090/thumb2.gif' alt='XRT Light curve of GRB 141130A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 141212A</p><a href='/xrt_curves/00621229/'><img src='/xrt_curves/00621229/thumb2.gif' alt='XRT Light curve of GRB 141212A'/></a></td>
<td><p class='grb'>GRB 141212B</p><a href='/xrt_curves/00621234/'><img src='/xrt_curves/00621234/thumb2.gif' alt='XRT Light curve of GRB 141212B'/></a></td>
<td><p class='grb'>GRB 141215A</p><a href='/xrt_curves/00020453/'><img src='/xrt_curves/00020453/thumb2.gif' alt='XRT Light curve of GRB 141215A'/></a></td>
<td><p class='grb'>GRB 141220A</p><a href='/xrt_curves/00621915/'><img src='/xrt_curves/00621915/thumb2.gif' alt='XRT Light curve of GRB 141220A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 141221A</p><a href='/xrt_curves/00622006/'><img src='/xrt_curves/00622006/thumb2.gif' alt='XRT Light curve of GRB 141221A'/></a></td>
<td><p class='grb'>GRB 141222A</p><a href='/xrt_curves/00020454/'><img src='/xrt_curves/00020454/thumb2.gif' alt='XRT Light curve of GRB 141222A'/></a></td>
<td><p class='grb'>GRB 141225A</p><a href='/xrt_curves/00622476/'><img src='/xrt_curves/00622476/thumb2.gif' alt='XRT Light curve of GRB 141225A'/></a></td>
<td><p class='grb'>GRB 150101A</p><a href='/xrt_curves/00623158/'><img src='/xrt_curves/00623158/thumb2.gif' alt='XRT Light curve of GRB 150101A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150101B</p><a href='/xrt_curves/00020464/'><img src='/xrt_curves/00020464/thumb2.gif' alt='XRT Light curve of GRB 150101B'/></a></td>
<td><p class='grb'>GRB 150103A</p><a href='/xrt_curves/00623368/'><img src='/xrt_curves/00623368/thumb2.gif' alt='XRT Light curve of GRB 150103A'/></a></td>
<td><p class='grb'>GRB 150110B</p><a href='/xrt_curves/00624606/'><img src='/xrt_curves/00624606/thumb2.gif' alt='XRT Light curve of GRB 150110B'/></a></td>
<td><p class='grb'>GRB 150120A</p><a href='/xrt_curves/00627137/'><img src='/xrt_curves/00627137/thumb2.gif' alt='XRT Light curve of GRB 150120A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150120B</p><a href='/xrt_curves/00627170/'><img src='/xrt_curves/00627170/thumb2.gif' alt='XRT Light curve of GRB 150120B'/></a></td>
<td><p class='grb'>GRB 150201A</p><a href='/xrt_curves/00629302/'><img src='/xrt_curves/00629302/thumb2.gif' alt='XRT Light curve of GRB 150201A'/></a></td>
<td><p class='grb'>GRB 150202A</p><a href='/xrt_curves/00629547/'><img src='/xrt_curves/00629547/thumb2.gif' alt='XRT Light curve of GRB 150202A'/></a></td>
<td><p class='grb'>GRB 150203A</p><a href='/xrt_curves/00629578/'><img src='/xrt_curves/00629578/thumb2.gif' alt='XRT Light curve of GRB 150203A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150206A</p><a href='/xrt_curves/00630019/'><img src='/xrt_curves/00630019/thumb2.gif' alt='XRT Light curve of GRB 150206A'/></a></td>
<td><p class='grb'>GRB 150211A</p><a href='/xrt_curves/00630714/'><img src='/xrt_curves/00630714/thumb2.gif' alt='XRT Light curve of GRB 150211A'/></a></td>
<td><p class='grb'>GRB 150212A</p><a href='/xrt_curves/00630876/'><img src='/xrt_curves/00630876/thumb2.gif' alt='XRT Light curve of GRB 150212A'/></a></td>
<td><p class='grb'>GRB 150213B</p><a href='/xrt_curves/00631051/'><img src='/xrt_curves/00631051/thumb2.gif' alt='XRT Light curve of GRB 150213B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150222A</p><a href='/xrt_curves/00632180/'><img src='/xrt_curves/00632180/thumb2.gif' alt='XRT Light curve of GRB 150222A'/></a></td>
<td><p class='grb'>GRB 150301A</p><a href='/xrt_curves/00632995/'><img src='/xrt_curves/00632995/thumb2.gif' alt='XRT Light curve of GRB 150301A'/></a></td>
<td><p class='grb'>GRB 150301B</p><a href='/xrt_curves/00633180/'><img src='/xrt_curves/00633180/thumb2.gif' alt='XRT Light curve of GRB 150301B'/></a></td>
<td><p class='grb'>GRB 150302A</p><a href='/xrt_curves/00633237/'><img src='/xrt_curves/00633237/thumb2.gif' alt='XRT Light curve of GRB 150302A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150309A</p><a href='/xrt_curves/00634200/'><img src='/xrt_curves/00634200/thumb2.gif' alt='XRT Light curve of GRB 150309A'/></a></td>
<td><p class='grb'>GRB 150314A</p><a href='/xrt_curves/00634795/'><img src='/xrt_curves/00634795/thumb2.gif' alt='XRT Light curve of GRB 150314A'/></a></td>
<td><p class='grb'>GRB 150317A</p><a href='/xrt_curves/00635148/'><img src='/xrt_curves/00635148/thumb2.gif' alt='XRT Light curve of GRB 150317A'/></a></td>
<td><p class='grb'>GRB 150318A</p><a href='/xrt_curves/00635289/'><img src='/xrt_curves/00635289/thumb2.gif' alt='XRT Light curve of GRB 150318A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150323A</p><a href='/xrt_curves/00635887/'><img src='/xrt_curves/00635887/thumb2.gif' alt='XRT Light curve of GRB 150323A'/></a></td>
<td><p class='grb'>GRB 150323C</p><a href='/xrt_curves/00636005/'><img src='/xrt_curves/00636005/thumb2.gif' alt='XRT Light curve of GRB 150323C'/></a></td>
<td><p class='grb'>GRB 150403A</p><a href='/xrt_curves/00637044/'><img src='/xrt_curves/00637044/thumb2.gif' alt='XRT Light curve of GRB 150403A'/></a></td>
<td><p class='grb'>GRB 150423A</p><a href='/xrt_curves/00638808/'><img src='/xrt_curves/00638808/thumb2.gif' alt='XRT Light curve of GRB 150423A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150424A</p><a href='/xrt_curves/00638946/'><img src='/xrt_curves/00638946/thumb2.gif' alt='XRT Light curve of GRB 150424A'/></a></td>
<td><p class='grb'>GRB 150428A</p><a href='/xrt_curves/00639275/'><img src='/xrt_curves/00639275/thumb2.gif' alt='XRT Light curve of GRB 150428A'/></a></td>
<td><p class='grb'>GRB 150428B</p><a href='/xrt_curves/00639278/'><img src='/xrt_curves/00639278/thumb2.gif' alt='XRT Light curve of GRB 150428B'/></a></td>
<td><p class='grb'>GRB 150430A</p><a href='/xrt_curves/00639433/'><img src='/xrt_curves/00639433/thumb2.gif' alt='XRT Light curve of GRB 150430A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150527A</p><a href='/xrt_curves/00641698/'><img src='/xrt_curves/00641698/thumb2.gif' alt='XRT Light curve of GRB 150527A'/></a></td>
<td><p class='grb'>GRB 150530A</p><a href='/xrt_curves/00642018/'><img src='/xrt_curves/00642018/thumb2.gif' alt='XRT Light curve of GRB 150530A'/></a></td>
<td><p class='grb'>GRB 150607A</p><a href='/xrt_curves/00642620/'><img src='/xrt_curves/00642620/thumb2.gif' alt='XRT Light curve of GRB 150607A'/></a></td>
<td><p class='grb'>GRB 150615A</p><a href='/xrt_curves/00643833/'><img src='/xrt_curves/00643833/thumb2.gif' alt='XRT Light curve of GRB 150615A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150616A</p><a href='/xrt_curves/00644259/'><img src='/xrt_curves/00644259/thumb2.gif' alt='XRT Light curve of GRB 150616A'/></a></td>
<td><p class='grb'>GRB 150626A</p><a href='/xrt_curves/00646603/'><img src='/xrt_curves/00646603/thumb2.gif' alt='XRT Light curve of GRB 150626A'/></a></td>
<td><p class='grb'>GRB 150626B</p><a href='/xrt_curves/00646786/'><img src='/xrt_curves/00646786/thumb2.gif' alt='XRT Light curve of GRB 150626B'/></a></td>
<td><p class='grb'>GRB 150711A</p><a href='/xrt_curves/00648601/'><img src='/xrt_curves/00648601/thumb2.gif' alt='XRT Light curve of GRB 150711A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150716A</p><a href='/xrt_curves/00649157/'><img src='/xrt_curves/00649157/thumb2.gif' alt='XRT Light curve of GRB 150716A'/></a></td>
<td><p class='grb'>GRB 150720A</p><a href='/xrt_curves/00649706/'><img src='/xrt_curves/00649706/thumb2.gif' alt='XRT Light curve of GRB 150720A'/></a></td>
<td><p class='grb'>GRB 150722A</p><a href='/xrt_curves/00649916/'><img src='/xrt_curves/00649916/thumb2.gif' alt='XRT Light curve of GRB 150722A'/></a></td>
<td><p class='grb'>GRB 150724A</p><a href='/xrt_curves/00650141/'><img src='/xrt_curves/00650141/thumb2.gif' alt='XRT Light curve of GRB 150724A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150727A</p><a href='/xrt_curves/00650530/'><img src='/xrt_curves/00650530/thumb2.gif' alt='XRT Light curve of GRB 150727A'/></a></td>
<td><p class='grb'>GRB 150728A</p><a href='/xrt_curves/00650617/'><img src='/xrt_curves/00650617/thumb2.gif' alt='XRT Light curve of GRB 150728A'/></a></td>
<td><p class='grb'>GRB 150801B</p><a href='/xrt_curves/00650977/'><img src='/xrt_curves/00650977/thumb2.gif' alt='XRT Light curve of GRB 150801B'/></a></td>
<td><p class='grb'>GRB 150811A</p><a href='/xrt_curves/00651882/'><img src='/xrt_curves/00651882/thumb2.gif' alt='XRT Light curve of GRB 150811A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150817A</p><a href='/xrt_curves/00652334/'><img src='/xrt_curves/00652334/thumb2.gif' alt='XRT Light curve of GRB 150817A'/></a></td>
<td><p class='grb'>GRB 150818A</p><a href='/xrt_curves/00652603/'><img src='/xrt_curves/00652603/thumb2.gif' alt='XRT Light curve of GRB 150818A'/></a></td>
<td><p class='grb'>GRB 150819A</p><a href='/xrt_curves/00652643/'><img src='/xrt_curves/00652643/thumb2.gif' alt='XRT Light curve of GRB 150819A'/></a></td>
<td><p class='grb'>GRB 150821A</p><a href='/xrt_curves/00652847/'><img src='/xrt_curves/00652847/thumb2.gif' alt='XRT Light curve of GRB 150821A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150831A</p><a href='/xrt_curves/00653838/'><img src='/xrt_curves/00653838/thumb2.gif' alt='XRT Light curve of GRB 150831A'/></a></td>
<td><p class='grb'>GRB 150831B</p><a href='/xrt_curves/00653978/'><img src='/xrt_curves/00653978/thumb2.gif' alt='XRT Light curve of GRB 150831B'/></a></td>
<td><p class='grb'>GRB 150907B</p><a href='/xrt_curves/00654803/'><img src='/xrt_curves/00654803/thumb2.gif' alt='XRT Light curve of GRB 150907B'/></a></td>
<td><p class='grb'>GRB 150910A</p><a href='/xrt_curves/00655097/'><img src='/xrt_curves/00655097/thumb2.gif' alt='XRT Light curve of GRB 150910A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 150911A</p><a href='/xrt_curves/00655262/'><img src='/xrt_curves/00655262/thumb2.gif' alt='XRT Light curve of GRB 150911A'/></a></td>
<td><p class='grb'>GRB 150915A</p><a href='/xrt_curves/00655721/'><img src='/xrt_curves/00655721/thumb2.gif' alt='XRT Light curve of GRB 150915A'/></a></td>
<td><p class='grb'>GRB 150925A</p><a href='/xrt_curves/00656604/'><img src='/xrt_curves/00656604/thumb2.gif' alt='XRT Light curve of GRB 150925A'/></a></td>
<td><p class='grb'>GRB 151001A</p><a href='/xrt_curves/00657286/'><img src='/xrt_curves/00657286/thumb2.gif' alt='XRT Light curve of GRB 151001A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 151001B</p><a href='/xrt_curves/00657321/'><img src='/xrt_curves/00657321/thumb2.gif' alt='XRT Light curve of GRB 151001B'/></a></td>
<td><p class='grb'>GRB 151006A</p><a href='/xrt_curves/00657750/'><img src='/xrt_curves/00657750/thumb2.gif' alt='XRT Light curve of GRB 151006A'/></a></td>
<td><p class='grb'>GRB 151021A</p><a href='/xrt_curves/00660671/'><img src='/xrt_curves/00660671/thumb2.gif' alt='XRT Light curve of GRB 151021A'/></a></td>
<td><p class='grb'>GRB 151022A</p><a href='/xrt_curves/00661036/'><img src='/xrt_curves/00661036/thumb2.gif' alt='XRT Light curve of GRB 151022A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 151023A</p><a href='/xrt_curves/00661253/'><img src='/xrt_curves/00661253/thumb2.gif' alt='XRT Light curve of GRB 151023A'/></a></td>
<td><p class='grb'>GRB 151027A</p><a href='/xrt_curves/00661775/'><img src='/xrt_curves/00661775/thumb2.gif' alt='XRT Light curve of GRB 151027A'/></a></td>
<td><p class='grb'>GRB 151027B</p><a href='/xrt_curves/00661869/'><img src='/xrt_curves/00661869/thumb2.gif' alt='XRT Light curve of GRB 151027B'/></a></td>
<td><p class='grb'>GRB 151029A</p><a href='/xrt_curves/00662086/'><img src='/xrt_curves/00662086/thumb2.gif' alt='XRT Light curve of GRB 151029A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 151031A</p><a href='/xrt_curves/00662330/'><img src='/xrt_curves/00662330/thumb2.gif' alt='XRT Light curve of GRB 151031A'/></a></td>
<td><p class='grb'>GRB 151111A</p><a href='/xrt_curves/00663074/'><img src='/xrt_curves/00663074/thumb2.gif' alt='XRT Light curve of GRB 151111A'/></a></td>
<td><p class='grb'>GRB 151112A</p><a href='/xrt_curves/00663179/'><img src='/xrt_curves/00663179/thumb2.gif' alt='XRT Light curve of GRB 151112A'/></a></td>
<td><p class='grb'>GRB 151114A</p><a href='/xrt_curves/00663490/'><img src='/xrt_curves/00663490/thumb2.gif' alt='XRT Light curve of GRB 151114A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 151118A</p><a href='/xrt_curves/00664078/'><img src='/xrt_curves/00664078/thumb2.gif' alt='XRT Light curve of GRB 151118A'/></a></td>
<td><p class='grb'>GRB 151127A</p><a href='/xrt_curves/00665268/'><img src='/xrt_curves/00665268/thumb2.gif' alt='XRT Light curve of GRB 151127A'/></a></td>
<td><p class='grb'>GRB 151205A</p><a href='/xrt_curves/00666352/'><img src='/xrt_curves/00666352/thumb2.gif' alt='XRT Light curve of GRB 151205A'/></a></td>
<td><p class='grb'>GRB 151210A</p><a href='/xrt_curves/00666931/'><img src='/xrt_curves/00666931/thumb2.gif' alt='XRT Light curve of GRB 151210A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 151215A</p><a href='/xrt_curves/00667392/'><img src='/xrt_curves/00667392/thumb2.gif' alt='XRT Light curve of GRB 151215A'/></a></td>
<td><p class='grb'>GRB 151228A</p><a href='/xrt_curves/00668543/'><img src='/xrt_curves/00668543/thumb2.gif' alt='XRT Light curve of GRB 151228A'/></a></td>
<td><p class='grb'>GRB 151228B</p><a href='/xrt_curves/00668641/'><img src='/xrt_curves/00668641/thumb2.gif' alt='XRT Light curve of GRB 151228B'/></a></td>
<td><p class='grb'>GRB 151229A</p><a href='/xrt_curves/00668689/'><img src='/xrt_curves/00668689/thumb2.gif' alt='XRT Light curve of GRB 151229A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160104A</p><a href='/xrt_curves/00669319/'><img src='/xrt_curves/00669319/thumb2.gif' alt='XRT Light curve of GRB 160104A'/></a></td>
<td><p class='grb'>GRB 160117B</p><a href='/xrt_curves/00670800/'><img src='/xrt_curves/00670800/thumb2.gif' alt='XRT Light curve of GRB 160117B'/></a></td>
<td><p class='grb'>GRB 160119A</p><a href='/xrt_curves/00671014/'><img src='/xrt_curves/00671014/thumb2.gif' alt='XRT Light curve of GRB 160119A'/></a></td>
<td><p class='grb'>GRB 160121A</p><a href='/xrt_curves/00671231/'><img src='/xrt_curves/00671231/thumb2.gif' alt='XRT Light curve of GRB 160121A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160123A</p><a href='/xrt_curves/00671447/'><img src='/xrt_curves/00671447/thumb2.gif' alt='XRT Light curve of GRB 160123A'/></a></td>
<td><p class='grb'>GRB 160127A</p><a href='/xrt_curves/00671828/'><img src='/xrt_curves/00671828/thumb2.gif' alt='XRT Light curve of GRB 160127A'/></a></td>
<td><p class='grb'>GRB 160131A</p><a href='/xrt_curves/00672236/'><img src='/xrt_curves/00672236/thumb2.gif' alt='XRT Light curve of GRB 160131A'/></a></td>
<td><p class='grb'>GRB 160203A</p><a href='/xrt_curves/00672525/'><img src='/xrt_curves/00672525/thumb2.gif' alt='XRT Light curve of GRB 160203A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160216A</p><a href='/xrt_curves/00673978/'><img src='/xrt_curves/00673978/thumb2.gif' alt='XRT Light curve of GRB 160216A'/></a></td>
<td><p class='grb'>GRB 160220A</p><a href='/xrt_curves/00674670/'><img src='/xrt_curves/00674670/thumb2.gif' alt='XRT Light curve of GRB 160220A'/></a></td>
<td><p class='grb'>GRB 160220B</p><a href='/xrt_curves/00674734/'><img src='/xrt_curves/00674734/thumb2.gif' alt='XRT Light curve of GRB 160220B'/></a></td>
<td><p class='grb'>GRB 160225A</p><a href='/xrt_curves/00675998/'><img src='/xrt_curves/00675998/thumb2.gif' alt='XRT Light curve of GRB 160225A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160227A</p><a href='/xrt_curves/00676423/'><img src='/xrt_curves/00676423/thumb2.gif' alt='XRT Light curve of GRB 160227A'/></a></td>
<td><p class='grb'>GRB 160228A</p><a href='/xrt_curves/00676595/'><img src='/xrt_curves/00676595/thumb2.gif' alt='XRT Light curve of GRB 160228A'/></a></td>
<td><p class='grb'>GRB 160303A</p><a href='/xrt_curves/00677495/'><img src='/xrt_curves/00677495/thumb2.gif' alt='XRT Light curve of GRB 160303A'/></a></td>
<td><p class='grb'>GRB 160313A</p><a href='/xrt_curves/00678929/'><img src='/xrt_curves/00678929/thumb2.gif' alt='XRT Light curve of GRB 160313A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160314A</p><a href='/xrt_curves/00679120/'><img src='/xrt_curves/00679120/thumb2.gif' alt='XRT Light curve of GRB 160314A'/></a></td>
<td><p class='grb'>GRB 160321A</p><a href='/xrt_curves/00680017/'><img src='/xrt_curves/00680017/thumb2.gif' alt='XRT Light curve of GRB 160321A'/></a></td>
<td><p class='grb'>GRB 160325A</p><a href='/xrt_curves/00680436/'><img src='/xrt_curves/00680436/thumb2.gif' alt='XRT Light curve of GRB 160325A'/></a></td>
<td><p class='grb'>GRB 160327A</p><a href='/xrt_curves/00680655/'><img src='/xrt_curves/00680655/thumb2.gif' alt='XRT Light curve of GRB 160327A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160408A</p><a href='/xrt_curves/00682059/'><img src='/xrt_curves/00682059/thumb2.gif' alt='XRT Light curve of GRB 160408A'/></a></td>
<td><p class='grb'>GRB 160410A</p><a href='/xrt_curves/00682269/'><img src='/xrt_curves/00682269/thumb2.gif' alt='XRT Light curve of GRB 160410A'/></a></td>
<td><p class='grb'>GRB 160411A</p><a href='/xrt_curves/00682339/'><img src='/xrt_curves/00682339/thumb2.gif' alt='XRT Light curve of GRB 160411A'/></a></td>
<td><p class='grb'>GRB 160412A</p><a href='/xrt_curves/00682522/'><img src='/xrt_curves/00682522/thumb2.gif' alt='XRT Light curve of GRB 160412A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160417A</p><a href='/xrt_curves/00683076/'><img src='/xrt_curves/00683076/thumb2.gif' alt='XRT Light curve of GRB 160417A'/></a></td>
<td><p class='grb'>GRB 160425A</p><a href='/xrt_curves/00684098/'><img src='/xrt_curves/00684098/thumb2.gif' alt='XRT Light curve of GRB 160425A'/></a></td>
<td><p class='grb'>GRB 160501A</p><a href='/xrt_curves/00684679/'><img src='/xrt_curves/00684679/thumb2.gif' alt='XRT Light curve of GRB 160501A'/></a></td>
<td><p class='grb'>GRB 160504A</p><a href='/xrt_curves/00685124/'><img src='/xrt_curves/00685124/thumb2.gif' alt='XRT Light curve of GRB 160504A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160506A</p><a href='/xrt_curves/00685245/'><img src='/xrt_curves/00685245/thumb2.gif' alt='XRT Light curve of GRB 160506A'/></a></td>
<td><p class='grb'>GRB 160525B</p><a href='/xrt_curves/00687522/'><img src='/xrt_curves/00687522/thumb2.gif' alt='XRT Light curve of GRB 160525B'/></a></td>
<td><p class='grb'>GRB 160601A</p><a href='/xrt_curves/00688452/'><img src='/xrt_curves/00688452/thumb2.gif' alt='XRT Light curve of GRB 160601A'/></a></td>
<td><p class='grb'>GRB 160607A</p><a href='/xrt_curves/00689597/'><img src='/xrt_curves/00689597/thumb2.gif' alt='XRT Light curve of GRB 160607A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160611A</p><a href='/xrt_curves/00690598/'><img src='/xrt_curves/00690598/thumb2.gif' alt='XRT Light curve of GRB 160611A'/></a></td>
<td><p class='grb'>GRB 160624A</p><a href='/xrt_curves/00701288/'><img src='/xrt_curves/00701288/thumb2.gif' alt='XRT Light curve of GRB 160624A'/></a></td>
<td><p class='grb'>GRB 160625A</p><a href='/xrt_curves/00701503/'><img src='/xrt_curves/00701503/thumb2.gif' alt='XRT Light curve of GRB 160625A'/></a></td>
<td><p class='grb'>GRB 160630A</p><a href='/xrt_curves/00702252/'><img src='/xrt_curves/00702252/thumb2.gif' alt='XRT Light curve of GRB 160630A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160705B</p><a href='/xrt_curves/00703176/'><img src='/xrt_curves/00703176/thumb2.gif' alt='XRT Light curve of GRB 160705B'/></a></td>
<td><p class='grb'>GRB 160712A</p><a href='/xrt_curves/00704155/'><img src='/xrt_curves/00704155/thumb2.gif' alt='XRT Light curve of GRB 160712A'/></a></td>
<td><p class='grb'>GRB 160716A</p><a href='/xrt_curves/00704572/'><img src='/xrt_curves/00704572/thumb2.gif' alt='XRT Light curve of GRB 160716A'/></a></td>
<td><p class='grb'>GRB 160801A</p><a href='/xrt_curves/00706871/'><img src='/xrt_curves/00706871/thumb2.gif' alt='XRT Light curve of GRB 160801A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160804A</p><a href='/xrt_curves/00707231/'><img src='/xrt_curves/00707231/thumb2.gif' alt='XRT Light curve of GRB 160804A'/></a></td>
<td><p class='grb'>GRB 160815A</p><a href='/xrt_curves/00708598/'><img src='/xrt_curves/00708598/thumb2.gif' alt='XRT Light curve of GRB 160815A'/></a></td>
<td><p class='grb'>GRB 160821B</p><a href='/xrt_curves/00709357/'><img src='/xrt_curves/00709357/thumb2.gif' alt='XRT Light curve of GRB 160821B'/></a></td>
<td><p class='grb'>GRB 160824A</p><a href='/xrt_curves/00709765/'><img src='/xrt_curves/00709765/thumb2.gif' alt='XRT Light curve of GRB 160824A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160826A</p><a href='/xrt_curves/00709907/'><img src='/xrt_curves/00709907/thumb2.gif' alt='XRT Light curve of GRB 160826A'/></a></td>
<td><p class='grb'>GRB 160905A</p><a href='/xrt_curves/00711084/'><img src='/xrt_curves/00711084/thumb2.gif' alt='XRT Light curve of GRB 160905A'/></a></td>
<td><p class='grb'>GRB 160912A</p><a href='/xrt_curves/00711914/'><img src='/xrt_curves/00711914/thumb2.gif' alt='XRT Light curve of GRB 160912A'/></a></td>
<td><p class='grb'>GRB 160917A</p><a href='/xrt_curves/00712505/'><img src='/xrt_curves/00712505/thumb2.gif' alt='XRT Light curve of GRB 160917A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 160927A</p><a href='/xrt_curves/00713782/'><img src='/xrt_curves/00713782/thumb2.gif' alt='XRT Light curve of GRB 160927A'/></a></td>
<td><p class='grb'>GRB 161001A</p><a href='/xrt_curves/00714404/'><img src='/xrt_curves/00714404/thumb2.gif' alt='XRT Light curve of GRB 161001A'/></a></td>
<td><p class='grb'>GRB 161004A</p><a href='/xrt_curves/00715084/'><img src='/xrt_curves/00715084/thumb2.gif' alt='XRT Light curve of GRB 161004A'/></a></td>
<td><p class='grb'>GRB 161004B</p><a href='/xrt_curves/00715246/'><img src='/xrt_curves/00715246/thumb2.gif' alt='XRT Light curve of GRB 161004B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 161007A</p><a href='/xrt_curves/00716127/'><img src='/xrt_curves/00716127/thumb2.gif' alt='XRT Light curve of GRB 161007A'/></a></td>
<td><p class='grb'>GRB 161011A</p><a href='/xrt_curves/00716876/'><img src='/xrt_curves/00716876/thumb2.gif' alt='XRT Light curve of GRB 161011A'/></a></td>
<td><p class='grb'>GRB 161014A</p><a href='/xrt_curves/00717500/'><img src='/xrt_curves/00717500/thumb2.gif' alt='XRT Light curve of GRB 161014A'/></a></td>
<td><p class='grb'>GRB 161017A</p><a href='/xrt_curves/00718023/'><img src='/xrt_curves/00718023/thumb2.gif' alt='XRT Light curve of GRB 161017A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 161022A</p><a href='/xrt_curves/00718655/'><img src='/xrt_curves/00718655/thumb2.gif' alt='XRT Light curve of GRB 161022A'/></a></td>
<td><p class='grb'>GRB 161104A</p><a href='/xrt_curves/00720568/'><img src='/xrt_curves/00720568/thumb2.gif' alt='XRT Light curve of GRB 161104A'/></a></td>
<td><p class='grb'>GRB 161105A</p><a href='/xrt_curves/00720697/'><img src='/xrt_curves/00720697/thumb2.gif' alt='XRT Light curve of GRB 161105A'/></a></td>
<td><p class='grb'>GRB 161108A</p><a href='/xrt_curves/00721234/'><img src='/xrt_curves/00721234/thumb2.gif' alt='XRT Light curve of GRB 161108A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 161113A</p><a href='/xrt_curves/00722063/'><img src='/xrt_curves/00722063/thumb2.gif' alt='XRT Light curve of GRB 161113A'/></a></td>
<td><p class='grb'>GRB 161117A</p><a href='/xrt_curves/00722604/'><img src='/xrt_curves/00722604/thumb2.gif' alt='XRT Light curve of GRB 161117A'/></a></td>
<td><p class='grb'>GRB 161117B</p><a href='/xrt_curves/00722642/'><img src='/xrt_curves/00722642/thumb2.gif' alt='XRT Light curve of GRB 161117B'/></a></td>
<td><p class='grb'>GRB 161129A</p><a href='/xrt_curves/00724438/'><img src='/xrt_curves/00724438/thumb2.gif' alt='XRT Light curve of GRB 161129A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 161202A</p><a href='/xrt_curves/00725036/'><img src='/xrt_curves/00725036/thumb2.gif' alt='XRT Light curve of GRB 161202A'/></a></td>
<td><p class='grb'>GRB 161214B</p><a href='/xrt_curves/00726885/'><img src='/xrt_curves/00726885/thumb2.gif' alt='XRT Light curve of GRB 161214B'/></a></td>
<td><p class='grb'>GRB 161217A</p><a href='/xrt_curves/00727167/'><img src='/xrt_curves/00727167/thumb2.gif' alt='XRT Light curve of GRB 161217A'/></a></td>
<td><p class='grb'>GRB 161219B</p><a href='/xrt_curves/00727541/'><img src='/xrt_curves/00727541/thumb2.gif' alt='XRT Light curve of GRB 161219B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 161220A</p><a href='/xrt_curves/00727610/'><img src='/xrt_curves/00727610/thumb2.gif' alt='XRT Light curve of GRB 161220A'/></a></td>
<td><p class='grb'>GRB 161224A</p><a href='/xrt_curves/00728268/'><img src='/xrt_curves/00728268/thumb2.gif' alt='XRT Light curve of GRB 161224A'/></a></td>
<td><p class='grb'>GRB 170111A</p><a href='/xrt_curves/00731887/'><img src='/xrt_curves/00731887/thumb2.gif' alt='XRT Light curve of GRB 170111A'/></a></td>
<td><p class='grb'>GRB 170113A</p><a href='/xrt_curves/00732526/'><img src='/xrt_curves/00732526/thumb2.gif' alt='XRT Light curve of GRB 170113A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170115A</p><a href='/xrt_curves/00733103/'><img src='/xrt_curves/00733103/thumb2.gif' alt='XRT Light curve of GRB 170115A'/></a></td>
<td><p class='grb'>GRB 170126A</p><a href='/xrt_curves/00735188/'><img src='/xrt_curves/00735188/thumb2.gif' alt='XRT Light curve of GRB 170126A'/></a></td>
<td><p class='grb'>GRB 170127A</p><a href='/xrt_curves/00735326/'><img src='/xrt_curves/00735326/thumb2.gif' alt='XRT Light curve of GRB 170127A'/></a></td>
<td><p class='grb'>GRB 170127B</p><a href='/xrt_curves/00735331/'><img src='/xrt_curves/00735331/thumb2.gif' alt='XRT Light curve of GRB 170127B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170202A</p><a href='/xrt_curves/00736407/'><img src='/xrt_curves/00736407/thumb2.gif' alt='XRT Light curve of GRB 170202A'/></a></td>
<td><p class='grb'>GRB 170205A</p><a href='/xrt_curves/00736843/'><img src='/xrt_curves/00736843/thumb2.gif' alt='XRT Light curve of GRB 170205A'/></a></td>
<td><p class='grb'>GRB 170206B</p><a href='/xrt_curves/00737125/'><img src='/xrt_curves/00737125/thumb2.gif' alt='XRT Light curve of GRB 170206B'/></a></td>
<td><p class='grb'>GRB 170208A</p><a href='/xrt_curves/00737438/'><img src='/xrt_curves/00737438/thumb2.gif' alt='XRT Light curve of GRB 170208A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170208B</p><a href='/xrt_curves/00737463/'><img src='/xrt_curves/00737463/thumb2.gif' alt='XRT Light curve of GRB 170208B'/></a></td>
<td><p class='grb'>GRB 170306A</p><a href='/xrt_curves/00741220/'><img src='/xrt_curves/00741220/thumb2.gif' alt='XRT Light curve of GRB 170306A'/></a></td>
<td><p class='grb'>GRB 170311A</p><a href='/xrt_curves/00741965/'><img src='/xrt_curves/00741965/thumb2.gif' alt='XRT Light curve of GRB 170311A'/></a></td>
<td><p class='grb'>GRB 170317A</p><a href='/xrt_curves/00742866/'><img src='/xrt_curves/00742866/thumb2.gif' alt='XRT Light curve of GRB 170317A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170318A</p><a href='/xrt_curves/00743065/'><img src='/xrt_curves/00743065/thumb2.gif' alt='XRT Light curve of GRB 170318A'/></a></td>
<td><p class='grb'>GRB 170318B</p><a href='/xrt_curves/00743086/'><img src='/xrt_curves/00743086/thumb2.gif' alt='XRT Light curve of GRB 170318B'/></a></td>
<td><p class='grb'>GRB 170330A</p><a href='/xrt_curves/00744773/'><img src='/xrt_curves/00744773/thumb2.gif' alt='XRT Light curve of GRB 170330A'/></a></td>
<td><p class='grb'>GRB 170331A</p><a href='/xrt_curves/00744791/'><img src='/xrt_curves/00744791/thumb2.gif' alt='XRT Light curve of GRB 170331A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170405A</p><a href='/xrt_curves/00745797/'><img src='/xrt_curves/00745797/thumb2.gif' alt='XRT Light curve of GRB 170405A'/></a></td>
<td><p class='grb'>GRB 170419A</p><a href='/xrt_curves/00748898/'><img src='/xrt_curves/00748898/thumb2.gif' alt='XRT Light curve of GRB 170419A'/></a></td>
<td><p class='grb'>GRB 170428A</p><a href='/xrt_curves/00750298/'><img src='/xrt_curves/00750298/thumb2.gif' alt='XRT Light curve of GRB 170428A'/></a></td>
<td><p class='grb'>GRB 170510A</p><a href='/xrt_curves/00020769/'><img src='/xrt_curves/00020769/thumb2.gif' alt='XRT Light curve of GRB 170510A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170516A</p><a href='/xrt_curves/00753110/'><img src='/xrt_curves/00753110/thumb2.gif' alt='XRT Light curve of GRB 170516A'/></a></td>
<td><p class='grb'>GRB 170519A</p><a href='/xrt_curves/00753445/'><img src='/xrt_curves/00753445/thumb2.gif' alt='XRT Light curve of GRB 170519A'/></a></td>
<td><p class='grb'>GRB 170524A</p><a href='/xrt_curves/00754322/'><img src='/xrt_curves/00754322/thumb2.gif' alt='XRT Light curve of GRB 170524A'/></a></td>
<td><p class='grb'>GRB 170526A</p><a href='/xrt_curves/00754549/'><img src='/xrt_curves/00754549/thumb2.gif' alt='XRT Light curve of GRB 170526A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170531A</p><a href='/xrt_curves/00755343/'><img src='/xrt_curves/00755343/thumb2.gif' alt='XRT Light curve of GRB 170531A'/></a></td>
<td><p class='grb'>GRB 170531B</p><a href='/xrt_curves/00755354/'><img src='/xrt_curves/00755354/thumb2.gif' alt='XRT Light curve of GRB 170531B'/></a></td>
<td><p class='grb'>GRB 170604A</p><a href='/xrt_curves/00755867/'><img src='/xrt_curves/00755867/thumb2.gif' alt='XRT Light curve of GRB 170604A'/></a></td>
<td><p class='grb'>GRB 170607A</p><a href='/xrt_curves/00756284/'><img src='/xrt_curves/00756284/thumb2.gif' alt='XRT Light curve of GRB 170607A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170626A</p><a href='/xrt_curves/00758766/'><img src='/xrt_curves/00758766/thumb2.gif' alt='XRT Light curve of GRB 170626A'/></a></td>
<td><p class='grb'>GRB 170629A</p><a href='/xrt_curves/00759159/'><img src='/xrt_curves/00759159/thumb2.gif' alt='XRT Light curve of GRB 170629A'/></a></td>
<td><p class='grb'>GRB 170705A</p><a href='/xrt_curves/00760064/'><img src='/xrt_curves/00760064/thumb2.gif' alt='XRT Light curve of GRB 170705A'/></a></td>
<td><p class='grb'>GRB 170710A</p><a href='/xrt_curves/00761119/'><img src='/xrt_curves/00761119/thumb2.gif' alt='XRT Light curve of GRB 170710A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170711A</p><a href='/xrt_curves/00761622/'><img src='/xrt_curves/00761622/thumb2.gif' alt='XRT Light curve of GRB 170711A'/></a></td>
<td><p class='grb'>GRB 170714A</p><a href='/xrt_curves/00762535/'><img src='/xrt_curves/00762535/thumb2.gif' alt='XRT Light curve of GRB 170714A'/></a></td>
<td><p class='grb'>GRB 170728A</p><a href='/xrt_curves/00765008/'><img src='/xrt_curves/00765008/thumb2.gif' alt='XRT Light curve of GRB 170728A'/></a></td>
<td><p class='grb'>GRB 170728B</p><a href='/xrt_curves/00765130/'><img src='/xrt_curves/00765130/thumb2.gif' alt='XRT Light curve of GRB 170728B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170803A</p><a href='/xrt_curves/00766081/'><img src='/xrt_curves/00766081/thumb2.gif' alt='XRT Light curve of GRB 170803A'/></a></td>
<td><p class='grb'>GRB 170804A</p><a href='/xrt_curves/00766194/'><img src='/xrt_curves/00766194/thumb2.gif' alt='XRT Light curve of GRB 170804A'/></a></td>
<td><p class='grb'>GRB 170810A</p><a href='/xrt_curves/00767284/'><img src='/xrt_curves/00767284/thumb2.gif' alt='XRT Light curve of GRB 170810A'/></a></td>
<td><p class='grb'>GRB 170813A</p><a href='/xrt_curves/00767563/'><img src='/xrt_curves/00767563/thumb2.gif' alt='XRT Light curve of GRB 170813A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170822A</p><a href='/xrt_curves/00768939/'><img src='/xrt_curves/00768939/thumb2.gif' alt='XRT Light curve of GRB 170822A'/></a></td>
<td><p class='grb'>GRB 170827A</p><a href='/xrt_curves/00769567/'><img src='/xrt_curves/00769567/thumb2.gif' alt='XRT Light curve of GRB 170827A'/></a></td>
<td><p class='grb'>GRB 170903A</p><a href='/xrt_curves/00770528/'><img src='/xrt_curves/00770528/thumb2.gif' alt='XRT Light curve of GRB 170903A'/></a></td>
<td><p class='grb'>GRB 170906A</p><a href='/xrt_curves/00770957/'><img src='/xrt_curves/00770957/thumb2.gif' alt='XRT Light curve of GRB 170906A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170906B</p><a href='/xrt_curves/00770958/'><img src='/xrt_curves/00770958/thumb2.gif' alt='XRT Light curve of GRB 170906B'/></a></td>
<td><p class='grb'>GRB 170906C</p><a href='/xrt_curves/00770981/'><img src='/xrt_curves/00770981/thumb2.gif' alt='XRT Light curve of GRB 170906C'/></a></td>
<td><p class='grb'>GRB 170912A</p><a href='/xrt_curves/00772006/'><img src='/xrt_curves/00772006/thumb2.gif' alt='XRT Light curve of GRB 170912A'/></a></td>
<td><p class='grb'>GRB 170912B</p><a href='/xrt_curves/00772052/'><img src='/xrt_curves/00772052/thumb2.gif' alt='XRT Light curve of GRB 170912B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 170921A</p><a href='/xrt_curves/00773509/'><img src='/xrt_curves/00773509/thumb2.gif' alt='XRT Light curve of GRB 170921A'/></a></td>
<td><p class='grb'>GRB 171001A</p><a href='/xrt_curves/00775553/'><img src='/xrt_curves/00775553/thumb2.gif' alt='XRT Light curve of GRB 171001A'/></a></td>
<td><p class='grb'>GRB 171004A</p><a href='/xrt_curves/00776347/'><img src='/xrt_curves/00776347/thumb2.gif' alt='XRT Light curve of GRB 171004A'/></a></td>
<td><p class='grb'>GRB 171007A</p><a href='/xrt_curves/00777215/'><img src='/xrt_curves/00777215/thumb2.gif' alt='XRT Light curve of GRB 171007A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 171020A</p><a href='/xrt_curves/00780845/'><img src='/xrt_curves/00780845/thumb2.gif' alt='XRT Light curve of GRB 171020A'/></a></td>
<td><p class='grb'>GRB 171027A</p><a href='/xrt_curves/00783479/'><img src='/xrt_curves/00783479/thumb2.gif' alt='XRT Light curve of GRB 171027A'/></a></td>
<td><p class='grb'>GRB 171102B</p><a href='/xrt_curves/00785510/'><img src='/xrt_curves/00785510/thumb2.gif' alt='XRT Light curve of GRB 171102B'/></a></td>
<td><p class='grb'>GRB 171115A</p><a href='/xrt_curves/00790053/'><img src='/xrt_curves/00790053/thumb2.gif' alt='XRT Light curve of GRB 171115A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 171120A</p><a href='/xrt_curves/00791201/'><img src='/xrt_curves/00791201/thumb2.gif' alt='XRT Light curve of GRB 171120A'/></a></td>
<td><p class='grb'>GRB 171123A</p><a href='/xrt_curves/00791922/'><img src='/xrt_curves/00791922/thumb2.gif' alt='XRT Light curve of GRB 171123A'/></a></td>
<td><p class='grb'>GRB 171205A</p><a href='/xrt_curves/00794972/'><img src='/xrt_curves/00794972/thumb2.gif' alt='XRT Light curve of GRB 171205A'/></a></td>
<td><p class='grb'>GRB 171209A</p><a href='/xrt_curves/00796100/'><img src='/xrt_curves/00796100/thumb2.gif' alt='XRT Light curve of GRB 171209A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 171211A</p><a href='/xrt_curves/00796469/'><img src='/xrt_curves/00796469/thumb2.gif' alt='XRT Light curve of GRB 171211A'/></a></td>
<td><p class='grb'>GRB 171212A</p><a href='/xrt_curves/00796778/'><img src='/xrt_curves/00796778/thumb2.gif' alt='XRT Light curve of GRB 171212A'/></a></td>
<td><p class='grb'>GRB 171216A</p><a href='/xrt_curves/00797441/'><img src='/xrt_curves/00797441/thumb2.gif' alt='XRT Light curve of GRB 171216A'/></a></td>
<td><p class='grb'>GRB 171222A</p><a href='/xrt_curves/00799669/'><img src='/xrt_curves/00799669/thumb2.gif' alt='XRT Light curve of GRB 171222A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180102A</p><a href='/xrt_curves/00802999/'><img src='/xrt_curves/00802999/thumb2.gif' alt='XRT Light curve of GRB 180102A'/></a></td>
<td><p class='grb'>GRB 180111A</p><a href='/xrt_curves/00804692/'><img src='/xrt_curves/00804692/thumb2.gif' alt='XRT Light curve of GRB 180111A'/></a></td>
<td><p class='grb'>GRB 180115A</p><a href='/xrt_curves/00805318/'><img src='/xrt_curves/00805318/thumb2.gif' alt='XRT Light curve of GRB 180115A'/></a></td>
<td><p class='grb'>GRB 180204A</p><a href='/xrt_curves/00808483/'><img src='/xrt_curves/00808483/thumb2.gif' alt='XRT Light curve of GRB 180204A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180205A</p><a href='/xrt_curves/00808625/'><img src='/xrt_curves/00808625/thumb2.gif' alt='XRT Light curve of GRB 180205A'/></a></td>
<td><p class='grb'>GRB 180222A</p><a href='/xrt_curves/00811235/'><img src='/xrt_curves/00811235/thumb2.gif' alt='XRT Light curve of GRB 180222A'/></a></td>
<td><p class='grb'>GRB 180224A</p><a href='/xrt_curves/00811561/'><img src='/xrt_curves/00811561/thumb2.gif' alt='XRT Light curve of GRB 180224A'/></a></td>
<td><p class='grb'>GRB 180311A</p><a href='/xrt_curves/00813721/'><img src='/xrt_curves/00813721/thumb2.gif' alt='XRT Light curve of GRB 180311A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180314A</p><a href='/xrt_curves/00814129/'><img src='/xrt_curves/00814129/thumb2.gif' alt='XRT Light curve of GRB 180314A'/></a></td>
<td><p class='grb'>GRB 180314B</p><a href='/xrt_curves/00814305/'><img src='/xrt_curves/00814305/thumb2.gif' alt='XRT Light curve of GRB 180314B'/></a></td>
<td><p class='grb'>GRB 180316A</p><a href='/xrt_curves/00814677/'><img src='/xrt_curves/00814677/thumb2.gif' alt='XRT Light curve of GRB 180316A'/></a></td>
<td><p class='grb'>GRB 180324A</p><a href='/xrt_curves/00817345/'><img src='/xrt_curves/00817345/thumb2.gif' alt='XRT Light curve of GRB 180324A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180325A</p><a href='/xrt_curves/00817564/'><img src='/xrt_curves/00817564/thumb2.gif' alt='XRT Light curve of GRB 180325A'/></a></td>
<td><p class='grb'>GRB 180329B</p><a href='/xrt_curves/00819490/'><img src='/xrt_curves/00819490/thumb2.gif' alt='XRT Light curve of GRB 180329B'/></a></td>
<td><p class='grb'>GRB 180331A</p><a href='/xrt_curves/00820347/'><img src='/xrt_curves/00820347/thumb2.gif' alt='XRT Light curve of GRB 180331A'/></a></td>
<td><p class='grb'>GRB 180331B</p><a href='/xrt_curves/00820513/'><img src='/xrt_curves/00820513/thumb2.gif' alt='XRT Light curve of GRB 180331B'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180402A</p><a href='/xrt_curves/00821103/'><img src='/xrt_curves/00821103/thumb2.gif' alt='XRT Light curve of GRB 180402A'/></a></td>
<td><p class='grb'>GRB 180404A</p><a href='/xrt_curves/00821881/'><img src='/xrt_curves/00821881/thumb2.gif' alt='XRT Light curve of GRB 180404A'/></a></td>
<td><p class='grb'>GRB 180404B</p><a href='/xrt_curves/00821902/'><img src='/xrt_curves/00821902/thumb2.gif' alt='XRT Light curve of GRB 180404B'/></a></td>
<td><p class='grb'>GRB 180410A</p><a href='/xrt_curves/00824063/'><img src='/xrt_curves/00824063/thumb2.gif' alt='XRT Light curve of GRB 180410A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180411A</p><a href='/xrt_curves/00824451/'><img src='/xrt_curves/00824451/thumb2.gif' alt='XRT Light curve of GRB 180411A'/></a></td>
<td><p class='grb'>GRB 180418A</p><a href='/xrt_curves/00826428/'><img src='/xrt_curves/00826428/thumb2.gif' alt='XRT Light curve of GRB 180418A'/></a></td>
<td><p class='grb'>GRB 180425A</p><a href='/xrt_curves/00828672/'><img src='/xrt_curves/00828672/thumb2.gif' alt='XRT Light curve of GRB 180425A'/></a></td>
<td><p class='grb'>GRB 180504A</p><a href='/xrt_curves/00830822/'><img src='/xrt_curves/00830822/thumb2.gif' alt='XRT Light curve of GRB 180504A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180510A</p><a href='/xrt_curves/00831810/'><img src='/xrt_curves/00831810/thumb2.gif' alt='XRT Light curve of GRB 180510A'/></a></td>
<td><p class='grb'>GRB 180510B</p><a href='/xrt_curves/00831816/'><img src='/xrt_curves/00831816/thumb2.gif' alt='XRT Light curve of GRB 180510B'/></a></td>
<td><p class='grb'>GRB 180512A</p><a href='/xrt_curves/00832119/'><img src='/xrt_curves/00832119/thumb2.gif' alt='XRT Light curve of GRB 180512A'/></a></td>
<td><p class='grb'>GRB 180514A</p><a href='/xrt_curves/00832368/'><img src='/xrt_curves/00832368/thumb2.gif' alt='XRT Light curve of GRB 180514A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180602A</p><a href='/xrt_curves/00835200/'><img src='/xrt_curves/00835200/thumb2.gif' alt='XRT Light curve of GRB 180602A'/></a></td>
<td><p class='grb'>GRB 180613A</p><a href='/xrt_curves/00840853/'><img src='/xrt_curves/00840853/thumb2.gif' alt='XRT Light curve of GRB 180613A'/></a></td>
<td><p class='grb'>GRB 180614A</p><a href='/xrt_curves/00841548/'><img src='/xrt_curves/00841548/thumb2.gif' alt='XRT Light curve of GRB 180614A'/></a></td>
<td><p class='grb'>GRB 180618A</p><a href='/xrt_curves/00842475/'><img src='/xrt_curves/00842475/thumb2.gif' alt='XRT Light curve of GRB 180618A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180620A</p><a href='/xrt_curves/00843122/'><img src='/xrt_curves/00843122/thumb2.gif' alt='XRT Light curve of GRB 180620A'/></a></td>
<td><p class='grb'>GRB 180620B</p><a href='/xrt_curves/00843211/'><img src='/xrt_curves/00843211/thumb2.gif' alt='XRT Light curve of GRB 180620B'/></a></td>
<td><p class='grb'>GRB 180623A</p><a href='/xrt_curves/00844015/'><img src='/xrt_curves/00844015/thumb2.gif' alt='XRT Light curve of GRB 180623A'/></a></td>
<td><p class='grb'>GRB 180624A</p><a href='/xrt_curves/00844192/'><img src='/xrt_curves/00844192/thumb2.gif' alt='XRT Light curve of GRB 180624A'/></a></td>
</tr>
<tr>
<td><p class='grb'>GRB 180626A</p><a href='/xrt_curves/00844615/'><img src='/xrt_curves/00844615/thumb2.gif' alt='XRT Light curve of GRB 180626A'/></a></td>
<td><p class='grb'>GRB 180630A</p><a href='/xrt_curves/00845443/'><img src='/xrt_curves/00845443/thumb2.gif' alt='XRT Light curve of GRB 180630A'/></a></td>
<td><p class='grb'>MAXI J1535-57</p><a href='/xrt_curves/00770431/'><img src='/xrt_curves/00770431/thumb2.gif' alt='XRT Light curve of MAXI J1535-57'/></a></td>
<td><p class='grb'>SGR 1935+2154</p><a href='/xrt_curves/00603488/'><img src='/xrt_curves/00603488/thumb2.gif' alt='XRT Light curve of SGR 1935+2154'/></a></td>
</tr>
<tr>
<td><p class='grb'>SWIFT J0045.2+4151</p><a href='/xrt_curves/00633105/'><img src='/xrt_curves/00633105/thumb2.gif' alt='XRT Light curve of SWIFT J0045.2+4151'/></a></td>
<td><p class='grb'>Swift J0243.6+6124</p><a href='/xrt_curves/00775946/'><img src='/xrt_curves/00775946/thumb2.gif' alt='XRT Light curve of Swift J0243.6+6124'/></a></td>
<td><p class='grb'>Swift J164449.3+573451</p><a href='/xrt_curves/00450158/'><img src='/xrt_curves/00450158/thumb2.gif' alt='XRT Light curve of Swift J164449.3+573451'/></a></td>
<td><p class='grb'>Swift J185003.2-005627</p><a href='/xrt_curves/00456014/'><img src='/xrt_curves/00456014/thumb2.gif' alt='XRT Light curve of Swift J185003.2-005627'/></a></td>
  
</tr>
</table>

      <div id="footer">        <div class="validator">
          <a href="http://validator.w3.org/check?uri=referer"><img
            src="http://www.w3.org/Icons/valid-xhtml10"
            alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>

        </div>        <p>
          UK Swift Science Data Centre<br/>
          Last updated 2011 March 25<br/>  
          Web page maintained by Phil Evans<br/>
          E-mail: <a href="mailto:swifthelp@le.ac.uk">swift help</a><br/>
          Please read our <a href='/GDPR.php'>privacy notice</a>.
        </p>

      </div>
    </div>
  </body></html>
