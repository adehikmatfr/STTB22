function toggleImageVisibility() {
    let image = document.getElementById("image");
    if (image.classList.contains("hidden")) {
        image.classList.remove("hidden");
    } else {
        image.classList.add("hidden");
    }
}
