function dropdownDPG() {
    var dropdown_dpg = document.getElementById("dropdown_DPG");
    var arrow = document.getElementById("pijltje");

    if (dropdown_dpg.style.display !== "none") {
        dropdown_dpg.style.display = "none";
        arrow.style.transform = "rotate(270deg)";
    } else if (dropdown_dpg.style.display !== "flex") {
        dropdown_dpg.style.display = "flex";
        arrow.style.transform = "rotate(90deg)"
    }
}