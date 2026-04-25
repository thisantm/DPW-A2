document.addEventListener("DOMContentLoaded", function () {
  // Validação Formulário
  var form = document.getElementById("form-contato");
  if (form) {
    form.addEventListener("submit", function (e) {
      var nome = document.getElementById("nome").value.trim();
      var email = document.getElementById("email").value.trim();
      var mensagem = document.getElementById("mensagem").value.trim();
      if (!nome || !email || !mensagem) {
        alert("Por favor, preencha todos os campos.");
        e.preventDefault();
      } else if (!email.includes("@")) {
        alert("Digite um e-mail válido.");
        e.preventDefault();
      } else {
        alert("Mensagem enviada com sucesso!");
      }
    });
  }
});
