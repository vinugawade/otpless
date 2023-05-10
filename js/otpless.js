//Import OTPless Auth
function OTPlessScript() {
  const OTPlessAuthScript = document.getElementById("OTPless-Auth-Script");
  const script = document.createElement("script");
  script.src = "https://otpless.com/auth-new.js";
  script.async = true;
  script.defer = true;
  script.id = "OTPless-Auth-Script"
  !!!OTPlessAuthScript && document.body.appendChild(script);
}

function otpless(otplessUser) {
  alert(JSON.stringify(otplessUser));
  console.log(JSON.stringify(otplessUser));
}

window.addEventListener("load", () => {
  OTPlessScript();
});

if (document.readyState == "complete") {
  OTPlessScript();
}