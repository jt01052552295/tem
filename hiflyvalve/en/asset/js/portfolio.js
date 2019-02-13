
$(document).ready(function(){

    var ki_url = '/infodu';
   
    $('#portfolio-more').click(function(e){
        e.preventDefault();

        var _page = parseInt($(this).attr('data-init'));
        var _cate = parseInt($(this).attr('data-cate'));
        var _total = parseInt($(this).attr('data-total'));



        if( _total < 8){

            var r = confirm("더이상 불러올 포트폴리오가 없습니다.\n포트폴리오 페이지로 이동하시겠습니까?");
            if(r == true ){
                location.href = ki_url+'/portfolio/portfolio.php';
                return false;
            } else  {
               return false; 
            }           
        }


        $.fn.callPortList(_page, _cate, 'more');
    });
    $('.tab_list').click(function(e){
        e.preventDefault()
        $('.tab_list').removeClass('selected')
        $(this).addClass('selected')

        var _cate = parseInt($(this).find('a').attr('data-cate'))
        var _page = 1;
        $.fn.callPortList(_page, _cate, 'all');
    });

    $.fn.callPortList = function(page, cate, act){
        var ing = "";
        if(ing == ""){
            var _page = parseInt(page);
            var _cate = parseInt(cate);
            var _act = act;

            if(_page >= 4){
                location.href = ki_url+'/portfolio/portfolio.php';
                return false;
            }

            var frmURL  = ki_url+'/portfolio.ajax.php?page='+_page+'&cate='+_cate;
            //console.log(frmURL)
            $.ajax({
                url: frmURL,
                type: 'GET',
                dataType: 'html',
                beforeSend: function(res) {
                },
                success: function (res) {
                    if (res){
                        if(_act=='more'){
                            $('#portfolio-list').append(res)
                            _page++;
                            $('#portfolio-more').attr('data-init', _page)
                        } else {
                            $('#portfolio-list').html(res)
                            $('#portfolio-more').attr('data-init', 2)
                            $('#portfolio-more').attr('data-cate', _cate)

                            var n = $( ".gall_li" ).attr('data-total');
                            $('#portfolio-more').attr('data-total', n)
                        }

                        

                        


                        ing = '';
                    }
                },
                error: function (res){
                    alert(res);
                    ing = '';
                }
            });
            ing = "ing";
        } else {
            alert('처리중 입니다.');
            return false;
        }

    };



    $('.tab_list2').click(function(e){
        e.preventDefault()
        $('.tab_list2').removeClass('selected')
        $(this).addClass('selected')

        var _cate = parseInt($(this).find('a').attr('data-cate'))
        var _page = 1;
        $.fn.callSubPortList(_page, _cate, 'all');
    });



    $.fn.callSubPortList = function(page, cate, act){
        var ing = "";
        if(ing == ""){
            var _page = parseInt(page);
            var _cate = parseInt(cate);
            var _act = act;

            var frmURL  = ki_url+'/portfolio.ajax.php?page='+_page+'&cate='+_cate+'&sub=list';
            //console.log(frmURL)
            $.ajax({
                url: frmURL,
                type: 'GET',
                dataType: 'html',
                beforeSend: function(res) {
                },
                success: function (res) {
                    if (res){
                        if(_act=='more'){
                            
                        } else {
                            $('#portfolio-list').html(res)
                        }
                        ing = '';
                    }
                },
                error: function (res){
                    alert(res);
                    ing = '';
                }
            });
            ing = "ing";
        } else {
            alert('처리중 입니다.');
            return false;
        }

    };

   

});