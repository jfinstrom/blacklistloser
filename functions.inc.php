<?php
/**
* Adds Destination to auto blacklist a CALLERID This is a FreePBX Module
*
* Copyright (C) 2016  James Finstrom <code@g3p0.xyz>
*
*  >>>This is a personal project and should not be considered supported<<<
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.

* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.

* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function blacklistloser_destinations() {
 return array(array(
	 'destination' => 'blacklist-loser,1,1',
	 'description' => 'Blacklist then hangup'
 ));
}

function blacklistloser_getdestinfo($dest){
	global $active_modules;
	if($dest === 'blacklist-loser,1,1'){
		return array(
			'description' => 'Blacklist then hangup',
			'edit_url' => ''
		);
	}else{
		return false;
	}
}
