$(function(){

    alert('jquerty funcionando');

});


$("#confirm").click(function(){
    var bool=confirm("Seguro de eliminar el dato?");
    if(bool){
      alert("se elimino correctamente");
    }else{
      alert("cancelo la solicitud");
    }
  });