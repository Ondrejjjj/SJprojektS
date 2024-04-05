function submitForm() {

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const city = document.getElementById('city').value;
    const adress = document.getElementById('adress').value;
    const country = document.getElementById('mesto').value;
    const souhlas = document.getElementById('suhlas').checked;

    if (name === '') {
      alert('Meno je povinné.');
      return;
    }
  
    if (email === '') {
      alert('Email je povinné.');
      return;
    } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
      alert('Email nemá platný formát.');
      return;
    }

    if (city === '') {
      alert('Mesto je povinné.');
      return;
    }
 
    if (adress === '') {
      alert('Adresa je povinná.');
      return;
    }

    if (country === '') {
      alert('Krajina je povinná.');
      return;
    }

    if (!souzhlas) {
      alert('Súhlas so spracovaním údajov je povinný.');
      return;
    }
 
  }

  document.querySelector('input[type="submit"]').addEventListener('click', submitForm);
  