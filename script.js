function getRandomInt(min = 0, max = 999) {
    let num;
    if (max > min && min >= 0) {
      num = Math.floor( min + Math.random() * (max + 1 - min) );
    } else { num = null; }
    return num;
  }
  
  let toggler = document.querySelector('#toggler')
  
  toggler.addEventListener('click', () => {
    document.body.style.backgroundImage = 'url(/img/' + getRandomInt(1, 10) + '.jpg)'
    document.body.style.backgroundRepeat = 'no-repeat'
    document.body.style.backgroundSize = 'cover'
  })