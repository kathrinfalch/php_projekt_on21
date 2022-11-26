erledigtButtons();

var clickedElement;
function erledigtButtons() {
    var buttons = document.getElementsByClassName("erledigt-button");

    for (var i=0; i<buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            event.preventDefault();
            window.clickedElement=this;
            $.ajax({
                type:"GET",
                url:this.href,
                success:function(antwort){
                    clickedElement.parentElement.parentElement.outerHTML="";
                    alert(antwort);
                }
            })
        }); 
    }
}