/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav(obj) {
	// event.originalEvent.defaultPrevented();
    $("#" + obj).attr("style","width:100%;");
    $(".tablinks:first", "#" + obj).click();
    $("div.tab").attr("style","width:30%;height:100%;");
    // document.getElementById("main").style.marginLeft = "45%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    // document.body.style.backgroundColor = "inherit";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    // document.getElementById("mySidenav").style.width = "0";
    $(".sidenav").attr("style","width:0;");
    // document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    $(evt).addClass("active");
}