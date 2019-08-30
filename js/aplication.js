  function agregarproducto(){
            var cod_estudiante = $("#estudiante").val();
            var cod_asignatura = $("#asignatura option:selected").text();
            var notas = $("#nota").val();
        
            var productonotas  = cod_asignatura.split(",", 2);
            c=c+1;

            $("#tabla").append("<tr id='tr"+c+"'><td><input type='hidden' name='codigo[]' value='"+cod_estudiante+"'>"+cod_estudiante+"</td><td>"+productonotas[0]+"</td><td><input type='hidden' name='notas[]' value='"+notas+"'>"+notas+"<td><a onclick = '$("+'"'+"#tr"+c+'"'+").remove();'><i class= 'trash alternate icon'></i></a></td></tr>")
        
            
   }
