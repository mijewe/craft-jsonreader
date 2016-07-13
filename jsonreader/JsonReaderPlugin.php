<?php
namespace Craft;

class JsonReaderPlugin extends BasePlugin {

    function getName()
    {
         return Craft::t('Json Reader');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Michael Westwood';
    }

    function getDeveloperUrl()
    {
        return 'https://twitter.com/mijewe';
    }
}
