
function update_selected(){
    document.querySelectorAll(".sidebar li").forEach(object => {
        object.classList.remove("selected-server");
    });
}

function route(e, f){
    window.location.href = "index.php?menu=" + e;
}

function toggle_sidebar(){
    const sidebar = document.querySelectorAll(".sidebar")[1];
    console.log(sidebar.style.width);
    sidebar.style.width = sidebar.style.width == "0px" ? "18%" : "0px";
}

function toggle_sidebar_left() {
    const title = document.querySelector(".navigate h3");
    title.style.visibility = title.style.visibility == "hidden" ? "visible" : "hidden";

    const lis = document.querySelectorAll(".sidebar-container li");
    lis.forEach(li => {
        console.log(li);
        const a = li.querySelectorAll("button");
        
        if (a.length > 1) {
            a[1].style.display = a[1].style.display == "none" ? "block" : "none";
        }
    });

    const sidebar = document.querySelector(".sidebar");
    sidebar.style.width = sidebar.style.width == "4%" ? "18%" : "4%";
}