<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/validatorLogin.js"></script>
  <script>
    validator({
          addres:'#form-login',
             ErrorMessage:'.form-message',
             relus : [
                validator.isName('#name'),
                validator.isEmail('#email'),
                validator.isUsername('#username'),
                validator.isPassword('#password',6,12),
                validator.isPassword2('#password2',6,12),
             ]
        })
  </script>
	</body>
</html>