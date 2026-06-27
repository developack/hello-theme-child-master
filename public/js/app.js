window.onload = () => {
  const theme = localStorage.getItem("theme")
  const activeItem = document.querySelector(`#themeDropDown [data-theme="${theme}"]`)
  activeItem.classList.add("active-theme")
  const activeTheme = document.getElementById("activeTheme")
  const themeDropDown = document.getElementById("themeDropDown")

  activeTheme.addEventListener("click", function (e) {
    e.stopPropagation()
    themeDropDown.classList.toggle("opacity-0")
  })

  document.addEventListener("click", function () {
      themeDropDown.classList.add("opacity-0")
  })

  themeDropDown.addEventListener("click", function (e) {
      e.stopPropagation()
  })
}

const menuToggle = () => {
    const menu = document.getElementById("sideMenu")
    const overlay = document.getElementById("overlay")
    menu.classList.toggle("translate-x-full")
    overlay.classList.toggle("opacity-0")
    overlay.classList.toggle("invisible")
}

const setTheme = (item) => {
  const html = document.documentElement
  const theme = item.dataset.theme    
  const activeItem = document.querySelector("#themeDropDown .active-theme")

  html.classList.remove("dark")

  if (theme === "dark") {
      html.classList.add("dark")
  }

  if (
      theme === "system" &&
      window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
      html.classList.add("dark")
  }

  localStorage.setItem("theme", theme)

  activeItem.classList.remove("active-theme")
  item.classList.add("active-theme")

  themeDropDown.classList.add("opacity-0")
}