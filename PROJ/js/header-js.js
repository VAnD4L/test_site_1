
	$(document).ready(function(){
		(function () {
			var tmp = new Date();
			var day = tmp.getDate();
			var month = tmp.getMonth()+1;
			var year = tmp.getFullYear();
					
			document.getElementById('timer').innerHTML = day+'/'+month+'/'+year;
		})();				
	});
