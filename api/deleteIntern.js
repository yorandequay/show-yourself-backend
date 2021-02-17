document.querySelector("#deleteBtn").addEventListener("click", () => {
    console.log("test");
   const deleteID = document.querySelector("#deleteBtn").dataset.id;
   console.log(deleteID);
});