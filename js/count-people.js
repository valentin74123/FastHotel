const minusButton = document.querySelector(`.button-minus`);
const plusButton = document.querySelector(`.button-plus`);
const count = document.querySelector(`.count-of-people`);

console.log();

let value = Number(count.value);
const countMinus = function () {
  if (value <= 1) {
    return;
  }

  value = value - 1;
  count.value = value;
}

const countPlus = function () {
  value = value + 1;
  count.value = value;
}

minusButton.addEventListener(`click`, countMinus);
plusButton.addEventListener(`click`, countPlus);
