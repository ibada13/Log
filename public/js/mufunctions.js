
function toggle(modalId) {
    const modalc = document.getElementById('modalcontainer' + modalId)
    console.log('modalcontainer'+modalId)
    var modal = document.getElementById("mod"+modalId);

    if (modal.style.display === "none") {
        console.log(2222)
        modalc.style.display = "flex"
        modal.style.display = "block"
        document.body.style.overflowY ="hidden"
    } else {
        modalc.style.display = "none"
        document.body.style.overflowY ="auto"
        modal.style.display = "none"
    }
}
function myclose(e,modalId) { 
    console.log(e,modalId)
    const modalc = document.getElementById('modalcontainer' + modalId)
    console.log('modalcontainer'+modalId)
    var modal = document.getElementById("mod" + modalId);
    modalc.style.display = "none"
    document.body.style.overflowY ="auto"
    modal.style.display = "none"
}