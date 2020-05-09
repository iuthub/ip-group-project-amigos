$(document).ready(function(){

let frmSearch = document.querySelector('#frmSearch');
	let txtQuery = document.querySelector('#txtQuery');
	let lblErrorMsg = document.querySelector('#lblErrorMsg');

	frmSearch.on('submit', function(ev){
		if(!txtQuery.val().match(/^[a-z ]+$/ig)){
			lblErrorMsg.show();
			ev.preventDefault();
		}
	});

}