var input_key = '';

$(function () {
    //回车事件
    $("#txtKeywords").bind("keyup", function (event) {
        var e = event || window.event;
        if (e && e.keyCode === 13 && $('.header-search-list li.active').index() === -1 &&
            $.trim($(this).val()) !== '') {
            newsearch($(this).data("isnew"));
        }
    });
    $("#txtKeywords").bind("input propertychange", SearchInputChange);
    $("#txtKeywords").focus(function () {
        $(this).prop('placeholder', '');
        if ($.trim($(this).val()) === "") {
            defaultSearch();
        } else {
            SearchInputChange();
        }
    }).blur(function () {
        $(this).prop('placeholder', $(this).data('default'));
    });
    $(document.body).click(function () {
        var $active = document.activeElement;
        if ($active.nodeName !== 'INPUT' && $active.id !== 'txtKeywords') {
            $(".header-search .header-search-list").hide();
        }
    });
});

function getuserinfo(self) {
    var isload = $(self).data("isload");
    if (isload === 0) {
        $.get("/dm5.ashx", { action: "getuserinfo", t: new Date().getTime() }, function (data) {
                var result = JSON.parse(data);
                if (result && result["isSuccess"]) {
                    if (result["isVip"]) {
                        $(".hover-user .subtitle").html("到期：" + (result["expireTime"] || "") +
                            "<a href=\"/vipopen/\" class=\"right\" target=\"_blank\">VIP续费</a>");
                    } else {
                        $(".hover-user .subtitle").html("<a href=\"/vipopen/\" class=\"right\" target=\"_blank\">开通VIP</a>");
                    }
                    $(".hover-user .line:eq(0) span").text((result["mangaCoin"] || 0));
                    $(".hover-user .line:eq(1) span").text((result["giftCoin"] || 0));
                    $(self).data("isload", 1);
                }
            });
    }
}


function newsearch(isnew) {
    var $keywords = $("#txtKeywords");
    $keywords.focusout();
    var title = $keywords.val();
    if (title === "") {
        title = $keywords.prop("placeholder");
    }
    if (isnew && isnew === 1) {
        window.location.href = "/search?title=" + encodeURIComponent(title) + "&language=1";
    } else {
        window.open("/search?title=" + encodeURIComponent(title) + "&language=1");
    }
}

// 默认搜索栏推荐显示
function defaultSearch() {
    //发送web请求
    $.ajax({
        url: '/searchcomic.ashx?d=' + new Date().getTime(),
        data: { t: 2 },
        error: function (msg) {
        },
        success: function (str) {
            $(".header-search .header-search-list").empty().html("<p class=\"title\">大家都在搜</p><ul>"
                + str + "</ul>").show();
            searcheventbind();
        }
    });
}

//搜索框文本改变
function SearchInputChange() {
    var keywords = $.trim($("#txtKeywords").val());

    if(input_key != keywords){
        input_key = keywords;
        if (keywords && keywords != "") {
            //发送web请求
            $.ajax({
                url: '/search.ashx?d=' + new Date().getTime(),
                data: { t: keywords, language: 1 },
                error: function (msg) {
                },
                success: function (str) {
                    if (str !== '') {
                        $(".header-search .header-search-list").empty().html("<ul>" + str + "</ul>").show();
                        searcheventbind();
                    }
                }
            });
        }
    }
}

function searcheventbind() {
    $('.header-search-list li').hover(function () {
        $('.header-search-list li').removeClass('active');
        $(this).addClass('active');
        if ($(this).parent().find('.type_2').length > 0) {
            $(this).parent().find('.type_2').hide();
            $(this).parent().find('.type_1').css('display', 'block');
            $(this).find('.type_2').show();
            $(this).find('.type_1').hide();
        }
    });
}