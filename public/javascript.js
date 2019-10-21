
function Comments(This){
	var data = $(This).serialize();
	
				$.post('/setComment/' ,data)
				.success(function(){
					console.log('suceess');
					refresh('sayed');
					$('.lll').val('');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});

}

	function Add(This){
	var data = $(This).serialize();
	$.post('/customers' , data)
	.success(function(){
		console.log('Success');
		refresh('tables1');
	})
	.error(function(){
		console.log('error');
	})
	.always(function(){

	});
}

function AddBrand(This){
	var data = $(This).serialize();
	$.post('/Brands' , data)
	.success(function(){
		console.log('Success');
		refresh('tables1');
	})
	.error(function(){
		console.log('error');
	})
	.always(function(){

	});
}

/*function UpdateCustomer(This){
	var data = $(This).serialize();
	var ID = $('.customer_id').val();
	$.post('/updateCustomer/id=' + ID)
	.success(function(){
		console.log('success');
		refresh('forma');
	})
	.error(function(){
		console.log('error');
	})
		.always(function(){

	});
}*/

/*function Add(This){
	var data = $(This).serialize();
	$.post('/addCustomer' , data)
	.success(function(){
		console.log('Success');
		refresh('tables1');
	})
	.error(function(){
		console.log('error');
	})
	.always(function(){

	});
}*/
/*function Post(This){

	var data = $(This).serialize();
	
				$.post('/addPost' ,data)
				.success(function(){
					//console.log('suceess');
					refresh('test');
					$('.fff').val('');

				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}*/

function Update(This){
	var data = $(This).serialize();
	var ID = $('.commentid').val();
				$.post('/update/' + ID ,data)
				.success(function(){
					console.log('suceess');
					refresh('sayed');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}

function del(id){
              $.get('/deleteCustomer/' + id)
				.success(function(){
					console.log('suceess');
					refresh('tables1');
				})
				.error(function(){
					//console.log(ID);
					console.log('error');
				})
				.always(function(){

				});
}


function upd(This){
	var data = $(This).serialize();
	var ID = $('.postIdid').val();
				$.post('/updateuser/' + ID ,data)
				.success(function(){
					console.log('suceess');
					refresh('tables2');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}
function DeleteBrand(ID){
	$.get('/deleteBrand/id=' + ID)
				.success(function(){
					console.log('suceess');
					refresh('tables1');
				})
				.error(function(){
					//console.log(ID);
					console.log('error');
				})
				.always(function(){

				});
}
function del2(This){
	var data = $(This).serialize();
	var ID = $('a.deleteclc').attr('id');
				$.get('/deletecomment/' + ID ,data)
				.success(function(){
					console.log('suceess');
					refresh('tables3');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}

function upd2(This){
	var data = $(This).serialize();
	var ID = $('.commentIdid').val();
				$.post('/updatecomment/' + ID ,data)
				.success(function(){
					console.log('suceess');
					refresh('tables4');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}

function refresh(id){
	$('#'+id).empty().append( 'loading..' );
  $.get(location.href, function(data){
  	//console.log($($.parseHTML(data)).filter('#'+id));
	$('#'+id).empty().append( $($.parseHTML(data)).filter('#'+id) );
  });
}