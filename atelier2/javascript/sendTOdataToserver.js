document.getElementById('modal').innerHTML=`
<div class='container'>
	<button class='btn btn-primary' style="background-color: black;color: white;">Annuler</button><br>
  <button type='button' id='test' class='btn btn-primary' style="background-color: black;color: white;" data-toggle='modal' data-target='#myModal'>
    Resultat
  </button>
  <div class='modal' id='myModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Modal Heading</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        <div class='modal-body'>   Modal body.. </div>
        <div class='modal-footer'>
          <input type='button' id="btn1" class='btn btn-danger' data-dismiss='modal'  value='Annuler'>
           <input type='button' class='btn btn-danger' data-dismiss='modal' id="btn2" value='Enregistrer'>
        </div>
      </div>
    </div>
  </div>
</div>
	`;
$("#btn2").click(()=>{
		// event.preventDefault();
		var ident = $("#nom").val();
		var maths = $("#maths").val();
		var info = $("#infor").val();
		// ident = document.getElementById("nom").value;
		// console.log("info maths ident "+ident+" "+maths+" "+info);
		var record =true;
		Send_data_to_server(ident,maths,info,record);
});
$(document).ready(()=>{
	$("#btn1").click(()=>{
		// event.preventDefault();
		var ident = $("#nom").text();
		var maths = $("#maths").text();
		var info = $("#infor").text();
		var record =false;
		Send_data_to_server(ident,maths,info,record);
	});
});
function Send_data_to_server(ident,maths,info,record){
	var demo = $("#demo");
	$.ajax({
		url:"php/file_server.php",
		data:"ident="+ident+"&maths="+maths+"&info="+info+"&record="+record,
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