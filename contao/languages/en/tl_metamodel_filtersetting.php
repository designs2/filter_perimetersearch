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

/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['geolocation_legend'] = 'Geolocation Settings';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['range_legend']       = 'Range Settings';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['fefilter_legend']    = 'Frontendfilter Settings';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['datamode']        = array(
    'Datamode',
    'Here you can choose if you have one single attribute or two attributes.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['single_attr_id']  = array(
    'Attribute',
    'Choose the attribute with the latitude and longitude values.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['first_attr_id']   = array(
    'Attribute - Latitude',
    'Choose the attribute for the latitude values.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['second_attr_id']  = array(
    'Attribute - Longitude',
    'Choose the attribute for the longitude values.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['rangemode']       = array(
    'Rangemode',
    'Here you can choose how the range will be displayed.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['range_preset']    = array(
    'Range preset',
    'Here you can add a preset range.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['range_selection'] = array(
    'Range selection',
    'Here you can add values.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['lookupservice']   = array(
    'LookUp Services',
    'Here you can choose a look up service for resolving adress data.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['range_label']     = array(
    'Range Label',
    'Show range label instead of attribute name.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['range_template']  = array(
    'Range Template',
    'Sub template for this range filter element. Standard: form widget.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['countrymode']     = array(
    'Coutrymode',
    'Here you can choose how the language will used.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['country_preset']  = array(
    'Coutry preset',
    'Here you can add a preset for the language.'
);
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['country_get']     = array(
    'Coutry GET Parameter',
    'Here you can add a get parameter.'
);

/**
 * Options
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['datamode_options']['single']     = 'Single Mode - One attribute';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['datamode_options']['multi']      = 'Multi Mode - Two attributes';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['rangemode_options']['free']      = 'Free input mode';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['rangemode_options']['preset']    = 'Preset by system';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['rangemode_options']['selection'] = 'Selection mode';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['countrymode_options']['none']    = 'None';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['countrymode_options']['preset']  = 'Preset by system';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['countrymode_options']['get']     = 'Use GET-Param';

/**
 * Filter types
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['perimetersearch'] = 'Perimetersearch';

/**
 * Lookup names
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['perimetersearch']['google_maps']      = 'GoogleMaps Lookup';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['perimetersearch']['open_street_maps'] = 'OpenStreetMap';
