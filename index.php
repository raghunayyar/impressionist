<?php

/**
* ownCloud - Impressionist App
*
* @author Raghu Nayyar
* @author Frank Karlitschek
* @copyright 2011 Raghu Nayyar me@iraghu.com
* @copyright 2012 Frank Karlitschek karlitschek@kde.org
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Affero General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

require_once 'lib/impressionist.php';

// Check if we are a user
OCP\User::checkLoggedIn();
//Ajax Calls to check App enable.
OCP\JSON::checkAppEnabled('impressionist');

//Required Styles
OCP\Util::addStyle('impressionist', 'bootstrap');
OCP\Util::addStyle('impressionist', 'bootstrap-responsive');

//Required Scripts
OCP\Util::addScript('impress', 'impress');
OCP\Util::addScript('impressionist', 'appui');
OCP\Util::addScript('impressionist', 'bootstrap-button');     // bootstrap
OCP\Util::addScript('impressionist', 'bootstrap-dropdown');   // bootstrap
OCP\Util::addScript('impressionist', 'bootstrap-model'); // bootstrap
OCP\Util::addScript('impressionist', 'bootstrap');       // bootstrap
OCP\Util::addScript('impressionist', 'datastore');
OCP\Util::addScript('impressionist', 'fileopen');
OCP\Util::addScript('impressionist', 'freetransform');
OCP\Util::addScript('impressionist', 'jQueryui');
OCP\Util::addScript('impressionist', 'keymaster');
OCP\Util::addScript('impressionist', 'knobdial');
OCP\Util::addScript('impressionist', 'main');    // THIS IS THE FILE, SO CHANGE THE NAME LATER ON!
OCP\Util::addScript('impressionist', 'matrices');
OCP\Util::addScript('impressionist', 'raphael');
OCP\Util::addScript('impressionist', 'reveal'); // I don't know why this thing needs reveal.js
OCP\Util::addScript('impressionist', 'templ');
OCP\Util::addScript('impressionist', 'utilities');


/////////////////////////////////////////
//DONT KNOW THE PERPOSE OF THESE JS FILES
/////////////////////////////////////////
OCP\Util::addScript('impressionist', 'wysihtml5-0.2.0');
OCP\Util::addScript('impressionist', 'wysihtml5-0.3.0');
OCP\Util::addScript('impressionist', 'wysihtml5-0.3.0_rc1');
OCP\Util::addScript('impressionist', 'wysihtml5-0.3.0_rc2');

////////////////////////////////////////
////////////////////////////////////////


/*
$somesetting = OCP\Config::getSystemValue( "somesetting", '' );
OCP\App::setActiveNavigationEntry( 'apptemplate' );
$tmpl = new OCP\Template( 'apptemplate', 'main', 'user' );
$tmpl->assign( 'somesetting', $somesetting );
$tmpl->printPage();
*/

// NOTE jQuery.js and impress.js is not being posted for the moment