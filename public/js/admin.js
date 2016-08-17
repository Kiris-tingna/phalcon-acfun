$(function () {
    var BaseSiteUrl = 'http://localhost/phalcon-acfun';

    var handelImage = function () {
        $('#ImgModel').modal("toggle");
        $.ajax({url: BaseSiteUrl+'/admin/selectImage', type: 'get'}).done(function (data) {
            $('.album').empty();
            data = JSON.parse(data);
            var img;
            var _ul = $('<ul>');
            var _li = $('<li>').addClass('pa-small-li');
            var _img = $('<img>').addClass('radius');
            var _imgwrapper = $('<div>').addClass('pa-small-img');

            $.each(data.data, function (index, img){
                var _wrapper = _imgwrapper.clone().attr('data-pid',img.id);
                var _temp = _wrapper.append(_img.clone().attr('src', img.url));
                _ul.append(_li.clone().append(_temp));
            });
            // console.log(_ul);
            $('.album').append(_ul);

            $('.pa-small-li').on('click', function (e) {
                e.preventDefault();// 阻止事件冒泡到form上
                $(this).addClass('active').siblings().removeClass('active');

            });

            $('.Js-confirm').on('click', function (e) {
                e.preventDefault();// 阻止事件冒泡到form上
                $('.pa-pic-input').val($(".pa-small-li.active").find('.pa-small-img').data('pid'));
                $('#ImgModel').modal("hide");
            });

        }).fail(function (err) {
            console.log(err);
        })
    }

    var handleCategory = function () {
        $.ajax({url:BaseSiteUrl+'/admin/selectMenu/0', type:"get"}).done(function (data) {
            $(".select").empty();
            data = JSON.parse(data);
            var _option = $('<option>');
            $.each(data.data, function (index, item) {
                var _temp = _option.clone().val(item.id).text(item.name);
                $(".select").append(_temp);
            });
        }).fail(function (err) {
            console.log(err);
        })
    }
    //事件处理
    $('#chooseImage').on('click', function (e) {
        e.preventDefault();// 阻止事件冒泡到form上
        handelImage();
    });
    if($('#chooseCate').length){
        handleCategory();
    }
})
