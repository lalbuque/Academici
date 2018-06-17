//Altas, bajas y modificaciones

var indice = -1;
var accion = "A";
var tareas = localStorage.getItem("tareas");
tareas=JSON.parse(tareas);
if(tareas==null) tareas = [];
//
function lista(){
    document.getElementById("listado").innerHTML = "";
    var tabla = "<tr><th>Nome Completo</th><th>E-mail</th><th>CPF</th><th>Cargo</th><th>Data Admissão</th><th>Apagar</th><th>Editar</th></tr>";
    for(var i in tareas){
        var tarea = JSON.parse(tareas[i]);
        tabla += "<tr><td>"+tarea.nombre+"</td>";
        tabla += "<tr><td>"+tarea.email+"</td>";
        tabla += "<td>"+tarea.descripcion+"</td>";
        tabla += "<td>"+tarea.duracion+"</td>";
        tabla += "<td>"+tarea.prioridad+"</td>";
        tabla += "<td><button type='button' class='btn btn-danger' onClick='borra("+i+")'><i class='fa fa-close'></i> Apagar</button></td>";
        tabla += "<td><button type='button' class='btn btn-warning' onClick='edita("+i+")'><i class='fa fa-edit'></i> Editar</button></td>";
        tabla += "</tr>";   
    }
    document.getElementById("listado").innerHTML = tabla;
}
function alta(){
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var descripcion = document.getElementById("descripcion").value;
    var duracion = document.getElementById("duracion").value;
    var prioridad = document.getElementById("prioridad").value;
    //
    var tarea = JSON.stringify({
        nombre:nombre,
        email:email,
        descripcion:descripcion,
        duracion:duracion,
        prioridad:prioridad
    });
    //añadir al objeto JSON
    if(accion=="A"){
        tareas.push(tarea);
        localStorage.setItem("tareas", JSON.stringify(tareas));
        alert("Dados salvos com sucesso.");
    } else {
        tareas[indice]= tarea;
        localStorage.setItem("tareas", JSON.stringify(tareas));
        alert("Dados modificados com sucesso.");
    }
    lista();
    document.getElementById("nombre").value = "";
    document.getElementById("email").value = "";
    document.getElementById("descripcion").value = "";
    document.getElementById("duracion").value = "";
    document.getElementById("prioridad").value = "";
    return true;
}
function borra(i){
    indice = i;
    var tarea = JSON.parse(tareas[indice]);
    var nombre = tarea.nombre;
    if(confirm("Certeza que deseja apagar estes dados? '"+nombre+"'?")){
        tareas.splice(indice,1);
        localStorage.setItem("tareas", JSON.stringify(tareas));
        alert("O cadastro '"+nombre+"' foi excluido");
    }
    lista();
}
function edita(i){
    indice = i;
    accion = "E";
    var tarea = JSON.parse(tareas[indice]);
    document.getElementById("nombre").value = tarea.nombre;
    document.getElementById("email").value = tarea.email;
    document.getElementById("descripcion").value = tarea.descripcion;
    document.getElementById("duracion").value = tarea.duracion;
    document.getElementById("prioridad").value = tarea.prioridad;
}
window.onload = function(){
    lista();
}