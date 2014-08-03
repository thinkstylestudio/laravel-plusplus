<?php namespace Conner\PlusPlus;

use Illuminate\Html\FormBuilder;

class BootstrapFormBuilder extends FormBuilder {
	
	public function open(array $options = array()) {
		if (!array_key_exists('autocomplete', $options)) {
			$options['autocomplete'] = 'off';
		}
		return parent::open($options);
	}
	
	public function textarea($name, $value = null, $options = array()) {
		if (strpos(@$options['class'], 'form-control') === false) {
			@$options['class'] .= ' form-control';
		}
		return parent::textarea($name, $value, $options);
	}
	
	public function text($name, $value = null, $options = array()) {
		if (strpos(@$options['class'], 'form-control') === false) {
			@$options['class'] .= ' form-control';
		}
		return parent::text($name, $value, $options);
	}

	public function select($name, $list = array(), $selected = null, $options = array()) {
		if (strpos(@$options['class'], 'form-control') === false) {
			@$options['class'] .= ' form-control';
		}
		return parent::select($name, $list, $selected, $options);
	}
	
	public function password($name, $options = array()) {
		if (strpos(@$options['class'], 'form-control') === false) {
			@$options['class'] .= ' form-control';
		}
		return parent::password($name, $options);
	}
	
	public function email($name, $value = null, $options = array()) {
		if (strpos(@$options['class'], 'form-control') === false) {
			@$options['class'] .= ' form-control';
		}
		return parent::email($name, $value, $options);
	}
	
	public function button($value = null, $options = array()) {
		if (strpos(@$options['class'], 'btn') === false) {
			@$options['class'] .= ' btn btn-default';
		}
		return parent::password($value, $options);
	}
	
}