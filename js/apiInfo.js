"use strict";

const API_URL = "api/comentarios";

document.querySelector("#data-send").addEventListener("submit", agregarComentario);

let app = new Vue({
    el: "#comentarios-vue",
    data: {
        comentarios: [], // this->smarty->assign("tareas",  $tareas)
    },methods: {
       
    }
}); 

async function getComentarios() {
    console.log("Estoy en el get")
    // fetch para traer todas las tareas
    try {
        console.log(API_URL);
        let response = await fetch(API_URL + url);
        let comentarios = await response.json();
        app.comentarios = comentarios;
        console.log("Comentarios"+comentarios);

    } catch (e) {
        console.log(e);
    }
}

getComentarios();

async function agregarComentario(){
    e.preventDefault();
    let formData = document.querySelector("#data-prod").dataset.id;
    let comment = {
        "id_user" :formData.get('data-nombre_user'),
        "id_producto": formData.get('data-id_usuario'),
        "comentario": formData.get('coment'),
        "puntaje":parseInt(formData.get('value'))
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

    async function borrarComentarioI(id){
        try{
            let response = await fetch(API_URL+id,{
                "method": "delete",
                "headers" : {'Content-Type' : 'application/json'}
            });
            getCommet();
        }catch(response){
            console.log(e);
        }
    }

    
}
 