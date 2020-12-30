<?php
$verc = json_decode(file_get_contents("verc.json"));
$linksincluded = false;

if( isset($_GET['ent']) ):
	if( $_GET['ent'] == "all" ):
		$itemstoprint = $verc;
	else:
		foreach( $verc as $ent ):
			if( $ent->name == $_GET['ent'] ):
				$itemstoprint = array($ent);
				break;
			endif;
		endforeach;
	endif;
else:
	$itemstoprint = array($verc[0]);
endif;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>DoD Plugins - VERC</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="generator" content="vBulletin 3.8.9" />


<style type="text/css">
 #contentwrapper
 {
  width: 100px;
  height: 75px;
  border: none;
  padding: 5px;
 }

 .billcontent
 {
  width: 100%;
  display: block;
 }
</style>


	
<meta name="keywords" content="VERC" />
<meta name="description" content="DoD Plugins - An AMXX Scripting Community for Day of Defeat" />
	


<!-- CSS Stylesheet -->
<style type="text/css" id="vbulletin_css">
/**
* vBulletin 3.8.9 CSS
* Style: 'vBulletin Style'; Style ID: 1
*/
body
{
	background: #333333;
	color: #000000;
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
a:link, body_alink
{
	color: #22229C;
}
a:visited, body_avisited
{
	color: #22229C;
}
a:hover, a:active, body_ahover
{
	color: #FF4400;
}
.page
{
	background: #666666;
	color: #000000;
}
td, th, p, li
{
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.tborder
{
	background: #D1D1E1;
	color: #000000;
	border: 1px solid #0B198C;
}
.tcat
{
	background: #869BBF url(images/gradients/gradient_tcat.gif) repeat-x top left;
	color: #FFFFFF;
	font: bold 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.tcat a:link, .tcat_alink
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:visited, .tcat_avisited
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:hover, .tcat a:active, .tcat_ahover
{
	color: #FFFF66;
	text-decoration: underline;
}
.thead
{
	background: #5C7099 url(images/gradients/gradient_thead.gif) repeat-x top left;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.thead a:link, .thead_alink
{
	color: #FFFFFF;
}
.thead a:visited, .thead_avisited
{
	color: #FFFFFF;
}
.thead a:hover, .thead a:active, .thead_ahover
{
	color: #FFFF00;
}
.tfoot
{
	background: #3E5C92;
	color: #E0E0F6;
}
.tfoot a:link, .tfoot_alink
{
	color: #E0E0F6;
}
.tfoot a:visited, .tfoot_avisited
{
	color: #E0E0F6;
}
.tfoot a:hover, .tfoot a:active, .tfoot_ahover
{
	color: #FFFF66;
}
.alt1, .alt1Active
{
	background: #F5F5FF;
	color: #000000;
}
.alt2, .alt2Active
{
	background: #E1E4F2;
	color: #000000;
}
.inlinemod
{
	background: #FFFFCC;
	color: #000000;
}
.wysiwyg
{
	background: #F5F5FF;
	color: #000000;
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
.wysiwyg a:link, .wysiwyg_alink
{
	color: #22229C;
}
.wysiwyg a:visited, .wysiwyg_avisited
{
	color: #22229C;
}
.wysiwyg a:hover, .wysiwyg a:active, .wysiwyg_ahover
{
	color: #FF4400;
}
textarea, .bginput
{
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.bginput option, .bginput optgroup
{
	font-size: 10pt;
	font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.button
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
select
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
option, optgroup
{
	font-size: 11px;
	font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.smallfont
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.time
{
	color: #666686;
}
.navbar
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.highlight
{
	color: #FF0000;
	font-weight: bold;
}
.fjsel
{
	background: #3E5C92;
	color: #E0E0F6;
}
.fjdpth0
{
	background: #F7F7F7;
	color: #000000;
}
.panel
{
	background: #E4E7F5 url(images/gradients/gradient_panel.gif) repeat-x top left;
	color: #000000;
	padding: 10px;
	border: 2px outset;
}
.panelsurround
{
	background: #D1D4E0 url(images/gradients/gradient_panelsurround.gif) repeat-x top left;
	color: #000000;
}
legend
{
	color: #22229C;
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.vbmenu_control
{
	background: #738FBF;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	padding: 3px 6px 3px 6px;
	white-space: nowrap;
}
.vbmenu_control a:link, .vbmenu_control_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:visited, .vbmenu_control_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:hover, .vbmenu_control a:active, .vbmenu_control_ahover
{
	color: #FFFFFF;
	text-decoration: underline;
}
.vbmenu_popup
{
	background: #FFFFFF;
	color: #000000;
	border: 1px solid #0B198C;
}
.vbmenu_option
{
	background: #BBC7CE;
	color: #000000;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_option a:link, .vbmenu_option_alink
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:visited, .vbmenu_option_avisited
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:hover, .vbmenu_option a:active, .vbmenu_option_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite
{
	background: #8A949E;
	color: #FFFFFF;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_hilite a:link, .vbmenu_hilite_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:visited, .vbmenu_hilite_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:hover, .vbmenu_hilite a:active, .vbmenu_hilite_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
/* ***** styling for 'big' usernames on postbit etc. ***** */
.bigusername { font-size: 14pt; }

/* ***** small padding on 'thead' elements ***** */
td.thead, th.thead, div.thead { padding: 4px; }

/* ***** basic styles for multi-page nav elements */
.pagenav a { text-decoration: none; }
.pagenav td { padding: 2px 4px 2px 4px; }

/* ***** de-emphasized text */
.shade, a.shade:link, a.shade:visited { color: #777777; text-decoration: none; }
a.shade:active, a.shade:hover { color: #FF4400; text-decoration: underline; }
.tcat .shade, .thead .shade, .tfoot .shade { color: #DDDDDD; }

/* ***** define margin and font-size for elements inside panels ***** */
.fieldset { margin-bottom: 6px; }
.fieldset, .fieldset td, .fieldset p, .fieldset li { font-size: 11px; }
/* ***** new code styles ***** */
.bbccode{
 background: #FFF;
 border: 1px solid #FFCC66;
 border-top: 4px solid #FFCC66;
 padding: 5px;
 color: #996600;
 font-size: 12px;
 width: 650px;
}

.bbccodetitle{
 font-weight: bold;
 font-size: 10px;
 border: 0px;
 border-bottom: 1px dashed #CC6600;
 color: #CC6600;
 padding-bottom: 3px;
 margin-bottom: 5px;
}
/* ***** new html styles ***** */
.bbchtml{
 background: #FFF;
 border: 1px solid #c3ffa8;
 border-top: 4px solid #c3ffa8;
 padding: 5px;
 color: #7fa66e;
 font-size: 12px;
 width: 650px;
}

.bbchtmltitle{
 font-weight: bold;
 font-size: 10px;
 border: 0px;
 border-bottom: 1px dashed #82cc00;
 color: #82cc00;
 padding-bottom: 3px;
 margin-bottom: 5px;
}
/* ***** new php styles ***** */
.bbcphp{
 background: #FFF;
 border: 1px solid #ffa8a8;
 border-top: 4px solid #ffa8a8;
 padding: 5px;
 color: #990000;
 font-size: 12px;
 width: 650px;
}

.bbcphptitle{
 font-weight: bold;
 font-size: 10px;
 border: 0px;
 border-bottom: 1px dashed #cc0000;
 color: #cc0000;
 padding-bottom: 3px;
 margin-bottom: 5px;
}

/* ***** new quote styles ***** */
.bbcquote{
 background: #FFF;
 border: 1px solid #C2CFDF;
 border-top: 4px solid #C2CFDF;
 color: #333366;
 padding: 5px;
 font-size: 11px;
 width: 650px;
}

.bbcquotetitle{
 font-weight: bold;
 font-size: 10px;
 border: 0px;
 border-bottom: 1px dashed #003366;
 color: #003366;
 padding-bottom: 3px;
 margin-bottom: 5px;
}
</style>


</head>
<body>

<?php
foreach( $itemstoprint as $ent):
?>

         <table width="100%" bgcolor="#ffffef" border="0" cellpadding="0" cellspacing="5">
          <tbody>
           <tr>
            <td>
             <table width="100%" bgcolor="#c0c0c0" border="0" cellpadding="1" cellspacing="0">
              <tbody>
               <tr>
                <td>
                 <table width="100%" bgcolor="#ddddcc" border="0" cellpadding="5" cellspacing="0">
                  <tbody>
                   <tr>
                    <td>
                     <strong>
                      <span class="side" style="color: rgb(51, 51, 51); font-size: 16px; font-family: Arial;"><?php echo $ent->name; ?></a>
                     </strong>
                    </td>
                   </tr>
                  </tbody>
                 </table>

                 <table width="100%" bgcolor="#eeeedd" border="0" cellpadding="5" cellspacing="0">
                  <tbody>
                   <tr>
                    <td>
                     <span style="font-weight: bold; font-size: 16px;">
 <span style="color: rgb(0, 0, 128);">Description</span>
</span>
<br><br>
<table width="100%" border="0" cellpadding="1" cellspacing="0">
 <tbody>
  <tr>
   <td>
    

    

    <?php echo $ent->desc; ?>

    

    
   </td>
  </tr>
 </tbody>
</table>
<br><br><span style="font-weight: bold; font-size: 16px;">
 <span style="color: rgb(0, 0, 128);">Properties</span>
</span>
<br><br>
<table width="100%" border="0" cellpadding="1" cellspacing="0">
 <tbody>
  <tr>
   <td>
    
     <table width="100%" bgcolor="#c0c0c0" border="0" cellpadding="1" cellspacing="0">
      <tbody>
       <tr>
        <td>
         <table width="100%" bgcolor="#eeeeee" border="0" cellpadding="0" cellspacing="0">
          <tbody>
           <tr>
            <td>
    
<ul>
<?php
foreach( $ent->properties as $prop ):
	?>
	<li>
		<strong><?php echo $prop->name; ?></strong> (<em><?php echo $prop->type; ?></em>) <?php echo $prop->desc; ?>
		<?php
		if( isset($prop->defaultvalue) && !$prop->values ):
			echo " (default:  $prop->defaultvalue)";
		endif;
		?>
		<?php
		if( $prop->values ):
			?><br /><br /><ul style="list-style-type:none"><?php
			foreach( $prop->values as $value ):
				if( $prop->defaultvalue == $value->value ):
					?><li><span style="color: rgb(0, 128, 0);"><?php echo "$value->value - $value->desc (default)"; ?></span></li><?php
				else:
					echo "<li>$value->value - $value->desc</li>";
				endif;
			endforeach;
			?></ul><br /><?php
		endif;
		?>
	</li>
	<?php
endforeach;
?>
</ul>

    

    
            </td>
           </tr>
          </tbody>
         </table>
        </td>
       </tr>
      </tbody>
     </table>
    
   </td>
  </tr>
 </tbody>
</table>
<br><br><span style="font-weight: bold; font-size: 16px;">
 <span style="color: rgb(0, 0, 128);">Flags</span>
</span>
<br><br>
<table width="100%" border="0" cellpadding="1" cellspacing="0">
 <tbody>
  <tr>
   <td>
    

    
     This entity has the following flags. Flags can be either on or off. In the editor, these flags can be accessed in the Flags section of the entity properties.<br><br>
     <table width="100%" bgcolor="#c0c0c0" border="0" cellpadding="1" cellspacing="0">
      <tbody>
       <tr>
        <td>
         <table width="100%"  bgcolor="#eeeeee" border="0" cellpadding="0" cellspacing="0">
          <tbody>
           <tr>
            <td>
    

<ul>
<?php
foreach( $ent->flags as $flag ):
	?>
	<li><strong><?php echo $flag->value;?></strong> - <?php echo $flag->desc;?><br></li>
	<?php
endforeach;
?>
</ul>

    
            </td>
           </tr>
          </tbody>
         </table>
        </td>
       </tr>
      </tbody>
     </table>
    

    
   </td>
  </tr>
 </tbody>
</table>
<br><br>
                    </td>
                   </tr>
                  </tbody>
                 </table>
                 
                 <table width="100%" bgcolor="#eeeedd" border="0" cellpadding="5" cellspacing="0">
		  <tbody>
		   <tr>
		    <td>
		     <span style="font-weight: bold; font-size: 16px;">
 <span style="color: rgb(0, 0, 128);">Entities</span>
</span>
<br><br>
<table width="100%" border="0" cellpadding="1" cellspacing="0">
 <tbody>
  <tr>
   <td>

<!-- Link to all ents -->
<ul>
<?php
if( !$linksincluded ):
	foreach( $verc as $ent ):
		?>
		<li>
			<table width="75%" bgcolor="#eeeedd" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
			<td>
				&nbsp;&nbsp;
				<a href="<?php echo $_SERVER['SCRIPT_NAME'] . "?ent=" . $ent->name; ?>"><?php echo $ent->name; ?></a>
			</td>
			</tr>
			</tbody>
			</table>
		</li>
		<?php
	endforeach;
	$linksincluded = true;
endif;
?>
</ul>

    

    
   </td>
  </tr>
 </tbody>
</table>
<br><br>
		    </td>
		   </tr>
		  </tbody>
                 </table>
                </td>
               </tr>
              </tbody>
             </table>
            </td>
           </tr>
          </tbody>
		 </table>

<?php
endforeach;
?>

</body>
</html>

