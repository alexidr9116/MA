var SaleRegister = function () {
    var _initComponent = function () {
        new Choices($("#group-choice")[0], {
            searchEnabled: false
        });
        new Choices($("#country-choice")[0], {
            searchEnabled: true
        });
        new Choices($("#type-choice")[0], {
            searchEnabled: true
        });

        new Choices($("#category-choice")[0], {

            searchEnabled: true
        });

        new Choices($("#revenue-choice")[0], {
            searchEnabled: true
        });
        new Choices($("#reason-choice")[0], {
            searchEnabled: false
        });

        flatpickr('.datepicker', {
            dateFormat: "Y-m-d"
        });


    }
    var _initEvent = function () {
        $(".save-btn").on("click", function (e) {

            var data = {
                surename: $("#surename").val().trim(),
                name: $("#name").val().trim(),
                userType: $("#group-choice").val(),
                company: $("#company").val().trim(),
                domain: $("#domain").val().trim(),
                mobile: $("#mobile").val().trim(),
                email: $("#email").val().trim(),
                country: $("#country-choice").val(),
                state: $("#state").val().trim(),
                zip: $("#zip").val().trim(),
                city: $("#city").val().trim(),
                address: $("#address").val().trim(),
                webType: $("#type-choice").val(),
                category: $("#category-choice").val(),
                domain: $("#domain").val().trim(),
                revenue: $("#revenue-choice").val(),
                responsive: $("#responsive").val(),
                operationStart: $("#operation-time").val(),
                reasonSale: $("#reason-choice").val(),
                desired: $("#desired_price").val(),
                pv: $("#pv_month").val(),
                sale: $("#sales_month_price").val(),
                cost: $("#cost_month_price").val(),
                status:$(e.target).attr('data-status'),
                description:$("#description").val().trim(),
                title:$("#title").val().trim(),
            }

            var invalidate = false;

            (Object.values(data).forEach((value) => {
                if (value.length == 0)
                    invalidate = true;
            }));
            if (invalidate) {
                toastr.error("You must fill all fields", "Error");
                return;
            }

            $.ajax({
                url: '/sale-register',
                method: 'post',
                data,
                dataType: "json",
                success: function (res) {

                    toastr.success('Saved', 'Your Purchase Domain is saved and status is '+data.status);


                },
                error: function (res) {
                    toastr.success('Not Saved', 'Your Purchase Domain is not saved, message is '+res.result);
                }

            });
        });
    }
    return {
        init: function () {
            _initComponent();
            _initEvent();
        }
    }
}();
