"use strict";

const API_URL = "api/comentarios";

document.querySelector("#data-send").addEventListener("submit", agregarComentario);


let app = new Vue({
    el: "comentarios-vue",
    data: {
        comentarios: [],
    },
}); 

async function getComentarios() {
    let id = document.querySelector("#data-prod").dataset.id_producto;
    try {
        let response = await fetch(API_URL + id);
        let api_comentarios = await response.json();
        app.comentarios = api_comentarios;
        console.log( app.comentarios)
    } catch (e) {
        console.log(e);
    }
}

getComentarios();

async function agregarComentario(){
    e.preventDefault();
    let formData = document.querySelector("#data-prod").dataset.id;
    let comment = {
        comentario: document.querySelector("#comentario").value,
        puntaje: document.querySelector("#puntaje").value,
        id_producto: app.id_producto,
        id_user: app.id_user,
    }
    console.log(comment);
       try{
        let reponse = await fetch(API_URL,{
            "method" : "POST",
            "headers":{"Content-type" : "application/json"},
            "body":JSON.stringify(comment)
        });
        if(response.status == 200){
            app.comentarios.push(comment);
            getComentarios();
            console.log("Se cargo ok!");
        }else{
            console.log("Hubo un error");
        }
    }catch (e){
        console.log(e);
    }

    async function borrarComentario(){
        let id_comentario = document.querySelector("#eliminar-comentario").dataset.id_comentario;
        try{
            let response = await fetch(API_URL+id_comentario,{
                "method": "delete",
                "headers" : {'Content-Type' : 'application/json'}
            });
            getCommet();
        }catch(response){
            console.log(e);
        }
    }
    document.querySelector("#eliminar-comentario").addEventListener("click", borrarComentario);

    
}
 