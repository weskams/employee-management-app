function showHome() {
    let box = document.getElementById("homeBox");

    if (box.style.display === "block") {
        box.style.display = "none";
    } else {
        box.style.display = "block";
    }
}