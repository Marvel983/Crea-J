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
        modalesEspañoles.forEach((palabra,i)=>{
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
        modalesIngleses.forEach((palabra,i)=>{
            let id= i+5;
            id = "" + id;
            document.getElementById(id).innerHTML=palabra;
        })
    }      
}

/*Arreglo nav */
let datosEspañoles=["Inicio","Consulta","Especialidades","Ayuda"];/*Nav espanish*/

let datosIngleses=["Home","Queries","Specialties","Help"];/*Nav english*/

/*Arreglos modales*/
let modalesEspañoles=["Especialidades Medicas","General","Información","Cardiología","Información","Cirugía","Información","Dermatología","Información"];/*Modales espanish*/

let modalesIngleses=["Medical Specialties","General","Information","Cardiology","Information","Surgery","Information","Dermatology","Information"];/*Modales english*/
