
function iniciar(){
    maximo = 600;
    video = document.getElementById('medio');
    reproducir = document.getElementById('reproducir');
    barra = document.getElementById('barra');
    progreso = document.getElementById('progreso');
    retroceder= document.getElementById('retroceder');
    avanzar= document.getElementById('adelantar');
    expandirpantalla= document.getElementById('fullscreen');
    tiempo=document.getElementById('tiempo');

    reproducir.addEventListener('click', presionar, false);
    barra.addEventListener('click', mover, false);
    retroceder.addEventListener('click', rewind,false);
    avanzar.addEventListener('click', forward, false);
    expandirpantalla.addEventListener('click', expandir, false);
    tiempo.addEventListener('timeupdate', time, true);


}

function time(e){
document.getElementById("").innerHTML;
}

function rewind(e){
    video.currentTime=video.currentTime -((video.duration/100)*5);

}

function forward(e){
    video.currentTime=video.currentTime +((video.duration/100)*5);
}

function expandir(e){
e.preventDefault();
video.requestFullscreen();
}


function presionar(){
    if(!video.paused && !video.ended){
        video.pause();
        document.querySelector(".fa-play").style.display="block";
        document.querySelector(".fa-pause").style.display="none";
        window.clearInterval(bucle);

    }else{
        video.play();
        document.querySelector(".fa-play").style.display="none";
        document.querySelector(".fa-pause").style.display="block";
        
        bucle = setInterval(estado, 1000);
    }
}

function mover(e){
    if(!video.paused && !video.ended){
        var ratonX= e.pageX - barra.offsetLeft;
        var nuevoTiempo = ratonX * video.duration/maximo;
        video.currentTime= nuevoTiempo;
        progreso.style.width= ratonX + 'px'
        
    }else{
       video.play(); 
    }

    }



function estado() {
    if(!video.ended){
        var total = parseInt(video.currentTime*600/ video.duration);
        progreso.style.width = total + 'px';
    }else{
        progreso.style.width = '0px';
        reproducir.innerHTML = "reproducir";
        window.clearInterval(bucle);
    }
}

window.addEventListener('load', iniciar, false);