<?php
/**
 *
 * File base.class.php
 * UTF-8
 * Tab spaces (4 spaces)
 *
 * @author Carlos Longarela <carlos@longarela.eu>
 * @version 0.1
 *
 */

class base {
	use core, json;

//***********************************************************//
//**********************  VARS  ****************************//
//*********************************************************//
	private $ws_title 			= _('My New WS Site');
	private $ws_description 	= _('My Fantastic WS Site, secure and very fast');

//***************************************************************//
//**********************  CONSTANTS  ***************************//
//***********************************************************//

//*************************************************************************//
//****************************  PUBLIC METHODS  **************************//
//***********************************************************************//
	public ws_get_title() {
		return $this->ws_title;
	}//end ws_get_title

	public ws_get_description() {
		return $this->ws_description;
	}//end ws_get_description

	public ws_set_title($title) {
		//@TODO: Checks about title
		$this->ws_title=$title;
	}//end ws_set_title

	public ws_set_description($description) {
		//@TODO: Checks about description
		$this->ws_description=$description;
	}//end ws_set_description
//****************************************************************************//
//****************************  PROTECTED METHODS  **************************//
//**************************************************************************//

//**************************************************************************//
//****************************  PRIVATE METHODS  **************************//
//************************************************************************//

}