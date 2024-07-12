const country_list = document.querySelectorAll(".country-list");
const sity_list = document.querySelectorAll('.sity-list')
const service_list = document.querySelectorAll('.service-list')
const btn_country = document.querySelectorAll(".country-btn");
const btn_sity = document.querySelectorAll(".sity-btn");
const btn_service = document.querySelectorAll(".service-btn");
const menu_country = document.querySelectorAll(".country-menu");
const menu_sity = document.querySelectorAll(".sity-menu");
const menu_service = document.querySelectorAll(".service-menu");
const array_service = document.querySelectorAll(".array__menu--service")
const status_btn = document.querySelector('.current-status')
const status_list = document.querySelectorAll('.status-list')
const status_menu = document.querySelector('.status-menu')
const currentstatus = document.querySelector('.status')


btn_country.forEach((btn_country) => {
  btn_country.addEventListener("click", () => {
    document.querySelectorAll('.array__menu--country').forEach((array) => {
      array.classList.toggle('active')
    })
    menu_country.forEach((menu) => {
      menu.classList.toggle("active");
    })
  });
})

btn_sity.forEach((btn_sity) => {
  btn_sity.addEventListener("click", () => {
    document.querySelectorAll('.array__menu--sity').forEach((array) => {
        array.classList.toggle('active')
      })
    menu_sity.forEach((menu) => {
      menu.classList.toggle("active");
  })
  });
})


btn_service.forEach((service) => {
  service.addEventListener('click', (event) => {
    const data = parseInt(event.target.dataset.num)
    array_service.forEach((array) => {
      let array_num = array.getAttribute('data-num')
      if (data === parseInt(array_num)) {
        num_array = array
      }
    })
    menu_service.forEach((menu) => {
      let num = menu.getAttribute('data-num')
      if (data === parseInt(num)) {
        menu.classList.toggle('active')
        document.querySelector(`#${num_array.getAttribute('id')}`).classList.toggle('active')
      }
    })
  })
})

country_list.forEach((country) => {
  country.addEventListener("click", () => {
    document.querySelectorAll(".country").forEach((currentCountry) => currentCountry.innerHTML = country.textContent)
    menu_country.forEach((menu) => menu.classList.remove("active"))
    document.querySelectorAll('.array__menu--country').forEach((array) => array.classList.remove('active'))
  });
});

sity_list.forEach((sity) => {
    sity.addEventListener("click", () => {
    document.querySelectorAll(".sity").forEach((currentSity) => currentSity.innerHTML = sity.textContent)
    menu_sity.forEach((menu) => menu.classList.remove("active"))
    document.querySelectorAll('.array__menu--sity').forEach((array) => array.classList.remove('active'))
  });
});

service_list.forEach((service) => {
  service.addEventListener('click', (event) => {
    const data = parseInt(event.target.dataset.num)
    menu_service.forEach((menu) => {
      if(parseInt(menu.getAttribute('data-num')) === data) {
        btn_service.forEach((service_btn) => {
          if(parseInt(service_btn.getAttribute('data-num')) === data) {
            document.querySelectorAll('.service__name').forEach((name) => {
              if(parseInt(name.getAttribute('data-num')) === data) {
                array_service.forEach((array) => {
                  if(parseInt(array.getAttribute('data-num')) === data) {
                    document.querySelector(`#${name.getAttribute('id')}`).innerHTML = service.textContent
                    menu.classList.remove('active')
                    array.classList.remove('active')
                  }
                })
              }
            })
          }
        })
      }
    })
  })
})

status_btn.addEventListener('click', () => {
  status_menu.classList.toggle('active')
  document.querySelector('.array__menu--status').classList.toggle('active')
})

status_list.forEach((new_status) => {
    new_status.addEventListener('click', () => {
    currentstatus.innerHTML = new_status.textContent
    status_menu.classList.remove('active')
    document.querySelector('.array__menu--status').classList.remove('active')
    if (new_status.getAttribute('id') == "green") {
      currentstatus.classList.add('green')
      currentstatus.classList.remove('yellow')
      currentstatus.classList.remove('red')
    } 
    if (new_status.getAttribute('id') == "yellow") {
      currentstatus.classList.add('yellow')
      currentstatus.classList.remove('green')
      currentstatus.classList.remove('red')
    } 
    if (new_status.getAttribute('id') == "red") {
      currentstatus.classList.add('red')
      currentstatus.classList.remove('green')
      currentstatus.classList.remove('yellow')
    }
  })
})

document.querySelector('.mobile--current-status').addEventListener('click', () => {
  document.querySelector('.mobile--status-menu').classList.toggle('active')
  document.querySelector('.mobile--array').classList.toggle('active')
}) 

status_list.forEach((new_status) => {
  new_status.addEventListener('click', () => {
  document.querySelector('.mobile--status').innerHTML = new_status.textContent
  document.querySelector('.mobile--status-menu').classList.remove('active')
  document.querySelector('.mobile--array').classList.remove('active')
  if (new_status.getAttribute('id') == "green") {
    document.querySelector('.mobile--status').classList.add('green')
    document.querySelector('.mobile--status').classList.remove('yellow')
    document.querySelector('.mobile--status').classList.remove('red')
  } 
  if (new_status.getAttribute('id') == "yellow") {
    document.querySelector('.mobile--status').classList.add('yellow')
    document.querySelector('.mobile--status').classList.remove('green')
    document.querySelector('.mobile--status').classList.remove('red')
  } 
  if (new_status.getAttribute('id') == "red") {
    document.querySelector('.mobile--status').classList.add('red')
    document.querySelector('.mobile--status').classList.remove('green')
    document.querySelector('.mobile--status').classList.remove('yellow')
  }
})
})
