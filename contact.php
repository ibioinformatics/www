<html>
<head>
<link rel="shortcut icon" href="images/iob.ico" type="image/x-icon" />
<title>Institute of Bioinformatics</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="The Institute of Bioinformatics (IOB) established by Dr. Akhilesh Pandey, is a non-profit academic research organization located at International Tech Park in Bangalore, India. IOB is recognized by the Department of Scientific and Industrial Research, Government of India." /> 
<meta name="keywords" content="bioinformatics, india, bangalore, database, institute, proteomics, mass spectrometry, mass spectrometer, LTQ-Orbitrap, proteomics bangalore, india, genomics, protein reference database, oncomine, HPRD, akhilesh, akhilesh pandey, hprd, plasma proteome database, netpath, pathways, signaling pathways, pathbuilder, biobuilder, proteinpedia, human proteinpedia, SVM, RAPID, primary Immunodeficiency disease, cancer, biomarkers, biomarker, gstric cancer, pancreatic cancer, esophageal cancer, ESCC, X chromosome, XLMR, microarray, CGH array, neurological disorders, epilepsy, rabies, CNV, protein tyrosine phosphatases, gene expression arrays, tiling arrays, tissue microarrays, cell pellet arrays, breast cancer database, BCD, oncomine, phosphoproteomics, SILAC, iTRAQ, Glycoproteomics, proteogenomics, secretome, neuroproteomics, toxicoproteomics, plant proteomics, ethanoproteomics, serum proteomics, quantitative proteomics, HPLC, OFFGEL, nano-LC, ETD, Electron Transfer Dissociation, mycobacterium tuberculosis, research, proteomcis research, biomarker discovery, arsenic, Ph.D., manipal, kuvempu, pondicherry, amrita, rajiv gandhi university of health science, KIDWAI, NIMHANS, Johns Hopkins University, JHMI, RIKEN, RCAI, University of Toronto, IGIB, IICB, NIMR, MSKCC, sloan-kettering, University of Southern Denmark, HUPO, comparative proteomics, embryonic stem cells, anopheles, iob, comparative genomics, est">
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="jquery.aw-showcase.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
	content_width:			540,
		content_height:			236,
		fit_to_parent:			false,
		auto:					true,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'hslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
});

var myCenter=new google.maps.LatLng(12.9857823,77.7368383);

function initialize(){
	var mapProp = {
		center: myCenter,
		zoom:15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({
		position: myCenter,
		animation:google.maps.Animation.BOUNCE,
		title:'Click to zoom'
	});

	marker.setMap(map);

	google.maps.event.addListener(marker,'click',function() {
		map.setZoom(18);
		map.setCenter(marker.getPosition());
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script language="JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>

<link href="style.css" rel="stylesheet" type="text/css"></head>
<body bgcolor="#E6E6E6" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/collagiate/iob_roll.gif','images/buttons/csa_roll.gif','images/buttons/director_roll.gif','images/buttons/board_roll.gif','images/buttons/links_roll.gif','images/collagiate/team_roll.gif')">
<table width="801" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr> 
    <td width="801"  bgcolor="#FFFFFF" align="center"><?php require("header.htm");?> &nbsp;</td>
  </tr> 
   <tr>
  <td>
  
  <table bgcolor="#FFFFFF" width="803">
  <tr><td width="129" height="69" valign="top"><?php include('menu.html');?> </td>
    <td width="662" valign="top" align="left"><fieldset>
    
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <!--<tr>
                <td></td>
                <td width="95%" colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
              <tr> 
                <td colspan="3"  class="header_title" style="border-bottom:#387A9A thick double; font:Geneva, Arial, Helvetica, sans-serif; font-size:13px"><strong>Contact</strong></td>
                <td width="5%">&nbsp;</td>
              </tr>-->
              <tr>
    <td colspan="3"   style="border-bottom:#0066FF medium groove; font:Geneva, Arial, Helvetica, sans-serif; font-size:14px" align="center"><strong>CONTACT</strong></td>
    
  </tr>
	          <tr>
	            <td colspan="3" align="left">

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tr> 
                <td height="19" colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr> 

  
  
                <td width="249" height="121" align="center" valign="top" style="padding: 3; border: 1px solid #cccccc;">
				
				
				<!-- <iframe width="370" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/Institute+of+Bioinformatics/@12.9857823,77.7346659,17z/data=!3m1!4b1!4m2!3m1!1s0x3bae0e072af9b8c3:0x935e6295a78e6ca4?hl=en"></iframe><br /> -->

<div id="googleMap" style="width:370px;height:300px;"></div>
<small><a href="https://www.google.com/maps/place/Institute+of+Bioinformatics/@12.9857823,77.7346659,17z/data=!3m1!4b1!4m2!3m1!1s0x3bae0e072af9b8c3:0x935e6295a78e6ca4?hl=en" style="color:#0000FF;text-align:left">
View Larger Map</a></small>

				</td>
                <td width="349" valign="top" bordercolor="#FF0000"><blockquote>
                  <div align="left">Discoverer Building, 7<super>th</super> Floor <br>
                    International Tech Park <br>
                    Whitefield, Bangalore - 560 066 <br>
                     Karnataka, India.<br> 
                     <i><br>
                    Phone:</i>(+91) 80-28416140 <br>
                    <i>Fax: </i>(+91) 80-28416132<br> 
                    <br>
                    <img src="images/email.gif" border="0">
                  </div>
                </blockquote></td>
              </tr>
              <tr> 
                <td height="228" colspan="2" valign="top"> 
                  <p align="justify" class="body"><a href="mailto:help@ibioinformatics.org"><br>
                    </a> <span class="header">Location</span><br>
                    <br>
                    The Institute is located in Bangalore, the capital of the 
                      state of Karnataka, is one of the fastest growing cities 
                      in Asia. Its pleasant climate, friendly people, and highly 
                      educated population have made it an attractive destination 
                      for entrepreneurs in India. Almost all computer-related 
                      multinationals have set up their Indian head office in Bangalore. 
                    <br>
                    <br>
                    Bangalore is the &quot;Garden City of India&quot; - its
                      gardens and boulevards attract the younger generation and
                      senior citizens alike. The large number of software companies
                      and extensive computer expertise have made Bangalore the
                      Silicon Valley of India.<br>
                    <br>
                    Bangalore is a hub for science and technology in India. 
                      It boasts of several elite research institutions involved 
                      in research and education including <a href="http://www.iisc.ernet.in/">Indian Institute of 
                      Science</a>, <a href="http://www.ncbs.res.in/">National Center for Biological Sciences</a>, <a href="http://www.jncasr.ac.in/">Jawaharlal 
                      Nehru Center for Advanced Scientific Research</a>, <a href="http://www.rri.res.in/">Raman Research 
                      Institute</a> and the <a href="http://www.isro.org/">Indian Space Research Organization</a>. Because 
                      of the excellent infrastructure and the availability of 
                      skilled personnel in the field of information technology, 
                      Bangalore is considered as one of the world's top 10 IT 
                  destinations.</p></td>
  </tr>
              <tr>
                <td colspan="2" align="right"><blockquote><a href="#top">TOP</a></blockquote></td>
              </tr>
</table> </td>
        </tr>
      </table>
	</fieldset></td>
  </tr>
  
  
  </table>
  
  
  
  
  </td></tr> 
    </table>


<br>

<br>
</body>
</html>
