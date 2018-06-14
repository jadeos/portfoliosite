/**
 * Created by jade on 20/02/2017.
 */
window.onload = function(){
   // checkbox();
}

function checkbox(){
    if(document.getElementById('ocean').onchange){
        document.getElementById('default').checked=false;
    }else{
        //default theme selected
        document.getElementById('ocean').checked=false;
    }
}
