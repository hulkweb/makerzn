var isRequest = false;

function sendCode(route, btn, duration = 1, email = null) {
  if (isRequest) {
    return;
  }
  const btnText = btn.innerHTML;
  btn.innerHTML = '<div class="spinner-border text-dark" role="status" style="width: 20px;height: 20px;border-width: 2px;"></div>';
  isRequest = true;
  $.ajax({
    'type': 'post',
    'url': route,
    'headers': {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
      email: email
    },
    success: function (data) {
      isRequest = false;
      btn.innerHTML = btnText;
      if (data.success == true) {
        startTimer(btn, duration)
        iziToast.success({ message: data.msg, position: "center" });
      }
      else {
        iziToast.error({ message: data.msg, position: "center" });
      }
    },
    error: function () {
      btn.innerHTML = btnText;
      isRequest = false;
    }
  });
}

function startTimer(buttonElement, countdownDuration = 1) {
  countdownDuration = countdownDuration * 60;
  const currentTime = new Date().getTime();
  const storedEndTime = Cookies.get(`timer_${buttonElement.id}`);

  if (storedEndTime && currentTime < storedEndTime) {
    const remainingTime = Math.max(0, storedEndTime - currentTime);
    buttonElement.disabled = true;
    updateButtonText(buttonElement, Math.floor(remainingTime / 1000));

    const interval = setInterval(() => {
      const storedEndTime = Cookies.get(`timer_${buttonElement.id}`);
      if (!storedEndTime || currentTime >= storedEndTime) {
        clearInterval(interval);
        buttonElement.disabled = false;
        updateButtonText(buttonElement, "Send");
        return;
      }

      const remainingTime = Math.max(0, storedEndTime - new Date().getTime());
      updateButtonText(buttonElement, Math.floor(remainingTime / 1000));

      if (remainingTime <= 0) {
        clearInterval(interval);
        buttonElement.disabled = false;
        updateButtonText(buttonElement, "Send");
        Cookies.remove(`timer_${buttonElement.id}`);
      }
    }, 1000);
  } else {
    startNewTimer(buttonElement, countdownDuration);
  }
}

function startNewTimer(buttonElement, countdownDuration) {
  const currentTime = new Date().getTime();
  const endTime = currentTime + countdownDuration * 1000;

  Cookies.set(`timer_${buttonElement.id}`, endTime, { expires: new Date(endTime) });

  buttonElement.disabled = true;
  updateButtonText(buttonElement, countdownDuration);

  const interval = setInterval(() => {
    const storedEndTime = Cookies.get(`timer_${buttonElement.id}`);
    if (!storedEndTime) {
      clearInterval(interval);
      return;
    }

    const remainingTime = Math.max(0, storedEndTime - new Date().getTime());
    updateButtonText(buttonElement, Math.floor(remainingTime / 1000));

    if (remainingTime <= 0) {
      clearInterval(interval);
      buttonElement.disabled = false;
      updateButtonText(buttonElement, "Send");
      Cookies.remove(`timer_${buttonElement.id}`);
    }
  }, 1000);
}



function updateButtonText(buttonElement, text) {
  if (typeof text === "number" && text <= 0) {
    buttonElement.disabled = false;
    buttonElement.textContent = "Send";
  } else {
    buttonElement.textContent = `${text}`;
  }
}


document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll("button");

  buttons.forEach((button) => {
    const storedEndTime = Cookies.get(`timer_${button.id}`);
    if (storedEndTime) {
      startTimer(button);
    }
  });
});


$('.copyd').click(function () {
  this.select()
  document.execCommand("copy");
  iziToast.success({ message: 'Copied', position: "center" });
});

$(document).on('click', '.copyd_num', function () {
  $value = $(this).val();
  $value = $value.replace(/[^0-9.,]/g, '');
  navigator.clipboard.writeText($value);

  iziToast.success({ message: 'Copied', position: "center" });
});

function switchI(input) {
  var maxLength = 1;
  var currentValue = input.value;

  if (currentValue.length > maxLength) {
    input.value = currentValue.slice(0, maxLength);
  }

  var nextInputId = parseInt(input.id) + 1;
  if (currentValue.length === maxLength) {
    if (nextInputId <= 6) {
      $('#' + nextInputId).focus();
    }
  }
  updateCodeField();
}

function updateCodeField() {
  var concatenatedValue = '';
  for (var i = 1; i <= 6; i++) {
    concatenatedValue += $('#' + i).val();
  }
  $('#code').val(concatenatedValue);
}