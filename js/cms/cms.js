/**
 * 
 */
function ConfirmDialog(p, route_name, field_name){
		//alert('Hello1 ' + p);

		$( "#dialog-confirm" ).dialog({
	        resizable: false,
	        height: "auto",
	        width: 400,
	        modal: true,
	        position: {  my: 'top', at: 'top+150' },
	        buttons: {
	          "Yes": function() {
	            $( this ).dialog( "close" );
	            //window.location = link.href;
	            var obj = {};
	            obj[field_name] = p;
	            window.location = Routing.generate(route_name, obj);
	          },
	          Cancel: function() {
	            $( this ).dialog( "close" );
	          }
	        }
	      });
		
		return false;
  };