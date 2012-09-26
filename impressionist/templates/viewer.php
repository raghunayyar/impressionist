<?php
    
//CHeck if this linktiabsolute is working fine.
    echo ('<div id="top-navbar">
        
       <a href="'.\OCP\Util::linkToAbsolute('impressionist','js/main.php').'" class="btn">' .$l->t('Create Presentation').'</a>         
            </div>
            ');
    
if(empty($_['list'])) {
	
    echo('<div id="emptyfolder">'.$l->t('No Impress files were created using Impressionist in your ownCloud, please create a file first.').'</div>');
} 
else {
	echo('<table class="impression-list" >');
	
        foreach($_['list'] as $entry) {
            
		echo('<tr><td width="1"><a target="_blank" href="'.\OCP\Util::linkToAbsolute('impressionist','impressionist-run.php').'&file='.urlencode($entry['url']).'&name='.urlencode($entry['name']).'"><img align="left" src="'.\OCP\Util::linkToAbsolute('impressionist','img/rightarrow.png').'"></a></td><td><a target="_blank" href="'.\OCP\Util::linkToAbsolute('impressionist','impressionist-run.php').'&file='.urlencode($entry['url']).'&name='.urlencode($entry['name']).'">'.$entry['name'].'</a></td><td>'.\OCP\Util::formatDate($entry['mtime']).'</td><td>'.\OCP\Util::humanFileSize($entry['size']).'</td></tr>');
	        
        }
	
        echo('</table>');
        
        echo ('<div id="documentation-link">
            <a href="'.\OCP\Util::linkToAbsolute('impressionist', 'documentation.php').'" class="btn">' .$l->t('Documentation').'</a>
            </div>    
            ');
}


?>
