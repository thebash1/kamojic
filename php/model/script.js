
function insertDateCurrent(){
    const currentDate = new Date();
    const arrayDate = [`${currentDate.getDate()}/${(currentDate.getMonth()+1)}/${currentDate.getFullYear()}`];
    document.getElementById("date_delete_reservation").value = arrayDate;
};

window.onload = function(){
    setTimeout(insertDateCurrent, 3000);
} 

// var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
//   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
//     return new bootstrap.Tooltip(tooltipTriggerEl);
//   });