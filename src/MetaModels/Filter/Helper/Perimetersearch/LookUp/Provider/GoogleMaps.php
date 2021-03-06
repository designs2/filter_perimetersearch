<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage FilterPerimetersearch
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright  The MetaModels team.
 * @license    LGPL-3.0+
 * @filesource
 */

namespace MetaModels\Filter\Helper\Perimetersearch\LookUp\Provider;

/**
 * Lookup class for google.
 */
class GoogleMaps extends ProviderInterface
{
    /**
     * Google API call.
     *
     * @var string
     */
    protected $strGoogleUrl = 'http://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&language=de';


    /**
     * {@inheritdoc}
     */
    public function getCoordinates($street = null, $postal = null, $city = null, $country = null, $fullAddress = null)
    {
        // Generate a new container.
        $objReturn = new Container();

        // Set the query string.
        $sQuery = $this->getQueryString($street, $postal, $city, $country, $fullAddress);
        $objReturn->setSearchParam($sQuery);

        $oRequest = null;
        $oRequest = new \Request();

        $oRequest->send(sprintf($this->strGoogleUrl, rawurlencode($sQuery)));
        $objReturn->setUri(sprintf($this->strGoogleUrl, rawurlencode($sQuery)));

        if ($oRequest->code == 200) {
            $aResponse = json_decode($oRequest->response, 1);

            if (!empty($aResponse['status']) && $aResponse['status'] == 'OK') {
                $objReturn->setLatitude($aResponse['results'][0]['geometry']['location']['lat']);
                $objReturn->setLongitude($aResponse['results'][0]['geometry']['location']['lng']);
            } elseif (!empty($aResponse['error_message'])) {
                $objReturn->setError(true);
                $objReturn->setErrorMsg($aResponse['error_message']);
            } else {
                $objReturn->setError(true);
                $objReturn->setErrorMsg($aResponse['Status']['error_message']);
            }
        } else {
            // Okay nothing work. So set all to Error.
            $objReturn->setError(true);
            $objReturn->setErrorMsg('Could not find coordinates for address "' . $sQuery . '"');
        }

        return $objReturn;
    }
}
