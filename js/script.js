window.onload = function() {
	// регистрация функции, выполняемой по клику на элемент
	$('#content_submit').on('click', function() {
		// запрос произведённый по определённому типу, по специальному адресу и имеющий в себе переменные
		$.post( "/main/add_post", { email: $('#email_in').val(), name: $('#name_in').val(), review: $('#review_in').val() })
		// при нормально выполнении всех условий
	    .done(function( data ) {
	    	alert(data);
	    	// старая версия обновление
	    	// $( ".posts" ).load( "/show_posts_ajax" );

	    	// преобразуем json в объект

	    	//obj = jQuery.parseJSON(data);

	    	// дописываем без перегагрузки новый пост

	  //   	$( ".posts" ).append('<div class="post">' + 
			// 	'<span class="id">' + obj.id + 'new</span>' + 
			// 	'<span class="content"> ' + $('#content_in').val() + '</span>' +
			// 	'</div>'
			// )
		});
    });
};