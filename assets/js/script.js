function abrirChat() {
	//alert("Esta funcionando");
	window.open("/chat/chat", "chatWindow", "width=400, height=480");
}

function iniciarSuporte() {
	setTimeout(getChamado, 2000);
}

function getChamado() {
	$.ajax({
		url:'/chat/ajax/getchamado',
		dataType: 'json',
		success:function(json) {
			setTimeout(getChamado, 2000);
		},
		error:function() {
			setTimeout(getChamado, 2000);
		}
	});
}