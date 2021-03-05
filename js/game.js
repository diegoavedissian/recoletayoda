const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let questionCounter = 0;
let availableQuestions = [];
let questions = [
    {
        question: 'O que é Reciclagem?',
        choice1: 'Jogar fora o lixo produzido',
        choice2: 'Coletar todo de material existente em lixos recicláveis',
        choice3: 'Nome dado para todo o processo do lixo após seu descarte.',
        choice4: 'Processo de transformação de materiais usados em novos produtos para consumo.',
        answer: 4
    },
    {
        question:"Como separar corretamente seu lixo?",
        choice1: 'Juntar tudo na lixeira, pois os prédios já fazem o trabalho de separação.',
        choice2: 'Separar o lixo orgânico (restos de alimentos, papel sujo e lixo sanitário) dos resíduos sólidos (como plástico, vidro, papel, metal e embalagens longa vida).',
        choice3: 'Deixar plásticos sujos junto com lixo orgânico.',
        choice4: 'Juntar todo tipo de lixo e descartar em ponto de coleta.',
        answer: 2
    },
    {
        question:"Como consumir de forma consciente?",
        choice1: 'Trocando todos os nossos objetos sempre que um novo do mesmo tipo for lançado.',
        choice2: 'Usar a mangueira para lavar o quintal e o carro.',
        choice3: 'Utilizando os recursos naturais para satisfazer nossas necessidades e das gerações futuras.',
        choice4: 'Adquirindo qualquer tipo de produto se for barato.',
        answer: 3
    },
    {
        question:"Como preservar árvores e florestas?",
        choice1: 'Construindo uma casa na árvore.',
        choice2: 'Reciclando papéis, jornais e revistas.',
        choice3: 'Reutilizando metais e vidros.',
        choice4: 'Indo em parques.',
        answer: 2
    },
    {
        question:"O que é coleta seletiva?",
        choice1: 'Processo de separação e recolhimento dos resíduos para o reaproveitamento por meio de reciclagem.',
        choice2: 'Destinação de resíduos para lixões e aterros.',
        choice3: 'Processo de envio de todo lixo produzido para cooperativas ou entrega para catadores de rua.',
        choice4: 'A escolha aleatória do melhor lixo produzido.',
        answer: 1
    },
    
]

const SCORE_POINTS = 100;
const MAX_QUESTIONS = 5;

startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuestions = [...questions];
    getNewQuestion();
}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score)
        return window.location.assign('../end.php')
    }
    questionCounter++
    progressText.innerText = `Questões ${questionCounter} de ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`
    
    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.innerText = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' +  number]
    })

    availableQuestions.splice(questionsIndex, 1)
    
    acceptingAnswers = true;
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptingAnswers) return

        acceptingAnswers = false;
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if(classToApply === 'correct'){
            incrementScore(SCORE_POINTS)
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()
        }, 1000)
    })
})

incrementScore = num => {
    score +=num
    scoreText.innerText = score
}

startGame()