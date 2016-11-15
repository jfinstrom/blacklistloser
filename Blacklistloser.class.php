<?php
namespace FreePBX\modules;
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

class Blacklistloser implements \BMO {
	public function __construct($freepbx = null) {
		if ($freepbx == null) {
			throw new Exception("Not given a FreePBX Object");
		}
		$this->FreePBX = $freepbx;
	}
	public function install() {}
	public function uninstall() {}
	public function backup() {}
	public function restore($backup) {}
	public function doConfigPageInit($page) {}
	public static function myDialplanHooks() { return true; }
	public function doDialplanHook(&$ext, $engine, $priority) {
		$ext->add('blacklist-loser', 1, '', new \ext_set('DB(blacklist/${CALLERID(number)})', 1));
		$ext->add('blacklist-loser', 1, '', new \ext_hangup(''));
	}
}
