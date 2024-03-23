

// convert_to_text.addEventListener('DOMContentLoaded',function(){
//     var speech = true;

//     window.SpeechRecognition = window.webkitSpeechRecognition;

//     const recognition = new SpeechRecognition();

//     recognition.interimResult = true;

//     recognition.addEventListener('result',e=>{
//         const transcript = Array.from(e.results)
//         .map(result => result[0])
//         .map(result => result.transcript)

//         converted_text.innerHTML = transcript;
//     })
//     if(speech == true){
//         recognition.start();

//     }
// })

// document.addEventListener('DOMContentLoaded', function() {
//     const convertButtons = document.querySelectorAll('.convert_to_text');

//     convertButtons.forEach(button => {
//         button.addEventListener('click', function() {
//             const answerId = this.getAttribute('data-answer-id');
//             const textarea = document.getElementById(answerId);

//             const recognition = new webkitSpeechRecognition();
//             recognition.interimResult = true;

//             recognition.addEventListener('result', e => {
//                 const transcript = Array.from(e.results)
//                     .map(result => result[0])
//                     .map(result => result.transcript)
//                     .join('');
//                 textarea.value = transcript;
//             });
//             recognition.start();
//         });
//     });
// });

//
document.addEventListener('DOMContentLoaded', function() {
    const convertButtons = document.querySelectorAll('.convert_to_text');
    convertButtons.forEach(button => {
        let recognition = null;

        button.addEventListener('click', function() {
            const answerId = this.dataset.answerId;
            const textarea = document.getElementById(answerId);

            if (!recognition) {
                recognition = new webkitSpeechRecognition();
                recognition.interimResult = true;
                recognition.addEventListener('result', e => {
                    const transcript = Array.from(e.results)
                        .map(result => result[0])
                        .map(result => result.transcript)
                        .join('');
                    textarea.value = transcript;
                });
            }

            if (recognition && recognition.start) {
                if (button.textContent === 'Start Recording') {
                    button.textContent = 'Stop Recording';
                    recognition.start();
                } else {
                    button.textContent = 'Start Recording';
                    recognition.stop();
                }
            }


        });
    });
});
