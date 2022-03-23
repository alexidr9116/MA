var SaleList = function () {
    var _initComponent = function () {

        new Choices($("#status-choice")[0], {
            searchEnabled: false
        });

        new Choices($("#category-choice")[0], {

            searchEnabled: true
        });


    }
    var _initEvent = function () {

    }
    var _applyFilter = function () {
        var data = {
            category: $("#category-choice").val(),
            status: $("#status-choice").val(),
            keywords: $("#keywords").val(),
        }
        $.ajax({
            url: '/sale-list',
            method: 'post',
            data,
            dataType: "html",
            success: function (res) {

                $(".project-list").html("<center><h5 class = 'my-5'>No data fetched</h5></center>");
                if (res.indexOf("card") != -1)
                    $(".project-list").html(res);

            },
            error: function (res) {
                $(".project-list").html("<center><h5 class = 'mt-5'>No data fetched</h5></center>");
                toastr.error('Not Load', 'Project List can not read');
            }

        });
    }
    return {
        init: function () {
            _initComponent();
            _initEvent();
            _applyFilter();
        }
    }
}();
