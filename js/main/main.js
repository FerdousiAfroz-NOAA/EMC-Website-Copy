/**
 *  The Main JavaScript used on every page related to the main page.
 */



function changeWeather(obj) {
	var formWrapper = document.getElementsByClassName("form-wrapper")[0];
	formWrapper.style.display='inline';
	
	return false; 
}


function submitFn(obj, evt) {
	evt.preventDefault();
	var value = $(obj).find('.search-input').val().trim();
	
	console.log($(obj).attr( 'action' ));
	
	var values = {};
	//values[$(obj).attr( 'name) ] = value;
	//console.log('Hello post: ' + values[$(obj).attr( 'name')]);
	
	$.ajax({
        type: $(obj).attr( 'method' ),
        url:  'page_search_index',
        data: values,
        success: function(result) {
            var trHTML = '';
            
            var parsedData = JSON.parse(result);
            $.each(parsedData, function (k, v) {

          	  $.each(v, function (i, item) {
          		_html = "Yup yup! Your search text sounds like this: ";
          		_html += "<b>" + item + "</b>";
          		
          	  });
            });
            $(obj).find('.result-container').html('<span>' + _html + '</span>');
      		$(obj).find('.result-container').fadeIn(100);
            
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
             $.notify('Error : Record not found !!', {
                 "status": "danger",
                 "pos": "top-center"
             });
        }
        });
	


}


/**
 * Fixed an issue where the drop down links were acting funny
 */
$(document).ready(function() {
	$('#local-forecast-form')[0].reset()

console.log('code is here')

	//When the Page loads hide the search result container 
	$('.result-container').hide();
	pageLoadsWeatherData();
	
	
	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	
	function pageLoadsWeatherData(){
		//alert('Called');
		var weatherCookie = getCookie('weather');
		if(weatherCookie != null){
			weather = JSON.parse(weatherCookie);
			
			html = createHtml(weather);
	
		    $(".form-wrapper").hide();
		    //$(".hidden-mobile").hide();
		    $('.form-wrapper').css('display', 'none');
		    $("#weather").css('display', 'inline');
		    $("#weather").html(html);
		    
		    var weatherIcon = 'https://openweathermap.org/img/wn/'+ weather.code +'.png';
	  		var weatherNav = '<div class="findWeatherIndicatorIcon"><img src="'+weatherIcon+'"></div> <span>'+weather.temp+'&deg; F</span>';
	          $("#findWeatherIndicator").html(weatherNav);
		}else{
			$('.form-wrapper').css('display', 'inline');
		    $("#weather").css('display', 'none');
		}
	}


	 $('#submitWeatherForm').on('submit', function(e){
			  
			  //prevent the default submit action
			  e.preventDefault();
			  
			  // send CSRF info
			  var token = $("#submitWeatherForm input[name=csrf-token]").val();
			  $.ajaxSetup({
		            beforeSend: function(xhr) {
		                xhr.setRequestHeader('Csrf-Token', token);
		                //$(this).setRequestHeader('X-CSRF-Token',token);
		            }
		        });
			  
			  //var reqx = '#\d+ ([^,]+), ([A-Z]{2}) (\d{5})';
			  var request = $("#submitWeatherForm input[name=edit-zip]").val();
			  var pattern = /^(.*?)\s*?([a-zA-Z]+\s*[a-zA-Z]{3,20})\s?,?\s?([a-zA-Z]{2})?\s?(\d{5}?)?/;
			  var location = {};
			  for (var i=3;i<9;i++) {
				    var matches = request.match(pattern);
				    if(matches !== null){
				    	location = {street : matches[1], city: matches[2], state: matches[3], zip: matches[4]}; 
				    }else{
				    	location = {zip: request}; 
				    }
				    //console.log(location);
				    
				}
			  
			  //build Weather API url
			  var weatherUrl = 'https://api.openweathermap.org/data/2.5/weather?'; //'https://api.openweathermap.org/data/2.5/weather?q=seattle,us&APPID=ec8c7a25868068308d6b08158c67ecd5&units=imperial';
			  var apiKey = '&APPID=ec8c7a25868068308d6b08158c67ecd5&units=imperial';
			  if (location.city !== undefined){
				  weatherUrl += 'q='+location.city+',us';
			  }else if (location.zip !== undefined){
				  weatherUrl += 'zip='+location.zip+',us';
			  }
			  weatherUrl += apiKey;
			  
		      
		      //Call the OpenWeatherMap.com REST api
		      $.getJSON(
		    	        encodeURI(weatherUrl),
		    	        function(data) {
		    	        
		    	        	if(data !== null){
		    	        		var result = data,
		    	        		    weather = {};
		    	        		
		    	        		weather.title = result.name;
		    	                weather.temp = result.main.temp;
		    	                weather.code = result.weather[0].icon;
		    	                weather.description = result.weather[0].description;
		    	                weather.humidity = result.main.humidity;
		    	                weather.units = {pressure: result.main.pressure, humidity: result.main.humidity};
		    	                weather.wind = {speed: result.wind.speed, direction: result.wind.deg };
		    	                weather.city = result.name;
		    	                weather.country = result.sys.country;
		    	               
		    	                //localStorage.setItem('weather', JSON.stringify(weather));
		    	                var now = new Date();
		    	                var time = now.getTime();
		    	                time += 3600 * 1000;
		    	                now.setTime(time);
		    	                document.cookie = "weather="+JSON.stringify(weather)+";expires="+now.toUTCString()+";path=/";
		    	                html = createHtml(weather);
		  				      
						        $(".form-wrapper").hide();
						        $(".hidden-mobile").hide();
						        $("#weather").show();
						        $("#weather").html(html);
						          
						        var weatherIcon = 'https://openweathermap.org/img/wn/'+ weather.code +'.png';
						  		var weatherNav = '<div class="findWeatherIndicatorIcon"><img src="'+weatherIcon+'"></div> <span>'+weather.temp+'&deg; F</span>';
						          $("#findWeatherIndicator").html(weatherNav);
						          
		    	        	}
		    	        });
		      
		      /*error: function(error) {
				          $("#weather").html('<p>'+error+'</p>');
				        }*/

		      
		    });
		  
		  
	//});
	
	//Fixed a issue where the main navigation links where sending the user to their href destination.
	$('a').click(function(event) {
		var addressValue = $(this).attr("href");
		window.open(addressValue, "_self");
	});
	
	 
	
	
	function createHtml(weather){
		//weatherIcon = weatherCode(weather.code);
		weatherIcon = 'https://openweathermap.org/img/wn/'+ weather.code +'.png';
		html = '<div class="weatherCircleBase"><img src="'+weatherIcon+'"></div> <span>'+weather.temp+'&deg; F '+ weather.description +'</span>';
        html += '<ul class="weatherList"><li>'+weather.city+', '+weather.country+'</li>';
        //html += '<li class="currently">'+weather.currently+'</li>';
        html += '<li>'+weather.wind.direction+'&deg; '+weather.wind.speed+'</li>';//+weather.units.speed+'</li>';
        html += '<li><a class="weatherLnk" id="weatherLnk" href="javascript:void(0);" onclick="changeWeather();" >Change Local Forecast</a></li></ul>';
        return html;
	}
	

});