<?php
namespace Craft;

class JsonReaderVariable {

	public function get($file) {
		return craft()->jsonReader_fetch->get($file);
	}

}
