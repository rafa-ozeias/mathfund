// logout.js
document.getElementById('logout_btn').addEventListener('click', function() {
    // Aqui você pode adicionar o código para limpar dados do usuário, se necessário.
    // Por exemplo, removendo tokens de autenticação armazenados no localStorage ou cookies.
    localStorage.removeItem('authToken'); // Exemplo de remoção de token armazenado

    // Redireciona para a página de login
    window.location.href = '../index.php';
});
