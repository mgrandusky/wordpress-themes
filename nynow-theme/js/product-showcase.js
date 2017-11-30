/*
 * GoExpo Interbike Product Showcase REST API test. 
 * Requires jQuery.
 */

// Constants -- DON'T MODIFY PROGRAMMATICALLY
var IBPS_REST_URL = "https://n2a.goexposoftware.com/events/orw2012/goExpo/webServices/GeRest1.php?p=bf263180ef29a493d9862116b84d39c3&r=1&callback=?";
var IBPS_INTERVAL = 3000; // 3 secs

// Global vars
var _ibpsProductCount = 0; // Total number of products loaded
var _ibpsIndex        = 0; // Currently rendered product
var _ibpsData         = null; // Array containing the product data
var _ibpsTimer        = null; // Handle to the product timer

// Load the GoExpo data after the page is loaded
$(document).ready(function() {
	$.getJSON(IBPS_REST_URL, ibpsOnLoaded);
});

// Loads in the data, initializes the timer, and renders the first product
function ibpsOnLoaded(data) {
	if ((data == null) || (data.length < 1)) { 
		alert ("Unable to load Interbike Product Data.");
	}
	_ibpsData = data;
	_ibpsProductCount = data.length;
	
	ibpsInit();
	ibpsRenderProduct(_ibpsIndex);
}

// Sets the timer to fire in 3 seconds
function ibpsInit() {
	_ibpsTimer = setTimeout(ibpsTick, IBPS_INTERVAL);
}

// This function gets called when the timer fires. It's 
// used to loop through all of the products at 3 second intervals
function ibpsTick() {
	// Switch to next product
	_ibpsIndex++;
	
	// Loop procuct back to beginning
	if (_ibpsIndex > _ibpsProductCount - 1) {
		 _ibpsIndex = 0;
	}
	
	// Convert the data into HTML
	ibpsRenderProduct(_ibpsIndex);
	
	// Set the timer to fire again in 3 seconds
	ibpsInit();
}

// Converts product data into HTML and displays it in the page
function ibpsRenderProduct(index) {
	// Check to make our index is within actual data range
	if ((index < 0) || (index > (_ibpsProductCount - 1))) {
		alert ("Invalid product index: ibpsRenderProduct(" + index + ")");
	}
	
	// Get the values needed to display
	var productImage = _ibpsData[index].image1;
	var productName  = _ibpsData[index].name;
	var productURL   = _ibpsData[index].product_url;
	var companyName  = _ibpsData[index].company_name;
	
	// Erase current product
	$('div.ibps-product').empty();
	
	// Convert data to HTML and display it in the product div
	$('div.ibps-product').append(
		'    <a class="ibps-product-link" href="' + productURL + '" target="_blank">' +
		'        <img style="display:block;margin:auto;" class="ibps-product-image" src="' + productImage + '" width="288" height="216" />' +
		'    </a>' +
		'    <a href=' + productURL + ' class="ibps-product-name" target="_blank" >' + productName + '</a><br>' + 
		'    <a href=' + productURL + ' class="ibps-company-name" target="_blank" >' + companyName + '</a>'
	);
}
