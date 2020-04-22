<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>cal</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>



<div class="container">
  <div class="row">
    <div class="col">

        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary" href="?f=cal01">그리드</a>
          <a class="btn btn-secondary" href="?f=cal02">백분율</a>
          <a class="btn btn-secondary" href="?f=cal03">비율</a>
        </div> 

    </div>
  </div>

<?php if($_GET['f']=='cal01'):?>
      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">max-width</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon2">columns</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
          </div>
        </div>

        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">Gutter</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon3">
          </div>
        </div>
       
      </div>


      <div class="row mt-3">
        레이아웃  Column width: 228 Gutter width: 2
      </div>



<?php elseif($_GET['f']=='cal02'):?>
  

      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">%는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">이다.</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">(은)는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">% 이다.</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">(은)는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">% 증가 or 감소다.</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">%는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <div class="input-group-append">
              <span class="input-group-text">증가 or 감소다.</span>
            </div>
          </div>
        </div>
      </div>




        

<?php elseif($_GET['f']=='cal03'):?>
  <div class="row">
    <div class="col">

        <blockquote class="blockquote text-center">
          <p class="mb-0">A : B = X : Y </p>
          <footer class="blockquote-footer">숫자 입력 후 빈자리 값을 구함.</footer>
        </blockquote>

        <form>
          <div class="form-group row text-center">
            <div class="col">
              <button type="button" class="btn btn-light ">16:9 = ?:Y</button>
              <button type="button" class="btn btn-light ">16:9 = X:?</button>
              <button type="button" class="btn btn-light ">4:3 = ?:Y</button>
              <button type="button" class="btn btn-light ">4:3 = X:?</button>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <input type="text" class="form-control" placeholder="A">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="B">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="X">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Y">
            </div>
          </div>
          
          <div class="form-group row text-center">
            <div class="col ">
              <button type="submit" class="btn btn-primary ">Submit</button>
              <button type="reset" class="btn btn-outline-secondary ">Reset</button>
            </div>
          </div>
        </form>


        
    </div>
  </div>
<?php endif;?>

</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>