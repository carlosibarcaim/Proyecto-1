"use strict"
//Init Materialize
document.addEventListener("DOMContentLoaded", function(){
    //collapsible
    var elemsc = document.querySelectorAll(".collapsible");
    var instances = M.Collapsible.init(elemsc);
    //dropdown
    var elemsd = document.querySelectorAll(".dropdown-trigger");
    var instances = M.Dropdown.init(elemsd);
    //Modals
    var elemsm = document.querySelectorAll(".modal");
    var instances = M.Modal.init(elemsm);
    //Sidenav
    var elemsv = document.querySelectorAll(".sidenav");
    var instances = M.Sidenav.init(elemsv);
    //Tooltips
    var elems = document.querySelectorAll(".tooltipped");
    var instances = M.Tooltip.init(elems);
    //MaterialBox
    var elemsx = document.querySelectorAll(".materialboxed");
    var instances = M.Materialbox.init(elemsx);
    //Slider
    var elemsr = document.querySelectorAll(".slider");
    var instances = M.Slider.init(elemsr);
    //Paralax
    var paralax_elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(paralax_elems);
});
