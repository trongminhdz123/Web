(function($){
	
  $('[data-toggle="tooltip"]').tooltip()
  
	
  $('.btn-copy').on("click",function(){
    var ip = $("#ip").val()
    $("#ip").val("connect "+ip)
    $("#ip")[0].select();
    
    document.execCommand('copy');
    
    $("#ip").val(ip)
    
    $(this).attr('data-original-title', "Copié avec succès!").tooltip('show');
    
  }).on("mouseleave",function(){
    $(this).attr('data-original-title', "Copier l'adresse IP");
  })
  
})(jQuery)