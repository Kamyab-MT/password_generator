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
