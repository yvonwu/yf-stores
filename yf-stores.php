<?php
/*
Plugin Name: yf Prestashop stores
Description: WordPress Plugin show Prestashop stores
Version:     1.0
Author:      yvon wu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function enqueus_js() {
	wp_enqueue_script('script2', 'https://maps.google.com/maps/api/js?sensor=true&region=fr', array('jquery'));
	wp_enqueue_script('script1', plugin_dir_url(__FILE__) . 'public/js/stores.js', array('jquery'));

}
function enqueus_css() {
	wp_enqueue_style('style1', plugin_dir_url(__FILE__) . 'public/css/stores.css');

}

function yf_storeviews($atts) {
	$view = <<<'EOD'
<div id="stores">
<div id="map"></div>
<p class="store-title">
<strong class="dark">
Enter a location (e.g. zip/postal code, address, city or country) in order to find the nearest stores.
</strong>
</p>
<div class="store-content">
<div class="address-input">
<label for="addressInput">Your location</label>
<input class="form-control grey" type="text" name="location" id="addressInput" value="{l s='Address, zip / postal code, city, state or country'}" />
</div>
<div class="radius-input">
<label for="radiusSelect">{l s='Radius:'}</label>
<select name="radius" id="radiusSelect" class="form-control">
<option value="15">15</option>
<option value="25">25</option>
<option value="50">50</option>
<option value="100">100</option>
</select>
<img src="{$img_ps_dir}loader.gif" class="middle" alt="" id="stores_loader" />
</div>
<div>
<button name="search_locations" class="button btn btn-default button-small">
<span>
{l s='Search'}<i class="icon-chevron-right right"></i>
</span>
</button>
</div>
</div>
<div class="store-content-select selector3">
<select id="locationSelect" class="form-control">
<option>-</option>
</select>
</div>

<table id="stores-table" class="table table-bordered">
<thead>
<tr>
<th class="num">#</th>
<th>{l s='Store'}</th>
<th>{l s='Address'}</th>
<th>{l s='Distance'}</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
EOD;

	return $view;
}
add_action('init', 'enqueus_css');
add_action('init', 'enqueus_js');

add_shortcode('yfstores', 'yf_storeviews');