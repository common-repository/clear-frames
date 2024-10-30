<?php

/*
Plugin Name: Clear Frames
Version: 1.0
Description: Clear frames from Google Image or another websites so all visitor will direct goes to your website.
Author: Brainesia
Author URI: http://www.brainesia.com/
Plugin URI: http://www.branesia.com/wordpress/plugins/clear-frames
*/

/*  
Copyleft 2012  Adi Nugroho  (email : adi@brainesia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function clear_frames() {
	echo '<script language="JavaScript" type="text/javascript">
if (top.location!= self.location) { top.location = self.location.href } 
</script>';
			}

add_action('wp_head', 'clear_frames');
?>
