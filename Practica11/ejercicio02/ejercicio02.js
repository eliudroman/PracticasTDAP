
/*------------MINIATURAS------------*/
function createImage(src) {
    const image = document.createElement('img');
    image.src = src;
    return image
}

var miniaturas_img = document.querySelectorAll(".miniatura");
for (let elemento of miniaturas_img) {
    elemento.addEventListener('mouseenter', function () {
        const imagen = createImage(elemento.src);
        document.body.classList.add('no-scroll');
        miniatura.style.top = window.pageYOffset + 'px';
        miniatura.appendChild(imagen);
        miniatura.classList.remove('hidden');
    });
    elemento.addEventListener('mouseout', function () {
        miniatura.classList.add('hidden');
        miniatura.innerHTML = ''
        document.body.classList.remove('no-scroll');
    });
}

const miniatura = document.querySelector('#miniatura_view');

/*------------FILTRO------------*/
var formulario = document.getElementById("formulario");

var barroco = document.querySelectorAll(".uno");
var manierismo = document.querySelectorAll(".dos");
var neoclasicismo = document.querySelectorAll(".tres");
var realismo = document.querySelectorAll(".cuatro");
var romanticismo = document.querySelectorAll(".cinco");

formulario.onsubmit = function (event) {
    event.preventDefault();
    const name = document.getElementById("filtrar").value;
    console.log(name);
    for (let elemento of barroco) {
        elemento.classList.add('hidden');
    }
    for (let elemento of manierismo) {
        elemento.classList.add('hidden');
    }
    for (let elemento of neoclasicismo) {
        elemento.classList.add('hidden');
    }
    for (let elemento of realismo) {
        elemento.classList.add('hidden');
    }
    for (let elemento of romanticismo) {
        elemento.classList.add('hidden');
    }
    if (name == 1) {
        for (let elemento of barroco) {
            elemento.classList.remove('hidden');
        }
    }
    if (name == 2) {
        for (let elemento of manierismo) {
            elemento.classList.remove('hidden');
        }
    }
    if (name == 3) {
        for (let elemento of neoclasicismo) {
            elemento.classList.remove('hidden');
        }
    }
    if (name == 4) {
        for (let elemento of realismo) {
            elemento.classList.remove('hidden');
        }
    }
    if (name == 5) {
        for (let elemento of romanticismo) {
            elemento.classList.remove('hidden');
        }
    }
    if (name == 0) {
        for (let elemento of barroco) {
            elemento.classList.remove('hidden');
        }
        for (let elemento of manierismo) {
            elemento.classList.remove('hidden');
        }
        for (let elemento of neoclasicismo) {
            elemento.classList.remove('hidden');
        }
        for (let elemento of realismo) {
            elemento.classList.remove('hidden');
        }
        for (let elemento of romanticismo) {
            elemento.classList.remove('hidden');
        }
    }
}
/*------------Editar------------*/

const edicion = document.querySelectorAll("#editar");
const cerrar = document.querySelectorAll("#cerrar");
const modal = document.querySelector("#modal");



//----------------------------------
let jj = 1;
var ruta = ""
for (let editar of edicion) {
    ruta = ".tt"+jj;
    console.log(ruta)
    let Fila = document.querySelector(ruta);
    editar.addEventListener('click', function(event){
        event.preventDefault();
        modal.showModal();
        let elementosFila = Fila.getElementsByTagName("td");
        // Iteramos los elementos de la fila para mostrarlos uno por uno.
        for (let i = 1; i <= 5; i++) {
            console.log(elementosFila[i].innerHTML);
        }
        
        //const imagen = createImage(elementosFila[1].innerHTML);
        //miniatura.style.top = window.pageYOffset + 'px';
        //miniatura.appendChild(imagen);
        console.log("---------")

        console.log(miniaturas_img[1])
        var rutaa = miniaturas_img[1].src
        console.log("---------")
        let imaaa = document.getElementById("ID_del_div").innerHTML='<img src="images/05030.jpg" />';
        console.log(imaaa)
        console.log("+++++++")
        imaaa = document.getElementById("ID_del_div").innerHTML=miniaturas_img[1];
        //document.getElementById("img1").src="image2.jpg";
        let  titulo = document.querySelector("#a1");
        titulo.textContent = elementosFila[2].innerHTML;
        let  artistas = document.querySelector("#a2");
        artistas.textContent = elementosFila[3].innerHTML;
        let  ano = document.querySelector("#a3");
        ano.textContent = elementosFila[4].innerHTML;
        let  genero = document.querySelector("#a4");
        genero.textContent = elementosFila[5].innerHTML;
    });
    jj++;
}





for (let editar of cerrar) {
    editar.addEventListener('click', () => {
        modal.close();
    })
}

