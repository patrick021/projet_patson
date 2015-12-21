<?php
session_start();
require_once('config.php');
$titre_page='Contact';
include_once('haut.php');
?>


<?php 
include_once("1.php"); 
?>
     

     <?php 

     $listeip = array("188.143.232.31", "188.143.234.127", "78.129.220.116"); 

     foreach ($listeip as $ip){ 
     if ($_SERVER["REMOTE_ADDR"] == $ip) 
     die('Accès refusé'); 
     } 

     ?>

     	 
	             
		                 <!-- Le corps -->
				             <style type="text/css">
					     <!--
					     .Style3 {font-size: 12px}
					     .Style4 {color: #98C11B}
					     -->
					                 </style>
							             
								                 
										            <div id="corps1" align="">
											               
												                  <h1><img src="images/5.png" alt="icac" width="16" height="16" class="icac">Contact</h1>
														             
															                
																	            
																		              
																			            
																				          <div align="center">
																					        
																						      <p class="par1">
																						            . nos numéros de téléphone: +000 00 00 00 00 <br /> 
																							          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+237 79 19 41 80
																								          <br />
																									          . notre Skype: bbbbbbbbb.cccc
																										          <br />
																											          . notre Yahoo: zzzzzzz@organisation.org      </p>
																												            <br />
																													               <br />
																														             
																															             <p class="par1">vous pouvez aussi nous contacter via le formulaire si-dessous.</p>
																																          <br />
																																	             <br />
																																		                
																																				           
																																					           <form action="appel.php" method="post" enctype="multipart/form-data" name="devis2">
																																						                      <input name="moduleLoginAction2" value="register2" type="hidden" />                   
																																								                       <table width="368" border="0" cellspacing="0" bgcolor="#FFFFFF" class="lape9">
																																										                    <tr>
																																												                           <td width="161" bgcolor="#3B9D36"><label for="nom"><span class="Style95 Style96 Style3">Votre nom :</span></label></td>
																																															                          <td width="197" bgcolor="#3B9D36"><input name="nom" id="nom" size="25" value="" required /></td>
																																																		                     </tr>
																																																				                          <tr>
																																																							                         <td bgcolor="#7D7D7D"><label for="prenom"><span class="Style95 Style96 Style3">Votre pr&eacute;nom :</span></label></td>
																																																										                        <td bgcolor="#7D7D7D"><input name="prenom" id="prenom" size="25" value="" required /></td>
																																																													                   </tr>
																																																															                        <tr>
																																																																		                       <td bgcolor="#3B9D36"><label for="email"><span class="Style95 Style96 Style3">Votre email :</span></label></td>
																																																																				                              <td bgcolor="#3B9D36"><input name="email" id="email" size="25" value="" required /></td>
																																																																							                         </tr>
																																																																										                      
																																																																												                           <tr>
																																																																															                          <td bgcolor="#7D7D7D"><label for="telephone"><span class="Style95 Style96 Style3">T&eacute;l&eacute;phone :</span></label></td>
																																																																																		                         <td bgcolor="#7D7D7D"><input name="telephone" id="telephone" size="25" value="" required /></td>
																																																																																					                    </tr>
																																																																																							                         
																																																																																										                      <tr>
																																																																																												                             <td bgcolor="#3B9D36"><label for="codepostal"><span class="Style95 Style96 Style3">Votre pays :</span>&nbsp;</label></td>
																																																																																															                            <td bgcolor="#3B9D36"><input name="codepostal" id="codepostal" size="10" value="" /></td>
																																																																																																		                       </tr>
																																																																																																				                                                 
																																																																																																										                                          
																																																																																																															                       <tr>
																																																																																																																	                              <td valign="top"><span class="Style95 Style96 Style3">Votre message :</span></td>
																																																																																																																				                             <td bgcolor="#3B9D36"><textarea name="detailsmessage" cols="30" rows="10" id="detailspanne">
																																																																																																																							                        </textarea></td>
																																																																																																																										                   </tr>
																																																																																																																												             </table>
																																																																																																																													               <input name="button" id="button" value="envoyer " type="submit" />
																																																																																																																														               </form> 
																																																																																																																															                  
																																																																																																																																	             
																																																																																																																																		                
																																																																																																																																				          <span class="Style3"><span class="Style4">hhhhhhhhhh</span> ffffrrreeessdd<br />
																																																																																																																																					            gggfffffttttttt<br />
																																																																																																																																						              fwsdddddbhhn.</span><br />
																																																																																																																																							                <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Rue+de+Kondengui,+Yaounde,+Cameroun&amp;daddr=Route+inconnue&amp;hl=fr&amp;geocode=FYLJOgAdSQiwACkd6dlUb8WLEDE6JsJAlrgasw%3BFSTDOgAdgQ2wAA&amp;aq=&amp;sll=3.851302,11.537683&amp;sspn=0.006466,0.010568&amp;mra=dme&amp;mrsp=1&amp;sz=17&amp;ie=UTF8&amp;t=m&amp;ll=3.851259,11.537747&amp;spn=0.006423,0.006437&amp;z=16&amp;iwloc=ddw1&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Rue+de+Kondengui,+Yaounde,+Cameroun&amp;daddr=Route+inconnue&amp;hl=fr&amp;geocode=FYLJOgAdSQiwACkd6dlUb8WLEDE6JsJAlrgasw%3BFSTDOgAdgQ2wAA&amp;aq=&amp;sll=3.851302,11.537683&amp;sspn=0.006466,0.010568&amp;mra=dme&amp;mrsp=1&amp;sz=17&amp;ie=UTF8&amp;t=m&amp;ll=3.851259,11.537747&amp;spn=0.006423,0.006437&amp;z=16&amp;iwloc=ddw1" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
																																																																																																																																									        <br />
																																																																																																																																										         
																																																																																																																																											       </div> 
																																																																																																																																											                 
																																																																																																																																													          
																																																																																																																																														            
																																																																																																																																															                  
																																																																																																																																																	             </div>  
																																																																																																																																																		                  
																																																																																																																																																				               
																																																																																																																																																					                    
																																																																																																																																																							                  
																																																																																																																																																									                
																																																																																																																																																											         
																																																																																																																																																												           
																																																																																																																																																													             
																																																																																																																																																														     <div id="corps2">          
																																																																																																																																																														     <?php 
																																																																																																																																																														     include_once("2.php");

																																																																																																																																																														     ?>  
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     <br />
																																																																																																																																																														     </div>           
																																																																																																																																																														                            
																																																																																																																																																																	                    
																																																																																																																																																																			                
																																																																																																																																																																					                        
																																																																																																																																																																								<!-- Le pied de page -->
																																																																																																																																																																								            
																																																																																																																																																																									    <?php
																																																																																																																																																																									    include_once('bas.php');
																																																																																																																																																																									    ?>   
