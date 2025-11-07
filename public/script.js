// Handle form submission
function handleSubmit(event) {
  event.preventDefault();

  const donor = {
    name: document.getElementById("name").value,
    age: document.getElementById("age").value,
    blood: document.getElementById("blood").value,
    email: document.getElementById("email").value,
    phone: document.getElementById("phone").value,
    location: document.getElementById("location").value
  };

  // Save donor to local storage
  let donors = JSON.parse(localStorage.getItem("donors")) || [];
  donors.push(donor);
  localStorage.setItem("donors", JSON.stringify(donors));

  alert("Registration successful!");
  document.getElementById("donorForm").reset();
}

// Display donors on admin dashboard
window.onload = function () {
  const table = document.getElementById("donorTable");
  if (table) {
    const donors = JSON.parse(localStorage.getItem("donors")) || [];
    table.innerHTML = donors.map(d =>
      `<tr>
        <td>${d.name}</td>
        <td>${d.age}</td>
        <td>${d.blood}</td>
        <td>${d.email}</td>
        <td>${d.phone}</td>
        <td>${d.location}</td>
      </tr>`
    ).join("");
  }
};
