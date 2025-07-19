function validateForm() {
  const email = document.querySelector('input[name="email"]').value;
  const name = document.querySelector('input[name="name"]').value;
  if (!name || !email.includes("@")) {
    alert("Please enter valid name and email.");
    return false;
  }
  return true;
}
