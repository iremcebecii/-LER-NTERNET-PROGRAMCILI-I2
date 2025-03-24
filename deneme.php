<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim sayfası</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8"><form name="form"
action="mail_gonder2.php" method="post" class="row g-3 needs-validation"	novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">adınız</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">soyadınız</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">mail adresiniz</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
 
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom04" class="form-label">PROGRAMLAMA DİLİ SEÇİNİZ</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="PHP">PHP</option>
	  <option>C#</option>
      <option>Java</option>
	  <option>Python</option>
	  <option>Vue.Js</option>
	  <option>react</option>
    </select>
    </div>
  <div class="mb-12">
    <label for="validationTextarea" class="form-label">öneri</label>
    <textarea class="form-control" id="validationTextarea" placeholder="lütfen öneri yazınız." name="oneri" required></textarea>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="gonder" type="submit">giriş yap</button>
  </div>
</form></div>
<html>