<?php
// a test pre-processor plugin - does nothing but pollute the namespace
// the run()  method will be called just after the config is read, but before any rendering or data reading is done.
namespace Weathermap\Plugins\Pre;

use Weathermap\Core\MapUtility;

class WeatherMapPreProcessorCactihosts extends PreProcessorBase
{
    public function run()
    {
        MapUtility::debug("Cactihosts Preprocessor in the hizouse\n");

        # http://feathub.com/howardjones/network-weathermap/+9
    }
}
