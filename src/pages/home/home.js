// up to top button
window.onscroll = function () { showTopButton() };

function showTopButton() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("btnTop").style.display = "block";
  } else {
    document.getElementById("btnTop").style.display = "none";
  }
}

function upToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogo();
  switchIcons();
  switchIcons2();
})


// switchLogo
var logoLightHeader = "../../assets/img/telecall-logo6-light.png";
var logoDarkHeader = "../../assets/img/telecall-logo6-dark.png";

var logoLightFooter = "../../assets/img/telecall-logo6-light.png";
var logoDarkFooter = "../../assets/img/telecall-logo6-dark.png";

function switchLogo() {
  document.getElementById("logo-header").src = logoDarkHeader;
  let auxHeader = logoDarkHeader;
  logoDarkHeader = logoLightHeader;
  logoLightHeader = auxHeader;

  document.getElementById("logo-footer").src = logoDarkFooter;
  let auxFooter = logoDarkFooter;
  logoDarkFooter = logoLightFooter;
  logoLightFooter = auxFooter;
}

// switchIcons
var internetIconLightMode = "../../assets/icons/internet-icon-light.png";
var internetIconDarkMode = "../../assets/icons/internet-icon-dark.png";

var cpaasIconLightMode = "../../assets/icons/cpaas-icon-light.png";
var cpaasIconDarkMode = "../../assets/icons/cpaas-icon-dark.png";

var mobilityIconLightMode = "../../assets/icons/mobility-icon-light.png";
var mobilityIconDarkMode = "../../assets/icons/mobility-icon-dark.png";

var smartphoneIconLightMode = "../../assets/icons/smartphone-icon-light.png";
var smartphoneIconDarkMode = "../../assets/icons/smartphone-icon-dark.png";

var smartphoneIconLightMode = "../../assets/icons/smartphone-icon-light.png";
var smartphoneIconDarkMode = "../../assets/icons/smartphone-icon-dark.png";

var companyIconLightMode = "../../assets/icons/company-icon-light.png";
var companyIconDarkMode = "../../assets/icons/company-icon-dark.png";

var networkIconLightMode = "../../assets/icons/network-icon-light.png";
var networkIconDarkMode = "../../assets/icons/network-icon-dark.png";

var serviceIconLightMode = "../../assets/icons/service-icon-light.png";
var serviceIconDarkMode = "../../assets/icons/service-icon-dark.png";

function switchIcons() {
  document.getElementById("internetIcon").src = internetIconDarkMode;
  let auxinternet = internetIconDarkMode;
  internetIconDarkMode = internetIconLightMode;
  internetIconLightMode = auxinternet;

  document.getElementById("cpaasIcon").src = cpaasIconDarkMode;
  let auxcpaas = cpaasIconDarkMode;
  cpaasIconDarkMode = cpaasIconLightMode;
  cpaasIconLightMode = auxcpaas;

  document.getElementById("mobilityIcon").src = mobilityIconDarkMode;
  let auxmobility = mobilityIconDarkMode;
  mobilityIconDarkMode = mobilityIconLightMode;
  mobilityIconLightMode = auxmobility;
}

function switchIcons2() {
  document.getElementById("chekListIcon").src = checkListIconDarkMode;
  let auxcheckList = checkListIconDarkMode;
  checkListIconDarkMode = checkListIconLightMode;
  checkListIconLightMode = auxcheckList;

  document.getElementById("smartphoneIcon").src = smartphoneIconDarkMode;
  let auxsmartphone = smartphoneIconDarkMode;
  smartphoneIconDarkMode = smartphoneIconLightMode;
  smartphoneIconLightMode = auxsmartphone;

  document.getElementById("companyIcon").src = companyIconDarkMode;
  let auxcompany = companyIconDarkMode;
  companyIconDarkMode = companyIconLightMode;
  companyIconLightMode = auxcompany;

  document.getElementById("networkIcon").src = networkIconDarkMode;
  let auxnetwork = networkIconDarkMode;
  networkIconDarkMode = networkIconLightMode;
  networkIconLightMode = auxnetwork;

  document.getElementById("serviceIcon").src = serviceIconDarkMode;
  let auxservice = serviceIconDarkMode;
  serviceIconDarkMode = serviceIconLightMode;
  serviceIconLightMode = auxservice;
}