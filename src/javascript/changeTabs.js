document.getElementById("navOverview").onclick = () => {
    document.getElementById("addInternTab").classList.add("hidden");
    document.getElementById("showInternTab").classList.remove("hidden");
};

document.getElementById("navAdd").onclick = () => {
    document.getElementById("addInternTab").classList.remove("hidden");
    document.getElementById("showInternTab").classList.add("hidden");
};