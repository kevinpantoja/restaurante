//evento de estado en footer responsive
let estado_footer = document.getElementsByClassName("footer__estado");
for(let estado of estado_footer){
    estado.onclick = (e)=>{
        let icono = estado.children[0];
        let contenido = icono.parentNode.parentNode.parentNode.children[1];
        if(icono.classList.contains("fa-angle-down")){
            icono.classList.remove("fa-angle-down");
            icono.classList.add("fa-angle-up");
            contenido.style.display="block";
        }else{
            icono.classList.remove("fa-angle-up");
            icono.classList.add("fa-angle-down");
            contenido.style.display="none";
        }
    }
}
const footer__estado__control = (e)=>{
    if(window.innerWidth > 500){
        let estado_footer = document.getElementsByClassName("footer__estado");
        for(let estado of estado_footer){
                let icono = estado.children[0];
                let contenido = icono.parentNode.parentNode.parentNode.children[1];
                contenido.style.display="block";
        }
    }
    else{
        let estado_footer = document.getElementsByClassName("footer__estado");
        for(let estado of estado_footer){
            let icono = estado.children[0];
            let contenido = icono.parentNode.parentNode.parentNode.children[1];
            if(icono.classList.contains("fa-angle-down")){
                contenido.style.display="none";
            }     
        }

    }
}
window.addEventListener("resize",footer__estado__control);
window.addEventListener("load",footer__estado__control);


/*CAMBIAMOS EL BACKGROUND DEL NAV AL HACER SCROLL*/
window.addEventListener("scroll",()=>{
	let element = document.querySelector(".header-nav");
	element.classList.toggle("change-nav",window.scrollY>700);
});


