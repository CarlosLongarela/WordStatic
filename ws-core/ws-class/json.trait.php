<?php
/**
 *
 * File json.trait.php
 * UTF-8
 * Tab spaces (4 spaces)
 *
 * @author Carlos Longarela <carlos@longarela.eu>
 * @version 0.1
 *
 */

trait json {

	public function ws_json_get($file) {
		if (!file_exists($file)){
			return false;
		}
		//@TODO: check json file and decode process
		$json_cont=file_get_contents($file);

		return json_decode($json_cont);
	}//end ws_json_get

	public function ws_json_put($file, $content) {
		if (!empty($content)){
			$content=json_encode($content);
			//@TODO: WARNING, ONLY PEMIT WRITE TO OUR PATH
			file_put_contents($file, $content);
		}

		return true;
	}//end ws_json_put

}//end core trait