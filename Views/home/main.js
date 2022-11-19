var script = document.createElement('script');
script.src = './js/jquery-3.6.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
function App() {}

window.onload = function (event) {
    var app = new App();
    window.app = app;
    console.log( "me ")


};

App.prototype.processingButton = function(event) {
    console.log( "me presionaron")
    const btn = event.currentTarget;
    const slickList = event.currentTarget.parentNode;
    const track = event.currentTarget.parentNode.querySelector('#track');
    const slick = track.querySelectorAll('.slick');

    const slickWidth = slick[0].offsetWidth;
    
    const trackWidth = track.offsetWidth;
    const listWidth = slickList.offsetWidth;

    track.style.left == ""  ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0, -2) * -1);

    btn.dataset.button == "button-prev" ? prevAction(leftPosition,slickWidth,track) : nextAction(leftPosition,trackWidth,listWidth,slickWidth,track)

    $( document ).ready(function() {
        console.log( "ready!" );
    });

   
}

let prevAction = (leftPosition,slickWidth,track) => {
    if(leftPosition > 0) {
        console.log("entro 2")
        

        console.log("left psotion",leftPosition);
        console.log("slickWidth",slickWidth);
        console.log("track",track);
        
               // console.log("hola");
                //prevAction(leftPosition,slickWidth,track);
    
       
    }
}

let nextAction = (leftPosition,trackWidth,listWidth,slickWidth,track) => {
    if(leftPosition < (trackWidth - listWidth)) {
        track.style.left = `${-1 * (leftPosition + slickWidth)}px`;
        console.log("left psotion ",leftPosition);
        console.log("trackWidth ",trackWidth);
        console.log("listWidth ",listWidth);
        console.log("slickWidth ",slickWidth);
        console.log("track ",track);
    }else{
        track.style.left = `${-1 * (leftPosition - slickWidth)}px`;
    }
}