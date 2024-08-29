const checkBoxes = $('.checkbox');
const submitButton = $('#submit');
const errorMessage = 'いずれか1つ以上を選択してください。';
 
checkBoxes.on('change', (e) => {
  const isCheckedCount = checkBoxes.filter(':checked');
  isCheckedCount.length > 0
    ? checkBoxes.attr('required', false)
    : checkBoxes.attr('required', true);
});
 
submitButton.on('click', () => {  
  checkBoxes.on('invalid', (e) => {
    const isInvalid = e.target.validity.valueMissing;
    isInvalid
      ? e.target.setCustomValidity(errorMessage)
      : e.target.setCustomValidity('');
  });
});