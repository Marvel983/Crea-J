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
let datosEspañoles=["Inicio","Consulta","Especialidades","Ayuda"];/*Modal espanish*/

let datosIngleses=["Home","Queries","Specialties","Help"];/*Modal english*/

/*Arreglo modal */
let modalesEspañoles=["Medicina General","La Medicina General es el primer nivel de atención médica. La consulta está orientada al abordaje integral del paciente en su aspecto físico, mental y social. "];/*Modal espanish*/

let modalesIngleses=["General Medicine","General Medicine is the first level of medical care. The consultation is oriented to the integral approach of the patient in his physical, mental and social aspects. "];/*Modal english*/



