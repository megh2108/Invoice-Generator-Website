/* global bootstrap: false */
(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

    
    $('#yes').click(function(){
        
        $.ajax({
            method: "post",
            url: "http://localhost/Invoice/sign_out.php",
    
        }).done(function() {
            window.location.assign("http://localhost/Invoice/login.php");
            // window.location.assign("http://localhost/Invoice/index.php");
    
        });    
    }); 

    // $('#no').click(function(){

    //     jQuery.fancybox.close();

    // });
    


var header = document.getElementById("nav");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}