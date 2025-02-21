const menuLateral = document.querySelector('.menu-lateral');
  const abas = document.querySelectorAll('.aba');
  const forms = document.querySelectorAll('form');
  
  menuLateral.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') {
      const abaId = e.target.getAttribute('href').replace('#', '');
      const aba = document.getElementById(abaId);
      abas.forEach((aba) => aba.classList.remove('active'));
      aba.classList.add('active');
      e.target.classList.add('active');
      e.target.parentNode.classList.add('active');
    }
  });
  
  forms.forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      fetch('config.php', {
        method: 'POST',
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => console.log(data))
        .catch((error) => console.error(error));
    });
  });
  
  // glassmorphism
  const glassmorphism = document.querySelector('.glassmorphism');
  glassmorphism.addEventListener('mouseover', () => {
    glassmorphism.style.background = 'linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5))';
    glassmorphism.style.borderRadius = '10px';
    glassmorphism.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
  });
  
  glassmorphism.addEventListener('mouseout', () => {
    glassmorphism.style.background = '';
    glassmorphism.style.borderRadius = '';
    glassmorphism.style.boxShadow = '';
  });