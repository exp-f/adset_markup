import './styles/main.scss';


require('./scripts/helpers');

const setCookie = (name, value, options) => {
  options = options || {};

  let expires = options.expires;

  if (typeof expires === "number" && expires) {
    let d = new Date();
    d.setTime(d.getTime() + expires * 1000);
    expires = options.expires = d;
  }
  if (expires && expires.toUTCString) {
    options.expires = expires.toUTCString();
  }

  value = encodeURIComponent(value);

  let updatedCookie = name + "=" + value;

  for (let propName in options) {
    if (!options.hasOwnProperty(propName)) continue;
    updatedCookie += "; " + propName;
    let propValue = options[propName];
    if (propValue !== true) {
      updatedCookie += "=" + propValue;
    }
  }
  document.cookie = updatedCookie;
};

window.addEventListener('load', () => {
  document.body.classList.remove('preload');
  let bgs = document.querySelectorAll('.bg_item'),
    animates = document.querySelectorAll('.animate');
  bgs.forEach(t => {
    let k = parseFloat(t.getAttribute('data-parallax'));
    let d = t.getBoundingClientRect();
    t.style.transform = `translateY(${d.top * 0.2}px)`;
  });
  window.addEventListener('scroll', (e) => {
    checkAnim();
    if (window.scrollY > 100) {
      document.querySelector(window.innerWidth > 1024 ? '.hdr--desktop' : '.hdr--mobile').classList.add('scrolled');
    } else {
      document.querySelector(window.innerWidth > 1024 ? '.hdr--desktop' : '.hdr--mobile').classList.remove('scrolled');
    }
    bgs.forEach(t => {
      let k = parseFloat(t.getAttribute('data-parallax'));
      let d = t.getBoundingClientRect();
      t.style.transform = `translateY(${d.top * 0.2}px)`;
    });
  });
  const checkAnim = () => {
    animates.forEach(a => {
      let d = a.getBoundingClientRect();
      if (d.top < window.innerHeight * 0.7 && !a.classList.contains('show')) {
        console.log('want to show');
        a.classList.add('show');
      }
    });
  };
  checkAnim();
});

let parallax = [];

document.addEventListener('DOMContentLoaded', () => {
  let errorTimeout;
  document.querySelectorAll('.request input[type="text"]').on('input', (e) => {
    if (!e.target.value) {
      e.target.parentElement.classList.remove('valid');
    } else {
      e.target.parentElement.classList.add('valid');
    }
  });
  document.querySelectorAll('.request_form').on('submit', (e) => {
    // check values
    e.preventDefault();
    let inputs = e.target.querySelectorAll('input[type="text"]'),
      hasErrors = false;
    inputs.forEach(t => {
      if (hasErrors) return;
      if (!t.value) {
        hasErrors = true;
      }
    });
    if (!e.target.querySelector('input[type="checkbox"]:checked')) hasErrors = true;
    if (hasErrors) {
      if (errorTimeout) clearTimeout(errorTimeout);
      errorTimeout = setTimeout(() => {
        e.target.querySelector('.request_error').classList.remove('show');
      }, 1000);
      return e.target.querySelector('.request_error').classList.add('show')
    }
    return alert('Форма отправлена');
  });

  document.querySelectorAll('[data-open-request]').on('click', () => {
    document.body.style.position = 'fixed';
    document.querySelector('.request').classList.add('open');
  });
  document.querySelectorAll('.hdr_burger').on(['click', 'touch'], () => {
    console.log('working');
    document.body.style.position = 'fixed';
    document.querySelector('.nav').classList.add('open');
  });
  document.querySelectorAll('.request_close').on('click', () => {
    document.body.style.position = '';
    document.querySelector('.request').classList.remove('open');
  });
  document.querySelectorAll('.nav_close').on('click', () => {
    document.body.style.position = '';
    document.querySelector('.nav').classList.remove('open');
  });

  if (window.innerWidth < 480) {
    let companyL = document.querySelector('input[name="company_name"]').parentElement;
    let lastNameL = document.querySelector('input[name="last_name"]').parentElement;
    document.querySelector('.request_row:nth-of-type(1)').appendChild(lastNameL);
    document.querySelector('.request_row:nth-of-type(2)').insertBefore(companyL, document.querySelector('.request_row:nth-of-type(2) .request_item:first-child'));
  }
  document.querySelectorAll('.hdr_link, a.nav_item').on('click', e => {
    e.preventDefault();
    let link = e.target.href.replace('#', '').split('/').pop();
    let t = document.querySelector(`[rel="${link}"]`).getBoundingClientRect();
    if (e.target.matches('.nav_item')) {
      document.body.style.position = '';
      document.querySelector('.nav').classList.remove('open');
    }
    window.scrollTo({
      top: t.top,
      left: 0,
      behavior: 'smooth'
    });
  });
  document.querySelectorAll('.cookie .btn').on('click', (e) => {
    document.querySelector('.cookie').classList.remove('show');
    setCookie('agree_cookie', '1', {
      expires: 24 * 60 * 60 * 60
    })
  })
});