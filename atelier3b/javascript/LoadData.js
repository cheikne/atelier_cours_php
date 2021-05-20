function Display_res_etd(){
	var url = "php/Load_data_to_server.php";
	var data = "ident="+"true";
	Send_data_to_server(url,data,false);
}
function Send_data_to_server(url_,data_,record){
	var demo = $("#res_etd");
	$.ajax({
		url:url_,
		data:data_,
		type:"POST",
		dataType:"html",
		success:(code_html,status)=>{
			demo.html(code_html);
		},
		error:(resultat,status,erreur)=>{
			demo.text(resultat.responseText);
		}
	});
}