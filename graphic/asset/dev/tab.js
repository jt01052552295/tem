function panelTab(e){ 
    e.preventDefault();

    var current_target = e.currentTarget.getAttribute('href')
    var panels = document.getElementsByClassName('panel_body');

    current_target = current_target.replace('#', '')

    Array.prototype.forEach.call(panels, function(panel){
        panel.classList.remove( 'on' );
    })
    document.getElementById(current_target).classList.add( 'on' );
}

var panel_heads = document.querySelectorAll('.panel_head');
panel_heads.forEach(function(col) {
    col.addEventListener("click",panelTab,false); 
});


