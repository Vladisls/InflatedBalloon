$(function(){$(".vote").click(function(){var id=$(this).attr("id");var name=$(this).attr("name");var dataString='id='+id;var parent=$(this);if(name=='up'){$.ajax({type:"POST",url:"./assets/ajax-test/up_vote.php",data:dataString,cache:false,success:function(html){parent.html(html);}});}else{$.ajax({type:"POST",url:"./assets/ajax-test/down_vote.php",data:dataString,cache:false,success:function(html){parent.html(html);}});}return false;});});