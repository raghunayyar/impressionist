<html lang="en">
    <head>
         <meta charset="utf-8" />
         <title>impressionist - v 0.0.1.0</title>
         <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/mainstyle.css'); ?>" rel="stylesheet" />
         <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/matrices.css'); ?>" rel="stylesheet" />
         <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/layout.css'); ?>" rel="stylesheet" />                 
         <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/bootstrap.css'); ?>" rel="stylesheet" />
         <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/colorpicker.css'); ?>" rel="stylesheet" />         
         <link href="http://fonts.googleapis.com/css?family=Inika:400,700" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Fresca" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Bevan" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Doppio+One" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Henny+Penn" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Ribeye+Marrow" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Unkempt" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Armata" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet" />
         <link href="http://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet"/>    
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/jquery.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/keymaster.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/datastore.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/appui.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/fileops.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/templ.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/knobdial.js'); ?>" type="text/javascript"></script>                    
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/main.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/colorpicker.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/matrices.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/raphael.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/freetransform.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/jqueryui.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/bootstrap-button.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/bootstrap-dropdown.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/bootstrap-modal.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/bootstrap-tooltip.js'); ?>"type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/advanced.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/wysihtml5-0.3.0.js'); ?>" type="tet/javascript"></script>
         <script>
                var editor;
                    $(document).ready(function(e)
                    {
                      $("#mybody").css("visibility", "hidden");

                      if(Utilities.isSupportedUA())
                      {
                        $("#mybody").css("visibility", "visible");
                        init();
                      }
                      else
                      {
                          document.location.href = "<?php echo OCP\Util::linkToAbsolute('impressioninst', 'main.php'); ?>";
                      }
                      initializeEditor();
                    });
                    function initializeEditor()
                    {
                      editor = new wysihtml5.Editor("adveditorBox", {
                         parserRules:  wysihtml5ParserRules
                     });
                      editor.setValue(ultemplate);
                      console.log(editor.getValue())
                    }
                    </script>
                    <script type="text/javascript">

                        var _gaq = _gaq || [];
                        _gaq.push(["_setAccount", "UA-30285438-1"]);
                        _gaq.push(["_trackPageview"]);

                        (function() {
                          var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
                          ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
                          var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
                  })();
         </script>
    </head>
        <body id="mybody">
            <div class="navbar headerbg" id="topnavbar">
                <div>
                    <div class="container" style="width: auto;">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar">Hello</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <img src="<?php echo OCP\Util::linkToAbsolute('impressionist','img/poocha.png'); ?>" class="logopic">
                        <a class="brand" href="#" id="brandlogo">impressionist <sup id="smallsup">0.1</sup></a>
                        <div class="nav-collapse">
                        <ul class="nav">
                            <li>
                               <div  id="typeRadio">
                                  <a id="newBtn" rel="tooltip" title="first tooltip"  class="btn  btn-small" href="#" onclick="saveAndCreate()"><i class="icon-plus" ></i>&nbsp;  </a>
                                  <a id="openBtn"   class="btn  btn-small" href="#" data-toggle="modal" onclick="checkForSavedPresentations()"><i class="icon-folder-open " ></i> &nbsp; </a> 
                                  <a id="saveBtn"   class="btn  btn-small" href="#" data-toggle="modal" onclick="doSave()"><i class="icon-ok " ></i> &nbsp; </a> 
                               </div>
                            </li>
                        </ul>
                        <ul class="nav pull-right">
             
                            <li class="dropdown" id="viewchangedropdown1">
                                <div class="btn-group">
                                    <a href="#" onclick="toggleDisplayView()" id="rightBtn" class=" btn btn-small btn-inverse">Orchestration View</span></a>
                                </div>
                            </li>
                            <li>&nbsp;&nbsp;&nbsp;</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <div class="navbar subnavbg" id="subnav">
      <div class="container" style="width: auto;">
         <ul class="nav">
          <li>&nbsp;&nbsp;</li>
     <li>
                      <div class="btn-group">
                                     <a class="btn btn-warning btn-small" onclick="addSlide()" href="#"><i class="icon-plus-sign icon-white" ></i>&nbsp;Add Slide</a>
                       </div>

            </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
           
             <li>
                    <div class="btn-group" id="typeRadio">
                    <a id="textBtn" class="btn btn-info btn-inverse" href="#" onclick="setObjectType("text")"><i class="icon-white icon-text-width" ></i>&nbsp;</a>
                    <a id="picBtn" class="btn btn-info btn-inverse" href="#" data-toggle="modal" onclick="setObjectType("pic")"><i class="icon-white icon-picture" ></i> &nbsp;</a>    
                    <a id="listBtn" class="btn btn-info btn-inverse" href="#" data-toggle="modal" onclick="showEditorDialog()"><i class="icon-white icon-list" ></i> &nbsp;</a>  
                   </div>
            </li>
            <li>&nbsp</li>

             <li>
                  <div class="btn-group" id="typeRadio">

                  <a class="btn btn-inverse btn-small" id="boldBtn" href="#" onclick="toggleBold()">B &nbsp;</a>
                  <a class="btn btn-inverse btn-small" href="#" onclick="toggleItalic()">I &nbsp;</a>
                  <a class="btn btn-inverse btn-small" href="#" onclick="toggleUnderline()">U &nbsp;</a>

                </div>
            <li>
               <li>&nbsp</li>
             <li>
                  <div class="btn-group" id="typeRadio">

                  <a class="btn btn-inverse btn-small" id="boldBtn" href="#" onclick="doLeftAlign()"><i class="icon-align-left icon-white" ></i>&nbsp;</a>
                  <a class="btn btn-inverse btn-small" href="#" onclick="doCenterAlign()"><i class="icon-align-center icon-white" ></i>&nbsp;</a>
                  <a class="btn btn-inverse btn-small" href="#" onclick="doRightAlign()"><i class="icon-align-right icon-white" ></i>&nbsp;</a>

                </div>
            <li>
           <li>&nbsp</li>

            <li class="dropdown">
                <div class="btn-group">
                    <a href="#" class="btn btn-small btn-inverse dropdown-toggle" data-target="fontsizedropdown" data-toggle="dropdown" id="fontstyledropdown"> Select Font Size <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="fontsizedropdown">
                          <li><a href="#" onclick="setFontStyle('largeheader')">Large</a></li>
                          <li><a href="#" onclick="setFontStyle('mediumheader')">Medium</a></li>
                          <li><a href="#" onclick="setFontStyle('smallheader')">Small</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Paragraph</a></li>
                          <li><a href="#">Custom</a></li>
                    </ul>
            </li>
            <li>&nbsp;</li>
            <li class="dropdown">
              <div class="btn-group">
              <a href="#" class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown" data-target="fonttypedropdown" id="fontdropdown"> Select Font &nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu" id="fonttypedropdown">
                <li class="shadedanchor"><a>Sans Serif Fonts</a></li>
                <li class="divider"></li>
                <li><a href="#" onclick="setFont('Inika')">Inika</a></li>
                <li><a href="#" onclick="setFont('Fresca')">Fresca</a></li>
                <li><a href="#" onclick="setFont('Doppio One')">Doppio One</a></li>
                <li><a href="#" onclick="setFont('Montserrat')">Montserrat</a></li>
                <li><a href="#" onclick="setFont('Bevan')">Bevan</a></li>
                <li>&nbsp;</li>
                <li class="shadedanchor"><a>Decorative Fonts</a></li>
                <li>&nbsp;</li>
                <li><a href="#" onclick="setFont('Walter Turncoat')">Walter Turncoat</a></li>
                <li><a href="#" onclick="setFont('Henny Penny')">Henny Penny</a></li>
                <li><a href="#" onclick="setFont('Ribeye Marrow')">Ribeye Marrow</a></li>
                <li><a href="#" onclick="setFont('Unkempt')">Unkempt</a></li>
              </ul>
            </div>
            </li>
            <li>&nbsp;&nbsp;</li>
        <li><div id="colorSelector"></div></li>
        <li>&nbsp;</li>

          </li>
          
           <canvas id="mask">

          </canvas>
      
        </div>
      </li>
          <ul class="nav pull-right">
          </ul>
        </div>
      </div>
  </div>
   <div class="navbar subnavbg" id="subnav2" style="background-color:#222">
      <div class="container" style="width: auto;">
        <div class="nav-collapse">
            <ul class="nav">
                <li><a>Rotation</a></li>
                <li>
                    <input id="slideknob" class="knob" data-thickness=".3" data-width="38" data-min="-90" data-max="90"  data-cursor="true" />
                </li>
                <li><a> RotationX</a></li>
                <li>
                    <input id="rotationxknob" class="knob" data-thickness=".3" data-width="38" data-min="-90" data-max="90"  data-cursor="true" />
                </li>
                <li><a> RotationY</a></li>
                <li>
                    <input id="rotationyknob" class="knob" data-thickness=".3" data-width="38" data-min="-90" data-max="90"  data-cursor="true" />
                </li>
                <li></li>
                <li><a>Slide Depth</a></li>
                <li>
                    <input id="depthrange" type="range" min="0" max="5000" />
                </li>
                <li></li>
                <li><a>Slide Scale</a></li>
                <li>
                    <input id="scalerange" type="range" min="1" max="9" />
                </li>
                <li>
                    <div class="btn-group"></div>
                </li>
                <li class="dropdown"></li>
            </ul>
            <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                <li>
                    <div class="btn-group">
                        <a class="btn btn-small" onclick="preparePreview()" href="#"><i class="icon-play-circle" ></i>  Preview     </a>
                    </div>
                </li>  
                <li>&nbsp; &nbsp; </li>
                <li>
                    <div class="btn-group">
                        <a class="btn btn-warning btn-small" href="#" onclick="prepareDownload()"><i class="icon-download" ></i>  Download     </a>
                    </div>
                </li>
            
            </ul>
        </div>
      </div>
  </div>
  <div class="container1">
   <div class="slideholder" id="slidethumbnailholder">
    
   </div>
   <div class="presentationarea" id="drawingboard">
   
      <a href="#" id="deleteBtn" class="deleteicon" style="z-index:40;" onclick="deleteObject()">x</a>

   </div>
         <textarea id="editorBox" style="z-index:3000; visibility:hidden"></textarea>


   <div class="orchestration" id="orchestrationarea">
    <div class="vp1">
    </div>
    <div class="vp2">
    </div>
    <div class="vp3">
    </div>
    <div class="vp4">
    </div>
    <div class="vp6">
    </div>
    <div class="vp7">
    </div>
    <div class="vp8">
    </div>
    <div class="vp9">
    </div>
    <div class="vertline">
    </div>
    <div class="horizline">
    </div>
    <span class="label label-important rangecall">Range -6000px to 6000px</span>
    <span id="splithere"></span>
  </div>
   <div id="outputconsole">

     </div>
 </div>
 </div>
          <div id="myModal" class="modal hide fade" data-toggle="modal">
            <div class="modal-footer">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3>Add an Image</h3>
            </div>
            <div class="modal-body">
              <h4>Paste / Enter a URL </h4>
              <br/>
              <input type="text" class="input-medium" id="urlinput"/>
              <h4>Preview</h4>
              <br/>
                 <img id="previewimg"></img>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-info" data-dismiss="modal" onclick="addPicture()">Add to slide</a>
              <a href="#" class="btn" data-dismiss="modal" >Close</a>
            </div>
          </div>
          <div id="saveModal" class="modal hide fade" style:"z-index:350000">
            <div class="modal-footer">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3 id="savepresoheader">Save Current Presentation</h3>
            </div>
            <div class="modal-body">
              <h4>Enter a name</h4>
              <br/>
              <input type="text" class="input-medium" id="saveInput"/>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-info" data-dismiss="modal" onclick="setSaveName()">Save</a>
              <a href="#" class="btn" data-dismiss="modal" >Cancel</a>
            </div>
          </div>
          <div id="openModal" class="modal hide fade" style:"z-index:350000">
            <div class="modal-footer">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3>Open Presentation</h3>
            </div>
            <div class="modal-body">
              <h4>Saved Presentations... (double click to open)</h4>
              <br/>
              <div id="existingpresentations">
                  <ul class="nostyle" id="savedpresolist">

                  </ul>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-info" data-dismiss="modal"onclick="createOrOpen()">OK</a>
              <a href="#" class="btn" data-dismiss="modal" >Cancel</a>
            </div>
          </div>

            <div id="editorModal" class="modal hide fade" style="z-index:350000">
            <div class="modal-footer">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3 id="savepresoheader">Advanced Editor</h3>
            </div>
            <div class="modal-body">
              <h4></h4>
              <br/>
              <textarea class="input-medium" id="adveditorBox" style="width:100%; height:300px"></textarea>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-info" data-dismiss="modal" onclick="addUnorderedList()">Add</a>
              <a href="#" class="btn" data-dismiss="modal" >Cancel</a>
            </div>
          </div>
          <div id="openModal" class="modal hide fade" style:"z-index:350000">
            <div class="modal-footer">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3>Open Presentation</h3>
            </div>
            <div class="modal-body">
              <h4>Saved Presentations... (double click to open)</h4>
              <br/>
              <div id="existingpresentations">
                  <ul class="nostyle" id="savedpresolist">

                  </ul>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-info" data-dismiss="modal"onclick="createOrOpen()">OK</a>
              <a href="#" class="btn" data-dismiss="modal" >Cancel</a>
            </div>
          </div>
 <a href="#" id="leftarrow" onclick="movePageLeft(event)"><img src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'img/leftarrow.png'); ?>" style="width:48px; height:48px"></img></a>
          <a href="#" id="rightarrow" onclick="movePageRight(event)"><img src="<?php echo OCP\Util::linkToAbsolute('impressionist', 'img/rightarrow.png'); ?>" style="width:48px; height:48px"></img></a>
    
    
     
        <span id="play">
            <span class="rotate label label-info" id="spanrotate">rotate</span>
            <span class="skewx label label-info" id="spanskewx">skewx</span>
            <span class="skewy label label-info" id="spanskewy">skewy</span>
      </span>
 <div id="contextbar">
    </div>
    <div id="footerbar" class="navbar">
     
     </div>
     <script type="text/javascript" src="<?php echo OCP\Util::linkToAbsolute('impressionist','js/utilities.js'); ?>"</script>
  </body>
</html>