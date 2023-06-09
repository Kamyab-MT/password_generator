const uppercaseCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const lowercaseCharacters = "abcdefghijklmnopqrstuvwxyz";
const numberCharacters = "0123456789";
const symbolCharacters = "!@#$%^&*()_+~`|}{[]\:;?><,./-=";

function generatePassword() {
  
  const passwordLength = document.getElementById("password-length").value;
  const includeUppercase = document.getElementById("include-uppercase").checked;
  const includeNumbers = document.getElementById("include-numbers").checked;
  const includeSymbols = document.getElementById("include-symbols").checked;

  let characterPool = lowercaseCharacters;
  if (includeUppercase) {
    characterPool += uppercaseCharacters;
  }
  if (includeNumbers) {
    characterPool += numberCharacters;
  }
  if (includeSymbols) {
    characterPool += symbolCharacters;
  }

  let password = "";
  for (let i = 0; i < passwordLength; i++) {
    const randomIndex = Math.floor(Math.random() * characterPool.length);
    password += characterPool[randomIndex];
  }

  document.getElementById("password-container").textContent = password;
}

document.getElementById("generate-password").addEventListener("click", generatePassword);

function copyToClipboard() {
  // Get the snackbar DIV

  var x = document.getElementById("snackbar");

  if(document.getElementById("password-container").textContent == "Click on the Generate Password")
    x.textContent = "Click on the Generate Password First !";
  else
  {
    x.textContent = "The Password has been Copied to Clipboard";
    navigator.clipboard.writeText(document.getElementById("password-container").textContent);
  }

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function openLogin() {
  document.getElementById("login_page").style.display = "block";
}

function closeLogin() {
  document.getElementById("login_page").style.display = "none";
}

document.getElementById("password-container").addEventListener("click", copyToClipboard);
document.getElementById("close_btn").addEventListener("click", closeLogin);
document.getElementById("open_btn").addEventListener("click", openLogin);