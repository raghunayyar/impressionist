<?php

/**
 * ownCloud - Impressionist App + Impress App
 *
 * @author Frank Karlitschek
 * @copyright 2012 Frank Karlitschek frank@owncloud.org
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
 * You should have received a copy of the GNU Lesser General Public 
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

/*

Todo:
	enable fullscreen Presentation Creation

*/

namespace OCA_Impressionist;

class Storage {

	public static function getPresentations() {
		$presentations=array();
		$list=\OC_FileCache::searchByMime('text', 'impressionist' );
		foreach($list as $l) {
			$info=pathinfo($l);
			$size=\OC_Filesystem::filesize($l);
			$mtime=\OC_Filesystem::filemtime($l);

			$entry=array('url'=>$l,'name'=>$info['filename'],'size'=>$size,'mtime'=>$mtime);
			$presentations[]=$entry;
		}

	
		return $presentations;
	}
}