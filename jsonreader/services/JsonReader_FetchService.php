<?php
namespace Craft;

class JsonReader_FetchService extends BaseApplicationComponent {

	public function get($file) {
		$string = file_get_contents(craft()->path->siteTemplatesPath . '/json/' . $file . '.json');
		return json_decode($string, true);
	}

}
