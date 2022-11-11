feather.replace();

const input = document.querySelector('input')

input,addEventListener('input' , () => {

    const rxSpace = /\s+/g;
    const rxDashes = /-+/g;
    const rxDashSstart = /^-/;

    input.value = input.value
    .replace(rxSpace, ' ')
    .replace(rxDashes, '-')
    .replace(rxDashSstart, '');
});

function sendMessage() {
    const contents = document.getElementById('contents').value;
    const request = new XMLHttpRequest();
    request.open("POST", "https://ptb.discord.com/api/webhooks/1036648641831637002/ZYewFI4H14ZXd-XxShnQTtppT439Di1iZ94uPtbZu0OGfh9vmsaxM_Y29k6mFvCVk5aQ");
    request.setRequestHeader('Content-type', 'application/json');
    const params = {
      username: "Stranger",
      content: contents
    }
    request.send(JSON.stringify(params));
    console.log("Message Send");
}

// function submit_form() {
//     document.getElementById("_reset").reset();
// }

// $("#contents").keypress(function(event) {
//     if (event.keyCode === 13) {
//         $("#post_Button").click();
//     }
// });

 $("#post_Button").click(function() {
     alert("Only the website owner can read your massage.");
 });


// function refreshPage(){
//     window.location.reload();
// } 