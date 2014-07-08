<?php
/**
 *
 * File core.trait.php
 * UTF-8
 * Tab spaces (4 spaces)
 *
 * @author Carlos Longarela <carlos@longarela.eu>
 * @version 0.1
 *
 */

trait core {

	public function ws_format_number($number, $decs=0, $lang='es') {
		switch ($lang) {
			case 'es':
				$res_number=number_format((float)$number, (int)$decs, ',', '.');
				break;
			case 'en':
				$res_number=number_format((float)$number, (int)$decs, '.', ',');
				break;
			default:
				$res_number=number_format((float)$number, (int)$decs, '.', ',');
				break;
		}//switch

		return res_number;
	}//end ws_format_number

	public function ws_size($bytes) {
		if ($bytes > 1099511627776) {//Tb.
			$res=$bytes / 1099511627776;
			$res=$this->ws_format_number($res, 2).' Tb.';
		}elseif ($bytes > 1073741824) {//Gb.
			$res=$bytes / 1073741824;
			$res=$this->ws_format_number($res, 2).' Gb.';
		}elseif ($bytes > 1048576) {//Mb.
			$res=$bytes / 1048576;
			$res=$this->ws_format_number($res, 2).' Mb.';
		}elseif ($bytes > 1024) {//Kb
			$res=$bytes / 1024;
			$res=$this->ws_format_number($res, 2).' Kb.';
		}elseif ($bytes <= 1024) {//bytes
			$res=$bytes.' bytes';
		}

		return $res;
	}//end ws_size

	public function ws_cut_str($string, $max_chars=50, $cod='UTF-8') {
		$str=trim($string);
		if (strlen($str) > $max_chars) {//More chars than max_chars
			$str=mb_substr($str, 0, $max_chars, $cod);
			$str.='&hellip;';
		}

		return $str;
	}//end ws_cut_str

	public function ws_lang($lang='en_EN', $charset='UTF-8', $domain='ws_core') {
		//@TODO: check $lang and $charset
		$ws_lang=$lang.'.'.$charset;//Default will be en_EN.UTF-8

		putenv('LC_ALL='.$ws_lang);
		setlocale(LC_ALL, $ws_lang);

		//Sets the path for our domain, compiled mo files
		//translation tables will be in Las tablas de traduccion estaran en __DIR__/ws-core/lang/$lang/LC_MESSAGES/$domain.mo
		bindtextdomain($domain, __DIR__.'/ws-core/lang/');

		//select text domain
		textdomain($domain);
	}//end ws_lang

	public function ws_create_header(){

	}//end ws_create_header

	public function ws_get_html_header(){

	}//end ws_get_html_header

	public function ws_get_html_body(){
		
	}//end ws_get_html_body

	public function ws_get_html_content(){
		
	}//end ws_get_html_content

	public function ws_get_html_body_end(){
		
	}//end ws_get_html_body_end

}//end core trait