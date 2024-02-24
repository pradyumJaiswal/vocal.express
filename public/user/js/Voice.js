// let speech = new SpeechSynthesisUtterance();

// document.querySelector("#listenQuestion").addEventListener("click",() =>{

//     speech.text = document.querySelector("#questionTo-voice").value;
//     window.speechSynthesis.speak(speech);
// })



//-----------------------------Male Voice-------------------------------//

// document.addEventListener("DOMContentLoaded", function() {
//     const questions = document.querySelectorAll(".listenQuestion");

//     questions.forEach(question => {
//         question.addEventListener("click", () => {
//             const questionId = question.dataset.questionId;
//             const questionText = document.getElementById(questionId).innerText;

//             let speech = new SpeechSynthesisUtterance(questionText);

//             window.speechSynthesis.speak(speech);
//         });
//     });
// });


//----------------------------female voice------------------------------------\//
document.addEventListener("DOMContentLoaded", function() {
    const questions = document.querySelectorAll(".listenQuestion");

    questions.forEach(question => {
        question.addEventListener("click", () => {
            const questionId = question.dataset.questionId;
            const questionText = document.getElementById(questionId).innerText;

            let speech = new SpeechSynthesisUtterance(questionText);

            // Get the list of available voices
            let voices = window.speechSynthesis.getVoices();

            // Find a female voice
            let femaleVoice = voices.find(voice => voice.name === "Google UK English Female");

            // If a female voice is found, set it as the voice for the utterance
            if (femaleVoice) {
                speech.voice = femaleVoice;
            }

            window.speechSynthesis.speak(speech);
        });
    });
});
