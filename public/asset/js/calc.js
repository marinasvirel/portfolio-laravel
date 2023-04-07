const calcBox = document.querySelector(".calc-box");
const inputs = calcBox.querySelectorAll("input");
const forms = calcBox.querySelectorAll("form");

const radioFunctional = document.querySelectorAll('input[name="functional"]');
const radioStage = document.querySelectorAll('input[name="stage"]');
const radioAdaptive = document.querySelectorAll('input[name="adaptive"]');

const checkSlider = document.querySelector("#slider");
const checkVideo = document.querySelector("#video");
const checkAudio = document.querySelector("#audio");
const checkFeedback = document.querySelector("#feedback");
const checkCard = document.querySelector("#card");

const restartBtn = document.querySelector("#calc-restart");
const replayBtn = document.querySelector("#calc-replay");

let totalPrice = document.querySelector("#total-price");

let basePrice = 0;
const formatter = new Intl.NumberFormat('ru');

function restartForm() {
  for (let i = 0; i < forms.length; i++) {
    forms[i].classList.add("hidden");
  }
  for (let input of inputs) {
    if (input.checked) {
      input.checked = false;
    }
  }
  forms[0].classList.remove("hidden");
  totalPrice.innerHTML = formatter.format(basePrice);
};
restartForm();

function nextForm(radio) {
  let parent = radio[0].parentNode.parentNode;
  let next = parent.nextSibling.nextSibling;
  parent.classList.add("hidden");
  next.classList.remove("hidden");
};

function prevForm() {
  replayBtn.addEventListener("click", function () {
    for (let i = 0; i < forms.length; i++) {
      if (forms[i].className !== "calc hidden") {
        prev = forms[i - 1];
        if (i >= 1) {
          forms[i].classList.add("hidden");
          prev.classList.remove("hidden");
        }
      }
    }
  });
};
prevForm();


function calculate() {
  let price = 0;

  function recap() {
    totalPrice.innerHTML = formatter.format(price);
  };

  function radio_functional() {
    for (let i = 0; i < radioFunctional.length; i++) {
      if (radioFunctional[i].checked) {
        price = parseInt(radioFunctional[i].value);
        recap();
        nextForm(radioFunctional);
      }
    }
  };
  radio_functional();

  function radio_stage() {
    for (let i = 0; i < radioStage.length; i++) {
      if (radioStage[i].checked) {
        price = price * parseFloat(radioStage[i].value);
        recap();
        nextForm(radioStage);
      }
    }
  };
  radio_stage();

  function radio_adaptive() {
    for (let i = 0; i < radioAdaptive.length; i++) {
      if (radioAdaptive[i].checked) {
        price = price * parseFloat(radioAdaptive[i].value);
        recap();
        nextForm(radioAdaptive);
      }
    }
  };
  radio_adaptive();

  function check_options() {
    if (checkSlider.checked) {
      price = price + parseInt(checkSlider.value);
      recap();
    }
    if (checkVideo.checked) {
      price = price + parseInt(checkVideo.value);
      recap();
    }
    if (checkAudio.checked) {
      price = price + parseInt(checkAudio.value);
      recap();
    }
    if (checkFeedback.checked) {
      price = price + parseInt(checkFeedback.value);
      recap();
    }
    if (checkCard.checked) {
      price = price + parseInt(checkCard.value);
      recap();
    }
  }
  check_options();
};

for (let input of inputs) {
  input.addEventListener("input", function () {
    calculate();
  });
};

restartBtn.addEventListener("click", function () {
  restartForm();
});
