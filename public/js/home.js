
const button = document.getElementById('menuButton');
const content = document.getElementById('additionalFilter');

button.addEventListener("click",()=>{
    console.log("click");
    content.classList.toggle("hidden");
})

// button.addEventListener('click', () => {
//     if (content.hidden) {
//         content.hidden = false;
//         setTimeout(() => {
//             content.classList.add('is-collapsed');
//         }, 100);
//     } else {
//         content.classList.remove('is-collapsed');

//         setTimeout(() => {
//             content.hidden = true;
//         }, 1000);
//     }
// });





