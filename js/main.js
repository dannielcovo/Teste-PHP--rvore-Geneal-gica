$(function(){
	$('input:radio').on('click', function () {
		var form = $(this).serialize();
		var id = $(this).val();
		var request = $.ajax({
			method: "POST",
			url   : 'controller.php',
			data  : {'id' : id, 'type' : 'pais'},
			dataType: 'json'
		});
		request.done(function (data) {
			var data = data.data;
			var title = '<h3> Escolha Apenas dois filhos</h3>'
			var content = title+'<div class="checkbox">';

			for(var k in data){
				console.log(data[k]);
				content += '<label><input type="checkbox" class="check" name= "check" value="'+data[k].id+'">'+data[k].nome+'</label> ';
			}
			content += '</div>';
			$('#pais').html(content);
		});

	})

});

$(function() {
	$('html').on('click','input:checkbox', function (e) {
		var radio = $("input[name='avos']:checked").val();
		var checkbox = $('input:checkbox[name^=check]:checked');

		if (checkbox.length == 2) {
			var val = [];
			checkbox.each(function () {
				val.push($(this).val());
			});

			var request = $.ajax({
				method: "POST",
				url   : 'controller.php',
				data  : {'ids' : val, 'type' : 'filhos'},
				dataType: 'json'
			});

			request.done(function (data) {
				var data = data.data;
				var content = '';
				if(data.length == ''){
					content += '<div class="Error"><span style="color: red;"> Nenhum filho encontrado </span>';
				} else {
					content += '<h3> Filho </h3>'+'<div class="Filhos">';
				}

				var idade = 'Sua idade é : ';
				for(var k in data){
					var sum = parseInt(radio) + parseInt(data[k].id);
					content += '<label> '+data[k].nome+' '+idade+''+sum+' </label> ';
				}
				content += '</div>';
				$('#filhos').html(content);
			});
		}

	})
});