// for (let i = 10; i > 0; i--) {

//     setTimeout(function() {
//         document.getElementById("output").innerHTML = i;
//     }, 1000 * i);
// }

function countdown(count) {
    if (count > 0) {
        document.getElementById("output").innerHTML = count;
        setTimeout(() => {
        countdown(count - 1);
        }, 1000); // Wait 1 second (1000 milliseconds)
    } else {
        // console.log("Blast off!");
        document.getElementById("output").innerHTML = "Blast off! 🚀";
    }
}
// Start the countdown from 10
countdown(10);