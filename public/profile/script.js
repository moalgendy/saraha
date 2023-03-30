$(document).ready(function() {
	$("#emojionearea1").emojioneArea({
  	pickerPosition: "left",
    tonesStyle: "bullet"
  });
	$("#emojionearea2").emojioneArea({
  	pickerPosition: "bottom",
    tonesStyle: "radio"
  });
	$("#emojionearea3").emojioneArea({
  	pickerPosition: "left",
  	filtersPosition: "bottom",
    tonesStyle: "square"
  });
	$("#emojionearea4").emojioneArea({
  	pickerPosition: "bottom",
  	filtersPosition: "bottom",
    tonesStyle: "checkbox"
  });
	$("#emojionearea5").emojioneArea({
  	pickerPosition: "top",
  	filtersPosition: "bottom",
    tones: false,
    autocomplete: false,
    inline: true,
    hidePickerOnBlur: false
  });
});