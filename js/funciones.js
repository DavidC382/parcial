class estudiante{
    
    constructor(id,nombre,materia,nota){
        this.id=id;
        this.nombre=nombre;
        this.materia=materia;
        this.nota=nota;
 
    }
    darid(){
        return this.id;
    }
    darnombre(){
        return this.nombre;
    }
    darmateria(){
        return this.materia;
    }
    darnota(){
        return this.nota;
    }
    
}

function opc3(){

}
let acum=0;
function opc2(){
    let valor = prompt("Introduzca nuevo valor");
    acum = acum + (valor * document.getElementById('nota').value);
    console.log("Valooooooooor "+document.getElementById('nota').value);
    document.getElementById('res').innerHTML = ""+acum;
}


function opc1(){
    
    alert("Registro Exitoso");
}