$(document).ready(function() {
    // variable declarations
    var name, ph_number, email, budgetAmount;
    var qa1, qa2, qa3, qa4, qa5, qa6, qa7;
    var short_traverse, data, check_inner_page = false,
        selected_package, ApiEndPoint, url, homepage_category, banner_heading, banner_background, cards, show_cards, card_limit_start, card_limit_end, card_location, feature_add_title, feature_add_href, feature_add_href_title, url_hash, card_category;

    window.sessionStorage.setItem("location_origin", location.origin);
    var location_origin = window.sessionStorage.getItem("location_origin", location.origin);
    // preload funcitons
    windowHight();
    // script for common device image starts
    // images for desktop
    var desktop_img = ["https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/L-T-Cover.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Tata-Cover.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/optimized/nest-bn.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/optimized/hiranandani-bn.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Fortune1.jpg",
        "../assets/images/banner/Nest_20Kanathur.jpg",
        "../assets/images/gvspl/GVSPl_20banner.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Suraj1.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/BSR-Cover.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Life1.jpg"
    ];
    // images for mobile
    var mobile_img = ["https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/L-T-Mob.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Tata-Mob.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/nest-mob-v2-1.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/akshaya-today-mob-v2-1.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Fortune-Mob1.jpg",
        "../assets/images/banner/Nest_20Mob.jpg",
        "../assets/images/gvspl/GVSPL_20Mob.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Suraj-Mob1.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/BSR-Mob.jpg",
        "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/banner/Nest-Life-Mob1.jpg"
    ];
    // links for slider
    var slider_link = ["../realestate/l-and-t-eden-park-siruseri.html",
        "../realestate/tata-santorini.html",
        "../realestate/nest-amaze-Sholinganallur.html",
        "../realestate/hiranandani-parks-oragadam.html",
        "../realestate/nest-fortune-choolaimedu.html",
        "../realestate/nest-njoy-villa-kanathur.html",
        "../realestate/gvspl-coimbatore.html",
        "../realestate/nest-suraj-mahalingapuram.html",
        "../realestate/BSR-Balaji-Enclave.html",
        "../realestate/nest-life-thiruvanmiyur.html"
    ];

    var window_width, devices, slider_id, alt, parts, astSegment;
    // debugger

    common_img();

    function common_img() {
        window_width = $(window).width(); //get device width

        if (window_width > 500) {
            devices = desktop_img;
        } else {
            devices = mobile_img;
        }

        slider_id = $(".carousel").attr("id"); //get id of the carousel
        for (var i = 0; i < devices.length; i++) {

            alt = devices[i];
            parts = alt.split('/');
            lastSegment = parts.pop() || parts.pop();

            $("#common-img").append('<div class="item"><a href ="' + slider_link[i] + '"><img src="' + devices[i] + '" alt="' + lastSegment + '" /></a></div>');
            $("#common-img-indicators").append('<li data-target="#' + slider_id + '" data-slide-to="' + i + '"></li>')
        }
        $("#common-img .item:first-child, #common-img-indicators li:first-child").addClass("active");

    }
    // script for common device image load end

    $(window).resize(function() {
        windowHight();
    });
    // window height
    function windowHight() {
        var window_height = $(window).height();
        // $(".banner-container").css("height", window_height);
        $(".toggle-page-container").css("height", window_height - 102);
        $(".careers-iframe").css("height", window_height - 115);
        $(".error-page").css("height", window_height);
    }

    // debugger
    if (location.hostname == "staging.getspini.com" || location.hostname == "localhost") {
        ApiEndPoint = 'https://sapi.getspini.com:8443';
        AccessKey = "fghjfghjertyuhjkbnmsdfghjqwert";

    } else {
        ApiEndPoint = 'https://api.getspini.com:8443';
        AccessKey = "OoO522HFEj2W8kOUYezrWSzp0t12sCQ8gOGeQh";
    }
    // ApiEndPoint = 'https://sapi.getspini.com:8443';

    $(".error-page").click(function() {
        $(this).attr("href", window.location.origin);
    });

    $('[data-toggle="tooltip"]').tooltip();

    // validate email
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (filter.test(sEmail)) {
            return true;
        } else {
            return false;
        }
    }
    // load header and footer
    if (index_page == true) {
        $("header").load("header1.5.html");
        $("footer").load("footer1.5.html");
    } else {
        $("header").load("../header1.5.html");
        $("footer").load("../footer1.5.html");
        $(".alerts_page").load("../alerts.html");
        // $(".contact-us").load("../contactus.html");
    }

    // spini-popup-scripts
    $(".spini-popup-ans span").click(function() {
        $(this).addClass("active-answer").siblings().removeClass("active-answer");
        $(this).children("input[type='radio']").prop('checked', true);
    });

    // navigation script
    $('.next').click(function() {
        // 
        $(this).parents(".toggle-page-container ul li").hide();
        $(this).parents(".toggle-page-container ul li").next().fadeIn();
        // var lastindex = $(this).parents(".toggle-page-container ul li").siblings();
        // var index = $(this).parents(".toggle-page-container ul li").index();
        // if(index == lastindex.length){  
        //   $(this).prop({disabled: true});
        //   $(this).parents(".toggle-page-container ul li").show();
        //  }
    });

    $('.back').click(function() {
        // 
        $(this).parents(".toggle-page-container ul li").hide();
        $(this).parents(".toggle-page-container ul li").prev().fadeIn();
        // var index = $(this).parents(".toggle-page-container ul li").index();
        // if(index == 0){  
        //   $(this).prop({disabled: true});
        //   $(this).parents(".toggle-page-container ul li").show();
        //  }
    });

    // open popup
    $(".spini-sep-services ul li a").click(function() {
        $(this).siblings(".toggle-page-container").fadeIn();
        $(".bg-overlay").show();
    });

    // close popup
    $(".toggle-page-container").append("<i class='toggle-page-container-close'>X<i/>");
    $(".toggle-page-container-close").click(function() {
        $(".toggle-page-container, .bg-overlay").fadeOut();
        if (index_page == "scratch_card_page") {
            location.reload();
        }
    });

    $(".submit").click(function() {

        var thiskey = $(this);
        var type = thiskey[0].value;

        if (categoryName == "Real Estate(Buying)") {
            if (type == "apartments") {
                // apartments_qa();
            }
        } else if (categoryName == "Interior/Renovation/Modular Kitchen") {
            if (type == "interior") {
                // interior_qa();
            }
        } else if (categoryName == "Insurance") {
            if (type == "insurance") {
                // insurance_qa();
            }
        } else if (categoryName == "Loans") {
            if (type == "personal_loan") {
                // personal_loan_qa();
            }
        }

        short_traverse = $(this).parents(".toggle-page-container ul li");
        contact_form();
        // alert(qa1+""+qa2+""+qa3+""+qa4+""+name+""+ph_number+""+email);
    });

    $(".submit_innerpage").click(function() {
        // debugger
        name = $("input[type='text']").val();
        ph_number = $("input[name='ph_number']").val();
        email = $("input[type='email']").val();
        cityName = $("select[name='city']").val();

        budgetAmount = $("input[name='budgetAmount']").val();
        if (categoryName == undefined) {
            categoryName = $("select[name='catagoryName']").val();
            selected_package = $("select[name='selected_package']").val();
        }

        // validation script
        if ([name, ph_number, email, cityName, budgetAmount].includes('')) {
            $(".error-mandatory").fadeIn();
        } else if (ph_number.length != 10) {
            $(".error-contact-ph_number").fadeIn()
        } else if (email != "" && email != undefined) {
            if (validateEmail(email)) {
                check_inner_page = true;
                success_contact_form();
            } else {
                $(".alert-danger").hide();
                $(".error-contact-email").fadeIn();
            }
        } else {
            check_inner_page = true;
            success_contact_form();
        }
    });

    // contact form script starts
    function contact_form() {

        name = short_traverse.find("input[type='text']").val();
        ph_number = short_traverse.find("input[type='number']").val();
        email = short_traverse.find("input[type='email']").val();
        // debugger
        if (index_page == 'scratch_card_page' || index_page == "spin_wheel_page") {
            cityName = "Chennai";
        } else {
            cityName = short_traverse.find("select[name='city']").val();
        }
        budgetAmount = short_traverse.find("input[name='budgetAmount']").val();
        // validation script
        if ([name, ph_number, email, cityName, budgetAmount].includes('')) {
            $(".error-mandatory").fadeIn();
        } else if (ph_number.length != 10) {
            $(".error-contact-ph_number").fadeIn();
        } else if (email != "" && email != undefined) {
            if (validateEmail(email)) {
                success_contact_form();
            } else {
                $(".alert-danger").hide();
                $(".error-contact-email").fadeIn();
            }
        } else {
            success_contact_form();
        }
    }
    // success contact form script
    function success_contact_form() {
        // if (check_inner_page == false) {
        //   senddata();
        // }else{
        //   senddata_for_internal_page();
        // }
        // debugger
        if (selected_package == undefined) {
            senddata();
        } else {
            // send email
            $.ajax({
                url: "https://formspree.io/contact@getspini.com",
                method: "POST",
                data: {
                    "Name": name,
                    "Phone Number": ph_number,
                    "Email": email,
                    "City": cityName,
                    "category": categoryName,
                    "Selected_Package": selected_package,
                    "_subject": "Get spini partner-with-us!",
                    "_cc": "karthikeyan@spinircle.com, anand.kumar@spinircle.com, gowrishankar@spinircle.com, anuradha.v@spinircle.com, shabuddeen@spinircle.com"
                },
                dataType: "json"
            });
            succsess_alert();
        }
    }
    // contact form script ends

    // questions for interior starts
    function interior_qa() {
        qa1 = $("input[name='what_services']:checked").val();
        qa2 = $("input[name='what_kind']:checked").val();
        qa3 = $("input[name='how_old']:checked").val();
        qa4 = $("input[name='what_carpet']:checked").val();

    }
    // questions for interior ends

    // questions for apartments starts
    function apartments_qa() {
        qa1 = $("input[name='apartments']:checked").val();
        qa2 = $("input[name='base']:checked").val();

    }
    // questions for apartments ends


    // send data using API script starts
    function senddata() {

        var success;
        var data;
        data = {
            "prospectiveBuyersName": name,
            "phoneNumOfProspectiveBuyer": ph_number,
            "cityName": cityName,
            "categoryName": categoryName,
            "emailOfProspectiveBuyer": email,
            "budgetAmount": budgetAmount
            // "scratchOffer" : scratchOffer
        };
        localStorage.setItem("name", name);
        localStorage.setItem("ph_number", ph_number);

        $.ajax({
            url: ApiEndPoint + "/SpinGrailsApp/web/site/leads/website/create/for/self/requirement",
            type: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-SPIN-API-ACCESS-TOKEN': AccessKey
            },
            data: JSON.stringify(data),
            success: function(response) {
                // alert("Api working successfully..!");
                // console.log(response);
                // debugger
                var check_emi = $("input[name='emi-calculater']").val();
                if (check_emi == "true") {
                    calculate_emi();
                } else if (index_page == "scratch_card_page") {
                    $(".scratch-card-data-collection").hide();
                    $(".toggle-page-container ul, .alerts_page").hide();
                    $(".scratch-card-container").fadeIn();
                } else if (index_page == "spin_wheel_page") {
                    startSpin();
                    $(".toggle-page-container, #spin_button").hide();
                    $(".sw-cliam-prize button").css("display", "block");
                } else {
                    succsess_alert();
                }

            },
            error: function(response) {
                // alert("Api WAS not working :( ");
                $(".error-contact").fadeIn();
                // if(page == "scratch_card_page"){
                //     $(".scratch-card-data-collection").hide();
                //     $(".scratch-card-container").fadeIn();
                //   }
            },
            complete: function() {
                // alert("Api Request WAS completed :D ");
            }
        });
    }

    function succsess_alert(ebook) {
        $(".alert-danger").hide();
        $(".success-contact, .loading_image").fadeIn();
        setTimeout(function() {
            // location.reload();
            window.location.href = '../thankyou-pages/thankyoupage.html';
        }, 3000);
        $(".submit").hide();
    }
    // send data using API script ends

    // scroll top script
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $("#scrolltop").fadeIn();
        } else {
            $("#scrolltop").fadeOut();
        }
    });
    $("#scrolltop").click(function() {

        var scroll = $("html, body");
        scroll.stop().animate({
            scrollTop: 0
        }, 700, 'swing', function() {});
    });


    // radio accordion
    $('input[type="radio"]').click(function() {

        $(this).parent("label").siblings().show();
        $(this).parents("li").siblings().find("span").hide();
        // check_getestimate();
    });



    // function check_getestimate(){
    //   
    //   if (type_of_kitchen != undefined && quality_of_accessories != undefined && type_of_material != undefined ) {
    //     $(".getestimate").attr("disabled", false);
    //   }else{
    //     $(".getestimate").attr("disabled", true);
    //   }
    // }
    var lenghtx, lenghty, lenghtz, type_of_kitchenvalue, type_of_packagevalue,type_of_materialvalue, quality_of_accessoriesvalue, estimatedcost, uname, uemail, umobile, type_of_kitchen, quality_of_accessories, type_of_material,type_of_package;
    $(".getestimate").click(function() {
        // debugger
        type_of_kitchen = $("input[name='type_of_kitchen']:checked").val();
        quality_of_accessories = $("input[name='quality_of_accessories']:checked").val();
        type_of_material = $("input[name='type_of_material']:checked").val();
        type_of_package = $("input[name='type_of_package']:checked").val();


        // type of kitchen value
        if (type_of_kitchen == "L-shape") {
            lenghtx = document.getElementById('lshapex').value;
            lenghty = document.getElementById('lshapey').value;
            type_of_kitchenvalue = parseInt(lenghtx) + parseInt(lenghty);
        } else if (type_of_kitchen == "stright") {
            lenghtx = document.getElementById('sshapex').value;
            type_of_kitchenvalue = parseInt(lenghtx);
        } else if (type_of_kitchen == "U-Shape") {
            lenghtx = document.getElementById('ushapex').value;
            lenghty = document.getElementById('ushapey').value;
            lenghtz = document.getElementById('ushapez').value;
            type_of_kitchenvalue = parseInt(lenghtx) + parseInt(lenghty) + parseInt(lenghtz);
        } else if (type_of_kitchen == "Custom") {
            lenghtx = document.getElementById('customxyz').value;
            type_of_kitchenvalue = parseInt(lenghtx);
        } else {
            alert("Please select type of kitchen");
        }

        // type of material value
        if (type_of_material == "Pre") {
            type_of_materialvalue = 6000;
        } else if (type_of_material == "MDF/HDF") {
            type_of_materialvalue = 8000;
        } else if (type_of_material == "Hardwood") {
            type_of_materialvalue = 8000;
        } else if (type_of_material == "Commercial") {
            type_of_materialvalue = 9000;
        } else if (type_of_material == "Boiling") {
            type_of_materialvalue = 10000;
        } else if (type_of_material == "Boiling-w") {
            type_of_materialvalue = 12500;
        } else if (type_of_material == "Marine") {
            type_of_materialvalue = 16000;
        } else {
            alert("Please select Type of Material");
        }


        if (type_of_package == "Essential") {
            type_of_packagevalue = 6000;
        } else if (type_of_package == "Premium") {
            type_of_packagevalue = 8000;
        } else if (type_of_package == "Elite") {
            type_of_packagevalue = 8000;
        
        } else {
            alert("Please select Type of Package");
        }



        if (isNaN(type_of_kitchenvalue)) {
            alert("Please enter all measurements");
            $(".radio span input").css("border-color", "red");
        } else {
            $('#myModal').modal('show');
            $(".radio span input").css("border-color", "green");
        }
    });
    $(".submit_estimation").click(function() {

        // calculation for design
        if (quality_of_accessories == "simple") {
            quality_of_accessoriesvalue = 15000;
        } else if (quality_of_accessories == "medium") {
            quality_of_accessoriesvalue = 30000;
        } else if (quality_of_accessories == "high") {
            quality_of_accessoriesvalue = 60000;
        } else {
            alert("Please select Quality of Accessories");
        }

        uname = $("input[name = estimate_name]").val();
        uemail = $('input[name = estimate_email]').val();
        umobile = $('input[name = estimate_ph_number]').val();

        estimatedcost = type_of_kitchenvalue * type_of_materialvalue + quality_of_accessoriesvalue;
        var rangecost = (estimatedcost * 0.3) + estimatedcost;

        // commma for budjet starts
        function addCommas(nStr) {
            nStr += '';
            var x = nStr.split('.');
            var x1 = x[0];
            var x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
        // commma for budjet ends

        document.getElementById("estimatedcost").innerHTML = addCommas(estimatedcost);
        document.getElementById("rangecost").innerHTML = addCommas(rangecost);
        document.getElementById("uname").innerHTML = uname;

        // validation script
        if ([uname, umobile, uemail].includes('')) {
            $(".error-mandatory").fadeIn();
        } else if (umobile.length != 10) {
            $(".error-contact-ph_number").fadeIn()
        } else if (uemail != "" && uemail != undefined) {
            if (validateEmail(uemail)) {
                check_inner_page = true;
                // success_contact_form();
                $(this).attr("data-dismiss", "modal");
                $("#calculate-area").fadeIn(2000);
                interior_estimate_mailsend();
            } else {
                $(".alert-danger").hide();
                $(".error-contact-email").fadeIn();
            }
        } else {
            check_inner_page = true;
            $("#calculate-area").fadeIn(2000);
            // send email
            interior_estimate_mailsend();

        }

        function interior_estimate_mailsend() {
            $.ajax({
                url: "https://formspree.io/contact@getspini.com",
                method: "POST",
                data: {
                    "Name": uname,
                    "Phone Number": umobile,
                    "Email": uemail,
                    "Type_of_kitchen": type_of_kitchen,
                    "Type_of_kitchenvalue": type_of_kitchenvalue,
                    "Type_of_material": type_of_material,
                    "Type_of_materialvalue": type_of_materialvalue,
                    "Quality_of_accessories": quality_of_accessories,
                    "Quality_of_accessoriesvalue": quality_of_accessoriesvalue,
                    "Estimatedcost": estimatedcost,
                    "Rangecost": rangecost,
                    "_subject": "Lead from Interior Estimation Page !",
                    "_cc": "karthikeyan@spinircle.com, anand.kumar@spinircle.com, anuradha.v@spinircle.com, shabuddeen@spinircle.com, joshua.simon@spinircle.com"
                },
                dataType: "json"
            });
        }
    });

    // multi cards repeat
    // var multicard;
    // get_json();
    // debugger
    // function get_json(index) {
    //  $.get("../assets/js/v1.30.44/multicard.json", function(data, status) {
    //   multicard = data.multicard;
    //   for (var i = 0; i < multicard.length; i++) {
    //    $("#" + multicard[i].card_idname + "").append("<li class='col-md-3 col-xs-6' onclick='show_page(" + i + ")'><div class='list-card'><a><img src=" + multicard[i].img_src + "></a><article><p>" + multicard[i].card_description + "</p><i></i><span>" + multicard[i].card_area + "</span><a class='btn btn-primary'>See more</a></article></div></li>");
    //   }
    //  });
    // }

    // script for gallery-slider starts
    var index, gallery_lenght;
    var gallery = [
        "../assets/images/bedroom1.jpg",
        "../assets/images/bedroom2.jpg",
        "../assets/images/bedroom3.jpg",
        "../assets/images/bedroom4.jpg",
        "../assets/images/livingroom1.jpg",
        "../assets/images/livingroom2.jpg",
        "../assets/images/livingroom3.jpg",
        "../assets/images/livingroom4.jpg",
        "../assets/images/kitchen1.jpg",
        "../assets/images/kitchen2.jpg",
        "../assets/images/kitchen3.jpg",
        "../assets/images/kitchen4.jpg"
    ];
    // append images
    gallery_lenght = gallery.length

    for (var i = 0; i < gallery_lenght; i++) {
        $(".spini-interior-gallery ul").append('<li class="col-md-3" index="' + i + '"><a><img src="' + gallery[i] + '" alt="interior-gallery" /></a></li>');
    }

    // view image based on click
    $(".spini-interior-gallery ul li").click(function() {
        index = $(this).attr("index");
        view_img(index);
    });

    // close gallery

    $(".view-gallery").click(function() {
        $(".view-gallery, .overlay").fadeOut();
    });
    $(".view-gallery img, .left-move, .right-move").click(function(event) {
        event.stopPropagation();
    });

    // view-gallery function
    function view_img(index) {
        $(".view-gallery, .overlay").fadeIn();
        $(".view-gallery img").attr("src", gallery[index]);
    }

    $(".right-move").click(function() {
        index++;
        if (index >= gallery_lenght) {
            index = 0;
        }
        view_img(index);
    });
    $(".left-move").click(function() {
        // debugger
        index--;
        if (index < 0) {
            index = gallery_lenght - 1;
        }
        // alert(index);
        view_img(index);
    })
    // script for gallery-slider ends 

    // show ebook popup script
    setTimeout(function() {
        // $("#ebook-popup").modal('show');
    }, 5000);

    // script files for banner page starts
    $(".home-page-categories li").click(function() {
        homepage_category = $(this).attr("category");
        $(this).addClass("selected-category");
        $(this).siblings().removeClass("selected-category");

        function homepage_toggle() {
            $(".homepage-lead-container h1").text(banner_heading);
            $(".banner-video-container").css('background-image', 'url(' + banner_background + ')');
            $(".features-add h1").text(feature_add_title);
            $(".features-add a").attr("href", feature_add_href).text(feature_add_href_title);
        }
        if (homepage_category == 'realestate') {
            categoryName = "Real Estate(Buying)";
            banner_heading = "Get your Dream Home Now!";
            banner_background = "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/bg-index.jpg";
            feature_add_title = "List your property for free Ad listing on our website";
            feature_add_href = "https://spini.typeform.com/to/lNAjvb";
            feature_add_href_title = "Post Ad";
        } else if (homepage_category == 'interior') {
            categoryName = "Interior/Renovation/Modular Kitchen";
            banner_heading = "Get Interior Designers at Best Prices!";
            banner_background = "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/interior-banner.jpg";
            feature_add_title = "Estimate the price of a modular kitchen, now!";
            feature_add_href = "/interiors/interior-estimation.html";
            feature_add_href_title = "Get Estimate";
        } else if (homepage_category == 'loans') {
            categoryName = "Loans";
            banner_heading = "Loans available @ lowest interest rate";
            banner_background = "https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/loan-banner.jpg";
            feature_add_title = "Do you require a loan immediately with low EMIs? Click here to know more!";
            feature_add_href = "/loans/loan-emi-calculator.html";
            feature_add_href_title = "Calculate EMI";
        }
        homepage_toggle();
    });
    $('.home-page-categories li:nth-child(1)').click();
    var i = 2;
    var interval = setInterval(function() {
        $('.home-page-categories li:nth-child(' + i + ')').click();
        i++;
        if (i > 3) {
            i = 1;
        }
    }, 5000);


    // script files for banner page ends

    // on click li go to corresponding page
    $(document).on('click', '.list-card', function(e) {
        url = $(this).children(".list-card a").attr("href");
        // debugger
        window.location.href = url;
    });

    // multi cards repeat starts
    card_limit_start = 1;
    card_limit_end = 20;

    if (categoryName == "Real Estate(Buying)") {
        card_category = "cards";
    } else if (categoryName == "Interior/Renovation/Modular Kitchen") {
        card_category = "interior-cards";
        card_limit_end = 6;
    }

    

    function get_json(index) {
        $.get("../assets/js/v1.30.59/" + card_category + ".json", function(data, status) {
            // debugger
            cards = data.cards;
            cards = cards.reverse();
            $(".see-more-pagination").click(function() {
                card_limit_start = card_limit_end + 1;
                card_limit_end = card_limit_end + 20;
                load_card();
            });

            load_card();

            function load_card() {

                if (cards.length > card_limit_end) {

                    for (var i = card_limit_start; i <= card_limit_end; i++) {
                        $(".display-cards").append("<li class='col-md-3 col-xs-6 card'><div class='list-card'><a href='" + cards[i].a_href + "'><img src=" + cards[i].card_img + "></a><article><p>" + cards[i].card_title + "</p><i></i><span>" + cards[i].card_area + "</span></div></li>");
                    }
                } else {
                    $(".see-more-pagination").attr("disabled", "disabled");
                }
            }

            $(".realestate-location-filter ul li").click(function() {
                $(".display-cards li, .see-more-pagination").hide();
                card_location = $(this).attr("location");
                $(".filter-arrow_box").text(card_location);
                for (var i = 0; i < cards.length; i++) {
                    // debugger
                    if (cards[i].card_city == card_location) {
                        $(".display-cards").append("<li class='col-md-3 col-xs-6 card'><div class='list-card'><a href='" + cards[i].a_href + "'><img src=" + cards[i].card_img + "></a><article><p>" + cards[i].card_title + "</p><i></i><span>" + cards[i].card_area + "</span></div></li>");
                    }
                }
            });
        });
    }
    get_json();
    $(".realestate-location-filter").click(function() {
        toggle_filter();
    });

    function toggle_filter() {
        $(".bg-overlay, .filter-arrow_box").toggle();
        $(".realestate-location-filter ul").slideToggle();
    }
    // multi cards repeat ends

    $(".calculate-emi").click(function() {
        // debugger
        principal_amt = $("input[name='emi-principal']").val();
        no_of_year = $("input[name='emi-no-of-years']").val();
        percent_per_anum = $("input[name='emi-precentage']").val();
        principal_amt = parseInt(principal_amt);
        no_of_year = parseInt(no_of_year);
        percent_per_anum = parseInt(percent_per_anum);

        window.sessionStorage.setItem("principal_amt", principal_amt);
        window.sessionStorage.setItem("no_of_year", no_of_year);
        window.sessionStorage.setItem("percent_per_anum", percent_per_anum);

        if (isNaN(principal_amt) || isNaN(no_of_year) || isNaN(percent_per_anum)) {
            alert("Please fill all fields");
        } else {
            $('#emi-model').modal('show');
        }

    });

    // emi script starts
    var principal_amt, rate_of_interest, no_of_months, emi, interest_amt, actual_amt, no_of_year, percent_per_anum;

    function calculate_emi() {
        // debugger
        principal_amt = window.sessionStorage.getItem("principal_amt");
        no_of_year = window.sessionStorage.getItem("no_of_year");
        percent_per_anum = window.sessionStorage.getItem("percent_per_anum");

        principal_amt = parseInt(principal_amt);
        no_of_year = parseInt(no_of_year);
        percent_per_anum = parseInt(percent_per_anum);

        no_of_months = no_of_year * 12;
        rate_of_interest = percent_per_anum / 12 / 100;
        // formula for emi
        emi = Math.round(principal_amt * rate_of_interest * Math.pow(1 + rate_of_interest, no_of_months) / (Math.pow(1 + rate_of_interest, no_of_months) - 1));
        // formula for actual amount
        actual_amt = Math.round(principal_amt / no_of_months);
        // formula for interate amount
        interest_amt = Math.round(Math.round(emi) - actual_amt) * no_of_months;

        $('#emi-model').modal('hide');
        $('.emi-output').fadeIn();
        // chart for total amount starts
        Highcharts.setOptions({
            colors: ['#55BF3B', '#DF5353', '#DDDF0D']
        });
        // debugger
        Highcharts.chart('emi_total_amount', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: 'Total Amount',
                align: 'center',
                verticalAlign: 'middle',
                y: 40
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        style: {
                            fontWeight: 'bold',
                            color: 'white'
                        }
                    },
                    startAngle: -90,
                    endAngle: 90,
                    center: ['50%']
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                innerSize: '58%',
                data: [
                    ['Principal', principal_amt],
                    ['Interest', interest_amt],
                ]
            }]
        });
        // chart for total amount end

        // chart for emi starts
        var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The emi gauge
        var chartRpm = Highcharts.chart('container-emi', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 100,
                max: 200000,
                title: {
                    text: 'EMI'
                }
            },

            series: [{
                name: 'EMI',
                data: [emi],
                dataLabels: {
                    format: '<div style="text-align:center"><span style="font-size:18px;color:silver; font-weight:100; padding-right: 5px;">&#8377</span><span style="font-size:18px;color:' +
                        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                        '<span style="font-size:12px;color:silver">/Month</span></div>'
                },
                tooltip: {
                    valueSuffix: ' revolutions/min'
                }
            }]

        }));
        // chart for emi end

    }
    // emi script end


    // temporary typeform for realestate -------------------------------------  STARTS
    
    // var append_form_realestate = '<div class="typeform-widget" data-url="https://spini.typeform.com/to/yxPRFr" data-transparency="50" data-hide-headers=true data-hide-footer=true style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })()</script>'

    // var append_form_loan = ' <div class="typeform-widget" data-url="https://spini.typeform.com/to/ygLYob" data-transparency="50" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>'

    // var append_form_nest = '<div class="typeform-widget" data-url="https://spini.typeform.com/to/m626rA" data-transparency="50" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>'

    // var append_form_interior = '<div class="typeform-widget" data-url="https://spini.typeform.com/to/YVkxqW" data-transparency="50" data-hide-headers=true data-hide-footer=true style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>'
    // debugger
    // if (index_page == false) {
    //     if (categoryName == "Real Estate(Buying)") {
    //         if (propertyName == 'nest') {
    //             $('.contact-us ul').hide();
    //             $('.contact-us').append(append_form_nest);
    //         } else {
    //             $('.contact-us ul').hide();
    //             $('.contact-us').append(append_form_realestate);
    //         }

    //     } else if (categoryName == "loan_emi_calculator") {
    //         categoryName = 'Loans';
    //         calculate_emi();
    //     } else if (categoryName == 'Loans') {
    //         $('.contact-us ul').hide();
    //         $('.contact-us').append(append_form_loan);
    //     }else if (categoryName == 'Interior/Renovation/Modular Kitchen') {
    //         $('.contact-us ul').hide();
    //         $('.contact-us').append(append_form_interior);
    //     }
    // }

    // temporary typeform for realestate -------------------------------------  ENDS



});