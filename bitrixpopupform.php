<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
var myModal = document.getElementById('exampleModal')
var myInput = document.getElementById('popupButton')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

</script> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name = "popupButton">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Форма обращения</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
  <div id="closeablecard" class="card">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
  </svg>
    <div class="card-body">
      <h5 class="card-title"> <b>Заполните заявку на консультацию</b></h5>
      <h6><p class="card-text">
        Наш специалист свяжется с вами
    </br></h6>
  <div class="container-fluid">
  <div class="row g-2">
    <div class="col-sm-6">
      <div class="card">
      <input type="text" class="form-control bg-light text-dark mw-100" placeholder="Имя" aria-label="Имя" aria-describedby="basic-addon1" style="border: none;">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
      <input type="text" class="form-control bg-light text-dark mw-100" placeholder="Телефон" aria-label="Телефон" aria-describedby="basic-addon1" style="border: none;">
      </div>
    </div>
    <div class="col-md-10">
      <textarea class="form-control bg-light text-dark mw-100" placeholder="Напишите какой у Вас вопрос?" aria-label="Напишите какой у Вас вопрос?" aria-describedby="inputGroup-sizing-default" style="resize: none; border: none;"></textarea>
    </div>
  </div>
  </div>
  <br>
  <div class="row g-2">
  <div class="col-sm-8">
  <div class="card">
  <button type="button" class="btn btn-dark">Получить консультацию</button>
  </div>
  </div>
  <div class="col-sm-4" style="float: right;">
  <div class="card" style="border: none">
  <h6 style="font-size: 11px;"><a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я соглашаюсь </a>на обработку персональных данных</h6>
  </div>
  </div>
  </div>
    </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
