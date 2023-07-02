document.querySelector(".contenedor").addEventListener("click", ()=>{
    document.querySelector(".opciones").classList.toggle("display");
})

function traductor(element){
    let lenguage = element.id;
    if(lenguage=="esp"){
        datosespañoles.forEach((palabra,i)=>{
            let id= i+1;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
        datosConsultasEspañoles.forEach((palabra,i)=>{
            let id= i + 5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }
    else if(lenguage=="eng"){
        datosingleses.forEach((palabra,i)=>{
            let id= i+1;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
        datosConsultasIngleses.forEach((palabra,i)=>{
            let id= i+5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }      
}

/*Arreglo nav */
let datosespañoles=["Inicio","Consulta","Especialidades","Ayuda"];/*Nav espanish*/

let datosingleses=["Home","Queries","Specialties","Help"];/*Nav english*/

/*Arreglos Consultas */
let datosConsultasEspañoles=["Opciones para consultas","Escoje una especialidad para comenzar el proceso...","General","Cardiología","Cirujía","Dermatología"];/* */

let datosConsultasIngleses=["Consultation options","Choose a specialty to start the process...","General","Cardiology","Surgery","Dermatology"];/* */
