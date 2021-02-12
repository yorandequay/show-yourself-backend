document.getElementById("navOverviewBig").onclick = () => {
    document.getElementById("addInternTab").classList.add("hidden");
    document.getElementById("showInternTab").classList.remove("hidden");
    document.getElementById("navOverviewBig").classList.add("colorNavOn");
    document.getElementById("navAddBig").classList.remove("colorNavOn");
    console.log("Navigated!");
};

document.getElementById("navAddBig").onclick = () => {
    document.getElementById("addInternTab").classList.remove("hidden");
    document.getElementById("showInternTab").classList.add("hidden");
    document.getElementById("navAddBig").classList.add("colorNavOn");
    document.getElementById("navOverviewBig").classList.remove("colorNavOn");
    console.log("Navigated!");
};

document.getElementById("navAddSmall").onclick = () => {
    document.getElementById("addInternTab").classList.add("hidden");
    document.getElementById("showInternTab").classList.remove("hidden");
    document.getElementById("navAddBig").classList.add("colorNavOn");
    document.getElementById("navOverviewBig").classList.remove("colorNavOn");
};

document.getElementById("navOverviewSmall").onclick = () => {
    document.getElementById("addInternTab").classList.remove("hidden");
    document.getElementById("showInternTab").classList.add("hidden");
    document.getElementById("navAddBig").classList.add("colorNavOn");
    document.getElementById("navOverviewBig").classList.remove("colorNavOn");
};

//Function to hide second table
document.getElementById("nextTable").onclick = () => {
    document.getElementById("respBegin").classList.remove("respTableHead");
    document.getElementById("respEnd").classList.remove("respTableHead");
    document.getElementById("respGroup").classList.remove("respTableHead");
    const showTable = document.getElementsByClassName('hideTable');
    Array.prototype.forEach.call(showTable, function (tableElement) {
        const id = tableElement.dataset.index;
        document.getElementById(id).classList.remove("respTable");
    });
    document.getElementById("backID").classList.add("respTableHead");
    document.getElementById("backName").classList.add("respTableHead");
    document.getElementById("backCategory").classList.add("respTableHead");
    const hideTable = document.getElementsByClassName('backTable');
    Array.prototype.forEach.call(hideTable, function (tableElement) {
        const id = tableElement.dataset.index;
        document.getElementById(id).classList.add("respTable");
    });
};


// Function to hide first table
document.getElementById("backTableBtn").onclick = () => {
    document.getElementById("respBegin").classList.add("respTableHead");
    document.getElementById("respEnd").classList.add("respTableHead");
    document.getElementById("respGroup").classList.add("respTableHead");
    const showTable = document.getElementsByClassName('hideTable');
    Array.prototype.forEach.call(showTable, function (tableElement) {
        const id = tableElement.dataset.index;
        document.getElementById(id).classList.add("respTable");
    });
    document.getElementById("backID").classList.remove("respTableHead");
    document.getElementById("backName").classList.remove("respTableHead");
    document.getElementById("backCategory").classList.remove("respTableHead");
    const hideTable = document.getElementsByClassName('backTable');
    Array.prototype.forEach.call(hideTable, function (tableElement) {
        const id = tableElement.dataset.index;
        document.getElementById(id).classList.remove("respTable");
    });
};
