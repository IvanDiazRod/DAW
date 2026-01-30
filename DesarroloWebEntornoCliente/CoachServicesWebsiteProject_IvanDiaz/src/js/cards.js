document.addEventListener("DOMContentLoaded", () => {

  const PRICES = {
      
    personalCoaching: 50,
    
    leadership: {
    
    basic: 300,
    
    advanced: 600
  
  },
  
  motivational: {
    
    small: 500,
    
    medium: 900,
    
    large: 1500
  
  }

};

  const personalCheckbox = document.getElementById('personalCoaching');
  
  const personalHours = document.getElementById('personalHours');

  const leadershipSelect = document.getElementById('leadershipProgram');

  const eventSizeSelect = document.getElementById('eventSize');

  const totalPriceEl = document.getElementById('totalPrice');


  function calculateTotal() {

    let total = 0;


    if (personalCheckbox.checked) {

      const hours = Number(personalHours.value) || 0;

      total += hours * PRICES.personalCoaching;

    }

    if (leadershipSelect.value) {

      total += PRICES.leadership[leadershipSelect.value];

    }

  if (eventSizeSelect.value) {

    total += PRICES.motivational[eventSizeSelect.value];

  }

  totalPriceEl.textContent = `${total} $`;

}

[

  personalCheckbox,

  personalHours,

  leadershipSelect,

  eventSizeSelect

].forEach(el => el.addEventListener('input', calculateTotal));

personalHours.addEventListener('input', () => {

  if (personalHours.value < 0) personalHours.value = 0;

});

  const checkbox = document.getElementById("personalCoaching");

  const wrapper = document.getElementById("personalHoursWrapper");

  checkbox.addEventListener("change", () => {

    wrapper.classList.toggle("hidden", !checkbox.checked);

  });


  const checkbox2 = document.getElementById("chkLeadership");

  const select = document.getElementById("leadershipProgram");

  checkbox2.addEventListener("change", () => {

    if (checkbox2.checked) {

      select.classList.remove("hidden");

    } else {

      select.classList.add("hidden");

    }

  });

    const chkMotivation = document.getElementById("chkMotivation");
    
    const eventSize = document.getElementById("eventSize");

    chkMotivation.addEventListener("change", () => {
  
      eventSize.classList.toggle("hidden", !chkMotivation.checked);

    });

});