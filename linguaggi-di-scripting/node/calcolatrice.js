// function valoreBtn() {
//     let t = $(this).text()
//     $("input").data( "#calcolo" , t);
// }
function valoreBtn() {
    $("input").attr("value", $(this).text());
}
jQuery("button").on("click", valoreBtn);


// function dataType () {
//     jQuery("button").on("click", function () {
//         if ($(this).hasClass("btn-numero")){
//             return "numero"
//         }
//         if ($(this).hasClass("btn-risultato")){
//             return "risultato"
//         }
//         if ($(this).hasClass("btn-elimina")){
//             return "elimina";
//         }
//         if ($(this).hasClass("btn-calcolo")){
//             return "calcolo";
//         }
//         if ($(this).hasClass("btn-punto")){
//             return "punto";
//         }
//     });
// }


