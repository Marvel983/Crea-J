document.querySelector(".contenedor").addEventListener("click", ()=>{
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
        doctoresEspañoles.forEach((palabra,i)=>{
            let id= i+5;
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
        doctoresIngleses.forEach((palabra,i)=>{
            let id= i+5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }      
}

/*Arreglo nav */
let datosEspañoles=["Inicio","Consulta","Especialidades","Ayuda"];/*Nav espanish*/

let datosIngleses=["Home","Queries","Specialties","Help"];/*Nav english*/

/*Arreglos doctor*/

let doctoresEspañoles=["Información Extra.","- Especialidad:","Lorem ipsum dolor sit, amet.","- Nombre del Doctor:","Lorem ipsum dolor sit, amet.","- Especialidad del Especialista:","Lorem ipsum dolor sit, amet.","- Hospital - Clínica:","Lorem ipsum dolor sit, amet.","- Numero de contacto:","0000 - 0000","Realizar cita"];/*Doctores espanish*/

let doctoresIngleses=["Extra Information.","- Specialty:","Lorem ipsum dolor sit, amet.","- Doctor's name:","Lorem ipsum dolor sit, amet.","- Specialty of the Specialist:","Lorem ipsum dolor sit, amet.","- Hospital - Clinic:","Lorem ipsum dolor sit, amet.","- Contact number:","0000 - 0000","Make an appointment"];/*Doctores english*/
