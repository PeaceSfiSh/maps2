<?php
namespace JWeiland\Maps2\Tca;

/*
 * This file is part of the maps2 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Add two new buttons to form engine
 * to update or reset an inserted address in Google Maps
 */
class SearchAddress
{
    /**
     * create a button to search for the given address
     *
     * @param array $PA parent Array
     * @param object $fObj parent object
     * @return string
     */
    public function searchAddress(array $PA, $fObj)
    {
        $buttonUpdate = '<input type="button" id="txMaps2Update" class="btn btn-default" value="Update">';
        $buttonReset = '<input type="button" id="txMaps2Reset" class="btn btn-default" value="Reset">';

        return $buttonUpdate . $buttonReset;
    }
}
