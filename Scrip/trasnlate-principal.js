document.querySelector(".contenedor").addEventListener("click" ,() => {
    document.querySelector(".opciones").classList.toggle("display");
})

function traductor(element){
    let lenguage = element.id;
    if(lenguage=="esp"){
        datosEspañoles.forEach((palabra,i)=>{
            let id= i+1;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
        serviciosEspañoles.forEach((palabra,i)=>{
            let id= i + 5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }
    else if(lenguage=="eng"){
        datosIngleses.forEach((palabra,i)=>{
            let id= i+1;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
        serviciosIngleses.forEach((palabra,i)=>{
            let id= i+5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }      
}

/*Arreglo nav */
let datosEspañoles=["Inicio","Consulta","Especialidades","Ayuda"];/*Nav espanish*/

let datosIngleses=["Home","Queries","Specialties","Help"];/*Nav english*/

/*Arreglos servicios*/

let serviciosEspañoles=["Servicio para tu cuidado y el de tu familia.","¿Buscas servicios de consultas? Estamos para apoyarte. Únicamente necesitamos un poco sobre tu informacion personal para que la puedas realizar segun la especialidad que necesites.","Inicio Sesión","Especialidades","Si necesitas apoyo en el proceso, no dudes en contactarnos o para asistirte con personal de enfermería o un médico a domicilio.","Ayuda"];/*Servicios espanish*/

let serviciosIngleses=["Service for your care and that of your family.","Looking for consulting services? We are here to support you. We just need a little bit about your personal information so that you can perform it according to the specialty you need.","Log in","Specialties","If you need support in the process, do not hesitate to contact us or to assist you with nursing staff or a doctor at home.","Help"];/*Servicios english*/



