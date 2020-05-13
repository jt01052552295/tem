<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>이것저것 해봄 vol.1</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>



<div class="container ">
    <div class="row">
      <div class="col">

          <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-secondary <?php echo ($_GET['f']=='cal01')?'active':'';?>" href="?f=cal01">그리드</a>
            <a class="btn btn-secondary <?php echo ($_GET['f']=='cal02')?'active':'';?>" href="?f=cal02">백분율</a>
            <a class="btn btn-secondary <?php echo ($_GET['f']=='cal03')?'active':'';?>" href="?f=cal03">비율</a>
            <a class="btn btn-secondary <?php echo ($_GET['f']=='cal04')?'active':'';?>" href="?f=cal04">color picker</a>
          </div> 

      </div>
    </div>

<?php if($_GET['f']=='cal01' || $_GET['f']==''):?>

      <div class="row">
        <div class="col">

          <blockquote class="blockquote text-center">
            <p class="mb-0">빈칸 숫자로 채우고, 원하는 결과가 나오는지 확인</p>
            <footer class="blockquote-footer">빨간색이 안보이게끔</footer>
          </blockquote>

        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">max-width</span>
            </div>
            <input type="number" class="form-control" id="max_width" value="1200" placeholder="max-width" aria-label="max-width" aria-describedby="basic-addon1" onkeyup="javascript:cost_columnA();">
          </div>
        </div>

        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon2">Columns</span>
            </div>
            <input type="number" class="form-control" id="columns" placeholder="Columns" aria-label="Columns" aria-describedby="basic-addon2" onkeyup="javascript:cost_columnA();">
          </div>
        </div>

        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">Gutter</span>
            </div>
            <input type="number" class="form-control" id="gutter" placeholder="Gutter" aria-label="Gutter" aria-describedby="basic-addon3" onkeyup="javascript:cost_columnA();">
          </div>
        </div>

        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon4">Outer Gutter</span>
            </div>
            <input type="number" class="form-control" id="outer_gutter" placeholder="Outer Gutter" aria-label="Outer Gutter" aria-describedby="basic-addon4" onkeyup="javascript:cost_columnA();">
          </div>
        </div>
       
      </div>

      <style>
          #viewGrid {background-color: #dc3545;margin: 20px 0;text-align: center;min-height: 120px}
          #viewGrid:after {content: '';display: block;overflow: hidden;clear: both;}

          .outerMargin,
          .colBox,
          .colGutter {height: 120px;line-height: 120px;float: left;overflow: hidden;}

          .outerMargin {background-color: #ffc107}
          .colBox {background-color: #007bff}
          .colGutter {background-color: #6c757d}

      </style>
      <div class="row mt-3">
        <div class="col text-center">
          <h4 class="h4">Page width : <span id="pageWidth"></span></h4>
        </div>
      </div>
      <div id="viewGrid"></div>

      <script>


        function is_num(num){
          num = num.replace(/\s/gi, "");
          num=num?num:0;
          num = Math.round(num * 100) / 100;
          return num;
        }

        function cost_columnA(){
              var maxWidth =  is_num(document.getElementById('max_width').value);
              var columns =  is_num(document.getElementById('columns').value);
              var gutter =  is_num(document.getElementById('gutter').value);
              var outerGutter =  is_num(document.getElementById('outer_gutter').value);              
              var colwidth = 0;
              var pageWidth = 0;

              if(maxWidth>0 && columns>0){

                var blank1 = (columns - 1) * gutter;
                var blank2 = outerGutter*2;

                colwidth = Math.floor(  (maxWidth - ( blank1 + blank2 )) / columns  );

                // console.log('colwidth', colwidth)
                // console.log('gutter', gutter)
                // console.log('outerGutter', outerGutter)
                

                pageWidth = blank1 + blank2 + (colwidth*columns);
                document.getElementById("pageWidth").innerHTML = pageWidth+"px";


                document.getElementById("viewGrid").style.width = maxWidth+"px";

                  var tag = "";
                  $("#viewGrid").html('');
                  for(i=1; i<=columns; i++){
                    if(outerGutter>0 && i==1) tag += "<div class='outerMargin' style='width:"+outerGutter+"px'>"+outerGutter+"</div>";
                    tag += "<div class='colBox' style='width:"+colwidth+"px'>"+colwidth+"</div>";
                    if(gutter && i<columns ) tag += "<div class='colGutter' style='width:"+gutter+"px'>"+gutter+"</div>";
                    if(outerGutter>0 && i==columns) tag += "<div class='outerMargin' style='width:"+outerGutter+"px'>"+outerGutter+"</div>";
                  }
                  $("#viewGrid").append(tag);
              }


          }

      </script>



<?php elseif($_GET['f']=='cal02'):?>
  

      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueA1" class="form-control" onkeyup="javascript:cost_columnA();">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueA2" class="form-control" onkeyup="javascript:cost_columnA();">
            <div class="input-group-append">
              <span class="input-group-text">%는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueA3" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">이다.</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueB1" class="form-control" onkeyup="javascript:cost_columnB();">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueB2" class="form-control" onkeyup="javascript:cost_columnB();">
            <div class="input-group-append">
              <span class="input-group-text">(은)는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueB3" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">% 이다.</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueC1" class="form-control" onkeyup="javascript:cost_columnC();">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueC2" class="form-control" onkeyup="javascript:cost_columnC();">
            <div class="input-group-append">
              <span class="input-group-text">(은)는</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueC3" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">%다.</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueD1" class="form-control" onkeyup="javascript:cost_columnD();">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueD2" class="form-control" onkeyup="javascript:cost_columnD();">
            <div class="input-group-append">
              <span class="input-group-text">% 증가하면</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueD3" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">이다.</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueE1" class="form-control" onkeyup="javascript:cost_columnE();">
            <div class="input-group-append">
              <span class="input-group-text">에서</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueE2" class="form-control" onkeyup="javascript:cost_columnE();">
            <div class="input-group-append">
              <span class="input-group-text">% 감소하면</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group">
            <input type="text" id="valueE3" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">이다.</span>
            </div>
          </div>
        </div>
      </div>

        <script>
          function comma(str) {
            str = new String(str);
            _val = str.split('.');  
              _val[0].replace(/[^0-9]/gi,"");

              var pattern = /(-?[0-9]+)([0-9]{3})/;
              num = _val[0].replace(/,/g, ''); 
              while(pattern.test(num)) {
                num += '';
                num = num.replace(pattern,"$1,$2");
              }
              if(_val.length>1) {
                num = num+"."+_val[1];
              }
              
            return num;
          }

          //천단위 콤마제거 
          function unNumberFormat(num) 
          {
            return num.replace(/\,/g,""); 
          }

          
          function is_num(num){

            num = num.replace(/\s/gi, "");
            num=num?num:0;
            num = Math.round(num * 100) / 100;
            return num;
          }

          function cost_columnA(){
              var valueA1 =  is_num(unNumberFormat(document.getElementById('valueA1').value));
              var valueA2 =  is_num(unNumberFormat(document.getElementById('valueA2').value));
              var rs  = 0;
              if(valueA1>0 && valueA2>0){
                rs = valueA1 * valueA2 / 100;
                document.getElementById('valueA3').value = comma(rs);
              }
          }

          function cost_columnB(){
              var value1 =  is_num(unNumberFormat(document.getElementById('valueB1').value));
              var value2 =  is_num(unNumberFormat(document.getElementById('valueB2').value));
              var rs  = 0;
              if(value1>0 && value2>0){
                rs = value2 * 100 / value1 ;
                document.getElementById('valueB3').value = comma(rs);
              }
          }


          function cost_columnC(){
              var value1 =  is_num(unNumberFormat(document.getElementById('valueC1').value));
              var value2 =  is_num(unNumberFormat(document.getElementById('valueC2').value));
              var rs  = 0;
              if(value1>0 && value2>0){
                rs = (value2 - value1) / value1 * 100  ;
                document.getElementById('valueC3').value = comma(rs);
              }
          }

          function cost_columnD(){
              var value1 =  is_num(unNumberFormat(document.getElementById('valueD1').value));
              var value2 =  is_num(unNumberFormat(document.getElementById('valueD2').value));
              var rs  = 0;
              if(value1>0 && value2>0){
                rs = value1 + ( value1 * value2 / 100 ) ;
                document.getElementById('valueD3').value = comma(rs);
              }
          }


          function cost_columnE(){
              var value1 =  is_num(unNumberFormat(document.getElementById('valueE1').value));
              var value2 =  is_num(unNumberFormat(document.getElementById('valueE2').value));
              var rs  = 0;
              if(value1>0 && value2>0){
                rs = value1 - ( value1 * value2 / 100 ) ;
                document.getElementById('valueE3').value = comma(rs);
              }
          }

         
        </script>


        

<?php elseif($_GET['f']=='cal03'):?>
  <div class="row">
    <div class="col">

        <blockquote class="blockquote text-center">
          <p class="mb-0">A : B = X : Y </p>
          <footer class="blockquote-footer">A,B, X or Y 숫자 입력 후 x,y 둘중 하나 빈자리 값을 구함.</footer>
        </blockquote>

        <form name="frm" id="frm" method="post" onSubmit="return frm_check(this);">
          <div class="form-group row text-center">
            <div class="col">
              <button type="button" class="btn btn-light fillVal" data-a="16" data-b="9" data-x="" data-y="">16:9</button>
              <button type="button" class="btn btn-light fillVal" data-a="4" data-b="3"  data-x="" data-y="">4:3</button>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <input type="text" name="inputA" id="inputA" class="form-control" placeholder="A">
            </div>
            <div class="col">
              <input type="text" name="inputB" id="inputB" class="form-control" placeholder="B">
            </div>
            <div class="col">
              <input type="text" name="inputX" id="inputX" class="form-control" placeholder="X">
            </div>
            <div class="col">
              <input type="text" name="inputY" id="inputY" class="form-control" placeholder="Y">
            </div>
          </div>
          
          <div class="form-group row text-center">
            <div class="col ">
              <button type="submit" class="btn btn-primary">결과보기</button>
              <button type="reset" class="btn btn-outline-secondary ">Reset</button>
            </div>
          </div>
        </form>

        <script>
          $(document).ready(function(){
              $(".fillVal").click(function () {
                var a = $(this).attr('data-a')
                var b = $(this).attr('data-b')
                $("input[name=inputA]").val(a);
                $("input[name=inputB]").val(b);
                $("input[name=inputX]").val(null).focus();
                $("input[name=inputY]").val(null)

              }); 
          })
          
          function is_num(num){

            num = num.replace(/\s/gi, "");
            num=num?num:0;
            num = Math.round(num * 100) / 100;
            return num;
          }

          function frm_check(f){

            var a = is_num(f.inputA.value), 
                b = is_num(f.inputB.value), 
                x = is_num(f.inputX.value), 
                y = is_num(f.inputY.value);


            if(!a){alert("A값을 입력하세요.");f.inputA.focus();  return false;}
            if(!b){alert("B값을 입력하세요.");f.inputB.focus();  return false;}
            if(!x && !y){alert("X,Y 둘중 하나를 입력하세요.");f.inputX.focus();  return false;}


            if(!x){
              f.inputX.value = (a*y)/b; 
            } else if(!y){
              f.inputY.value = (b*x)/a; 
            }
              // var chk_radio = document.getElementsByName('ch_gender');
              // var sel_type = null;
              // for(var i=0;i<chk_radio.length;i++){
              //   if(chk_radio[i].checked == true){ 
              //     sel_type = chk_radio[i].value;
              //   }
              // }
              // if(sel_type == null){
              //   alert("참가자 성별을 선택하세요.");
              //   return false;
              // }

              return false;
          }

         
        </script>



        
    </div>
  </div>
<?php elseif($_GET['f']=='cal04'):?>
  <link href="./asset/css/colorpicker.css" rel="stylesheet">
  <script src="./asset/dev/w3color.js?t=<?php echo $ver_time?>"></script>
  <script src="./asset/dev/colorPicker.js?t=<?php echo $ver_time?>"></script>
  <div class="row">
    <div class="col">


      <div class="modalCon" id="getModalData-menu-colorPicker">
        <!-- preview element -->
        미리보기 : <div class="preview"></div>
        <!-- colorpicker element -->
        <div class="colorpicker">
            <canvas id="picker" width="300" height="300"></canvas>
            <div class="colorPaletteWrap">
              <div class="colorPaletteControl"><i class="far fa-hand-point-left" id="colorPaletteControlHandler"></i></div>
              <canvas id="colorPalette" width="30" height="300"></canvas>
          </div>

            <div class="controls">
                <div><label>R</label> <input type="text" id="rVal" /></div>
                <div><label>G</label> <input type="text" id="gVal" /></div>
                <div><label>B</label> <input type="text" id="bVal" /></div>
                <div><label>A</label> <input type="text" id="aVal" /></div>
                <div><label>RGB</label> <input type="text" id="rgbVal" /></div>
                <div><label>HEX</label> <input type="text" id="hexVal" /></div>
                <div><label>HSL</label> <input type="text" id="hslVal" /></div>
                <div><label>CMYK</label> <input type="text" id="cmykVal" /></div>
            </div>

            <div class="controls_panel">
                <div class="cPanel">
                  <label><span>R :</span><input type="number" id="r01" class="red01" value="255" /></label> 
                  <div class="slide_panel"><input type="range" id="r01v" class="red01" min="0" max="255" step="1" value="255"></div> 
                </div>
                <div class="cPanel">
                  <label><span>G :</span><input type="number" id="g01" class="green01" value="255" /></label> 
                  <div class="slide_panel"><input type="range" id="g01v" class="green01" min="0" max="255" step="1" value="255"></div> 
                </div>
                <div class="cPanel">
                  <label><span>B :</span><input type="number" id="b01" class="blue01" value="255" /></label> 
                  <div class="slide_panel"><input type="range" id="b01v" class="blue01" min="0" max="255" step="1" value="255"></div> 
                </div>
                <div class="cPanel">
                  <label><span>H :</span><input type="number" id="h01" class="hue01" value="360" /></label> 
                  <div class="slide_panel"><input type="range" id="h01v" class="hue01" min="0" max="360" step="1" value="360"></div> 
                </div>
                <div class="cPanel">
                  <label><span>S :</span><input type="number" id="s01" class="sat01" value="100" /></label> 
                  <div class="slide_panel"><input type="range" id="s01v" class="sat01" min="0" max="100" step="1" value="100"></div> 
                </div>
                <div class="cPanel">
                  <label><span>L :</span><input type="number" id="l01" class="light01" value="50" /></label> 
                  <div class="slide_panel"><input type="range" id="l01v" class="light01" min="0" max="100" step="1" value="100"></div> 
                </div>        

                <div class="cPanel">
                  <label><span>C :</span><input type="number" id="c01" class="cyan01" value="100" /></label> 
                  <div class="slide_panel"><input type="range" id="c01v" class="cyan01" min="0" max="100" step="1" value="100"></div> 
                </div>
                <div class="cPanel">
                  <label><span>M :</span><input type="number" id="m01" class="magenta01" value="100" /></label> 
                  <div class="slide_panel"><input type="range" id="m01v" class="magenta01" min="0" max="100" step="1" value="100"></div> 
                </div>
                <div class="cPanel">
                  <label><span>Y :</span><input type="number" id="y01" class="yellow01" value="100" /></label> 
                  <div class="slide_panel"><input type="range" id="y01v" class="yellow01" min="0" max="100" step="1" value="100"></div> 
                </div>
                <div class="cPanel">
                  <label><span>K :</span><input type="number" id="k01" class="kkk01" value="100" /></label> 
                  <div class="slide_panel"><input type="range" id="k01v" class="kkk01" min="0" max="100" step="1" value="100"></div> 
                </div>
            </div>
        </div>



      </div>   
      <script>
        var rs = colorPicker('rgb(0,0,0)');
      </script>


    </div>
  </div>
<?php endif;?>

</div>





</body>
</html>