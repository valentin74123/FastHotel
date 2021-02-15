const toggleMin = document.querySelector(`#lower`);
const toggleMax = document.querySelector(`#higher`);

const costMin = document.querySelector(`#min-cost`);
const costMax = document.querySelector(`#max-cost`);


toggleMin.addEventListener(`mousemove`, function(){
  let value = Number(toggleMin.value);
  costMin.value = value;
});

toggleMax.addEventListener(`mousemove`, function(){
  let value = Number(toggleMax.value);
  costMax.value = value;
});
